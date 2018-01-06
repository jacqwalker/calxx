<?php include('form_processVERVE.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>calxx | for chartered accountants</title>
    <meta charset="utf-8">
    <meta name="keywords" content="ACA, chartered accountants, financial controller roles, planning roles, finance roles at Verve">
    <meta name="description" content="Financial Controller and Planning at Verve">
    <meta property="og:url"           content="http://www.calxx.co.uk/financial-controller-and-planning-verve" />
    <meta property="og:type"     content="website" />
    <meta property="og:title"    content="Financial Controller and Planning at Verve | calxx" />
    <meta property="og:description"   content="Financial controller and planning role at Verve" />
    <meta property="og:image"         content="http://www.calxx.co.uk/images/verve.jpg" />

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
    <!-- facebook code for share buttons -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
      }
      (document, 'script', 'facebook-jssdk'));
    </script>
    <!-- end of facebook code for share buttons -->

    <div class="overlay"></div>
    <header class="clearfix">
      <a href="http://www.calxx.co.uk" class="logo-link">
        <img class="logo-header" src="./images/calxx-header.png" alt="calxx header">
      </a>
      <div class="nav-icon">
        <i class="fa fa-reorder"></i>
      </div>
      <nav class="nav-header">
        <ul>
          <li class="navlist-item">
            <a href="http://www.calxx.co.uk/jobalerts" class="nav-link">Job alerts</a>
          </li>
          <li class="navlist-item">
            <a href="http://www.calxx.co.uk/ourblog" class="nav-link">Our blog</a>
          </li>
          <li class="navlist-item">
            <a href="#aboutus" class="nav-link">About us</a>
          </li>
          <li class="navlist-item">
            <a href="#contactus" class="nav-link">Contact us</a>
          </li>
        </ul>
      </nav>
    </header>

    <main class="clearfix">
      <section class="post-header-section-2">
        <a class="job-alerts">
          <span>
            <i class="fa fa-send-o"></i>
          </span>
          <p>Sign up for job alerts</p>
        </a>
        <div class="popup">
          <span class="popup-text" id="myPopup">
            <h4>Sign up for job alerts</h4>
            <div class="close-job-alerts">x
            </div>
            <p class="all-fields-req">all fields required</p>
            <form  action="http://calxx.us16.list-manage.com/subscribe/post?u=26aee803d142ccdf4cb20bcd3&amp;id=6f6310c3b8" method="post" name="mc-embedded-subscribe-form" class="clearfix">
              <div>
                <label for="mce-FNAME">
                  <input type="text" value="" name="FNAME" id="mce-FNAME" class="job-alert-input job-alert-input-2" placeholder="First name">
                </label>
              </div>

              <div>
                <label for="mce-EMAIL">
                  <input type="email" value="" name="EMAIL" id="mce-EMAIL" class="job-alert-input job-alert-input-2" placeholder="Email">
                </label>
              </div>

              <div>
                <label for="mce-MMERGE2">
                  <select name="MMERGE2" id="mce-MMERGE2" class="job-alert-input job-alert-input-2">
                    <option value="">Qualification</option>
                    <option value="ACA / FCA">ACA / FCA</option>
                    <option value="ACCA / FCCA">ACCA / FCCA</option>
                    <option value="CIMA">CIMA</option>
                  </select>
                </label>
              </div>

              <div>
                <label for="mce-MMERGE3">
                  <select name="MMERGE3" id="mce-MMERGE3" class="job-alert-input job-alert-input-2">
                    <option value="">Level of job you are looking for</option>
                  	<option value="Newly qualified">Newly qualified</option>
                    <option value="2 to 5 years PQE">2 to 5 years PQE</option>
                    <option value="5 to 10 years PQE">5 to 10 years PQE</option>
                    <option value="10+ years PQE">10+ years PQE</option>
                    <option value="Executive">Executive</option>
                  </select>
                </label>
              </div>
              <button type="submit" name="subscribe" class="job-alert-btn">Submit</button>
            </form>
          </span>
        </div>
      </section>

      <section class="back-to-search-page">
        <a href="http://www.calxx.co.uk/2-to-5-years-PQE">
          <i class="fa fa-caret-left"></i>
          Back to search results
        </a>
      </section>

      <div class="role-container clearfix">
        <section>
          <div class="success-header"><?= $success ?></div>
        </section>

        <section class="company-info-sub">
          <img src="./images/verve.jpg" alt="Verve Logo" class="company-img">
          <div class="company-details-role-page">
            <h3>Financial Controller and Planning</h3>
            <h4>Verve</h4>
            <p class="company-title-search">Media</p>
            <div class="location-marker">
              <i class="fa fa-map-marker"></i><p class="location-para-role-page">London Bridge, SE1 2NQ</p>
            </div>
          </div>
        </section>

        <section>
          <section class="company-info clearfix">
            <section class="company-info-about">
              <div class="company-info-sub-two">
                <h3 class="company-info-heading">about</h3>
                <p class="company-info-para">Verve are the European leaders in agile insight and community panel approaches – from which we generate great insight delivered with a passion and flair.

                We are dynamic and proactive delivering research for a world where decision making needs to be quicker and more agile, while at the same time retaining its rigour and quality.

                We work with diverse organisations such as Walgreens Boots Alliance, Samsung, Santander, John Lewis and Virgin Atlantic, helping them to understand their customers through a range of innovate approaches. </p>
              </div>

              <div class="social-media-section">
                <ul class="company-social-media-links-ul">
                <!-- <li class="company-social-media-links">
                  <a class="social-media-role" href="https://www.facebook.com/calxxcouk/" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li> -->
                <li class="company-social-media-links">
                  <a class="social-media-role" href="https://twitter.com/addverve" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="company-social-media-links">
                  <a class="social-media-role" href="https://www.linkedin.com/company/529422/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="company-social-media-links">
                  <a class="social-media-role" href="http://www.addverve.com/" target="_blank">
                    <i class="fa fa-globe"></i>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="share-buttons-section clearfix">
            <p>Share this job</p>
            <div class="share-buttons-section-one">
              <div class="share-buttons-inline" data-href="http://www.calxx.co.uk/Lessons-from-Roger-Federer" data-layout="button" data-size="small" data-mobile-iframe="true">
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.calxx.co.uk%2Ffinancial-controller-and-planning-verve&amp;src=sdkpreparse" class="facebook-share"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="share-buttons-inline">
                <a class="twitter-share-button"
                href="https://twitter.com/intent/tweet?text=Financial+Controller+and+Planning+at+Verve&via=calxxcouk&url=http://www.calxx.co.uk/financial-controller-and-planning-verve&hashtags=ACA,ACCA,CIMA." data-size="large">
                  <i class="fa fa-twitter"></i></a>
              </div>
              <div class="share-buttons-inline">
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.calxx.co.uk/financial-controller-and-planning-verve&title=Financial%20Controller%20and%20Planning%20at%20Verve
                &summary=Financial+Contoller+and+planning+role+at+Verve.CIMA+qualified+with+c.3+years+PQE&source=http://www.calxx.co.uk/financial-controller-and-planning-verve" class="linked-in-share">
                  <i class="fa fa-linkedin"></i></a>
              </div>
            </div>

            <div class="share-buttons-inline share-buttons-section-two">
              <a href="#apply" class="shortcut-apply apply-btn">
                <i class="fa fa-pencil"></i>
                <p class="button-text">apply</p>
              </a>
            </div>
          </section>
        </section>
        
        <section class="role-information">
          <div class="overview-section">
            <h5>Overview</h5>
            <ul class="key-req-li-container">
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-institution"></i>
                  <p class="key-requirements-text">ACCA / CIMA required</p>
                </div>
              </li>
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-graduation-cap"></i>
                  <p class="key-requirements-text">c. 3 years PQE</p>
                </div>
              </li>
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-star"></i>
                  <p class="key-requirements-text">Finance skills: Financial Reporting, Business Partnering, Planning</p>
                </div>
              </li>
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-balance-scale"></i>
                  <p class="key-requirements-text">Media sector experience not essential</p>
                </div>
              </li>
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-calendar-minus-o"></i>
                  <p  class="key-requirements-text">Permanent and Full time</p>
                </div>
              </li>
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-check-square-o"></i>
                  <p  class="key-requirements-text">Application closes 31 January 2018</p>
                </div>
              </li>
            </ul>
          </div>

          <div class="key-requirements">
            <h5>Why apply for the role</h5>
            <p>At Verve, we believe it's important for brands to know their customers better and create more valuable relationships with them. We offer a range of specialist propositions: Innovation, Customer Experience Management, Research & Data and Immersion. Through our specialist community panels, we help shape the future of brands and products that we all use and love.
            We are looking for a Financial Controller to join our office at London Bridge. This is an excellent opportunity to make a significant impact within a growing, dynamic organisation. The Financial Controller will be working closely with the board, but also with individuals in different roles and levels across the business.</p>
          </div>

          <div class="role-descrip">
            <h5>The perks</h5>
            <ul>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">Competitve salary</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">25 days leave </p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">Our training & development programme Verve Academy which includes over 50 training topics and social activities in and outside of work (company drinks, baking club, TED talks, movie night, cooking classes, skating, bowling etc).</p>
              </li>
            </ul>
          </div>

          <div class="role-descrip">
            <h5>The role</h5>
            <p>Reporting directly to the CFO, this is a strategic role requiring you to look at past performance (financial analysis and reporting), supporting future planning and budgeting, as well as identifying opportunities to improve our overall business strategy. </p>
            <p class="margin-adj">Specific responsibilities:</p>
            <ul class="terms-line-items terms-line-items-adj">
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
            </ul>
          </div>

          <div class="role-descrip">
            <h5>Experience</h5>
            <ul>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Fully qualified accountant (ideally CIMA, or ACCA with planning and analysis experience)</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">Strategic commercial mindset</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">Excellent communication skills</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Advanced excel modelling skills (as minimum vlookups, pivot tables, sumif etc)</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                We expect the candidate to have between at least 3 years experience but if you can demonstrate the necessary skills and experience that we require, please do apply.</p>
              </li>
            </ul>
          </div>

          <div class="location">
            <h5>Location</h5>
            <div id="map">
            </div>
          </div>

          <div class="role-descrip">
            <h5>Next steps</h5>
            <p>If you are interested in this role, please complete the application form below. This form is sent directly to the hiring company for consideration.</p>
            <p class="margin-adj">Verve is an Equal Opportunities Employer and as such, treats all applications equally and recruits purely on the basis of skills and experience.</p>
          </div>

          <section class="application-section">
            <div class="apply-now">
              <a name="apply"></a>
              <h3 class="apply-now-heading">Apply now</h3>
              <div class="success"><?= $success ?></div>
              <form id="reCaptchaForm" action="" method="post" enctype="multipart/form-data">
                <div class="application-form">
                  <fieldset class="adj-940px">
                    <input placeholder="Your first name" type="text" name="firstname" value="<?= $first_name ?>" tabindex="1" class="apply-input-form" required maxlength="15">
                    <span class="error"><?= $firstname_error ?></span>
                  </fieldset>
                  <fieldset class="adj-940px-2">
                    <input placeholder="Your last name" type="text" name="lastName" value="<?= $last_name ?>" tabindex="1" class="apply-input-form" required maxlength="20">
                    <span class="error"><?= $lastname_error ?></span>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your email address" type="text" name="email" value="<?= $email ?>" tabindex="2" class="apply-input-form" required minlength="8" maxlength="50">
                    <span class="error"><?= $email_error ?></span>
                  </fieldset>
                  <hr>
                  <p class="apply-now-para">Upload your CV</p>
                  <div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <input type="file" class="apply-input-form" name="attached_file" tabindex="2" />
                    <p class="error"><?php echo $file_msg; ?></p>
                  </div>
                  <p class="apply-now-para">Describe a key contribution you have brought to a business in the last 3 years</p>
                  <textarea name="coveringNote" tabindex="3" required maxlength="1000" placeholder="Maximum 1,000 characters" class="text-style"><?php  if(isset($_POST['coveringNote'])) {
                    echo htmlentities ($_POST['coveringNote']); }?></textarea>
                    <span class="error"><?= $coveringnote_error ?></span>
                  <hr>
                  <p class="apply-now-para">Before you submit your application, please confirm:</p>
                  <p class="apply-now-para">Your qualification:</p>
                  <select name="qualification" value="<?= $qualification ?>" class="select-box-application" tabindex="3">
                    <option value=""></option>
                    <option value="ACA">ACA</option>
                    <option value="ACCA">ACCA</option>
                    <option value="CIMA">CIMA</option>
                  </select>
                  <span class="error"><?= $qualification_error ?></span>
                  <p class="apply-now-para">Your salary expectations:</p>
                  <select name="salary_expectations" value="<?= $salary_expectations ?>" class="select-box-application" tabindex="3">
                    <option value=""></option>
                    <option value="Unknown">I'd prefer not to say</option>
                    <option value="£50,000 - £60,000">£50,000 - £60,000</option>
                    <option value="£60,000 - £70,000">£60,000 - £70,000</option>
                    <option value="£70,000 - £80,000">£70,000 - £80,000</option>
                    <option value="£80,000 - £90,000">£80,000 - £90,000</option>
                    <option value="£90,000 - £100,000">£90,000 - £100,000</option>
                    <option value="£100,000+">£100,000+</option>
                  </select>
                  <span class="error"><?= $salary_expectations_error ?></span>
                  <p class="apply-now-para">Are you eligible to live and reside in the UK?</p>
                  <select name="eligibility" value="<?= $eligibility ?>" class="select-box-application" tabindex="3">
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  <span class="error"><?= $eligibility_error ?></span>
                  <p class="apply-now-para">The information that you have submitted is true and correct:</p>
                  <select name="validate_info" value="<?= $validate_info ?>" class="select-box-application" tabindex="3">
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  <span class="error"><?= $validation_error ?></span>
                  <p class="apply-now-para">Are you happy for calxx to contact you about similar jobs and send you our newsletter?</p>
                  <select name="info_use_confirmation" value="<?= $info_use_confirmation ?>" class="select-box-application" tabindex="3">
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  <span class="error"><?= $infouse_error ?></span>
                  <p class="terms apply-now-para">By applying for a job listed on this site, you are agreeing to our <a href="http://www.calxx.co.uk/termsandconditions">terms and conditions</a> and <a href="http://www.calxx.co.uk/privacypolicy">privacy policy</a></p>
                  <fieldset class="button-fieldset clearfix">
                    <div class="holding-block"></div>
                    <button class="g-recaptcha apply-now-button" data-sitekey="6LeirjIUAAAAAJ3sumx5J-NdUpNSLBk85zc-VeOF" data-callback='onSubmit' tabindex="4">Submit application</button>
                  </fieldset>
                </div>
              </form>
            </div>
          </section>
        </section>
      </div>
    </main>

    <section class="cookies-popup-section">
      <div>
        This website is using cookies. We use cookies to improve your experience.
      </div>
      <div>
         By using the site, you consent to the use of these cookies. If you'd like more information, please view our<a href="privacypolicy" target="_blank" class="cookies-link"> Privacy Policy.</a>
      </div>
      <button class="close-cookies-popup">OK</button>
    </section>

    <footer>
      <a id="contactus"></a>
      <div class="footer-container">
        <div class="social-media-div">
          <ul>
            <li>
              <a class="social-media" href="https://www.facebook.com/calxxcouk/" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a class="social-media" href="https://twitter.com/calxxcouk" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a class="social-media" href="https://www.linkedin.com/company/11181313" target="_blank">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a class="social-media" href="mailto:hello@calxx.co.uk">
                <i class="fa fa-envelope"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="about-us-div">
          <a id="aboutus"></a>
          <p><span class="calxx-font">calxx</span> is a job search platform for qualified accountants. Started by an ACA, our aim is to make the job search simpler, better, easier</p>
        </div>
      </div>

      <nav>
        <ul>
          <li><a href="http://www.calxx.co.uk/termsandconditions">Terms and conditions</a></li> |
          <li><a href="http://www.calxx.co.uk/privacypolicy">Privacy Policy</a></li>
        </ul>
      </nav>
      <p class="copyright-footer">2018 &copy <span class="calxx-font"> calxx</span></p>
    </footer>

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/index.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87751339-3', 'auto');
      ga('send', 'pageview');
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkpMsYWqY-hFCIdVCAIfqCTXoHfoJVgog&callback=initMap">
    </script>
    <script>
    function initMap() {
      var uluru = {lat: 51.5023359, lng: -0.07232720000001791};
      var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: uluru
      });
      var marker = new google.maps.Marker({
      position: uluru,
      map: map
      });
    }</script>

  </body>
</html>
