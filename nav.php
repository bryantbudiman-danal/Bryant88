    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php#page-top">Bryant88 Cool Sneakers</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php#collection">Collection</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php#contact">Contact</a>
            </li>

            <?php
            session_start();

            if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
              echo '<li class="nav-item">';
                echo '<a class="nav-link js-scroll-trigger" href="../logout.php">Logout</a>';
              echo '</li>';
              echo '<li class="nav-item">';
                echo '<a class="nav-link js-scroll-trigger" href="../account.php">Account</a>';
              echo '</li>';
            } else {
              echo '<li class="nav-item">';
                echo '<a class="nav-link js-scroll-trigger" href="../login.php">Login</a>';
              echo '</li>';
              echo '<li class="nav-item">';
                echo '<a class="nav-link js-scroll-trigger" href="../register.php">Register</a>';
              echo '</li>';
            }

            ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../cart.php">Cart</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>