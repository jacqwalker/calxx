<?php include('form_process3.php'); ?>
<link rel="stylesheet" href="./css/form.css" type="text/css">
<div class="container">
  <form id="contact" action="" method="post" enctype="multipart/form-data">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="firstname" value="<?= $first_name ?>" tabindex="1" autofocus>
      <span class="error"><?= $firstname_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your last name" type="text" name="lastName" value="<?= $last_name ?>" tabindex="1" autofocus>
      <span class="error"><?= $lastname_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <p class="apply-now-para">Upload your CV</p>
    <div class="cv-upload">
      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
      <input type="file" class="apply-input-form" name="attached_file" />
    </div>
    <p class="error"><?php echo $file_msg; ?></p>
    <p class="apply-now-para">Your covering letter for this role</p>
    <textarea name="coveringNote" value="<?= $covering_note ?>"></textarea>
    <span class="error"><?= $coveringnote_error ?></span>
    <p class="apply-now-para">Your qualification</p>
    <select name="qualification" value="<?= $qualification ?>">
      <option value=""></option>
      <option value="ACA">ACA</option>
      <option value="ACCA">ACCA</option>
      <option value="CIMA">CIMA</option>
    </select>
    <span class="error"><?= $qualification_error ?></span>
    <p class="apply-now-para">Your number of years PQE</p>
    <select name="PQE" value="<?= $PQE ?>">
      <option value=""></option>
      <option value="newly qualified">Newly qualified</option>
      <option value="1 year PQE">1 Year PQE</option>
      <option value="2 years PQE">2 Years PQE</option>
      <option value="3 years PQE">3 Years PQE</option>
      <option value="4 years PQE">4 Years PQE</option>
      <option value="5 years PQE">5 Years PQE</option>
      <option value="6 years PQE">6 Years PQE</option>
      <option value="7 years PQE">7 Years PQE</option>
      <option value="8 years PQE">8 Years PQE</option>
      <option value="9 years PQE">9 Years PQE</option>
      <option value="10-15 years PQE">10 - 15 Years PQE</option>
      <option value="15+ years PQE">15+ Years PQE</option>
      <option value="Executive">Executive</option>
    </select>
    <span class="error"><?= $pqe_error ?></span>
    <p class="apply-now-para">The information that you have submitted is true and correct</p>
    <select name="validate_info" value="<?= $validate_info ?>">
        <option value=""></option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <span class="error"><?= $validation_error ?></span>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>
