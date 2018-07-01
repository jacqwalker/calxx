<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$file_msg = $firstname_error = $lastname_error = "";
$email_error = $qualification_error = "";
$salary_expectations_error = $eligibility_error = "";
$validation_error = $success = $registeredbody_error = "";
$first_name = $last_name = $email = "";
$eligibility = $qualification = ""; 
$registeredbody = "";


if(isset($_POST["submit"])) {
  if (isset($_COOKIE['KingfisherFormSubmitted']))
  {
    $success = 'You have already applied for this role';
    $_POST = array();
  } else {

    if (empty($_POST["firstname"])) {
      $firstname_error = "First name is required";
    } else {
      $first_name = test_input($_POST["firstname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
        $firstname_error = "Only letters allowed";
      }
    }

    if (empty($_POST["lastName"])) {
      $lastname_error = "Last name is required";
    } else {
      $last_name = test_input($_POST["lastName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
        $lastname_error = "Only letters allowed";
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

    if(isset($_POST["qualification"])) {
      $qualification = ($_POST["qualification"]);
    } else {
      $qualification_error = "Please select one option";
    }       

    if ($_POST["registeredbody"] == "") {
      $registeredbody_error = "Please select from the dropdown menu";
    } else {
      $registeredbody = ($_POST["registeredbody"]);
    }

    if ($_POST["salary_expectations"] == "") {
      $salary_expectations_error = "Please select from the dowpdown menu";
    } else {
      $salary_expectations = ($_POST["salary_expectations"]);
    }

    if(isset($_POST["eligibility"])) {
      $eligibility = ($_POST["eligibility"]);
    } else {
      $eligibility_error = "Please select one option";
    }   

    if(isset($_POST["validate_info"])) {
      $validate_info = ($_POST["validate_info"]);
    } else {
      $validation_error = "Please select one option";
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
        $file_msg = "File exceeds size limit. Please load a file which is less than 2MB";
      break;
      default:
        $file_msg = "Unknown error, please upload a different file";
      }

      if ($firstname_error == "" and $lastname_error == "" and $email_error == "" and $qualification_error == "" and $validation_error == "" and $file_msg == "" and $salary_expectations_error == "" and $eligibility_error == "" and $registeredbody_error == "") {
        require '/home/cluster-sites/5/c/calxx.co.uk/public_html/phpmailer/src/Exception.php';
        require '/home/cluster-sites/5/c/calxx.co.uk/public_html/phpmailer/src/PHPMailer.php';
        require '/home/cluster-sites/5/c/calxx.co.uk/public_html/phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        $configs = include('/home/cluster-sites/5/c/calxx.co.uk/config.php');
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $configs['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $configs['username'];
        $mail->Password = $configs['password'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($email, $first_name ." " . $last_name);
        $mail->addAddress('hello@calxx.co.uk',
         'jackie');
        $mail->AddBCC('jackie@calxx.co.uk');

        $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

        $mail->isHTML(true);                           // Set email format to HTML
        $mail->Subject = 'From calxx: Application for Finance Business Partner at Kingfisher Digital';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->Body = "<h2>You have received an application for your Finance Business Partner role.</h2>"
        ."<p>Name: " . $first_name ." " . $last_name ."</p>"
        ."<p>Email address: " . $email ."</p>"
        ."<p>Are you ACA / CA qualified? " . $qualification ."</p>"
        ."<p>Which accounting body are you registered with? " . $registeredbody ."</p>"
        ."<p>What are your salary expectations? " . $salary_expectations ."</p>"
        ."<p>Are you eligible to live and reside in the UK? " . $eligibility ."</p>"
        ."<p>Is the information that you have submitted true and correct? " . $eligibility ."</p>"
        ."<p>This email was sent by calxx (www.calxx.co.uk) - a job search platform for chartered accountants. Our aim is to make the job search process simpler, better, easier</p>";

          $mail->send();
          $success = "Your application has been sent";

          setcookie('KingfisherFormSubmitted', '1');

          $mail->clearAddresses();
          $mail->clearBCCs();

          $mail->setFrom($configs['email'], "From calxx");
          $mail->addAddress($email, $first_name);

          $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

          $mail->isHTML(true);                           // Set email format to HTML
          $mail->Subject = 'Your application for Finance Business Partner at Kingfisher Digital';
          // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          $mail->Body = "<h2>Your application for Finance Business Partner at Kingfisher Digital has been submitted successfully. </h2>"
          ."<h3>You can find a copy of the job description at http://www.calxx.co.uk/finance-business-partner-kingfisher-digital.</h3>"
          ."<p>
          If you have not heard back from the hiring company within 10 days of your application, please contact hello@calxx.co.uk so that we can follow up on your application. We want to ensure that each applicant gets feedback on their application.
          </p>"
          ."<p>This email was sent by calxx (www.calxx.co.uk) - a job search platform for chartered accountants. Our aim is to make the job search process simpler, better, easier</p>";
          $mail->send();
          $first_name = $last_name = $email = $covering_note = "";
          $_POST = array();
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
