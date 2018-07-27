
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


              <?php
                 $host = 'siftscience.mysql.database.azure.com';
                $username = 'bryantbudiman@siftscience';
                $password = 'KopiLuwak88';
                $db_name = 'people';

                $mysqli = mysqli_init();
                mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
                if (mysqli_connect_errno($mysqli)) {
                  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
                } else {
                  if (($handle = fopen("people.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                      $username = urlencode($data[0]);
                      $ch = curl_init('https://api.siftscience.com/v205/score/'. $username . '/?api_key=e7e2cfa100771efb');
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
                      $response = curl_exec($ch); 
                      $result = json_decode($response, true);

                      $accountAbuseScore = trim($result["scores"]["account_abuse"]["score"]);
                      $accountAbuseReasons = json_decode($result["scores"]["account_abuse"]["reasons"], true);
                      foreach($accountAbuseReasons as $accountAbuseReason) {
                        echo $accountAbuseReason["name"]; 
                      }

                      $accountTakeoverScore = trim($result["scores"]["account_takeover"]["score"]);
                      $accountTakeoverReasons = json_decode($result["scores"]["account_takeover"]["reasons"], true);
                      foreach($accountTakeoverReasons as $accountTakeoverReason) {
                        echo $accountTakeoverReason["name"]; 
                      }

                      $paymentAbuseScore = trim($result["scores"]["payment_abuse"]["score"]);
                      $paymentAbuseReasons = json_decode($result["scores"]["payment_abuse"]["reasons"], true);
                      foreach($paymentAbuseReasons as $paymentAbuseReason) {
                        echo $paymentAbuseReason["name"]; 
                      }

                      usleep(88888);
                    }

                    fclose($handle);
                  } 
                }
              ?>
            </div>
          </div>
        </form>
      </div> <!-- /container -->
    </section>

  </body>

</html>
