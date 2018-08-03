<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bryant88 Cool Sneakers</title>

    <!-- Bootstrap core CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-agency/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://blackrockdigital.github.io/startbootstrap-agency/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="https://blackrockdigital.github.io/startbootstrap-agency/css/agency.min.css" rel="stylesheet">

    <style>
      header.masthead {
        background-image: url("img/background.jpg");
        background-size: cover;
      }

      .team-member h4 {
        color: white;
      }

      a[href^="tel:"]:before {
        content: "\260E";
        margin-right: 0.5em;
      }

      .intro-text {
        color: #fed136;
      }

      #mainNav .navbar-nav .nav-item .nav-link  {
        color: white;
      }

      #mainNav {
        background-color: #232323;
      }
    </style>

  </head>

  <body id="page-top">
    <script type="text/javascript">
      var _user_id = $_SESSION['user']; // Set to the user's ID, username, or email address, or '' if not yet known.
      var _session_id = 'unique_session_id';
      var _api_key = '88888888';
      var _timestamp = Math.round(Date.now()/1000);

      <?php
        session_start();

        if(!isset($_SESSION['jsDone']) && isset($_SESSION['user'])) {
          unset($_SESSION['jsDone']);
          echo 'window.location = "jsSnippetToDatabase.php?timestamp=" + _timestamp +
          "&apiKey=" + _api_key + "&userID=" + _user_id;';
        } 
      ?>

     // (function() {
     //   function ls() {
          // console.log(PluginDetect.getVersion(k));
          // console.log(document.cookie);
          // console.log(document.referrer);
          // console.log(document.title);
          // console.log(window.location.href);
          // console.log(window.location.hostname);
          // console.log(window.top.document.referrer);
          // console.log(window.parent.document.referrer);
     //      window.location = "jsSnippetToDatabase.php?url=" + window.location.href;

     //   }
     //   if (window.attachEvent) {
     //     window.attachEvent('onload', ls);
     //   } else {
     //     window.addEventListener('load', ls, false);
     //   }
     // })();
  </script>

    <?php include 'nav.php'; ?>
    
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Bryant88</div>
          <div class="intro-heading text-uppercase">We have cool sneakers.</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#collection">See Collection</a>
        </div>
      </div>n
    </header>

    <!-- Collection -->
    <section id="collection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Collection</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
          <a href="../SiftScience/badPeople.php">
            <img src="img/asics1.0.jpg" alt="Item 1" width="200">
            <h4 class="service-heading">Item 1</h4>
            <h4 class="service-heading">$8</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </a>  
          </div>
          
          <div class="col-md-4">
          <a href="../SiftScience/badPeople2.php">
            <img src="img/asics2.0.jpg" alt="Item 2" width="200">
            <h4 class="service-heading">Item 2</h4>
            <h4 class="service-heading">$88</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </a>
          </div>
       
          <div class="col-md-4">
          <a href="../SiftScience/badPeople3.php">
            <img src="img/asics3.0.jpg" alt="Item 3" width="200">
            <h4 class="service-heading">Item 3</h4>
            <h4 class="service-heading">$888</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </a>
          </div>

        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <h4>Sales Inquiry</h4>
              <p class="text-muted">Reach out to our Sales team directly for immidiate inquiries about our products</p>
              <a href="tel:+123456789">+12345789<br></a>
              <a href="mailto:salesinquiry@bryant88.com">salesinquiry@bryant88.com</a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member">
              <h4>Customer Support</h4>
              <p class="text-muted">Get in touch with customer support for assistance with your Bryant88 sneaker(s)</p>
              <a href="tel:+88888888">+88888888<br></a>
              <a href="mailto:customersupport@bryant88.com">customersupport@bryant88.com</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
<script>
  import {sendEmail} from 'backend/sendEmail.jsw';
  
</script>

    <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/jquery/jquery.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
