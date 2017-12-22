<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$file_msg = $firstname_error = $lastname_error = "";
$email_error = "";
$validation_error = $success = $qualification_error = "";
$first_name = $last_name = $email = "";


if(isset($_POST["g-recaptcha-response"])) {
  if (isset($_COOKIE['TMLewinFormSubmitted']))
  {
    $success = 'You have already applied for this role';
  } else {

    if (empty($_POST["firstname"])) {
      $firstname_error = "First name is required";
    } else {
      $first_name = test_input($_POST["firstname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
        $firstname_error = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["lastName"])) {
      $lastname_error = "Last name is required";
    } else {
      $last_name = test_input($_POST["lastName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
        $lastname_error = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $email_error = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
      }
    }

    if ($_POST["qualification"] == "") {
      $qualification_error = "Please select from the dowpdown menu";
    } else {
      $qualification = ($_POST["qualification"]);
    }

    if ($_POST["validate_info"] == "") {
      $validation_error = "Please select from the dowpdown menu";
    } else {
      $validate_info = ($_POST["validate_info"]);
    }

    if(isset($_FILES['attached_file']) || array_key_exists('attached_file', $_FILES)){
      if ($_FILES['attached_file']['error'] === UPLOAD_ERR_OK) {

        $file_type = $_FILES['attached_file']['type'];

        if(($file_type == 'application/msword') || ($file_type == 'application/pdf') || ($file_type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
          if($_FILES['attached_file']['size'] > 2000000) {
          $file_msg = "File should not exceed 2MB";
          } else {
          $file_msg = "";
          }
        } else {
          $file_msg = "only MS Word and pdf files can be uploaded";
        }
      } else {
         $file_msg = "Upload failed with error code " . $_FILES['attached_file']['error'];
      }
    }

    // if(!isset($_FILES['attached_file']['error']) ||   is_array($_FILES['attached_file']['error'])) {
    //   $file_msg = "Error with file, please check upload";
    // }

    // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['attached_file']['error']) {
      case UPLOAD_ERR_OK:
      break;
      case UPLOAD_ERR_NO_FILE:
        $file_msg = "No file is uploaded";
      break;
      case UPLOAD_ERR_INI_SIZE:
        $file_msg = "No file is uploaded";
      break;
      case UPLOAD_ERR_FORM_SIZE:
        $file_msg = "File exceeds size limit";
      break;
      default:
        $file_msg = "Unknown error, please upload a different file";
    }

      if ($firstname_error == "" and $lastname_error == "" and $email_error == "" and $qualification_error == "" and $validation_error == "" and $file_msg == "") {
        require '/var/sites/c/calxx.co.uk/public_html/phpmailer/src/Exception.php';
        require '/var/sites/c/calxx.co.uk/public_html/phpmailer/src/PHPMailer.php';
        require '/var/sites/c/calxx.co.uk/public_html/phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        $configs = include('/var/sites/c/calxx.co.uk/config.php');
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $configs['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $configs['username'];
        $mail->Password = $configs['password'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($email, $first_name ." " . $last_name);
        $mail->addAddress('recruitment@tmlewin.co.uk ');
        $mail->AddBCC('jackie@calxx.co.uk');

        $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

        $mail->isHTML(true);                           // Set email format to HTML
        $mail->Subject = 'From calxx: Application for Finance Manager at TM Lewin';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->Body = "<h2>You have received an application for your Finance Manager role.</h2>"
        ."<p>Name: " . $first_name ." " . $last_name ."</p>"
        ."<p>Email address: " . $email ."</p>"
        ."<p>Qualification: " . $qualification ."</p>"
        ."<p>Info provided is correct: " . $validate_info . "</p>"
        ."<p>This email was sent by calxx (www.calxx.co.uk) - a job search platform for qualified accountants. Our aim is to make the job search process simpler, better, easier</p>";

        $captchakey = include('/var/sites/c/calxx.co.uk/config.php');

        $secretKey = $captchakey['secret_key'];
        $response = $_POST['g-recaptcha-response'];
        $remoteIp = $_SERVER['REMOTE_ADDR'];


        $reCaptchaValidationUrl = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteIp");
        $result = json_decode($reCaptchaValidationUrl, TRUE);

        if ($result['success'] == 1) {
          $mail->send();
          $success = "Your application has been sent";

          setcookie('TMLewinFormSubmitted', '1');

          $mail = new PHPMailer(true);

          $configs = include('/var/sites/c/calxx.co.uk/config.php');
          $mail->SMTPDebug = 0;
          $mail->isSMTP();
          $mail->Host = $configs['host'];
          $mail->SMTPAuth = true;
          $mail->Username = $configs['username'];
          $mail->Password = $configs['password'];
          $mail->SMTPSecure = 'ssl';
          $mail->Port = 465;

          $mail->setFrom($configs['email'], "From calxx");
          $mail->addAddress($email, $first_name);

          $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

          $mail->isHTML(true);                           // Set email format to HTML
          $mail->Subject = 'Application for Finance Manager at TM Lewin';
          // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          $mail->Body = "<h3>Your application has been submitted successfully. Below is a copy of the job description.</h3>"
          ."<h2>Finance Manager at TM Lewin</h2>"
          ."<p>
          TM Lewin is seeking a Finance Manager to assume responsibility for the production of management accounts, including banking and cash flow forecasting. This role will report into the Head of finance and CFO.
          </p>"
          ."<br />"
          ."<h4>About the Role</h4>"
          ."<p>
          The role will primarily involve the following duties and responsibilities:
          </p>
          <li>
            Overseeing the full spectrum of financial and management accounting, including regulatory reporting for the business (audit and tax compliance)
          </li>
          <li>
            Cash flow forecasting and Forex requirements
          </li>
          <li>
            Establishing and building excellent relationships with key stakeholders across the business, including all members of the Executive Board
          </li>
          <li>
            Working closely with the Merchandising team in regards to managing stock intake.
          </li>
          <li>
            Responsibility for Tax, VAT and duty, supporting the Head of Finance in regards to setting up of the tax structure within the business.
          </li>
          <li>
            Ensuring our ways of working are as cost-effective as possible by monitoring day-to-day reporting and also implementing new processes where necessary
          </li>
          <li>
            Providing performance leadership in the continuous evaluation of short and long-term strategic objectives
          </li>
          <li>
            Effectively managing a team
          </li>
          <li>
            Providing support with audits in conjunction with the Head of Finance.
          </li>"
          ."<br />"
          ."<h4>
          Finance Competencies
          </h4>"
          ."<p>
          We expect the candidate to be able to demonstrate skill in the following core finance competencies:
          Financial Reporting
          Planning
          </p>"
          ."<br />"
          ."<h4>
          Experience
          </h4>"
          ."<p>The successful candidate will be either be a qualified Finance Professional (ACA, ACCA, CIMA), who has experience as a Finance Manager within a fast-paced retail environment, ideally from a practice background.</p>
          <li>
            Be proficient in team management
          </li>
          <li>
            Strong commercial awareness
          </li>
          <li>
            The ability to deal with people at all levels across our business
          </li>
          <li>
            Strong presentation skills and experience presenting to senior management and directors
          </li>
          <li>
            Excellent oral and written communication skills
          </li>
          <li>
            Strong knowledge of accounting regulations
          </li>
          <li>
            Demonstrable problem-solving, analytical, technical, IT and numerical abilities
          </li>
          <li>
            Ability to work to deadlines and be flexible to deal with changing focus and business demands
          </li>
          <p>We expect the candidate to have between 2 and 5 years experience but if you can demonstrate the necessary skills and experience that we require, please do apply.</p>"
          ."<br />"
          ."<h4>
          The perks
          </h4>"
          ."<p>
            TM Lewin is passionate about its people and offers the opportunity to work in a fun, energetic and fast paced culture. We are high performing business and provide high levels of challenge and support. In return for your hard work you will be rewarded with generous benefits for you and your family:
          </p>
          <li>
          Competitve salary
          </li>
          <li>
          Generous holiday entitlement which grows with your length of service
          </li>
          <li>
          Substantial discount for you AND your family and friends
          </li>
          <li>
          Complimentary workwear from the T.M. Lewin range
          </li>
          <li>
          Performance related bonus scheme
          </li>
          <li>
          LOVE2SHOP everyday benefit card offering discounts across 60 retailers
          </li>
          <li>
          Cycle 2 Work scheme
          </li>
          <li>
          Cycle 2 Work scheme
          </li>
          <li>
          Season ticket loan
          </li>"
          ."<br />"
          ."<h4>
          Why apply for this role
          </h4>"
          ."<p>
          In addition to the fantastic benefits already mentioned, TM Lewin focusses on creating a culture which is fun, energetic and fast paced. The role will offer the opportunity for the right candidate to role switch within a dynamic finance team to gain a wider base of experience in what is a dynamic and growing business.</p>"        ."<p>This email was sent by calxx (www.calxx.co.uk) - a job search platform for qualified accountants. Our aim is to make the job search process simpler, better, easier</p>";
          $mail->send();

          $first_name = $last_name = $email = $covering_note = "";
        }
      } else {
        $success = "There was an error with your application, please try again";
      }
  }
  // var_dump($_FILES);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>
