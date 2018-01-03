<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$submissionmessage = "";

if(isset($_POST["submit"])) {

  if ($_POST["submission"] == "") {
    $submissionmessage = "Please do not leave blank";
  } else {
    $submission = $_POST["submission"];

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

    $mail->setFrom('hello@calxx.co.uk');
    $mail->addAddress($configs['email'], $configs['name']);

    $mail->isHTML(true);
    $mail->Subject = 'You have a submission to your poll';
    $mail->Body = "<p>Answer: " . $submission ."</p>";

    if ($mail->send()) {
      $submissionmessage = "Thank you - your answer has been submitted";
      } else {
        $submissionmessage = "There was an error, please try again";
      }
  }

}



?>
