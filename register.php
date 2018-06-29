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
        <form action="register_user.php" method="GET" class="form-signin">
          <h2 class="form-signin-heading">Register</h2>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="userName" class="sr-only">User Name</label>
          <input name="userName" id="userName" class="form-control checkForm" placeholder="User Name" required autofocus>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="firstName" class="sr-only">First Name</label>
          <input name="firstName" id="firstName" class="form-control checkForm" placeholder="First Name" required autofocus>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="lastName" class="sr-only">Last Name</label>
          <input name="lastName" type="password" id="lastName" class="form-control checkForm" placeholder="Last Name" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="email" class="sr-only">Email</label>
          <input name="email" type="email" id="email" class="form-control checkForm" placeholder="Email" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="phone" class="sr-only">Phone</label>
          <input name="phone" type="tel" id="phone" class="form-control checkForm" placeholder="Phone" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="address1" class="sr-only">Address Line 1</label>
          <input name="address1" id="address1" class="form-control checkForm" placeholder="Address Line 1" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="address2" class="sr-only">Address Line 2</label>
          <input name="address2" id="address2" class="form-control checkForm" placeholder="Address Line 2" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="cityTown" class="sr-only">City/Town</label>
          <input name="cityTown" id="cityTown" class="form-control checkForm" placeholder="City / Town" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="stateProvinceRegion" class="sr-only">State / Province / Region</label>
          <input name="stateProvinceRegion" id="stateProvinceRegion" class="form-control checkForm" placeholder="State / Province / Region" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="zip" class="sr-only">Zip / Postal Code</label>
          <input name="zip" id="zip" class="form-control checkForm" placeholder="Zip / Postal Code" required>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="country" class="sr-only">Country</label>
          <select name ="country" id="country">
            <option value="AF">Afghanistan</option>
            <option value="AX">Åland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia, Plurinational State of</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, the Democratic Republic of the</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Côte d'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curaçao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and McDonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Réunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthélemy</option>
            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin (French part)</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten (Dutch part)</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela, Bolivarian Republic of</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.S.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
          </select>
          <div class="row top_buffer"></div><!-- end row -->

          <label for="inputPassword" class="sr-only">Password</label>
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

    <script>
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

        if (passwordValid == false) {
          $('.btn').attr('disabled', 'disabled');
        } else {
          $('.btn').removeAttr('disabled');
        }
      }

      $(document).ready(function() {
        $('.checkForm').keyup(function() {
          var empty = false;
          $('.checkForm').each(function() {
              if ($(this).val().length == 0) {
                  empty = true;
              }
          });

          if (empty && passwordValid == false) {
              $('.btn').attr('disabled', 'disabled');
          } else {
              $('.btn').removeAttr('disabled');
          }
        });
      });
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
