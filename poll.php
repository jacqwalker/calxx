<?php include('form_processPOLL.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>calxx | for chartered accountants</title>
    <meta charset="utf-8">
    <meta name="keywords" content="ACA, chartered accountants, accounting jobs, finance jobs">
    <meta name="description" content="calxx is a job search platform for qualified professional accountants. Our aim is to connect great candidates with great companies">

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Cinzel|Libre+Baskerville|Merriweather|Oswald|Source+Sans+Pro|Quando" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="./images/white favicon.ico">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>function onSubmit(token) {
      document.getElementById('reCaptchaForm').submit();
      }
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <section class="unsubscribe-page-styling">

      <section class="calxx-description">
        <img src="./images/whitefavicon.png" class="unsubscribe-image"/>
        <p class="unsubscribe-text"><span class="calxx-font">calxx</span> is a job search platform for qualified accountants</p>
      </section>

      <form action="" method="post" enctype="multipart/form-data" class="poll-form">
        <p class="unsubscribe-para">What would be your preferred working hours?</p>
        <p class="apply-now-para">Your answer:</p>
        <select name="submission" class="poll-selection" tabindex="3">
          <option value=""></option>
          <option value="7am to 3:30pm">7am to 3:30pm</option>
          <option value="8am to 4:30pm">8am to 4:30pm</option>
          <option value="8:30am to 5:00pm">8:30am to 5:00pm</option>
          <option value="9am to 5:30pm">9am to 5:30pm</option>
          <option value="9:30am to 6:00pm">9:30am to 6:00pm</option>
        </select>
        <button type="submit" name="submit" class="job-alert-btn unsubscribe-btn">Submit your answer</button>
        <div class="success"><?= $submissionmessage ?></div>
      </form>

      <section class="poll-form">
        <p><span class="calxx-font">calxx</span> is not a recruitment agency but a platform to make the job search simpler, better, easier</p>
        <p>
          Visit our website <a href="http://www.calxx.co.uk">www.calxx.co.uk</a>
        </p>
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
