<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$file_msg = $firstname_error = $lastname_error = "";
$email_error = "";
$validation_error = $success = $qualification_error = "";
$first_name = $last_name = $email = $infouse_error = "";


if(isset($_POST["g-recaptcha-response"])) {
  if (isset($_COOKIE['MWMFormSubmitted']))
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

      if ($firstname_error == "" and $lastname_error == "" and $email_error == "" and $qualification_error == "" and $validation_error == "" and $file_msg == "" and $infouse_error == "") {
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
        $mail->addAddress('Tyron.Edmonds@sjpp.co.uk',
         'Tyron');
        $mail->AddBCC('jackie@calxx.co.uk');

        $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

        $mail->isHTML(true);                           // Set email format to HTML
        $mail->Subject = 'From calxx: Application for Finance Controller at MWM';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->Body = "<h2>You have received an application for your Finance Controller role.</h2>"
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

          setcookie('MWMFormSubmitted', '1');

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

          $mail->addEmbeddedImage('images/ele-icon.jpg', 'logoimg');

          $mail->isHTML(true);                           // Set email format to HTML
          $mail->Subject = 'Your application for Financial Controller at MWM';
          // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          $mail->Body = "<h3>Your application has been submitted successfully. Below is a copy of the job description.</h3>"
          ."<h2>Financial Controller at MWM</h2>"
          ."<p>
          Morrinson Wealth Management (‘MWM’) has a rewarding opportunity for a part-time Finance Controller to join its successful team in Canary Wharf. MWM is a Senior Partner Practice of St. James’s Wealth Management, a FTSE100 wealth management company with over £85 billion in assets under management.
          </p>"
          ."<br />"
          ."<h4>About the Role</h4>"
          ."<p>
          MWM has quadrupled its funds under management over the last two years and its performance is ranked in the top 1% of all Partners in St. James’s Place Wealth Management. The firm has an ambitious growth strategy and is looking for a suitable candidate to take ownership of the financial management function for MWM and its group of companies.
          <p>
          The role will primarily involve the following duties and responsibilities:
          </p>
          <p>
            FINANCIAL CONTROL
          </p>
            <li>
              Daily bank reconciliations
            </li>
            <li>
              Cash management
            </li>
            <li>
              Account payable
            </li>
            <li>
              Account receivable
            </li>
            <li>
              Payroll
            </li>
            <li>
              Intercompany invoicing and reconciliations
            </li>
          <p>
            REPORTING & MONITORING
          </p>
            <li>
              Track resources against funds
            </li>
            <li>
              Monthly management reporting to senior management
            </li>
            <li>
              Ad hoc financial projects
            </li>
            <li>
              HMRC Reporting (VAT, PAYE, corporation tax and partnership tax returns)
            </li>
            <li>
              Companies House reporting
            </li>
          <p>
            FORECASTING & BUDGETING
          </p>
            <li>
              Budget variance reporting and planning
            </li>
            <li>
              Cash flow reporting and forecasting
            </li>
            <li>
              Scenario planning to test different future strategies and resource plan
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
          ."<p>The successful candidate will be either be a qualified Finance Professional (ACA, ACCA, CIMA or equivalent), who has experience in a similar role.</p>

          <p>We expect the candidate to have at least 3 years experience but if you can demonstrate the necessary skills and experience that we require, please do apply.</p>"
          ."<br />"
          ."<br />"
          ."<p>This email was sent by calxx (www.calxx.co.uk) - a job search platform for qualified accountants. Our aim is to make the job search process simpler, better, easier</p>";
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
