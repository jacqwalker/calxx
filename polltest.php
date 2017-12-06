<?php include('form_processPOLL.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>calxx | for chartered accountants</title>
    <meta charset="utf-8">
    <meta name="keywords" content="ACA, chartered accountants, accounting jobs, finance jobs">
    <meta name="description" content="calxx is a platform which provides tools and resources to help qualified professional accountants build and manage their careers">

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
    <form action="" method="post" enctype="multipart/form-data">
      <p>
        What would be your preferred working hours?
      </p>
      <p class="apply-now-para">Your answer:</p>
      <select name="submission" class="select-box-application" tabindex="3">
        <option value=""></option>
        <option value="7am to 3:30pm">7am to 3:30pm</option>
        <option value="8am to 4:30pm">8am to 4:30pm</option>
        <option value="8:30am to 5:00pm">8:30am to 5:00pm</option>
        <option value="9am to 5:30pm">9am to 5:30pm</option>
        <option value="9:30am to 6:00pm">9:30am to 6:00pm</option>
      </select>
      <button type="submit" name="submit" class="job-alert-btn">Submit your answer</button>
      <div class="success"><?= $submissionmessage ?></div>
    </form>

    <section>
      <img src="./images/whitefavicon.png" class="poll-image"/>
      <p><span class="calxx-font">calxx</span> is a job search platform for qualified accountants</p>

    </section>

  </body>
</html>
