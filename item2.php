
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
      var Q = window.Q = (new Date).getTime();

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    
    </script>
    <script src="Bryant88.js"></script>
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

       #mainNav .navbar-nav .nav-item .nav-link  {
        color: black;
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
    </style>

  </head>

  <body id="page-top">
    <?php include 'nav.php'; ?>

    <section id="product">
      <div class="container">
        <div class="row">
          <div class="col-md-7">

            <div class="row">
              <div class="col-md-4 thumbnail">
                <img src="img/asics2.0.jpg" alt="Item 2" class="image-responsive">
              </div>
              <div class="col-md-4 thumbnail">
                <img src="img/asics2.1.jpg" alt="Item 2" class="image-responsive">
              </div>
              <div class="col-md-4 thumbnail">
                <img src="img/asics2.2.jpg" alt="Item 2" class="image-responsive">
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 thumbnail">
                <img src="img/asics2.3.jpg" alt="Item 2" class="image-responsive">
              </div>
              <div class="col-md-4 thumbnail">
                <img src="img/asics2.4.jpg" alt="Item 2" class="image-responsive">
              </div>
              <div class="col-md-4 thumbnail">
                <img src="img/asics2.5.jpg" alt="Item 2" class="image-responsive">
              </div>
            </div>

            <div class="row">
              <img src="img/asics2.0.jpg" alt="Item 2" class="image-responsive" id="main-image">
            </div>
          </div>
          <div class="col-md-5" id="right-container">
            <div class="row">
              <div class="col-md-12">
                <h1>Item 2</h1>
              </div>
            </div><!-- end row-->
            <div class="row">
              <div class="col-md-12">
                <h3>$8</h3>
              </div>
            </div><!-- end row -->
            <div class="row top_buffer"></div><!-- end row -->

            <form action="add_to_cart.php" method="GET">

              <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"><span class="label">Quantity</span></label>
                        <select name="quantity" class="form-control" id="exampleFormControlSelect1">
                          <option selected="selected" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                    </div>
                </div>
              </div><!-- end row -->

              <input type="hidden" id="itemID" name="id" value="2">
              
              <div class="row">
                <div class="col-md-5">
                  <button type="submit" class="btn btn-danger text">Add To Cart</button>
                </div>
              </div><!-- end row -->
            </form>

            <div class="row">
              <div class="col-md-12">
                <p id="product-description"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
              </div>
            </div><!-- end row -->

          </div>
        </div><!-- end row -->
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

    <script>
      var thumbnails = document.querySelectorAll('.thumbnail img');

      for (var i = 0; i < thumbnails.length; i++) {
        thumbnails[i].onclick = function(){
          for(var j = 0; j < thumbnails.length; j++) {
            thumbnails[j].style.border = "0";
          }

          this.style.border = "thin solid red";
 
          document.querySelector('#main-image').src = this.src;
      }
    }

    </script>

  </body>

</html>
