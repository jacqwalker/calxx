<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$file_msg = $firstname_error = $lastname_error = "";
$email_error = $qualification_error = "";
$finance_skills_error = $salary_expectations_error = "";
$validation_error = $success = $experience_error = "";
$first_name = $last_name = $email = $infouse_error = "";


if(isset($_POST["g-recaptcha-response"])) {
  if (isset($_COOKIE['KingfisherFormSubmitted']))
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

    if ($_POST["finance-skills"] == "") {
      $finance_skills_error = "Please select from the dowpdown menu";
    } else {
      $finance_skills = ($_POST["finance-skills"]);
    }

    if ($_POST["experience"] == "") {
      $experience_error = "Please select from the dowpdown menu";
    } else {
      $experience = ($_POST["experience"]);
    }

    if ($_POST["salary_expectations"] == "") {
      $salary_expectations_error = "Please select from the dowpdown menu";
    } else {
      $salary_expectations = ($_POST["salary_expectations"]);
    }

    if ($_POST["info_use_confirmation"] == "") {
      $infouse_error = "Please select from the dowpdown menu";
    } else {
      $info_use_confirmation = ($_POST["info_use_confirmation"]);
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

      if ($firstname_error == "" and $lastname_error == "" and $email_error == "" and $qualification_error == "" and $validation_error == "" and $file_msg == "" and $salary_expectations_error == "" and $finance_skills_error == "" and $infouse_error == "" and $experience_error == "") {
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
        $mail->addAddress('Giles.Hartley@kingfisher.com',
         'Giles');
        $mail->AddBCC('jackie@calxx.co.uk');

        $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

        $mail->isHTML(true);                           // Set email format to HTML
        $mail->Subject = 'From calxx: Application for Finance Business Partner at Kingfisher Digital';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->Body = "<h2>You have received an application for your Finance Business Partner role.</h2>"
        ."<p>Name: " . $first_name ." " . $last_name ."</p>"
        ."<p>Email address: " . $email ."</p>"
        ."<p>Qualification: " . $qualification ."</p>"
        ."<p>Do you have Business partnering and Planning experience: " . $finance_skills ."</p>"
        ."<p>Do you have industry experience: " . $experience ."</p>"
        ."<p>What are your salary expectations: " . $salary_expectations ."</p>"
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

          setcookie('KingfisherFormSubmitted', '1');

          $mail->clearAddresses();

          $mail->setFrom($configs['email'], "From calxx");
          $mail->addAddress($email, $first_name);

          $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);

          $mail->isHTML(true);                           // Set email format to HTML
          $mail->Subject = 'Your application for Finance Business Partner at Kingfisher Digital';
          // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          $mail->Body = "<h3>Your application has been submitted successfully. Below is a copy of the job description.</h3>"
          ."<h2>Finance Business Partner at Kingfisher Digital</h2>"
          ."<p>
          Digital is changing the world, starting with the way we shop. Today it’s online shopping and click-and-collect, tomorrow it will be something not yet imagined. It’s a fast-moving world, where fresh ideas are welcome – along with the pace and flexibility to lead the way.
          Kingfisher is building a state-of-the-art digital home in the heart of London – a place where digital creators and innovators like you will come together and shape the digital future for more than 23 million home improvement customers in 1,176 stores in the UK and across Europe.
          It’s a chance to be part of something new. A chance to do big things in small, close-knit teams. A chance to feel the energy of a small agency – with the financial resources of a major retailer. And a chance to be rewarded for your talent, creativity and energy as well as your time.
          </p>"
          ."<br />"
          ."<h4>About the Role</h4>"
          ."<p>
          Kingfishers Digital activity has grown significantly over the last 2 years, pursuant of the One Kingfisher strategy. We now have established finance processes within our Digital teams. Our Digital Programmes and Projects are co-led by a Business Transformation Managers (BTMs) and IT Delivery Leads. Whilst the IT Delivery Lead is responsible for building and delivering IT functionality, the BTM is responsible for ensuring it lands within the business. The work load now necessitates hiring finance business partnering support for the BTMs and IT Delivery Leads.
          The Business Partner is a key role within the Finance Team, working closely with the BTMs and IT Delivery Leads alike. The role delivers advanced insight and value added analysis, building strong relationships across the function, including significant interaction with the Digital leadership team and the group finance function. The role will also be responsible for providing analytical support on key business decisions and on-going appraisal of existing Digital projects via Business Cases. Key responsibilities include:
          <li>
          Responsibility for consolidated cost story
          </li>
          <li>
          Providing costs for Business cases relating to Digital Product/Service
          </li>
          <li>
          Support key stakeholders on all finance related topics
          </li>
          <li>
          Ownership for month end, group forecasts and budget. Consolidating, reviewing and challenging the costs with stakeholders.
          </li>
          </p>"
          ."<h4>
          We are looking for a business partner that can:
          </h4>"
          ."<li>
            Take a Lead role in all planning and forecasting activities of Digital - actively contributing to the planning process and decision making regarding assumptions, challenging key stakeholders where necessary and ensuring that all assumptions are robust and defensible.
          </li>
          <li>
            Take responsibility for delivering improvements in modelling, forecasting and analytical techniques to improve reporting and analysis
          </li>
          <li>
            Provide analytical support on key business decisions, including new business initiatives and on-going appraisal of existing projects performance
          </li>
          <li>
            Build strong relationships with key contacts and provide high quality analysis that helps drive improvement
          </li>"
          ."<br />"
          ."<h4>
          Finance Competencies
          </h4>"
          ."<p>
          We expect the candidate to be able to demonstrate skill in the following core finance competencies:
          Business partnering
          Planning
          </p>"
          ."<br />"
          ."<h4>
          Experience
          </h4>"
          ."<p>
          The successful candidate will be either be a qualified Finance Professional (ACA, ACCA, CIMA or equivalent), who is highly numerate with the ability to produce robust financial analysis.</p>"
          ."<li>
            have a proven track record of delivering quantifiable benefits to businesses
          </li>
          <li>
            be comfortable working in a fast-paced and highly fluid environment
          </li>
          <li>
            Excellent analytical skills are a necessity
          </li>
          <li>
            Strong relationship building, resilience and interpersonal skills are a pre-requisite
          </li>
          <p>We expect the candidate to have at least 2 years experience out of the profession but if you can demonstrate the necessary skills and experience that we require, please do apply.</p>"
          ."<br />"
          ."<h4>
          The perks
          </h4>"
          ."<p>
          Competitve salary | Pension up to 22% |     Competitive annual bonus | 25 days leave |  Life assurance and health care cover | Share save scheme | Cycle to work | 20% discount card
          </p>"
          ."<br />"
          ."<h4>
          Why apply for this role
          </h4>"
          ."<p>
          This is the perfect role for someone who wants to work for a tech startup, while still having the benefit of a larger corporate organisation behind it. It is an exciting time to join the company as the retail and digital landscape is ever changing, which means you will get to work on some exciting projects. We welcome new ideas, new ways of working and are keen to develop and grow our talent pipeline.
          </p>"
          ."<br />"
          ."<h4>
          You submitted the following information:
          </h4>"
          ."<p>Name: " . $first_name ." " . $last_name ."</p>"
          ."<p>Email address: " . $email ."</p>"
          ."<p>Qualification: " . $qualification ."</p>"
          ."<p>Do you have Financial Reporting and Business partnering experience: " . $finance_skills ."</p>"
          ."<p>Do you have industry experience: " . $experience ."</p>"
          ."<p>What are your salary expectations: " . $salary_expectations ."</p>"
          ."<p>Info provided is correct: " . $validate_info . "</p>"
          ."<p>Confirmed that calxx can contact you with similar jobs and send you our newsletter: " . $info_use_confirmation . "</p>"
          ."<p>This email was sent by calxx (www.calxx.co.uk) - a job search platform for qualified accountants. Our aim is to make the job search process simpler, better, easier</p>";
          $mail->send();

          $mail->clearAddresses();
          $mail->clearAttachments();
          $mail->setFrom($email, $first_name ." " . $last_name);
          $mail->addAddress('kate@calxx.co.uk', "Kate");

          $mail->Subject = 'I applied for the Finance Business Partner role at Kingfisher Digital';
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
