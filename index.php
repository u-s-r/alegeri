<?php
require 'functions.php';

$data = get_data();
?><!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Strângem semnături pentru ca Uniunea Salvați România (USR) să candideze la alegerile parlamentare din 11 decembrie 2016. Ne vei găsi pe buletinul de vot doar dacă semnezi pentru noi!">
    <meta name="author" content="USR">
    <meta property="og:url" content="https://usr.ro/alegeri/">
    <meta property="og:title" content="Asigură corectitudinea procesului electoral din ziua votului!">
    <meta property="og:description" content="Înscrie-te ca reprezentant sau delegat ca să asigurăm corectitudinea procesului electoral din ziua votului!">
    <meta property="og:image" content="https://usr.ro/alegeri/assets/app/img/alegeri.jpg">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.ico" rel="icon">
    <title>USR &middot; Asigură corectitudinea procesului electoral din ziua votului!</title>
    <link href="https://code.cdn.mozilla.net/fonts/fira.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="assets/vendor/jvectormap/jquery-jvectormap.css" rel="stylesheet">
    <link href="assets/app/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron jumbotron-primary">
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="pull-right">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Meniu navigare</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="btn btn-inverted navbar-btn" href="https://usr.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'doneaza')">Donează</a>
          </div>
          <div class="navbar-header">
            <a class="navbar-brand" href="https://usr.ro/">
              <img class="media-object" src="assets/app/img/logo.png" alt="USR">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Despre USR
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="https://usr.ro/cine-suntem/">Cine suntem</a></li>
                  <li><a href="https://usr.ro/program/">Program</a></li>
                  <li><a href="https://usr.ro/faq/">Întrebări frecvente</a></li>
                </ul>
              </li>
              <li><a href="https://usr.ro/candidati-alegerile-parlamentare-11-decembrie-2016/">Candidați</a></li>
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Înscrie-te
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="active"><a href="https://usr.ro/alegeri/">Înscrie-te ca delegat</a></li>
                  <li><a href="https://usr.ro/inscrie-te-ca-voluntar/">Înscrie-te ca voluntar</a></li>
                  <li><a href="https://usr.ro/inscrie-te-ca-membru/">Înscrie-te ca membru</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://usr.ro/contact/">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="maps">
              <div class="map map-ro">
                <div class="label">Click pentru situația pe regiuni</div>
                <div class="embed-responsive embed-responsive-4by3">
                  <div id="map-ro"></div>
                </div>
                <div class="label">În țară</div>
              </div>
              <div class="map map-diaspora">
                <div id="map-diaspora"></div>
                <div class="label">În diaspora</div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Asigură corectitudinea procesului electoral din ziua votului!</h1>
              </div>
              <div class="panel-body">
                <p>Înscrie-te ca delegat al Uniunii Salvați România în secțiile de votare! Dacă noi îi putem observa, ei nu ne mai pot frauda!</p>
                <div class="statistic statistic-primary">
                  <div class="text value">2 decembrie</div>
                  <div class="label">Termen limită de înscriere</div>
                </div>
              </div>
              <div class="panel-footer">
                <a class="btn btn-default" href="#inscriere" data-trigger="scroll" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'scroll_formular')">
                  <span class="glyphicon glyphicon-menu-right"></span>
                  Înscrie-te ca delegat
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="statistics">
            <div class="statistic statistic-primary">
              <div class="value"><?php echo $data['sectiiAcoperite']; ?></div>
              <div class="label">Secții acoperite</div>
            </div>
            <div class="statistic statistic-separator">
              <div class="value">/</div>
            </div>
            <div class="statistic statistic-secondary">
              <div class="value"><?php echo $data['sectii']; ?></div>
              <div class="label">Secții de votare</div>
            </div>
          </div>
          <div id="progres-sectii"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <ul class="media-list">
            <li class="media" id="inscriere">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-inscriere.png" alt="Înscrie-te ca reprezentant sau delegat">
              </div>
              <div class="media-body">
                <h3 class="media-heading">Înscrie-te ca delegat</h3>
                <form class="form-delegat" action="inscriere.php" method="post">
                  <input type="hidden" name="tip" value="delegat">
                  <p>În plus față de alegerile locale din acest an, <strong>delegatul</strong> poate asista la <em>toate</em> operațiunile electorale dintr-o secție de votare în ziua alegerilor (11 decembrie 2016), începând cu ora 6:00 și terminând cu momentul întocmirii proceselor-verbale de constatare a rezultatelor votării și a dosarelor cu rezultatele votării din secția respectivă (aprox. ora 12 noaptea).</p>
                  <p>Așadar, acesta poate asista inclusiv la operațiunea de numărare a voturilor din secția respectivă (operațiune care începe în ziua alegerilor la ora 21:00, după închiderea localului secției de votare).</p>
                  <p>Poate staționa în spațiul stabilit în sala de votare de către președintele biroului electoral al secției de votare și are dreptul de a sesiza în scris președintele biroului electoral în cazul constatării unor neregularități. Nu primește indemnizație din partea statului.</p>
                  <p><strong>Termen limită de înscriere: <span class="text-danger">2 decembrie</span></strong></p>
                  <p>Completează următoarele date <mark>întocmai ca în actul de identitate și cu diacritice:</mark></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group required">
                        <label class="control-label" for="nume-delegat">Nume de familie:</label>
                        <input type="text" class="form-control" id="nume-delegat" name="nume" placeholder="Popescu" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group required">
                        <label class="control-label" for="prenume-delegat">Prenume:</label>
                        <input type="text" class="form-control" id="prenume-delegat" name="prenume" placeholder="Andrei" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="control-label" for="cnp-delegat">CNP:</label>
                    <input type="text" class="form-control" id="cnp-delegat" name="cnp" placeholder="SAALLZZJJNNNC" required>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group required">
                        <label class="control-label" for="serie-delegat">Serie act identitate:</label>
                        <input type="text" class="form-control" id="serie-delegat" name="serie" placeholder="XY" required>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="form-group required">
                        <label class="control-label" for="numar-delegat">Număr act identitate:</label>
                        <input type="text" class="form-control" id="numar-delegat" name="numar" placeholder="123456" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="control-label" for="adresa-delegat">Domiciliul (<em>întocmai ca în actul de identitate</em>) / Adresa de reședință (din viza de flotant) în cazul în care doresc să fiu delegat în secția de votare la adresa de reședință:</label>
                    <textarea class="form-control" id="adresa-delegat" name="adresa" rows="3" placeholder="Str. Carol Davila Nr. 91, Parter, Ap. 1, Sector 5, București" required></textarea>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group required">
                        <label class="control-label" for="regiune-delegat">Județ domiciliu / reședință:</label>
                        <select class="form-control" id="regiune-delegat" name="regiune" required>
                          <option class="hidden" selected disabled>&mdash; Alege regiunea &mdash;</option>
                          <option value="Diaspora">Diaspora</option>
                          <option value="Alba">Alba</option>
                          <option value="Arad">Arad</option>
                          <option value="Arges">Arges</option>
                          <option value="Bacau">Bacau</option>
                          <option value="Bihor">Bihor</option>
                          <option value="Bistrita-Nasaud">Bistrita-Nasaud</option>
                          <option value="Botosani">Botosani</option>
                          <option value="Brasov">Brasov</option>
                          <option value="Braila">Braila</option>
                          <option value="Bucuresti - Sector 1">Bucuresti - Sector 1</option>
                          <option value="Bucuresti - Sector 2">Bucuresti - Sector 2</option>
                          <option value="Bucuresti - Sector 3">Bucuresti - Sector 3</option>
                          <option value="Bucuresti - Sector 4">Bucuresti - Sector 4</option>
                          <option value="Bucuresti - Sector 5">Bucuresti - Sector 5</option>
                          <option value="Bucuresti - Sector 6">Bucuresti - Sector 6</option>
                          <option value="Buzau">Buzau</option>
                          <option value="Caras Severin">Caras Severin</option>
                          <option value="Calarasi">Calarasi</option>
                          <option value="Cluj">Cluj</option>
                          <option value="Constanta">Constanta</option>
                          <option value="Covasna">Covasna</option>
                          <option value="Dambovita">Dambovita</option>
                          <option value="Dolj">Dolj</option>
                          <option value="Galati">Galati</option>
                          <option value="Giurgiu">Giurgiu</option>
                          <option value="Gorj">Gorj</option>
                          <option value="Harghita">Harghita</option>
                          <option value="Hunedoara">Hunedoara</option>
                          <option value="Ialomita">Ialomita</option>
                          <option value="Iasi">Iasi</option>
                          <option value="Ilfov">Ilfov</option>
                          <option value="Maramures">Maramures</option>
                          <option value="Mehedinti">Mehedinti</option>
                          <option value="Mures">Mures</option>
                          <option value="Neamt">Neamt</option>
                          <option value="Olt">Olt</option>
                          <option value="Prahova">Prahova</option>
                          <option value="Satu Mare">Satu Mare</option>
                          <option value="Salaj">Salaj</option>
                          <option value="Sibiu">Sibiu</option>
                          <option value="Suceava">Suceava</option>
                          <option value="Teleorman">Teleorman</option>
                          <option value="Timis">Timis</option>
                          <option value="Tulcea">Tulcea</option>
                          <option value="Vaslui">Vaslui</option>
                          <option value="Valcea">Valcea</option>
                          <option value="Vrancea">Vrancea</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group required">
                        <label class="control-label" for="tara-delegat">Țara:</label>
                        <select class="form-control" id="tara-delegat" name="tara" required>
                          <option class="hidden" selected disabled>&mdash; Alege țara &mdash;</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Aland Islands">Aland Islands</option>
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
                          <option value="Bonaire, Saint Eustatius And Saba">Bonaire, Saint Eustatius And Saba</option>
                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Brazil">Brazil</option>
                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                          <option value="Brunei">Brunei</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cabo Verde">Cabo Verde</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
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
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Curacao">Curacao</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
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
                          <option value="European Union">European Union</option>
                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="French Polynesia">French Polynesia</option>
                          <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                          <option value="Gabon">Gabon</option>
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
                          <option value="Guernsey">Guernsey</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guinea-Bissau">Guinea-Bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Heard Island And McDonald Islands">Heard Island And McDonald Islands</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Iran">Iran</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Laos">Laos</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libya">Libya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macao">Macao</option>
                          <option value="Macedonia">Macedonia</option>
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
                          <option value="Micronesia">Micronesia</option>
                          <option value="Moldova">Moldova</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montenegro">Montenegro</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="North Korea">North Korea</option>
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
                          <option value="Pitcairn Islands">Pitcairn Islands</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Reunion">Reunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russia">Russia</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Saint Barthelemy">Saint Barthelemy</option>
                          <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Saint Martin">Saint Martin</option>
                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                          <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Serbia">Serbia</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Sint Maarten">Sint Maarten</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                          <option value="South Korea">South Korea</option>
                          <option value="South Sudan">South Sudan</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syria">Syria</option>
                          <option value="Taiwan">Taiwan</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania">Tanzania</option>
                          <option value="Thailand">Thailand</option>
                          <option value="The Gambia">The Gambia</option>
                          <option value="Timor-Leste">Timor-Leste</option>
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
                          <option value="United States Virgin Islands">United States Virgin Islands</option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Vatican City State">Vatican City State</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Viet Nam">Viet Nam</option>
                          <option value="Virgin Islands">Virgin Islands</option>
                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="control-label" for="telefon-delegat">Număr de telefon:</label>
                    <input type="tel" class="form-control" id="telefon-delegat" name="telefon" placeholder="0712345678" required>
                  </div>
                  <div class="form-group required">
                    <label class="control-label" for="email-delegat">Email (pentru fiecare înscriere a unui reprezentant sau delegat introduceți <em>obligatoriu</em> o adresă de email unică pentru acea persoană):</label>
                    <input type="email" class="form-control" id="email-delegat" name="email" placeholder="andrei.popescu@usr.ro" required>
                  </div>
                  <div class="checkbox">
                    <label class="control-label">
                      <input type="checkbox" name="acord" checked>
                      Sunt de acord să primesc ocazional newslettere din partea Uniunii Salvați România
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="observatii-delegat">Observații:</label>
                    <textarea class="form-control" id="observatii-delegat" name="observatii" rows="3" aria-describedby="help-observatii-delegat"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LcJvQsUAAAAANyRcfLvhPMuS6tp9Z2ngT8TLUlg"></div>
                    <input type="hidden" name="recaptcha">
                  </div>
                  <small class="help-block">Prin completarea prezentului formular, persoana vizată își exprimă consimțământul pentru prelucrarea datelor sale cu caracter personal de către Uniunea Salvați România, în scopul desemnării de reprezentanți si delegați în secțiile de votare organizate pentru alegerile parlamentare din data de 11 decembrie 2016, și pentru comunicarea acestor date cu caracter personal către birourile și oficiile electorale competente, în conformitate cu dispozițiile art. 15 alin. (5), art. 17 alin. (5), art. 89 alin. (11) din <a href="http://legislatie.just.ro/Public/DetaliiDocument/170037" target="_blank">Legea nr. 208/2015</a> privind alegerea Senatului și a Camerei Deputaților, și art. 5 din <a href=" http://parlamentare2016.bec.ro/wp-content/uploads/2016/10/Decizia_73.pdf" target="_blank"> Decizia Biroului Electoral Central nr. 73D/21.10.2016 </a> privind unele măsuri pentru buna organizare și desfășurare a alegerilor pentru Senat și Camera Deputaților din data de 11 decembrie 2016. Nefurnizarea datelor cu caracter personal cerute prin prezentul formular atrage imposibilitatea desemnării persoanei vizate ca reprezentant sau delegat al Uniunii Salvați România în secțiile de votare organizate pentru alegerile parlamentare din data de 11 decembrie 2016. În conformitate cu dispozițiile <a href="http://legislatie.just.ro/Public/DetaliiDocument/32733" target="_blank">Legii nr. 677/2001</a> pentru protecția persoanelor cu privire la prelucrarea datelor cu caracter personal și libera circulație a acestor date, persoana vizată își poate exercita dreptul de acces la date, dreptul de intervenție asupra datelor sau dreptul de opoziție justificată, prin transmiterea unei cereri scrise, datate și semnate către Uniunea Salvați România, la adresa de email <a href="mailto:alegeri@usr.ro">alegeri@usr.ro</a>.</small>
                  <button class="btn btn-default" type="submit" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'inscriere_delegat')">
                    <span class="glyphicon glyphicon-menu-right"></span>
                    Mă înscriu pentru alegeri corecte!
                  </button>
                  <span class="spinner" aria-hidden="true"></span>
                </form>
                <div class="alert alert-success hidden" role="alert">
                  <strong>Felicitări!</strong>
                  Solicitarea de înscriere a fost trimisă cu succes.
                </div>
                <div class="alert alert-danger hidden" role="alert">
                  <strong>Atenție!</strong>
                  Solicitarea de înscriere nu a fost trimisă, încercați din nou.
                </div>
              </div>
            </li>
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-distribuie.png" alt="Spune-le familiei și prietenilor!">
              </div>
              <div class="media-body">
                <h3 class="media-heading">Spune-le familiei și prietenilor!</h3>
                <p>Ne trebuie câți mai mulți reprezentanți și delegați care să supravegheze procesul de votare, pentru a reduce tenativele de fraudă electorală! Te rugăm să vorbești cu prietenii, familia și vecinii să completeze și ei formularul. Dacă noi îi putem observa, ei nu ne mai pot frauda!</p>
                <p>
                  <a class="btn btn-facebook" href="https://www.facebook.com/sharer.php?u=https://usr.ro/alegeri/" target="_blank">
                    <img src="assets/app/img/logo-facebook-inverted.png" alt="Facebook">
                    Distribuie
                  </a>
                </p>
              </div>
            </li>
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-intrebari.png" alt="Întrebări frecvente">
              </div>
              <div class="media-body">
                <h3 class="media-heading">Întrebări frecvente</h3>
                <dl>
                  <dt>Trebuie să fiu membru al Uniunii Salvați România pentru a fi reprezentant sau delegat?</dt>
                  <dd>Nu, acest lucru nu este obligatoriu.</dd>
                </dl>
                <dl>
                  <dt>Ce putere are un reprezentant în secția de vot? Dar un delegat?</dt>
                  <dd>Principala diferență dintre reprezentant și delegat este aceea că reprezentantul participă la operațiunile biroului electoral al secției de votare (având calitatea de membru al biroului), în timp ce delegatul doar asistă la operațiunile biroului electoral al secției de votare. Atât reprezentantul, cât și delegatul au dreptul de a sesiza (în scris) președintele biroului secției de votare cu privire la nereguli, iar președintele biroului secției de votare trebuie să soluționeze sesizarea. În plus față de delegați, legea conferă reprezentanților dreptul de a contesta identitatea persoanei care se prezintă la vot.</dd>
                </dl>
                <dl>
                  <dt>Reprezentantul poate participa la operațiunile mai multor secții de votare? Delegatul poate asista la operațiunile mai multor secții de votare?</dt>
                  <dd>Nu. Reprezentantul poate participa doar la operațiunile din secția de votare în care a fost desemnat, iar delegatul poate asista doar la operațiunile din secția de votare pentru care a fost acreditat de către biroul electoral de circumscripție.
                  </dd>
                </dl>
                <dl>
                  <dt>Sunt reprezentant. Dacă nu mai reușesc să ajung în biroul secției de vot pe 11 decembrie?</dt>
                  <dd>Reprezentantul are <em>obligația legală</em> de a participa la activitatea biroului electoral al secției de votare din care face parte (în conformitate cu dispozițiile art. 98 din <a href="http://legislatie.just.ro/Public/DetaliiDocument/170037" target="_blank">Legea nr. 208/2015</a>). Neparticiparea poate sa atragă o sancțiune conform art. 99 (alin. 1), între 1.500-4.500 lei.</dd>
                </dl>
                <dl>
                  <dt>De unde și când îmi iau indemnizația după ziua votului?</dt>
                  <dd>
                    <p>Reprezentantul va afla, de la președintele biroului electoral al secției de votare, detalii privind locul și data la care își va primi indemnizația. <a href="http://legeaz.net/monitorul-oficial-691-2016/hg-637-2016-cheltuieli-pregatire-organizare-alegeri-senat-cdep-2016" target="_blank">H.G. nr. 637/2016</a> prevede că plata indemnizațiilor și drepturilor cuvenite membrilor birourilor electorale ale secțiilor de votare se face de către instituțiile prefectului sau Ministerul Afacerilor Externe, după caz.</p>
                    <p> Membrii birourilor electorale ale secțiilor de votare primesc din partea statului câte o indemnizație de 65 de lei pentru fiecare zi de activitate, dar nu mai mult de 3 zile (prin zi de activitate se înțelege munca desfășurată pe parcursul unei zile calendaristice, indiferent de numărul de ore prestate, dar nu mai puțin de 6 ore pe zi). Membrii birourilor electorale ale secțiilor de votare din străinătate primesc în plus 150 de lei pentru fiecare zi de activitate, tot din partea statului. </p>
                  </dd>
                </dl>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
            <div class="panel-body">
              <div class="media">
                <div class="media-body">
                  <p>Candidații Uniunii Salvați România au nevoie de suportul nostru, al tuturor. Ne așteaptă <strong>o campanie foarte grea</strong>, pe care nu putem să o câștigăm decât împreună!</p>
                  <p>Ajută-ne să intrăm în Parlament, acolo unde se decid lucrurile cele mai importante pentru țară, pentru a te reprezenta oameni cu adevărat interesați de a schimba în bine România. Mulțumim!</p>
                </div>
                <div class="media-right media-middle">
                  <a class="btn btn-default" href="https://usr.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'doneaza')">
                    <span class="glyphicon glyphicon-menu-right"></span>
                    Donează acum
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="follow-us">
            <p class="text-muted">Urmărește-ne și pe:</p>
            <ul class="list-inline">
              <li>
                <a class="facebook" href="https://www.facebook.com/Uniunea-Salva%C8%9Bi-Rom%C3%A2nia-1058116737612843/" target="_blank">
                  <img src="assets/app/img/logo-facebook.png" alt="Facebook">
                  Facebook
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="social-media">
      <a class="facebook" href="https://www.facebook.com/sharer.php?u=https://usr.ro/alegeri/" target="_blank">
        <img src="assets/app/img/logo-facebook-inverted.png" alt="Facebook">
        Distribuie
      </a>
    </div>
    <script><?php printf('remoteData = %s;', json_encode($data)); ?></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/vendor/jquery/jquery.min.js"><\/script>')</script>
    <script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
    <script src="assets/vendor/jquery-validation/localization/messages_ro.js"></script>
    <script src="assets/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/vendor/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/app/js/application.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?hl=ro&onload=recaptchaInit&render=explicit"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-30235099-2', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
