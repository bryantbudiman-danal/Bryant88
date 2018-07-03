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

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/checkout/form-validation.css" rel="stylesheet">

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

      .invalid {
        color: #E00;
      }
    
      .valid {
        color: #0B0;
      }

    </style>

  </head>

  <body id="page-top">
    <?php include 'nav.php'; ?>

    <section id="product">
      <div class="container">
        <form class="needs-validation" action="phone-identification.php" method="POST" novalidate>
          <h2 class="form-signin-heading">Register</h2>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="userName">User Name</label>
          <input name="userName" type="text" id="userName" class="form-control checkForm" placeholder="User Name" required autofocus>
          <div class="invalid-feedback">
            Please enter a user name.
          </div>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="firstName">First Name</label>
          <input name="firstName" type="text" id="firstName" class="form-control checkForm" placeholder="First Name" required autofocus>
          <div class="invalid-feedback">
            Please enter a first name.
          </div>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="lastName">Last Name</label>
          <input name="lastName" type="password" id="lastName" class="form-control checkForm" placeholder="Last Name" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="email">Email</label>
          <input name="email" type="email" id="email" class="form-control checkForm" placeholder="Email" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="address1">Address Line 1</label>
          <input name="address1" type="text" id="address1" class="form-control checkForm" placeholder="1234 Main St" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="address2">Address Line 2</label>
          <input name="address2" type="text" id="address2" class="form-control checkForm" placeholder="Apartment or suite" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="city">City</label>
          <input name="city" type="text" id="city" class="form-control checkForm" placeholder="City / Town" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="state">State</label>
          <input name="state" type="text" id="state" class="form-control checkForm" placeholder="State / Province / Region" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="zip">Zip / Postal Code</label>
          <input name="zip" type="text" id="zip" class="form-control checkForm" placeholder="Zip / Postal Code" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="country">Country</label>
          <select class="custom-select d-block w-100" name ="country" id="country">
                  <option value="United States" selected="selected">United States</option> 
                  <option value="United Kingdom">United Kingdom</option> 
                  <option value="Afghanistan">Afghanistan</option> 
                  <option value="Albania">Albania</option> 
                  <option value="Algeria">Algeria</option> 
                  <option value="American Samoa">American Samoa</option> 
                  <option value="Andorra">Andorra</option> 
                  <option value="Angola">Angola</option> 
                  <option value="Anguilla">Anguilla</option> 
                  <option value="Antarctica">Antarctica</option> 
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                  <option value="Argentina">Argentina</option> 
                  <option value="Armenia">Armenia</option> 
                  <option value="Aruba">Aruba</option> 
                  <option value="Australia">Australia</option> 
                  <option value="Austria">Austria</option> 
                  <option value="Azerbaijan">Azerbaijan</option> 
                  <option value="Bahamas">Bahamas</option> 
                  <option value="Bahrain">Bahrain</option> 
                  <option value="Bangladesh">Bangladesh</option> 
                  <option value="Barbados">Barbados</option> 
                  <option value="Belarus">Belarus</option> 
                  <option value="Belgium">Belgium</option> 
                  <option value="Belize">Belize</option> 
                  <option value="Benin">Benin</option> 
                  <option value="Bermuda">Bermuda</option> 
                  <option value="Bhutan">Bhutan</option> 
                  <option value="Bolivia">Bolivia</option> 
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                  <option value="Botswana">Botswana</option> 
                  <option value="Bouvet Island">Bouvet Island</option> 
                  <option value="Brazil">Brazil</option> 
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                  <option value="Brunei Darussalam">Brunei Darussalam</option> 
                  <option value="Bulgaria">Bulgaria</option> 
                  <option value="Burkina Faso">Burkina Faso</option> 
                  <option value="Burundi">Burundi</option> 
                  <option value="Cambodia">Cambodia</option> 
                  <option value="Cameroon">Cameroon</option> 
                  <option value="Canada">Canada</option> 
                  <option value="Cape Verde">Cape Verde</option> 
                  <option value="Cayman Islands">Cayman Islands</option> 
                  <option value="Central African Republic">Central African Republic</option> 
                  <option value="Chad">Chad</option> 
                  <option value="Chile">Chile</option> 
                  <option value="China">China</option> 
                  <option value="Christmas Island">Christmas Island</option> 
                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                  <option value="Colombia">Colombia</option> 
                  <option value="Comoros">Comoros</option> 
                  <option value="Congo">Congo</option> 
                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                  <option value="Cook Islands">Cook Islands</option> 
                  <option value="Costa Rica">Costa Rica</option> 
                  <option value="Cote D'ivoire">Cote D'ivoire</option> 
                  <option value="Croatia">Croatia</option> 
                  <option value="Cuba">Cuba</option> 
                  <option value="Cyprus">Cyprus</option> 
                  <option value="Czech Republic">Czech Republic</option> 
                  <option value="Denmark">Denmark</option> 
                  <option value="Djibouti">Djibouti</option> 
                  <option value="Dominica">Dominica</option> 
                  <option value="Dominican Republic">Dominican Republic</option> 
                  <option value="Ecuador">Ecuador</option> 
                  <option value="Egypt">Egypt</option> 
                  <option value="El Salvador">El Salvador</option> 
                  <option value="Equatorial Guinea">Equatorial Guinea</option> 
                  <option value="Eritrea">Eritrea</option> 
                  <option value="Estonia">Estonia</option> 
                  <option value="Ethiopia">Ethiopia</option> 
                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                  <option value="Faroe Islands">Faroe Islands</option> 
                  <option value="Fiji">Fiji</option> 
                  <option value="Finland">Finland</option> 
                  <option value="France">France</option> 
                  <option value="French Guiana">French Guiana</option> 
                  <option value="French Polynesia">French Polynesia</option> 
                  <option value="French Southern Territories">French Southern Territories</option> 
                  <option value="Gabon">Gabon</option> 
                  <option value="Gambia">Gambia</option> 
                  <option value="Georgia">Georgia</option> 
                  <option value="Germany">Germany</option> 
                  <option value="Ghana">Ghana</option> 
                  <option value="Gibraltar">Gibraltar</option> 
                  <option value="Greece">Greece</option> 
                  <option value="Greenland">Greenland</option> 
                  <option value="Grenada">Grenada</option> 
                  <option value="Guadeloupe">Guadeloupe</option> 
                  <option value="Guam">Guam</option> 
                  <option value="Guatemala">Guatemala</option> 
                  <option value="Guinea">Guinea</option> 
                  <option value="Guinea-bissau">Guinea-bissau</option> 
                  <option value="Guyana">Guyana</option> 
                  <option value="Haiti">Haiti</option> 
                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                  <option value="Honduras">Honduras</option> 
                  <option value="Hong Kong">Hong Kong</option> 
                  <option value="Hungary">Hungary</option> 
                  <option value="Iceland">Iceland</option> 
                  <option value="India">India</option> 
                  <option value="Indonesia">Indonesia</option> 
                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                  <option value="Iraq">Iraq</option> 
                  <option value="Ireland">Ireland</option> 
                  <option value="Israel">Israel</option> 
                  <option value="Italy">Italy</option> 
                  <option value="Jamaica">Jamaica</option> 
                  <option value="Japan">Japan</option> 
                  <option value="Jordan">Jordan</option> 
                  <option value="Kazakhstan">Kazakhstan</option> 
                  <option value="Kenya">Kenya</option> 
                  <option value="Kiribati">Kiribati</option> 
                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                  <option value="Korea, Republic of">Korea, Republic of</option> 
                  <option value="Kuwait">Kuwait</option> 
                  <option value="Kyrgyzstan">Kyrgyzstan</option> 
                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                  <option value="Latvia">Latvia</option> 
                  <option value="Lebanon">Lebanon</option> 
                  <option value="Lesotho">Lesotho</option> 
                  <option value="Liberia">Liberia</option> 
                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                  <option value="Liechtenstein">Liechtenstein</option> 
                  <option value="Lithuania">Lithuania</option> 
                  <option value="Luxembourg">Luxembourg</option> 
                  <option value="Macao">Macao</option> 
                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                  <option value="Madagascar">Madagascar</option> 
                  <option value="Malawi">Malawi</option> 
                  <option value="Malaysia">Malaysia</option> 
                  <option value="Maldives">Maldives</option> 
                  <option value="Mali">Mali</option> 
                  <option value="Malta">Malta</option> 
                  <option value="Marshall Islands">Marshall Islands</option> 
                  <option value="Martinique">Martinique</option> 
                  <option value="Mauritania">Mauritania</option> 
                  <option value="Mauritius">Mauritius</option> 
                  <option value="Mayotte">Mayotte</option> 
                  <option value="Mexico">Mexico</option> 
                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                  <option value="Moldova, Republic of">Moldova, Republic of</option> 
                  <option value="Monaco">Monaco</option> 
                  <option value="Mongolia">Mongolia</option> 
                  <option value="Montserrat">Montserrat</option> 
                  <option value="Morocco">Morocco</option> 
                  <option value="Mozambique">Mozambique</option> 
                  <option value="Myanmar">Myanmar</option> 
                  <option value="Namibia">Namibia</option> 
                  <option value="Nauru">Nauru</option> 
                  <option value="Nepal">Nepal</option> 
                  <option value="Netherlands">Netherlands</option> 
                  <option value="Netherlands Antilles">Netherlands Antilles</option> 
                  <option value="New Caledonia">New Caledonia</option> 
                  <option value="New Zealand">New Zealand</option> 
                  <option value="Nicaragua">Nicaragua</option> 
                  <option value="Niger">Niger</option> 
                  <option value="Nigeria">Nigeria</option> 
                  <option value="Niue">Niue</option> 
                  <option value="Norfolk Island">Norfolk Island</option> 
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                  <option value="Norway">Norway</option> 
                  <option value="Oman">Oman</option> 
                  <option value="Pakistan">Pakistan</option> 
                  <option value="Palau">Palau</option> 
                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                  <option value="Panama">Panama</option> 
                  <option value="Papua New Guinea">Papua New Guinea</option> 
                  <option value="Paraguay">Paraguay</option> 
                  <option value="Peru">Peru</option> 
                  <option value="Philippines">Philippines</option> 
                  <option value="Pitcairn">Pitcairn</option> 
                  <option value="Poland">Poland</option> 
                  <option value="Portugal">Portugal</option> 
                  <option value="Puerto Rico">Puerto Rico</option> 
                  <option value="Qatar">Qatar</option> 
                  <option value="Reunion">Reunion</option> 
                  <option value="Romania">Romania</option> 
                  <option value="Russian Federation">Russian Federation</option> 
                  <option value="Rwanda">Rwanda</option> 
                  <option value="Saint Helena">Saint Helena</option> 
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                  <option value="Saint Lucia">Saint Lucia</option> 
                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                  <option value="Samoa">Samoa</option> 
                  <option value="San Marino">San Marino</option> 
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                  <option value="Saudi Arabia">Saudi Arabia</option> 
                  <option value="Senegal">Senegal</option> 
                  <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                  <option value="Seychelles">Seychelles</option> 
                  <option value="Sierra Leone">Sierra Leone</option> 
                  <option value="Singapore">Singapore</option> 
                  <option value="Slovakia">Slovakia</option> 
                  <option value="Slovenia">Slovenia</option> 
                  <option value="Solomon Islands">Solomon Islands</option> 
                  <option value="Somalia">Somalia</option> 
                  <option value="South Africa">South Africa</option> 
                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                  <option value="Spain">Spain</option> 
                  <option value="Sri Lanka">Sri Lanka</option> 
                  <option value="Sudan">Sudan</option> 
                  <option value="Suriname">Suriname</option> 
                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                  <option value="Swaziland">Swaziland</option> 
                  <option value="Sweden">Sweden</option> 
                  <option value="Switzerland">Switzerland</option> 
                  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                  <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                  <option value="Tajikistan">Tajikistan</option> 
                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                  <option value="Thailand">Thailand</option> 
                  <option value="Timor-leste">Timor-leste</option> 
                  <option value="Togo">Togo</option> 
                  <option value="Tokelau">Tokelau</option> 
                  <option value="Tonga">Tonga</option> 
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                  <option value="Tunisia">Tunisia</option> 
                  <option value="Turkey">Turkey</option> 
                  <option value="Turkmenistan">Turkmenistan</option> 
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                  <option value="Tuvalu">Tuvalu</option> 
                  <option value="Uganda">Uganda</option> 
                  <option value="Ukraine">Ukraine</option> 
                  <option value="United Arab Emirates">United Arab Emirates</option> 
                  <option value="United Kingdom">United Kingdom</option> 
                  <option value="United States">United States</option> 
                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                  <option value="Uruguay">Uruguay</option> 
                  <option value="Uzbekistan">Uzbekistan</option> 
                  <option value="Vanuatu">Vanuatu</option> 
                  <option value="Venezuela">Venezuela</option> 
                  <option value="Vietnam">Vietnam</option> 
                  <option value="Virgin Islands, British">Virgin Islands, British</option> 
                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                  <option value="Wallis and Futuna">Wallis and Futuna</option> 
                  <option value="Western Sahara">Western Sahara</option> 
                  <option value="Yemen">Yemen</option> 
                  <option value="Zambia">Zambia</option> 
                  <option value="Zimbabwe">Zimbabwe</option>
          </select>
           
          <div class="row top_buffer"></div><!-- end row -->

          <label for="inputPassword">Password</label>
          <input name="password" type="password" id="inputPassword" class="form-control checkForm" placeholder="Password" required>
          <div class="row top_buffer"></div><!-- end row -->

          <ul class="passwordRequirements">
            <li class="item">Cannot be empty/blank.</li>
            <li class="item">Must contain at least 5 characters.</li>
            <li class="item">Must have at least one special character @ or #.</li>
            <li class="item">Must contain upper AND lower case characters.</li>
            <li class="item">Cannot contain word 'pass' (case insensitive).</li>
          </ul>

          <div class="row top_buffer"></div><!-- end row -->
          <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>

    <script>
      (function() {
          'use strict';

          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            console.log(forms.length);
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
      })();

      // get all elements
      var element = document.querySelectorAll('.passwordRequirements li');

      Array.from(element).forEach(function(ele, i) {
        ele.setAttribute("id", 'requirement' + (i + 1));
      })

      var passwordValid = false; 

      document.querySelector('#inputPassword').oninput = function(){
        var rule1RegExp =  /^\s*$/;
        var rule2RegExp = /^.{5,}$/;
        var rule3RegExp = /(@|#)/;
        var rule4RegExpLower = /(?=.*[a-z])/;
        var rule4RegExpUpper = /(?=.*[A-Z])/;
        var rule5RegExp = /pass/i;

        var pass = this.value;
        pass = pass.trim();

        // 1: Cannot be empty/blank.
        if ( !rule1RegExp.test(pass) ) {
          // Empty – Invalid
          document.querySelector('#requirement1').classList.add('valid');
          document.querySelector('#requirement1').classList.remove('invalid');
          passwordValid = false;
        } else {
          //  Valid
          document.querySelector('#requirement1').classList.remove('valid');
          document.querySelector('#requirement1').classList.add('invalid');
          passwordValid = true; 
        }

        // 2: Must contain at least 5 characters.
        if ( rule2RegExp.test(pass) ) {
          // Invalid
          document.querySelector('#requirement2').classList.add('valid');
          document.querySelector('#requirement2').classList.remove('invalid');
          passwordValid = false; 
        } else {
          // Valid
          document.querySelector('#requirement2').classList.remove('valid');
          document.querySelector('#requirement2').classList.add('invalid');
          passwordValid = true;
        }

        // 3: Must have at least one special character @ or #.
        if ( rule3RegExp.test(pass) ) {
          // Invalid
          document.querySelector('#requirement3').classList.add('valid');
          document.querySelector('#requirement3').classList.remove('invalid');
          passwordValid = false; 
        } else {
          // Valid
          document.querySelector('#requirement3').classList.remove('valid');
          document.querySelector('#requirement3').classList.add('invalid');
          passwordValid = true;
        }

        // 4: Must contain upper AND lower case characters.
        if ( rule4RegExpLower.test(pass) && rule4RegExpUpper.test(pass)) {
          // Invalid
          document.querySelector('#requirement4').classList.add('valid');
          document.querySelector('#requirement4').classList.remove('invalid');
          passwordValid = false; 
        } else {
          // Valid
          document.querySelector('#requirement4').classList.remove('valid');
          document.querySelector('#requirement4').classList.add('invalid');
          passwordValid = true; 
        }

        // 5: Cannot contain word 'pass' (case insensitive).
        if ( !rule5RegExp.test(pass) ) {
          // Invalid
          document.querySelector('#requirement5').classList.add('valid');
          document.querySelector('#requirement5').classList.remove('invalid');
          passwordValid = false; 
        } else {
          // Valid
          document.querySelector('#requirement5').classList.remove('valid');
          document.querySelector('#requirement5').classList.add('invalid');
          passwordValid = true; 
        }
    </script>

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
