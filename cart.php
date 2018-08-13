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
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://blackrockdigital.github.io/startbootstrap-agency/css/agency.min.css" rel="stylesheet">

        <!------ Include the above in your HEAD tag ---------->

        <style>
          .team-member h4 {
            color: white;
          }


          img {
            width: 100%;
          }

          a[href^="tel:"]:before {
            content: "\260E";
            margin-right: 0.5em;
          }

          .intro-text {
            color: #fed136;
          }

          .itemName {
            margin-top: 30px;
          }

          #mainNav .navbar-nav .nav-item .nav-link  {
            color: white;
          }

          #mainNav {
            background-color: #232323;
          }

            .table>tbody>tr>td, .table>tfoot>tr>td{
                vertical-align: middle;
            }
            @media screen and (max-width: 600px) {
                table#cart tbody td .form-control{
                    width:20%;
                    display: inline !important;
                }
                .actions .btn{
                    width:36%;
                    margin:1.5em 0;
                }

                img {
                    display: none;
                }
                
                .actions .btn-info{
                    float:left;
                }
                .actions .btn-danger{
                    float:right;
                }
                
                table#cart thead { display: none; }
                table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
                table#cart tbody tr td:first-child { background: #333; color: #fff; }
                table#cart tbody td:before {
                    content: attr(data-th); font-weight: bold;
                    display: inline-block; width: 8rem;
                }
                
                table#cart tfoot td {display:block; }
                table#cart tfoot td .btn{display:block;}   
            }
        </style>
    </head>

    <body id="page-top">
        <?php 
            session_start();
            include 'nav.php';
        ?>

        <section id='cartItems'>
            <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">    
            <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $total_price = 0;
                            foreach($_SESSION['cart'] as $id=>$value){
                                echo "<tr>";
                                    echo "<td data-th='Product' class='text-center'>";
                                        echo "<div class='row'>";
                                            echo "<div class='col-sm-5'><img src='img/asics" . $id . ".0.jpg' alt='...'' class='img-responsive'/></div>";
                                            echo "<div class='col-sm-5 my-auto'>";
                                                echo "Item " . $id;
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</td>";
                                    $price = 8;
                                    if($id == 2) $price = 88;
                                    else if($id == 3) $price = 888;
                                    echo "<td data-th='Price'>$" . $price . "</td>";
                                    echo "<td data-th='Quantity'>";
                                        $quantity = $_SESSION['cart'][$id]['quantity'];
                                        echo '<input type="number" min="0" id="' . $id . '" class="form-control text-center" value="' . $quantity . '">';
                                    echo "</td>";
                                    $sub_total = $price * $quantity;
                                    $total_price += $sub_total;
                                    echo "<td data-th='Subtotal' class='text-center'>" . $sub_total . "</td>";
                                    echo "<td class='actions' data-th=''>";
                                        echo "<a class='btn btn-primary btn-sm text-uppercase js-scroll-trigger' href='../delete_cart_item.php?id=" . $id . "'><i class='fa fa-trash-o'></i></a>";        
                                    echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                            </tr>
                            <tr>
                                <td><a href="../index.php#collection" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <?php 
                                    echo "<td class='hidden-xs text-center'><strong>Total $" . $total_price . "</strong></td>"; 
                                    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
                                        echo '<td><a href="../checkout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>';
                                    } 
                                ?>
                            </tr>
                        </tfoot>
                </table>
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

        <script>
            var numInputs = document.querySelectorAll('.form-control');

            for (var i = 0; i < numInputs.length; i++) {
                numInputs[i].onchange = function() {
                    var id = this.id;
                    var quantity = this.value;
                    window.location = "refresh_cart.php?id=" + id + "&quantity=" + quantity;
                }
            }

        </script>

        <!-- Bootstrap core JavaScript -->
        <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/jquery/jquery.min.js"></script>
        <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/agency.min.js"></script>
    </body>
</html>