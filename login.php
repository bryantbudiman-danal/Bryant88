
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bryant88 Cool Sneakers</title>

    <!-- JS Snippet -->
    <script>
      <?php
        session_start();

        $username = "-88";

        if(isset($_SESSION['user'])) $username = $_SESSION['user'];
      ?>

      var username = window.username = "<?php echo $username; ?>";
      console.log(username);
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-123580463-1', 'auto');    
    </script>
    <script src="snippet88.js"></script>
    <!-- End JS Snippet -->

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

      .top_buffer {
        margin-top: 20px;
      }

      .row img {
        width: 100%;
        height: 100%;
      }

      .label {
        font-size: 90%;
        font-weight: 400;
        letter-spacing: 1px;
        font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      }

      .thumbnail {
        width: 33%;
        height: 100%;
      }

      .thumbnail > img {
        width: 100%;
        height: 100%;
      }

      .thumbnail > img:hover {
        border: 2px solid #021a40;
        background-color: #ff0;
      }

      #right-container {
        padding-left: 38px;
      }

      .row > #product-description {
        color: black;
      }

      #mainNav .navbar-nav .nav-item .nav-link  {
        color: white;
      }

      #mainNav {
        background-color: #232323;
      }

      .errorBar {
        background-color: red;
        color: white;
      }

    </style>

  </head>

  <body id="page-top">
    <?php include 'nav.php'; ?>

    <section id="product">
      <div class="container">
        <form action="login-process.php" method="GET" class="form-signin">
   
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <h2 class="form-signin-heading">Please sign in</h2>

              <?php

                if(isset($_GET['fail']) && $_GET['fail'] == true) {
                  echo '<div class="row">';
                    echo '<div class="col-lg-12 text-center my-auto errorBar">';
                      echo "Login failed: username or password is invalid!";
                    echo '</div>';
                  echo '</div>';
                } else if(isset($_GET['sqlFail']))  {
                  echo '<div class="row">';
                    echo '<div class="col-lg-12 text-center my-auto errorBar">';
                      echo "MySQL failure: " . $_GET['sqlFail'];
                    echo '</div>';
                  echo '</div>';              
                }

              ?>

              <div class="row top_buffer"></div><!-- end row -->


              <div class="mb-4">
                <label for="inputUsername" class="sr-only">Username</label>
                <input name = "username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
              </div>

              <div class="mb-4">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>

              <div class="row top_buffer"></div><!-- end row -->

              <div class="mb-4">
                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
              </div>
            </div>
          </div>
        </form>
      </div> <!-- /container -->
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

    <!-- Portfolio Modals -->

    <!-- Bootstrap core JavaScript -->
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
