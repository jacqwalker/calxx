<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$submissionmessage = $email_error = $email = "";

if(isset($_POST["submit"])) {

  if ($_POST["email"] == "") {
    $submissionmessage = "Please enter your email address";
  } else {
    $email = $_POST["email"];

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

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

    $mail->setFrom('hello@calxx.co.uk');
    $mail->addAddress($configs['email'], $configs['name']);

    $mail->isHTML(true);
    $mail->Subject = 'Someone has unsubscribed from your list';
    $mail->Body = "<p>Please unsubscribe me: " . $email ."</p>";

    if ($mail->send()) {
      $submissionmessage = "You have successfully been unsubscribed";
      $email = "";
      } else {
        $submissionmessage = "There was an error, please try again";
      }
  }

}



?>
