<?php include('form_processUNSUBSCRIBE.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>calxx | for chartered accountants</title>
    <meta charset="utf-8">
    <meta name="keywords" content="ACA, chartered accountants, accounting jobs, finance jobs">
    <meta name="description" content="calxx is a job search platform for qualified accountants">

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Cinzel|Libre+Baskerville|Merriweather|Oswald|Source+Sans+Pro|Quando" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="./images/white favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <section class="unsubscribe-page-styling">
      <form action="" method="post" enctype="multipart/form-data">
        <h4>Calxx Limited</h4>
        <p class="unsubscribe-para">
          We are sorry to see you go but you can always subscribe again if you miss us :)
        </p>
        <p class="unsubscribe-para">
          Please enter your email address to unsubscribe
        </p>
        <fieldset>
          <input placeholder="Your email address" type="text" name="email" value="<?= $email ?>" tabindex="2" class="apply-input-form" required minlength="8" maxlength="50">
          <span class="error"><?= $email_error ?></span>
        </fieldset>
        <button type="submit" name="submit" class="job-alert-btn unsubscribe-btn">Submit</button>
        <div class="success"><?= $submissionmessage ?></div>
      </form>

      <section class="calxx-description">
        <img src="./images/whitefavicon.png" class="unsubscribe-image"/>
        <p class="unsubscribe-text"><span class="calxx-font">calxx</span> is a job search platform for qualified accountants</p>
      </section>

    </section>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87751339-3', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>
