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
    <?php include 'nav.php'; ?>

    <section id="product">
      <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">       
              <?php 
                $host = 'bryant88.mysql.database.azure.com';
                $username = 'bryantbudiman@bryant88';
                $password = 'KopiLuwak88';
                $db_name = 'users';

                $mysqli = mysqli_init();
                mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
                if (mysqli_connect_errno($mysqli)) {
                  die('Failed to connect to MySQL: '.mysqli_connect_error());
                } else {
                  $statement = "SELECT * FROM users.people where username='" . $_SESSION['user'] . "'";

                  $results = $mysqli->query($statement);

                  if(!$results) {
                    echo $mysqli->error;
                  } else {
                    $user = $results->fetch_assoc();

                    $fullName = $user['firstName'] . " " . $user['lastName'];
                    $address = $user['address1'] . " " . $user['address2'] . ", " . $user['city'] . ", " .
                    $user['state'] . ", " . $user['country'] . ", " . $user['zip'];
                    $email = $user['email'];

                  }
                }
              ?>              

              <h3 style="text-align:center;"> Full Name </h3>
              <h6 style="text-align:center;"> <?php echo $fullName; ?> </h6><br>

              <h3 style="text-align:center;"> Address </h3>
              <h6 style="text-align:center;"> <?php echo $address; ?> </h6><br>

              <h3 style="text-align:center;"> Email </h3>
              <h6 style="text-align:center;"> <?php echo $email; ?> </h6>
  
          </div>          
        </div>        
      </div><!-- end container -->
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
