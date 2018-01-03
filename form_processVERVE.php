<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$file_msg = $firstname_error = $lastname_error = "";
$email_error = $coveringnote_error = $qualification_error = "";
$finance_skills_error = $salary_expectations_error = "";
$validation_error = $eligibility_error = $success = "";
$first_name = $last_name = $email = $eligibility = $infouse_error = "";


if(isset($_POST["g-recaptcha-response"])) {
  if (isset($_COOKIE['VerveFormSubmitted']))
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

    if ($_POST["coveringNote"] == "") {
      $coveringnote_error = "Please do not leave blank";
    } else {
      $covering_note = ($_POST["coveringNote"]);
    }

    if ($_POST["qualification"] == "") {
      $qualification_error = "Please select from the dowpdown menu";
    } else {
      $qualification = ($_POST["qualification"]);
    }

    if ($_POST["finance-skills"] == "") {
      $finance_skills_error = "Please select from the dowpdown menu";
    } else {
      $finance_skills = ($_POST["finance-skills"]);
    }

    if ($_POST["salary_expectations"] == "") {
      $salary_expectations_error = "Please select from the dowpdown menu";
    } else {
      $salary_expectations = ($_POST["salary_expectations"]);
    }

    if ($_POST["eligibility"] == "") {
      $eligibility_error = "Please select from the dowpdown menu";
    } else {
      $eligibility = ($_POST["eligibility"]);
    }

    if ($_POST["validate_info"] == "") {
      $validation_error = "Please select from the dowpdown menu";
    } else {
      $validate_info = ($_POST["validate_info"]);
    }

    if ($_POST["info_use_confirmation"] == "") {
      $infouse_error = "Please select from the dowpdown menu";
    } else {
      $info_use_confirmation = ($_POST["info_use_confirmation"]);
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

      if ($firstname_error == "" and $lastname_error == "" and $email_error == "" and $coveringnote_error =="" and $qualification_error == "" and $validation_error == "" and $file_msg == "" and $salary_expectations_error == "" and $eligibility_error == "" and $infouse_error == "") {
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
        // $mail->addAddress($configs['email'], $configs['name']);
        $mail->addAddress('beatrice.z@addverve.com', 'Beatrice');
        $mail->AddBCC('jackie@calxx.co.uk');
        $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

        $mail->isHTML(true);                           // Set email format to HTML
        $mail->Subject = 'From calxx: Application for Financial Controller and Planning at Verve';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->Body = "<h2>You have received an application for your Financial Controller and Planning role.</h2>"
        ."<p>Name: " . $first_name ." " . $last_name ."</p>"
        ."<p>Email address: " . $email ."</p>"
        ."<p>Describe a key contribution you have brought to a business in the last 3 years: " . $covering_note ."</p>"
        ."<p>Qualification: " . $qualification ."</p>"
        ."<p>Do you have Financial Reporting, Business partnering and planning experience: " . $finance_skills ."</p>"
        ."<p>What are your salary expectations: " . $salary_expectations ."</p>"
        ."<p>Are you eligible to live and reside in the UK?: " . $eligibility ."</p>"
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

          setcookie('VerveFormSubmitted', '1');

          $mail->clearAddresses();
          $mail->clearBCCs();
          $mail->setFrom($configs['email'], "From calxx");
          $mail->addAddress($email, $first_name);

          $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

          $mail->addEmbeddedImage('images/ele-icon.jpg', 'logoimg');

          $mail->isHTML(true);                           // Set email format to HTML
          $mail->Subject = 'Your application for Financial Controller and Planning at Verve';
          // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          $mail->Body = "<h3>Your application has been submitted successfully. Below is a copy of the job description.</h3>"
          ."<h2>Financial Controller and Planning at Verve</h2>"
          ."<p>
          At Verve, we believe it's important for brands to know their customers better and create more valuable relationships with them. We offer a range of specialist propositions: Innovation, Customer Experience Management, Research & Data and Immersion. Through our specialist community panels, we help shape the future of brands and products that we all use and love.
          We are looking for a Financial Controller to join our office at London Bridge. This is an excellent opportunity to make a significant impact within a growing, dynamic organisation. The Financial Controller will be working closely with the board, but also with individuals in different roles and levels across the business.
          </p>"
          ."<br />"
          ."<h4>About the Role</h4>"
          ."<p>
          Reporting directly to the CFO, this is a strategic role requiring you to look at past performance (financial analysis and reporting), supporting future planning and budgeting, as well as identifying opportunities to improve our overall business strategy. Specific responsibilities:
          <li>
          Help drive performance and profitability through financial and business analysis
          </li>
          <li>
          Ensure accurate and timely monthly/quarterly/yearly financial and management reports, including variance analysis and translating the data into actionable information
          </li>
          <li>
          Maintain high levels of financial control
          </li>
          <li>
          Perform ad-hoc financial analysis to support various business challenges
          </li>
          <li>
          Responsible for the financial planning and forecasting process together with the CFO
          </li>
          </p>"
          ."<h4>
          Finance Competencies
          </h4>"
          ."<p>
          We expect the candidate to be able to demonstrate skill in the following core finance competencies:
          Financial Reporting
          Business partnering
          Planning
          </p>"
          ."<br />"
          ."<h4>
          Experience
          </h4>"
          ."<p>
          Fully qualified accountant (ideally CIMA, or ACCA with planning and analysis experience).
          Strategic commercial mindset
          Excellent communication skills
          Advanced excel modelling skills (as minimum vlookups, pivot tables, sumif etc)
          We expect the candidate to have between at least 3 years experience but if you can demonstrate the necessary skills and experience that we require, please do apply
          </p>"
          ."<br />"
          ."<h4>
          The perks
          </h4>"
          ."<p>
          Competitve salary | 25 days leave | Our training & development programme Verve Academy which includes over 50 training topics and social activities in and outside of work (company drinks, baking club, TED talks, movie night, cooking classes, skating, bowling etc).
          </p>"
          ."<br />"
          ."<h4>
          Why apply for this role
          </h4>"
          ."<p>
          In addition to our diverse, innovative and friendly work environment, you will also be part fantastic team. This role is ideal for someone who wants to make an impact on the direction and growth of a business. This role will also provide the necessary experience and exposure to move into a finance director role in the future.
          </p>"
          ."<br />"
          ."<h4>
          You submitted the following information:
          </h4>"
          ."<p>Name: " . $first_name ." " . $last_name ."</p>"
          ."<p>Email address: " . $email ."</p>"
          ."<p>Describe a key contribution you have brought to a business in the last 3 years: " . $covering_note ."</p>"
          ."<p>Qualification: " . $qualification ."</p>"
          ."<p>Do you have Financial Reporting,  Business partnering experience and Planning: " . $finance_skills ."</p>"
          ."<p>What are your salary expectations: " . $salary_expectations ."</p>"
          ."<p>Are you eligible to live and reside in the UK?: " . $eligibility ."</p>"
          ."<p>Info provided is correct: " . $validate_info . "</p>"
          ."<p>Confirmed that calxx can contact you with similar jobs and send you our newsletter: " . $info_use_confirmation . "</p>"
          ."<p>This email was sent by calxx (www.calxx.co.uk) - a job search platform for qualified accountants. Our aim is to make the job search process simpler, better, easier</p>";
          $mail->send();

          $mail->clearAddresses();
          $mail->clearAttachments();
          $mail->setFrom($email, $first_name ." " . $last_name);
          $mail->addAddress('jackie@calxx.co.uk', "Jackie");

          $mail->Subject = 'I applied for the Financial Controller and Planning role at Verve';
          $mail->Body = "<p>I confirm that I am happy to receive similar jobs and your newsletter: $info_use_confirmation </p>"
          ."<p>Name: " . $first_name ." " . $last_name ."</p>"
          ."<p>Email address: " . $email ."</p>"
          ."<p>Qualification: " . $qualification ."</p>";
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
