<?php
	function json_pretty($json, $html = false) {
	    $out = ''; $nl = "\n"; $cnt = 0; $tab = 4; $len = strlen($json); $space = ' ';
	    if($html) {
	        $space = '&nbsp;';
	        $nl = '<br/>';
	    }
	    $k = strlen($space)?strlen($space):1;
	    for ($i=0; $i<=$len; $i++) {
	        $char = substr($json, $i, 1);
	        if($char == '}' || $char == ']') {
	            $cnt --;
	            $out .= $nl . str_pad('', ($tab * $cnt * $k), $space);
	        } else if($char == '{' || $char == '[') {
	            $cnt ++;
	        }
	        $out .= $char;
	        if($char == ',' || $char == '{' || $char == '[') {
	            $out .= $nl . str_pad('', ($tab * $cnt * $k), $space);
	        }
	        if($char == ':') {
	            $out .= ' ';
	        }
	    }
	    return $out;
	}


	$username = $_GET['username'];

	$ch = curl_init('https://api.siftscience.com/v205/score/'. $username . '/?api_key=e7e2cfa100771efb');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
	$response = curl_exec($ch); 
?>

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
    
  </head>

  <body id="page-top">

    <section id="product">
      <div class="container">
        <form action="ssScore.php" method="GET" class="form-signin">
   
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <h2 class="form-signin-heading">Find Sift Science Score</h2>

              <div class="row top_buffer"></div><!-- end row -->


              <div class="mb-4">
                <label for="inputUsername" class="sr-only">Username</label>
                <input name = "username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
              </div>

              <div class="row top_buffer"></div><!-- end row -->

              <div class="mb-4">
                <button class="btn btn-primary btn-block" type="submit">Check Score!</button>
              </div>
            </div>
          </div>
        </form>
      </div> <!-- /container -->
    </section>

    <section id="result">
      <div class="container">
        <?php
  			echo '<p>' . json_pretty($response, true) . '</p>';
  		?>
      </div> <!-- /container -->
    </section>


    <!-- Bootstrap core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/jquery/jquery.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-agency/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
  </body>

</html>