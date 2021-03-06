<?php include('form_processTMLEWIN.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>calxx | for chartered accountants</title>
    <meta charset="utf-8">
    <meta name="keywords" content="ACA, chartered accountants, finance manager, finance jobs at TM Lewin, TM Lewin">
    <meta name="description" content="Finance Manager at TM Lewin">
    <meta property="og:url"           content="http://www.calxx.co.uk/finance-manager-tmlewin" />
    <meta property="og:type"     content="website" />
    <meta property="og:title"    content="Finance Manager at TM Lewin | calxx" />
    <meta property="og:description"   content="Finance Manager at TM Lewin" />
    <meta property="og:image"         content="http://www.calxx.co.uk/images/tm_lewin.png" />

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
            <a href="http://www.calxx.co.uk/how-it-works-hiring-managers" class="nav-link">Hiring managers</a>
          </li>
          <li class="navlist-item">
            <a href="http://www.calxx.co.uk/how-it-works-candidates" class="nav-link">Candidates</a>
          </li>
          <li class="navlist-item">
            <a href="http://www.calxx.co.uk/ourblog" class="nav-link">Our blog</a>
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
          <img src="./images/tm_lewin.png" alt="TM Lewin Logo" class="company-img-rec-logo">
          <div class="company-details-role-page-rec-logo">
            <h3>Finance Manager</h3>
            <h4>TM Lewin</h4>
            <p class="company-title-search">Retail</p>
            <div class="location-marker">
              <i class="fa fa-map-marker"></i><p class="location-para-role-page">Farringdon, EC1N 8UA</p>
            </div>
          </div>
        </section>

        <section class="company-info">
          <section class="clearfix">
            <section class="company-info-about">
              <div class="company-info-sub-two">
                <h3 class="company-info-heading">about</h3>
                <p class="company-info-para">We are truly proud of our history. As the original shirt makers in London, the first T.M. Lewin store opened in Jermyn Street in 1898. Mr T.M. Lewin himself developed the first buttoned down shirt, setting the tone for the shirt we know and love today. Fashions may have changed since 1898 but excellent craftsmanship, quality, service and value remain the driving force behind the T.M. Lewin brand.</p>
              </div>

              <div class="social-media-section">
                <ul class="company-social-media-links-ul">
                  <li class="company-social-media-links">
                    <a class="social-media-role" href="https://www.facebook.com/T.M.Lewin" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="company-social-media-links">
                    <a class="social-media-role" href="https://twitter.com/TMLewin" target="_blank">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="company-social-media-links">
                    <a class="social-media-role" href="https://www.linkedin.com/company/445570/" target="_blank">  <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                  <li class="company-social-media-links">
                    <a class="social-media-role" href="https://www.tmlewin.co.uk/" target="_blank">
                      <i class="fa fa-globe"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </section>
          </section>

          <section class="share-buttons-section clearfix">
            <p>Share this job</p>
            <div class="share-buttons-section-one">
              <div class="share-buttons-inline" data-href="http://www.calxx.co.uk/finance-manager-tmlewin" data-layout="button" data-size="small" data-mobile-iframe="true">
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhttp://www.calxx.co.uk/finance-manager-tmlewin&amp;src=sdkpreparse" class="facebook-share"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="share-buttons-inline">
                <a class="twitter-share-button"
                href="https://twitter.com/intent/tweet?text=Finance+Manager+at+TM+Lewin&via=calxxcouk&url=http://www.calxx.co.uk/finance-manager-tmlewin&hashtags=ACA,ACCA,CIMA." data-size="large">
                  <i class="fa fa-twitter"></i></a>
              </div>
              <div class="share-buttons-inline">
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.calxx.co.uk/finance-manager-tmlewin&title=Finance%20Manager%20at%20TM%20Lewin
                &summary=Finance+Manager+role+at+TM+Lewin.ACA+qualified+with+c.2+to+5+years+PQE&source=http://www.calxx.co.uk/finance-manager-tmlewin" class="linked-in-share">
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
                  <p class="key-requirements-text">ACA / ACCA / CIMA</p>
                </div>
              </li>
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-graduation-cap"></i>
                  <p class="key-requirements-text">c. 2 to 5 years PQE</p>
                </div>
              </li>
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-star"></i>
                  <p class="key-requirements-text">Finance skills: Financial Reporting, Planning</p>
                </div>
              </li>
              <li class="key-requirements-li">
                <div>
                  <i class="fa fa-balance-scale"></i>
                  <p class="key-requirements-text">Retail experience essential</p>
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
                  <p  class="key-requirements-text">Application closes 15 February 2018</p>
                </div>
              </li>
            </ul>
          </div>

          <div class="key-requirements">
            <h5>Why apply for the role</h5>
            <p>TM Lewin is passionate about its people and offers the opportunity to work in a fun, energetic and fast paced culture. We are high performing business and provide high levels of challenge and support. The role will offer the opportunity for the right candidate to role switch within a dynamic finance team to gain a wider base of experience in what is a dynamic and growing business.</p>
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
                <p class="list-items-para">Generous holiday entitlement which grows with your length of service</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">Substantial discount for you AND your family and friends</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">Complimentary workwear from the T.M. Lewin range</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Performance related bonus scheme</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                LOVE2SHOP everyday benefit card offering discounts across 60 retailers</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Cycle to work scheme</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                  20% discount card</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                  Season ticket loan</p>
              </li>
            </ul>
          </div>

          <div class="role-descrip">
            <h5>The role</h5>
            <p>TM Lewin is seeking a Finance Manager to assume responsibility for the production of management accounts, including banking and cash flow forecasting. This role will report into the Head of finance and CFO.</p>
            <p class="margin-adj">The role will primarily involve the following duties and responsibilities:</p>
            <ul class="terms-line-items terms-line-items-adj">
              <li>Overseeing the full spectrum of financial and management accounting, including regulatory reporting for the business (audit and tax compliance)</li>
              <li>
              Cash flow forecasting and Forex requirements
              </li>
              <li>
              Establishing and building excellent relationships with key stakeholders across the business, including all members of the Executive Board
              </li>
              <li>
              Working closely with the Merchandising team in regards to managing stock intake.
              </li>
              <li>
                Responsibility for Tax, VAT and duty, supporting the Head of Finance in regards to setting up of the tax structure within the business.
              </li>
              <li>
                Ensuring our ways of working are as cost-effective as possible by monitoring day-to-day reporting and also implementing new processes where necessary
              </li>
              <li>
                Providing performance leadership in the continuous evaluation of short and long-term strategic objectives
              </li>
              <li>
                Effectively managing a team
              </li>
              <li>
                Providing support with audits in conjunction with the Head of Finance.
              </li>
            </ul>
          </div>

          <div class="role-descrip">
            <h5>Experience</h5>
            <p>The successful candidate willbe a qualified Finance Professional (ACA, ACCA, CIMA), who has experience as a Finance Manager within a fast-paced retail environment, ideally from a practice background. In addition:</p>
            <ul>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">         Be proficient in team management</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">Strong commercial awareness</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">The ability to deal with people at all levels across our business</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Strong presentation skills and experience presenting to senior management and directors</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Excellent oral and written communication skills</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Strong knowledge of accounting regulations</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Demonstrable problem-solving, analytical, technical, IT and numerical abilities</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                Ability to work to deadlines and be flexible to deal with changing focus and business demands</p>
              </li>
              <li>
                <i class="fa fa-check-circle font-awesome-icon"></i>
                <p class="list-items-para">
                We expect the candidate to have between 2 and 5 years experience but if you can demonstrate the necessary skills and experience that we require, please do apply.</p>
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
            <p class="margin-adj">TM Lewin is an Equal Opportunities Employer and as such, treats all applications equally and recruits purely on the basis of skills and experience.</p>
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
                  <p class="apply-now-para">Are you eligible to live and work in the UK?</p>
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

      <section class="featured-job-container similar-job-container">
        <h4 class="featured-job-heading similar-job-heading">Similar Jobs</h4>
        <ul class="row-flex">
          <!-- <li class="featured-job featured-jobs-list-item">
            <a href="http://www.calxx.co.uk/finance-manager-tmlewin" target="_blank" class="featured-jobs-link">
              <p class="featured-job-title">Finance Manager at TM Lewin</p>
              <div class="featured-job-info">
                <div class="featured-job-map-marker">
                  <div class="location-marker-search">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p class="location-para">Farringdon, EC1N 8UA</p>
                </div>
                <p class="location-para">2 to 5 years PQE</p>
                <p class="location-para">Retail sector</p>
                <p class="location-para">Perm and full-time</p>
              </div>
            </a>
          </li> -->

          <li class="featured-job featured-jobs-list-item">
            <a href="http://www.calxx.co.uk/finance-business-partner-kingfisher-digital" target="_blank" class="featured-jobs-link">
              <p class="featured-job-title">Finance Business Partner at Kingfisher Digital</p>
              <div class="featured-job-info">
                <div class="featured-job-map-marker">
                  <div class="location-marker-search">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p class="location-para">City of London, EC2M 2PA</p>
                </div>
                <p class="location-para">c. 2 years PQE</p>
                <p class="location-para">Retail sector</p>
                <p class="location-para">Perm and full-time</p>
              </div>
            </a>
          </li>

          <li class="featured-job featured-jobs-list-item">
            <a href="http://www.calxx.co.uk/financial-controller-verve" target="_blank" class="featured-jobs-link">
              <p class="featured-job-title">Financial Controller at Verve</p>
              <div class="featured-job-info">
                <div class="featured-job-map-marker">
                  <div class="location-marker-search">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p class="location-para">London Bridge, SE1 2NQ</p>
                </div>
                <p class="location-para">c. 3 years PQE</p>
                <p class="location-para">Media sector</p>
                <p class="location-para">Perm and full-time</p>
              </div>
            </a>
          </li>

          <li class="featured-job featured-jobs-list-item">
            <a href="http://www.calxx.co.uk/financial-controller-MWM" target="_blank" class="featured-jobs-link">
              <p class="featured-job-title">Financial Controller at MWM</p>
              <div class="featured-job-info">
                <div class="featured-job-map-marker">
                  <div class="location-marker-search">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p class="location-para">City of London, EC2R 6EA</p>
                </div>
                <p class="location-para">c. 3 years PQE</p>
                <p class="location-para">Asset management</p>
                <p class="location-para">Part-time</p>
              </div>
            </a>
          </li>
        </ul>
      </section>

      <section class="contact-us-container">
        <h3 class="contact-us-h3">Have a question? Got any ideas?</h3>
        <p>
          We are here to help. Email us at hello@calxx.co.uk
        </p>
        <button class="contact-us-btn">CONTACT US</button>
      </section>
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

    <section class="pre-footer-container">
      <div class="footer-container">
        <div class="about-us-div">
          <a id="aboutus"></a>
          <h5 class="footer-heading">about us</h5>
          <p class="about-us-p"><span class="calxx-font">calxx</span> is a job search platform for qualified accountants. Started by an ACA, our aim is to make the job search simpler, better, easier</p>
        </div>

        <a id="contactus"></a>
        <div class="social-media-div">
          <h5 class="footer-heading">follow us</h5>
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

        <aside>
          <h5 class="footer-heading">newsletter</h5>
          <p>Subscribe to our newsletter</p>
          <form  action="http:////calxx.us16.list-manage.com/subscribe/post?u=26aee803d142ccdf4cb20bcd3&amp;id=97f6dd5348" method="post" name="mc-embedded-subscribe-form" class="form-style">
            <fieldset>
              <input placeholder="Your email address" type="text" name="EMAIL" value="" class=" footer-newsletter-input-form">
              <button type="submit" name="subscribe" class="footer-newsletter-btn"><i class="fa fa-send-o"></i></button>
            </fieldset>
          </form>
        </aside>
      </div>
    </section>

    <footer>
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
      var uluru = {lat: 51.5204549, lng: -0.1092142};
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
