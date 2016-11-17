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
      <div class="container">
        <div class="media media-brand">
          <div class="media-left">
            <a href="https://usr.ro/alegeri/">
              <img class="media-object" src="assets/app/img/logo.png" alt="USR">
            </a>
          </div>
          <div class="media-body">
            <h1>Asigură corectitudinea procesului electoral din ziua votului!</h1>
          </div>
          <div class="media-right">
            <a class="btn btn-inverted" href="https://www.nicusordan.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'doneaza')">Donează</a>
          </div>
        </div>
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
              <div class="panel-body">
                <p>Cu ajutorul tău am strans 350.781 de semnături! Am selectat candidați onești și competenți, iar pe 11 decembrie vom fi pe buletinele de vot în toate județele din România.</p>
                <p>În ziua alegerilor, este important să ne asigurăm că procesul electoral va fi unul corect în <strong>secțiile de votare</strong>. Dacă noi îi putem observa, ei nu ne mai pot frauda!</p>
              </div>
              <div class="panel-footer">
                <a class="btn btn-default" href="#inscriere" data-trigger="scroll" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'scroll_formular')">
                  <span class="glyphicon glyphicon-menu-right"></span>
                  Înscrie-te ca reprezentant/delegat
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
                <h3 class="media-heading">Înscrie-te ca reprezentant sau delegat</h3>
                <p>Vreau să fiu:</p>
                <ul class="nav nav-pills nav-justified" role="tablist">
                  <li role="presentation" class="active"><a href="#reprezentant" aria-controls="reprezentant" role="tab" data-toggle="tab">Reprezentant</a></li>
                  <li role="presentation"><a href="#delegat" aria-controls="delegat" role="tab" data-toggle="tab">Delegat</a></li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="reprezentant">
                    <form class="form-reprezentant" method="post">
                      <input type="hidden" name="tip" value="reprezentant">
                      <p><strong>Reprezentantul</strong> are <em>obligaţia legală</em> de a participa la activitatea biroului electoral al secţiei de votare din care face parte (în conformitate cu dispoziţiile art. 98 din <a href="http://legislatie.just.ro/Public/DetaliiDocument/170037" target="_blank">Legea nr. 208/2015</a>). Trebuie să fie prezent în secţia de votare atât în:</p>
                      <ul class="list list-bulleted">
                        <li><strong>preziua alegerilor</strong> (10 decembrie 2016) la ora 18:00, cât şi în</li>
                        <li><strong>ziua alegerilor</strong> (11 decembrie 2016) de la ora 6:00 până la momentul întocmirii proceselor-verbale de constatare a rezultatelor votării şi a dosarelor cu rezultatele votării din secţia respectivă (aprox. ora 12 noaptea).</li>
                      </ul>
                      <p>Potrivit dispoziţiilor H.G. nr. 637/2016, va primi din partea statului o <strong>indemnizaţie de 65 de lei</strong> pentru fiecare zi de activitate, dar nu mai mult de 3 zile (prin zi de activitate se înţelege munca desfăşurată pe parcursul unei zile calendaristice, indiferent de numărul de ore prestate, dar nu mai puţin de 6 ore pe zi).</p>
                      <p><strong>Termen limită înscriere:</strong> <mark>23 noiembrie</mark></p>
                      <div class="checkbox">
                        <label class="control-label">
                          <input type="checkbox" name="delegat" checked>
                          Dacă nu voi fi desemnat ca reprezentant, sunt de acord să fiu acreditat ca delegat;
                        </label>
                      </div>
                      <div class="checkbox required">
                        <label class="control-label">
                          <input type="checkbox" name="confirmare" required>
                          Confirm pe propria răspundere că sunt cetăţean român cu drept de vot şi nu sunt candidat în alegeri, soţ/soţie, rudă sau afin până la gradul al doilea inclusiv cu vreunul dintre candidaţii în alegeri (<a href="#candidati" data-toggle="modal" role="button">vezi toți candidații Uniunii Salvați România</a>)
                        </label>
                      </div>
                      <p>Completează următoarele date întocmai ca în actul de identitate:</p>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group required">
                            <label class="control-label" for="nume-reprezentant">Nume de familie:</label>
                            <input type="text" class="form-control" id="nume-reprezentant" name="nume" placeholder="Popescu" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group required">
                            <label class="control-label" for="prenume-reprezentant">Prenume:</label>
                            <input type="text" class="form-control" id="prenume-reprezentant" name="prenume" placeholder="Andrei" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group required">
                        <label class="control-label" for="cnp-reprezentant">CNP:</label>
                        <input type="text" class="form-control" id="cnp-reprezentant" name="cnp" placeholder="SAALLZZJJNNNC" required>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group required">
                            <label class="control-label" for="serie-reprezentant">Serie act identitate:</label>
                            <input type="text" class="form-control" id="serie-reprezentant" name="serie" placeholder="XY" required>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="form-group required">
                            <label class="control-label" for="numar-reprezentant">Număr act identitate:</label>
                            <input type="text" class="form-control" id="numar-reprezentant" name="numar" placeholder="123456" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group required">
                        <label class="control-label" for="adresa-reprezentant">Domiciliul din actul de identate / Adresa de reşedinţa (din viza de flotant) în cazul în care doresc să fiu reprezentant în secţia de votare la adresa de reşedinţa:</label>
                        <textarea class="form-control" id="adresa-reprezentant" name="adresa" rows="3" placeholder="Str. Carol Davila Nr. 91, Parter, Ap. 1, Sector 5, Bucureşti" required></textarea>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group required">
                            <label class="control-label" for="regiune-reprezentant">Județ:</label>
                            <select class="form-control" id="regiune-reprezentant" name="regiune" required>
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
                            <label class="control-label" for="tara-reprezentant">Țara:</label>
                            <select class="form-control" id="tara-reprezentant" name="tara" required>
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
                      <div class="form-group hidden">
                        <label class="control-label" for="localitate-reprezentant">Localitatea unde doresc să activez, în judeţul din actul de identitate:</label>
                        <input type="text" class="form-control" id="localitate-reprezentant" name="localitate" placeholder="Sunt de acord să activez și în altă localitate din județ" aria-describedby="help-localitate-reprezentant">
                      </div>
                      <p class="help-block hidden" id="help-localitate-reprezentant">Prin necompletare sunt de acord să activez și în altă localitate din județ.</p>
                      <div class="form-group required">
                        <label class="control-label" for="telefon-reprezentant">Număr de telefon:</label>
                        <input type="tel" class="form-control" id="telefon-reprezentant" name="telefon" placeholder="0712345678" required>
                      </div>
                      <div class="form-group required">
                        <label class="control-label" for="email-reprezentant">E-mail (pentru fiecare înscriere obligatoriu adresă separată):</label>
                        <input type="email" class="form-control" id="email-reprezentant" name="email" placeholder="andrei.popescu@usr.ro" required>
                      </div>
                      <div class="checkbox">
                        <label class="control-label">
                          <input type="checkbox" name="acord" checked>
                          Sunt de acord să primesc ocazional newslettere din partea Uniunii Salvați România
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="observatii-reprezentant">Observații:</label>
                        <textarea class="form-control" id="observatii-reprezentant" name="observatii" rows="3" placeholder="" aria-describedby="help-observatii-reprezentant"></textarea>
                      </div>
                      <p class="help-block" id="help-observatii-reprezentant"></p>
                      <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LcJvQsUAAAAANyRcfLvhPMuS6tp9Z2ngT8TLUlg"></div>
                        <input type="hidden" name="recaptcha">
                      </div>
                      <small class="help-block">Prin completarea prezentului formular, persoana vizată își exprimă consimțământul pentru prelucrarea datelor sale cu caracter personal de către Uniunea Salvați România, în scopul desemnării de reprezentanți si delegați în secțiile de votare organizate pentru alegerile parlamentare din data de 11 decembrie 2016, și pentru comunicarea acestor date cu caracter personal către birourile și oficiile electorale competente, în conformitate cu dispozițiile art. 15 alin. (5), art. 89 alin. (11) din  <a href="http://legislatie.just.ro/Public/DetaliiDocument/170037" target="_blank">Legea nr. 208/2015</a> privind alegerea Senatului și a Camerei Deputaților, și art. 5 din Decizia Biroului Electoral Central nr. 73D/21.10.2016 privind unele măsuri pentru buna organizare și desfășurare a alegerilor pentru Senat și Camera Deputaților din data de 11 decembrie 2016. Nefurnizarea datelor cu caracter personal cerute prin prezentul formular atrage imposibilitatea desemnării persoanei vizate ca reprezentant sau delegat al Uniunii Salvați România în secțiile de votare organizate pentru alegerile parlamentare din data de 11 decembrie 2016. În conformitate cu dispozițiile <a href="http://legislatie.just.ro/Public/DetaliiDocument/32733" target="_blank">Legii nr. 677/2001</a> pentru protecția persoanelor cu privire la prelucrarea datelor cu caracter personal și libera circulație a acestor date, persoana vizată își poate exercita dreptul de acces la date, dreptul de intervenție asupra datelor sau dreptul de opoziție justificată, prin transmiterea unei cereri scrise, datate și semnate către Uniunea Salvați România, la adresa de email <a href="mailto:alegeri@usr.ro">alegeri@usr.ro</a>.</small>
                      <button class="btn btn-default" type="submit" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'inscriere_reprezentant')">
                        <span class="glyphicon glyphicon-menu-right"></span>
                        Vreau alegeri corecte!
                      </button>
                      <span class="spinner" aria-hidden="true"></span>
                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="delegat">
                    <form class="form-delegat" method="post">
                      <input type="hidden" name="tip" value="delegat">
                      <p>În plus faţă de alegerile locale din acest an, <strong>delegatul</strong> poate asista la <em>toate</em> operaţiunile electorale dintr-o secţie de votare în ziua alegerilor (11 decembrie 2016), începând cu ora 6:00 şi terminând cu momentul întocmirii proceselor-verbale de constatare a rezultatelor votării şi a dosarelor cu rezultatele votării din secţia respectivă (aprox. ora 12 noaptea).</p>
                      <p>Aşadar, acesta poate asista inclusiv la operaţiunea de numărare a voturilor din secţia respectivă (operaţiune care începe în ziua alegerilor la ora 21:00, după închiderea localului secţiei de votare).</p>
                      <p>Poate staţiona în spaţiul stabilit în sala de votare de către preşedintele biroului electoral al secţiei de votare şi are dreptul de a sesiza în scris preşedintele biroului electoral în cazul constatării unor neregularităţi. Nu primeşte indemnizaţie din partea statului.</p>
                      <p><strong>Termen limită înscriere:</strong> <mark>2 decembrie</mark></p>
                      <p>Completează următoarele date întocmai ca în actul de identitate:</p>
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
                        <label class="control-label" for="adresa-delegat">Domiciliul din actul de identate / Adresa de reşedinţa (din viza de flotant) în cazul în care doresc să fiu reprezentant în secţia de votare la adresa de reşedinţa:</label>
                        <textarea class="form-control" id="adresa-delegat" name="adresa" rows="3" placeholder="Str. Carol Davila Nr. 91, Parter, Ap. 1, Sector 5, Bucureşti" required></textarea>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group required">
                            <label class="control-label" for="regiune-delegat">Județ:</label>
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
                      <div class="form-group hidden">
                        <label class="control-label" for="localitate-delegat">Localitatea unde doresc să activez, în judeţul din actul de identitate:</label>
                        <input type="text" class="form-control" id="localitate-delegat" name="localitate" placeholder="Sunt de acord să activez și în altă localitate din județ" aria-describedby="help-localitate-delegat">
                      </div>
                      <p class="help-block hidden" id="help-localitate-delegat">Prin necompletare sunt de acord să activez și în altă localitate din județ.</p>
                      <div class="form-group required">
                        <label class="control-label" for="telefon-delegat">Număr de telefon:</label>
                        <input type="tel" class="form-control" id="telefon-delegat" name="telefon" placeholder="0712345678" required>
                      </div>
                      <div class="form-group required">
                        <label class="control-label" for="email-delegat">E-mail (pentru fiecare înscriere obligatoriu adresă separată):</label>
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
                        <textarea class="form-control" id="observatii-delegat" name="observatii" rows="3" placeholder="" aria-describedby="help-observatii-delegat"></textarea>
                      </div>
                      <p class="help-block" id="help-observatii-delegat"></p>
                      <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LcJvQsUAAAAANyRcfLvhPMuS6tp9Z2ngT8TLUlg"></div>
                        <input type="hidden" name="recaptcha">
                      </div>
                      <small class="help-block">Prin completarea prezentului formular, persoana vizată își exprimă consimțământul pentru prelucrarea datelor sale cu caracter personal de către Uniunea Salvați România, în scopul desemnării de reprezentanți si delegați în secțiile de votare organizate pentru alegerile parlamentare din data de 11 decembrie 2016, și pentru comunicarea acestor date cu caracter personal către birourile și oficiile electorale competente, în conformitate cu dispozițiile art. 15 alin. (5), art. 89 alin. (11) din  <a href="http://legislatie.just.ro/Public/DetaliiDocument/170037" target="_blank">Legea nr. 208/2015 </a>privind alegerea Senatului și a Camerei Deputaților, și art. 5 din Decizia Biroului Electoral Central nr. 73D/21.10.2016 privind unele măsuri pentru buna organizare și desfășurare a alegerilor pentru Senat și Camera Deputaților din data de 11 decembrie 2016. Nefurnizarea datelor cu caracter personal cerute prin prezentul formular atrage imposibilitatea desemnării persoanei vizate ca reprezentant sau delegat al Uniunii Salvați România în secțiile de votare organizate pentru alegerile parlamentare din data de 11 decembrie 2016. În conformitate cu dispozițiile <a href="http://legislatie.just.ro/Public/DetaliiDocument/32733" target="_blank">Legii nr. 677/2001</a> pentru protecția persoanelor cu privire la prelucrarea datelor cu caracter personal și libera circulație a acestor date, persoana vizată își poate exercita dreptul de acces la date, dreptul de intervenție asupra datelor sau dreptul de opoziție justificată, prin transmiterea unei cereri scrise, datate și semnate către Uniunea Salvați România, la adresa de email <a href="mailto:alegeri@usr.ro">alegeri@usr.ro</a>.</small>
                      <button class="btn btn-default" type="submit" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'inscriere_delegat')">
                        <span class="glyphicon glyphicon-menu-right"></span>
                        Mă înscriu pentru alegeri corecte!
                      </button>
                    </form>
                  </div>
                </div>
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
                <img class="media-object" src="assets/app/img/icon-intrebari.png" alt="Întrebări frecvente">
              </div>
              <div class="media-body">
                <h3 class="media-heading">Întrebări frecvente</h3>
                <dl>
                  <dt>Trebuie să fiu membru al Uniunii Salvați România pentru a fi reprezentant sau delegat?</dt>
                  <dd>Nu, acest lucru nu este obligatoriu.</dd>
                </dl>
                <dl>
                  <dt>Ce putere are un reprezentant în secţia de vot? Dar un delegat?</dt>
                  <dd>Principala diferență dintre reprezentant și delegat este aceea că reprezentantul participă la operațiunile biroului electoral al secţiei de votare (având calitatea de membru al biroului), în timp ce delegatul doar asistă la operațiunile biroului electoral al secţiei de votare. Atât reprezentantul, cât și delegatul au dreptul de a sesiza (în scris) președintele biroului secției de votare cu privire la nereguli, iar președintele biroului secției de votare trebuie să soluționeze sesizarea. În plus față de delegați, legea conferă reprezentanților dreptul de a contesta identitatea persoanei care se prezintă la vot.</dd>
                </dl>
                <dl>
                  <dt>Ca reprezentant sau delegat, trebuie să stau într-o secţie de vot anume sau pot să participe la operaţiunile mai multor secţii de votare?</dt>
                  <dd>Ambii vor putea monitoriza procesul electoral doar în secţia de vot unde au acreditare. Reprezentantul are <em>obligaţia legală</em> să fie în secţia de votare unde a fost desemnat (vezi mai jos întrebarea următoare).<br><br>
                      Delegatul nu are această obligaţie legală, dar poate asista doar la operaţiunile din secţia de votare pentru care a fost acreditat (în conformitate cu dispoziţiile art. 90 alin. (3) din <a href="http://legislatie.just.ro/Public/DetaliiDocument/170037" target="_blank">Legea nr. 208/2015</a>).
                  </dd>
                </dl>
                <dl>
                  <dt>Sunt reprezentant. Dacă nu mai reușesc să ajung în biroul secției de vot pe 11 decembrie?</dt>
                  <dd>Reprezentantul are <em>obligaţia legală</em> de a participa la activitatea biroului electoral al secţiei de votare din care face parte (în conformitate cu dispoziţiile art. 98 din <a href="http://legislatie.just.ro/Public/DetaliiDocument/170037" target="_blank">Legea nr. 208/2015</a>). Neparticiparea poate sa atragă o sancțiune conform art. 99 (alin. 1), între 1.500-4.500 lei.</dd>
                </dl>
                <dl>
                  <dt>De unde şi când îmi iau indemnizaţia după ziua votului?</dt>
                  <dd>
                    <p>Reprezentanţii vor afla locul şi data când îşi vor primi indemnizaţia de la preşedintele secţiei de votare. <a href="http://legeaz.net/monitorul-oficial-691-2016/hg-637-2016-cheltuieli-pregatire-organizare-alegeri-senat-cdep-2016" target="_blank">H.G. nr. 637/2016</a> prevede doar următoarele:</p>
                    <p>Art.5 – (2) La alegerile pentru Senat şi Camera Deputaţilor din anul 2016, Ministerul Afacerilor Interne asigură, prin bugetele instituţiilor prefectului, sumele necesare acoperirii următoarelor categorii de cheltuieli:</p>
                    <p>a) indemnizaţiile membrilor birourilor electorale de circumscripţie, ai oficiilor electorale şi ai birourilor electorale ale secţiilor de votare, precum şi indemnizaţiile pentru cheltuieli de protocol ale acestora.</p>
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
                  <a class="btn btn-default" href="https://www.nicusordan.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'doneaza')">
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
    <div class="modal fade" id="candidati" tabindex="-1" role="dialog" aria-labelledby="candidati-label">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Închide"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="candidati-label">Candidații Uniunii Salvați România la alegerile parlamentare din 11 decembrie 2016</h4>
          </div>
          <div class="modal-body">
            <div class="row row-three-columns">
              <div class="col-sm-6 col-md-4">Abu-Amra Lavinia</div>
              <div class="col-sm-6 col-md-4">Adumitresei Adrian</div>
              <div class="col-sm-6 col-md-4">Afteni Mitica</div>
              <div class="col-sm-6 col-md-4">Alexandrescu Vlad-Tudor</div>
              <div class="col-sm-6 col-md-4">Alexandru Valentin</div>
              <div class="col-sm-6 col-md-4">Alexandru Dragoș</div>
              <div class="col-sm-6 col-md-4">Almăşan Vlad-Alexandru</div>
              <div class="col-sm-6 col-md-4">Amza Alexandru-Cristian</div>
              <div class="col-sm-6 col-md-4">Amzăr Daniel-Alexandru</div>
              <div class="col-sm-6 col-md-4">Anastasiu Mihnea</div>
              <div class="col-sm-6 col-md-4">Andrei Otilia-Florența</div>
              <div class="col-sm-6 col-md-4">Andrei Ioan-Tăzvan</div>
              <div class="col-sm-6 col-md-4">Andrusceac Antonio</div>
              <div class="col-sm-6 col-md-4">Anghel Șerban-Laurențiu</div>
              <div class="col-sm-6 col-md-4">Angheluţă Daniel-Flori</div>
              <div class="col-sm-6 col-md-4">Anton Gheorghe</div>
              <div class="col-sm-6 col-md-4">Anton Silviu-Cristian</div>
              <div class="col-sm-6 col-md-4">Apostol Lucian</div>
              <div class="col-sm-6 col-md-4">Apostol Daniel Gheorghe</div>
              <div class="col-sm-6 col-md-4">Ardelean Cosmin-Vasile</div>
              <div class="col-sm-6 col-md-4">Arghirescu Florin</div>
              <div class="col-sm-6 col-md-4">Arsu Alin-Ionuț</div>
              <div class="col-sm-6 col-md-4">Aspru Georgiana</div>
              <div class="col-sm-6 col-md-4">Bădescu Miruna-Mioara</div>
              <div class="col-sm-6 col-md-4">Badiu Călin-Claudiu</div>
              <div class="col-sm-6 col-md-4">Bagaian-Nicula Iulia-Andrea</div>
              <div class="col-sm-6 col-md-4">Băilă Ciprian</div>
              <div class="col-sm-6 col-md-4">Băltăţescu Sînziana</div>
              <div class="col-sm-6 col-md-4">Balaci Silviu</div>
              <div class="col-sm-6 col-md-4">Balan Marius-Romeo</div>
              <div class="col-sm-6 col-md-4">Băloi Ionuț-Cosmin</div>
              <div class="col-sm-6 col-md-4">Balota Raul Stelian</div>
              <div class="col-sm-6 col-md-4">Baltatanu Minodora-Ioana</div>
              <div class="col-sm-6 col-md-4">Baniță Ileana-Monica</div>
              <div class="col-sm-6 col-md-4">Baraitaru Dragoș</div>
              <div class="col-sm-6 col-md-4">Bărănescu Alice-Daniela</div>
              <div class="col-sm-6 col-md-4">Barbu George Daniel</div>
              <div class="col-sm-6 col-md-4">Barbu Mirela-Maria</div>
              <div class="col-sm-6 col-md-4">Barna Ilie-Dan</div>
              <div class="col-sm-6 col-md-4">Barz Marius-Costel</div>
              <div class="col-sm-6 col-md-4">Belei Traian</div>
              <div class="col-sm-6 col-md-4">Benga Tudor</div>
              <div class="col-sm-6 col-md-4">Bența Marin-Mihai</div>
              <div class="col-sm-6 col-md-4">Berca Aristica</div>
              <div class="col-sm-6 col-md-4">Birtaș David</div>
              <div class="col-sm-6 col-md-4">Bîscă Vasile Alin</div>
              <div class="col-sm-6 col-md-4">Bîzgan-Gayral Oana-Mioara</div>
              <div class="col-sm-6 col-md-4">Boanta Dan</div>
              <div class="col-sm-6 col-md-4">Bob Virgil-Marius</div>
              <div class="col-sm-6 col-md-4">Bocanet Andreea</div>
              <div class="col-sm-6 col-md-4">Bodescu Constantin-Dinu</div>
              <div class="col-sm-6 col-md-4">Bogdan Gheorghe</div>
              <div class="col-sm-6 col-md-4">Boholțeanu Liliana</div>
              <div class="col-sm-6 col-md-4">Boholțeanu Alin Gruia</div>
              <div class="col-sm-6 col-md-4">Bolea Mihai</div>
              <div class="col-sm-6 col-md-4">Boloșteanu Carmen-Victoria</div>
              <div class="col-sm-6 col-md-4">Boloveschi Radu-Mihai</div>
              <div class="col-sm-6 col-md-4">Bora Cătălin Andrei</div>
              <div class="col-sm-6 col-md-4">Borca Ion-Tiberiu</div>
              <div class="col-sm-6 col-md-4">Borțoi Manuel</div>
              <div class="col-sm-6 col-md-4">Borz Horea-Cristian</div>
              <div class="col-sm-6 col-md-4">Botea Petre Claudiu</div>
              <div class="col-sm-6 col-md-4">Botescu Catalin</div>
              <div class="col-sm-6 col-md-4">Botez Mihai-Catalin</div>
              <div class="col-sm-6 col-md-4">Bran Romeo</div>
              <div class="col-sm-6 col-md-4">Bratosin Adrian-Paul</div>
              <div class="col-sm-6 col-md-4">Bratu Ionică-Ovidiu</div>
              <div class="col-sm-6 col-md-4">Bratu Silviu</div>
              <div class="col-sm-6 col-md-4">Bruteanu Filip-Cristian</div>
              <div class="col-sm-6 col-md-4">Bucur Alexandru-Emil</div>
              <div class="col-sm-6 col-md-4">Bucur Lucian-Florin</div>
              <div class="col-sm-6 col-md-4">Buiuc Alexandru</div>
              <div class="col-sm-6 col-md-4">Bulai Iulian</div>
              <div class="col-sm-6 col-md-4">Bulbuc Ana-Maria</div>
              <div class="col-sm-6 col-md-4">Bulfon Cristian-Laurenţiu</div>
              <div class="col-sm-6 col-md-4">Bumbar Marian</div>
              <div class="col-sm-6 col-md-4">Burcea Adrian-Ion</div>
              <div class="col-sm-6 col-md-4">Burcescu George-Mugurel</div>
              <div class="col-sm-6 col-md-4">Burdușa Petre-Mircea</div>
              <div class="col-sm-6 col-md-4">Burlibașa Adrian-Cristian</div>
              <div class="col-sm-6 col-md-4">Burloiu Grigore-Alexandru</div>
              <div class="col-sm-6 col-md-4">Buscianu Bogdan-Nicolae</div>
              <div class="col-sm-6 col-md-4">Butnariu Ionut</div>
              <div class="col-sm-6 col-md-4">Cadar Mariana-Ioana</div>
              <div class="col-sm-6 col-md-4">Călinescu Marius Florian</div>
              <div class="col-sm-6 col-md-4">Cardoș Valer</div>
              <div class="col-sm-6 col-md-4">Cateliu Gabriel</div>
              <div class="col-sm-6 col-md-4">Ceapă Răzvan-Daniel</div>
              <div class="col-sm-6 col-md-4">Cepraga Florin</div>
              <div class="col-sm-6 col-md-4">Cernat Silviu Nicolaie</div>
              <div class="col-sm-6 col-md-4">Cernătescu Izabela Maria</div>
              <div class="col-sm-6 col-md-4">Cetean Emil</div>
              <div class="col-sm-6 col-md-4">Chereji Mihai Nicolae</div>
              <div class="col-sm-6 col-md-4">Cheru Cristian</div>
              <div class="col-sm-6 col-md-4">Chichirău Cosette-Paula</div>
              <div class="col-sm-6 col-md-4">Chilea Nicolae</div>
              <div class="col-sm-6 col-md-4">Chiorean Ovidiu</div>
              <div class="col-sm-6 col-md-4">Chira Maria-Magdalena</div>
              <div class="col-sm-6 col-md-4">Chiricuță Ion</div>
              <div class="col-sm-6 col-md-4">Chirilă Radu Ioan</div>
              <div class="col-sm-6 col-md-4">Chitaș Emil</div>
              <div class="col-sm-6 col-md-4">Ciobanu Elena-Simona</div>
              <div class="col-sm-6 col-md-4">Ciocan Paul</div>
              <div class="col-sm-6 col-md-4">Ciocîrlan Laurentiu Constantin</div>
              <div class="col-sm-6 col-md-4">Ciorcaș Cristian-Dumitru</div>
              <div class="col-sm-6 col-md-4">Ciornei Radu-Tudor</div>
              <div class="col-sm-6 col-md-4">Ciovică Maria Adelina</div>
              <div class="col-sm-6 col-md-4">Cirjan Nicoleta</div>
              <div class="col-sm-6 col-md-4">Cîrstea Adrian-Ștefan</div>
              <div class="col-sm-6 col-md-4">Ciucă Florin Daniel</div>
              <div class="col-sm-6 col-md-4">Ciucu Andrei-Sandu</div>
              <div class="col-sm-6 col-md-4">Ciulinaru Dragoș-Remus</div>
              <div class="col-sm-6 col-md-4">Ciuraru Gabriel</div>
              <div class="col-sm-6 col-md-4">Ciurea Alexandru</div>
              <div class="col-sm-6 col-md-4">Ciurea Vasile</div>
              <div class="col-sm-6 col-md-4">Clapan Cristian-Stefan</div>
              <div class="col-sm-6 col-md-4">Clem Camelia</div>
              <div class="col-sm-6 col-md-4">Cococi Maria</div>
              <div class="col-sm-6 col-md-4">Colceriu Daiana</div>
              <div class="col-sm-6 col-md-4">Coliban Allen</div>
              <div class="col-sm-6 col-md-4">Constantin Mihai</div>
              <div class="col-sm-6 col-md-4">Cornea Eugen-Ioan</div>
              <div class="col-sm-6 col-md-4">Corui Georgina-Adiela</div>
              <div class="col-sm-6 col-md-4">Cosman Oana-Eva</div>
              <div class="col-sm-6 col-md-4">Coste Dragoș-Ioan</div>
              <div class="col-sm-6 col-md-4">Costea Ioan-Cătălin</div>
              <div class="col-sm-6 col-md-4">Cotos Elena</div>
              <div class="col-sm-6 col-md-4">Covaci Andrei</div>
              <div class="col-sm-6 col-md-4">Crăciun Daniela</div>
              <div class="col-sm-6 col-md-4">Crainicu Bogdan</div>
              <div class="col-sm-6 col-md-4">Crican Cezar</div>
              <div class="col-sm-6 col-md-4">Crisan Ileana-Zamfira</div>
              <div class="col-sm-6 col-md-4">Cristea Ștefan-Sebastian</div>
              <div class="col-sm-6 col-md-4">Cristian Adriana</div>
              <div class="col-sm-6 col-md-4">Dabija Gelu</div>
              <div class="col-sm-6 col-md-4">Dan Nicușor Daniel</div>
              <div class="col-sm-6 col-md-4">Dascalu Ciprian</div>
              <div class="col-sm-6 col-md-4">David Daniel</div>
              <div class="col-sm-6 col-md-4">Deac Mihai</div>
              <div class="col-sm-6 col-md-4">Deac Vasile</div>
              <div class="col-sm-6 col-md-4">Dehelean Silviu</div>
              <div class="col-sm-6 col-md-4">Diaconu Ruxandra</div>
              <div class="col-sm-6 col-md-4">Dimiu Irina</div>
              <div class="col-sm-6 col-md-4">Dinică Silvia-Monica</div>
              <div class="col-sm-6 col-md-4">Dinu Adrian-Costel</div>
              <div class="col-sm-6 col-md-4">Dinu Nicoleta-Ramona</div>
              <div class="col-sm-6 col-md-4">Dîrcă George Eduard</div>
              <div class="col-sm-6 col-md-4">Dîrnu Sergiu</div>
              <div class="col-sm-6 col-md-4">Doboș Nicolae Daniel</div>
              <div class="col-sm-6 col-md-4">Dobre Pompiliu-Sever</div>
              <div class="col-sm-6 col-md-4">Dobre Victorița</div>
              <div class="col-sm-6 col-md-4">Dobrescu Anda-Sabena</div>
              <div class="col-sm-6 col-md-4">Dobrovie Matei-Adrian</div>
              <div class="col-sm-6 col-md-4">Dochiliță Dorin Marian</div>
              <div class="col-sm-6 col-md-4">Dogariu-Baciulescu Mircea-Florin</div>
              <div class="col-sm-6 col-md-4">Dohataru Adrian Octavian</div>
              <div class="col-sm-6 col-md-4">Dolângă Luminița</div>
              <div class="col-sm-6 col-md-4">Dolejan Luminița</div>
              <div class="col-sm-6 col-md-4">Drăghici Dragoş-Liviu</div>
              <div class="col-sm-6 col-md-4">Dragu Emil</div>
              <div class="col-sm-6 col-md-4">Drăgușin Răzvan-Sorin</div>
              <div class="col-sm-6 col-md-4">Drulă Cătălin</div>
              <div class="col-sm-6 col-md-4">Duduleanu Octavian-Mihai</div>
              <div class="col-sm-6 col-md-4">Dumitrache Andreea</div>
              <div class="col-sm-6 col-md-4">Dumitrascu Ovidiu-Alexandru</div>
              <div class="col-sm-6 col-md-4">Dumitru Andrei-Alexandru</div>
              <div class="col-sm-6 col-md-4">Dumitru Constantin</div>
              <div class="col-sm-6 col-md-4">Duruș Vlad Emanuel</div>
              <div class="col-sm-6 col-md-4">Duțu Egmont-Claudiu</div>
              <div class="col-sm-6 col-md-4">Duțu Raluca-Manuela</div>
              <div class="col-sm-6 col-md-4">Echert Adrian</div>
              <div class="col-sm-6 col-md-4">Eftimie Anca-Ioana</div>
              <div class="col-sm-6 col-md-4">Eftimie Cornel Adrian</div>
              <div class="col-sm-6 col-md-4">Enache Cosmin Mihai</div>
              <div class="col-sm-6 col-md-4">Ene Stelian-Bogdan</div>
              <div class="col-sm-6 col-md-4">Făgărășanu G. Constantin</div>
              <div class="col-sm-6 col-md-4">Fălcoi Nicu</div>
              <div class="col-sm-6 col-md-4">Fercău-Onofrei Daniel-Nicolae</div>
              <div class="col-sm-6 col-md-4">Findrihan Nuți-Florica</div>
              <div class="col-sm-6 col-md-4">Floarea Andreea-Elena</div>
              <div class="col-sm-6 col-md-4">Flora Alexandru</div>
              <div class="col-sm-6 col-md-4">Floricică Radu</div>
              <div class="col-sm-6 col-md-4">Forgo Irina Anca</div>
              <div class="col-sm-6 col-md-4">Gabor Ioan Emilian</div>
              <div class="col-sm-6 col-md-4">Gaiță Răzvan-Mihai</div>
              <div class="col-sm-6 col-md-4">Gall Zoltan</div>
              <div class="col-sm-6 col-md-4">Găvruș Tiberiu</div>
              <div class="col-sm-6 col-md-4">Geamănă Dragoș</div>
              <div class="col-sm-6 col-md-4">Gheorghe Indra-Natalia</div>
              <div class="col-sm-6 col-md-4">Gheorghe Alexandru</div>
              <div class="col-sm-6 col-md-4">Gheorghe Irina</div>
              <div class="col-sm-6 col-md-4">Gheorghe Vlad-Dan</div>
              <div class="col-sm-6 col-md-4">Gheorghiu Andrei Florin</div>
              <div class="col-sm-6 col-md-4">Gherase Mircea-Octavian</div>
              <div class="col-sm-6 col-md-4">Gherman Radu-Bogdan</div>
              <div class="col-sm-6 col-md-4">Ghica Cristian</div>
              <div class="col-sm-6 col-md-4">Ghinea Cristian</div>
              <div class="col-sm-6 col-md-4">Ghiță Sorin</div>
              <div class="col-sm-6 col-md-4">Gîrbă Mihai</div>
              <div class="col-sm-6 col-md-4">Gligor Ciprian</div>
              <div class="col-sm-6 col-md-4">Gorczynski Leonid-Marian</div>
              <div class="col-sm-6 col-md-4">Gordeș Ioana-Raveca</div>
              <div class="col-sm-6 col-md-4">Goțiu Remus Mihai</div>
              <div class="col-sm-6 col-md-4">Grecu Loredana-Georgina</div>
              <div class="col-sm-6 col-md-4">Grosu Carmen-Angela</div>
              <div class="col-sm-6 col-md-4">Grosu Constantin</div>
              <div class="col-sm-6 col-md-4">Grosu Ioan</div>
              <div class="col-sm-6 col-md-4">Gurlui Silviu-Octavian</div>
              <div class="col-sm-6 col-md-4">Gutium Narcisa-Veronica</div>
              <div class="col-sm-6 col-md-4">Haliţ Tatiana</div>
              <div class="col-sm-6 col-md-4">Harosa Romana</div>
              <div class="col-sm-6 col-md-4">Hudea Rareş</div>
              <div class="col-sm-6 col-md-4">Hurezeanu Adrian Ionuț</div>
              <div class="col-sm-6 col-md-4">Iacob Cezar</div>
              <div class="col-sm-6 col-md-4">Ianculescu Antonio Mircea</div>
              <div class="col-sm-6 col-md-4">Iank Mirela-Elisabeta</div>
              <div class="col-sm-6 col-md-4">Ignătescu Lorena</div>
              <div class="col-sm-6 col-md-4">Ilie Marius-Iulian</div>
              <div class="col-sm-6 col-md-4">Ilie Florian Madalin</div>
              <div class="col-sm-6 col-md-4">Ion Stelian-Cristian</div>
              <div class="col-sm-6 col-md-4">Iordache Mihaela</div>
              <div class="col-sm-6 col-md-4">Iordache Vasile</div>
              <div class="col-sm-6 col-md-4">Iordache Andreea Maria</div>
              <div class="col-sm-6 col-md-4">Iordan Sergiu-Mihai</div>
              <div class="col-sm-6 col-md-4">Istrate Adrian</div>
              <div class="col-sm-6 col-md-4">Istrate Alexandru-Georgian</div>
              <div class="col-sm-6 col-md-4">Iurisniti Cristina-Ionela</div>
              <div class="col-sm-6 col-md-4">Iuțuc Irina</div>
              <div class="col-sm-6 col-md-4">Ivan Florin</div>
              <div class="col-sm-6 col-md-4">Ivan Dan</div>
              <div class="col-sm-6 col-md-4">Ivascu Ion-Octavian</div>
              <div class="col-sm-6 col-md-4">Juglea Ștefan-Ioan</div>
              <div class="col-sm-6 col-md-4">Kiss Elena</div>
              <div class="col-sm-6 col-md-4">Kloyber Siegfried-Daniel</div>
              <div class="col-sm-6 col-md-4">Lazăr Corina-Ioana</div>
              <div class="col-sm-6 col-md-4">Lazarescu Andrei</div>
              <div class="col-sm-6 col-md-4">Lină Nicuşor-Sorin</div>
              <div class="col-sm-6 col-md-4">Loiș Mariana</div>
              <div class="col-sm-6 col-md-4">Lungu Marius</div>
              <div class="col-sm-6 col-md-4">Lungu Dan</div>
              <div class="col-sm-6 col-md-4">Lungu Cătălin-Daniel</div>
              <div class="col-sm-6 col-md-4">Lupan Radu-Constantin</div>
              <div class="col-sm-6 col-md-4">Lupas Ciprian</div>
              <div class="col-sm-6 col-md-4">Lupescu Dumitru</div>
              <div class="col-sm-6 col-md-4">Lupu Mihai</div>
              <div class="col-sm-6 col-md-4">Macavescu Ionuţ</div>
              <div class="col-sm-6 col-md-4">Maierean Mihai-Ilie</div>
              <div class="col-sm-6 col-md-4">Malacia Costel</div>
              <div class="col-sm-6 col-md-4">Mălaiu Anca-Nicoleta</div>
              <div class="col-sm-6 col-md-4">Mandici George-Ciprian</div>
              <div class="col-sm-6 col-md-4">Manole Mihai-Cosmin</div>
              <div class="col-sm-6 col-md-4">Manoliu Dinu-Eduard</div>
              <div class="col-sm-6 col-md-4">Margarint Dorel Gheorghe</div>
              <div class="col-sm-6 col-md-4">Marin Constantin</div>
              <div class="col-sm-6 col-md-4">Marin Ion</div>
              <div class="col-sm-6 col-md-4">Marinac Daniel</div>
              <div class="col-sm-6 col-md-4">Marinescu Şerban</div>
              <div class="col-sm-6 col-md-4">Mark Elod-Miklos</div>
              <div class="col-sm-6 col-md-4">Martin Postumia</div>
              <div class="col-sm-6 col-md-4">Marussi George-Nicolae</div>
              <div class="col-sm-6 col-md-4">Mateescu Oana Marina</div>
              <div class="col-sm-6 col-md-4">Mateescu Silvana-Geanina</div>
              <div class="col-sm-6 col-md-4">Matei Romulus-Eugen</div>
              <div class="col-sm-6 col-md-4">Mehedin Dumitru-Benone</div>
              <div class="col-sm-6 col-md-4">Memet Adnan</div>
              <div class="col-sm-6 col-md-4">Miftode Andrei</div>
              <div class="col-sm-6 col-md-4">Mihăescu Laurențiu-Cosmin</div>
              <div class="col-sm-6 col-md-4">Mihai Catalin</div>
              <div class="col-sm-6 col-md-4">Mihăilă Cătălina</div>
              <div class="col-sm-6 col-md-4">Mihăilă Iulian-Adrian</div>
              <div class="col-sm-6 col-md-4">Mihaltan Horea-Sorin</div>
              <div class="col-sm-6 col-md-4">Mihuț-Costan Carmen</div>
              <div class="col-sm-6 col-md-4">Milcov Adriana-Claudia</div>
              <div class="col-sm-6 col-md-4">Milea Florin</div>
              <div class="col-sm-6 col-md-4">Militaru Elena Rodica</div>
              <div class="col-sm-6 col-md-4">Miloaie Alin</div>
              <div class="col-sm-6 col-md-4">Mîndru Gabriela</div>
              <div class="col-sm-6 col-md-4">Miroiu Dumitru</div>
              <div class="col-sm-6 col-md-4">Mîrzoiu Lucian Constantin</div>
              <div class="col-sm-6 col-md-4">Mitucă Eusebio-Mugurel</div>
              <div class="col-sm-6 col-md-4">Miulescu Lucian-Mihai</div>
              <div class="col-sm-6 col-md-4">Mocanu Ionel</div>
              <div class="col-sm-6 col-md-4">Mocanu Valeriu</div>
              <div class="col-sm-6 col-md-4">Mocanu Mirela-Adina</div>
              <div class="col-sm-6 col-md-4">Moisă Adrian</div>
              <div class="col-sm-6 col-md-4">Moldovan Alexandru-Cosmin</div>
              <div class="col-sm-6 col-md-4">Molnar Radu Iulian</div>
              <div class="col-sm-6 col-md-4">Moraru Andreia-Ligia</div>
              <div class="col-sm-6 col-md-4">Moroianu Mihnea-Petru-Radu</div>
              <div class="col-sm-6 col-md-4">Moș Cristian Alin</div>
              <div class="col-sm-6 col-md-4">Moșteanu Liviu-Ionuț</div>
              <div class="col-sm-6 col-md-4">Munteanu Gabriel</div>
              <div class="col-sm-6 col-md-4">Munteanu Nicolae</div>
              <div class="col-sm-6 col-md-4">Munteanu Teodora</div>
              <div class="col-sm-6 col-md-4">Muscă Elena</div>
              <div class="col-sm-6 col-md-4">Nastasă Petrică-Radu</div>
              <div class="col-sm-6 col-md-4">Năsui Claudiu-Iulius-Gavril</div>
              <div class="col-sm-6 col-md-4">Neagu Denisa-Elena</div>
              <div class="col-sm-6 col-md-4">Neagu Eugen</div>
              <div class="col-sm-6 col-md-4">Necula Ciprian</div>
              <div class="col-sm-6 col-md-4">Nedea Răzvan</div>
              <div class="col-sm-6 col-md-4">Nedelcu Petruța</div>
              <div class="col-sm-6 col-md-4">Negoi Eugen-Remus</div>
              <div class="col-sm-6 col-md-4">Negrea Bogdan-Paul</div>
              <div class="col-sm-6 col-md-4">Negura Vasile-Daniel</div>
              <div class="col-sm-6 col-md-4">Nemu Dragoş Eduard</div>
              <div class="col-sm-6 col-md-4">Nicolaescu Andrei-Cristian</div>
              <div class="col-sm-6 col-md-4">Nicu Lucian</div>
              <div class="col-sm-6 col-md-4">Niculescu Daniel-Constantin</div>
              <div class="col-sm-6 col-md-4">Niculescu Alexandru</div>
              <div class="col-sm-6 col-md-4">Nistea Claudiu-Dan</div>
              <div class="col-sm-6 col-md-4">Nistor Ovidiu Răzvan</div>
              <div class="col-sm-6 col-md-4">Nistor Mircea</div>
              <div class="col-sm-6 col-md-4">Oană Alexandra</div>
              <div class="col-sm-6 col-md-4">Olar Gabriela Carmen</div>
              <div class="col-sm-6 col-md-4">Olei Sandu</div>
              <div class="col-sm-6 col-md-4">Olinca Constantin Cristian</div>
              <div class="col-sm-6 col-md-4">Oprea Leonard</div>
              <div class="col-sm-6 col-md-4">Oprea Doru</div>
              <div class="col-sm-6 col-md-4">Oprinoiu Aurel</div>
              <div class="col-sm-6 col-md-4">Opu Veronica</div>
              <div class="col-sm-6 col-md-4">Oros Eduard-Iosif</div>
              <div class="col-sm-6 col-md-4">Özmen Oana-Marciana</div>
              <div class="col-sm-6 col-md-4">Pacioga Simona-Crenguța</div>
              <div class="col-sm-6 col-md-4">Padurariu Stefan</div>
              <div class="col-sm-6 col-md-4">Pal Nadia-Otilia</div>
              <div class="col-sm-6 col-md-4">Papuc Dragos</div>
              <div class="col-sm-6 col-md-4">Paraschi-Vescu Ovidiu</div>
              <div class="col-sm-6 col-md-4">Pașol Vicențiu</div>
              <div class="col-sm-6 col-md-4">Paulescu Augustina Letiția</div>
              <div class="col-sm-6 col-md-4">Paun Ana Cynthia Ioana</div>
              <div class="col-sm-6 col-md-4">Pauta Razvan</div>
              <div class="col-sm-6 col-md-4">Pavăl Marius</div>
              <div class="col-sm-6 col-md-4">Pavel Constantin</div>
              <div class="col-sm-6 col-md-4">Perneş Gheorghe-Andrei</div>
              <div class="col-sm-6 col-md-4">Pestean Alin</div>
              <div class="col-sm-6 col-md-4">Petrea Virgil-Cristian</div>
              <div class="col-sm-6 col-md-4">Pintea Ana Alexandra</div>
              <div class="col-sm-6 col-md-4">Pîrghie Cristian</div>
              <div class="col-sm-6 col-md-4">Pîrtoacă Sergiu-Bogdan</div>
              <div class="col-sm-6 col-md-4">Plămădeală Radu</div>
              <div class="col-sm-6 col-md-4">Platon Iulian</div>
              <div class="col-sm-6 col-md-4">Pletea Petru</div>
              <div class="col-sm-6 col-md-4">Ploscaru Ioan</div>
              <div class="col-sm-6 col-md-4">Pogăciaș Andrei</div>
              <div class="col-sm-6 col-md-4">Pop Rareș-Tudor</div>
              <div class="col-sm-6 col-md-4">Pop Constantin Irinel</div>
              <div class="col-sm-6 col-md-4">Popa Carmen-Eleniţa</div>
              <div class="col-sm-6 col-md-4">Popescu Tiberiu Alexandru</div>
              <div class="col-sm-6 col-md-4">Popoacă Daniel</div>
              <div class="col-sm-6 col-md-4">Popovici Daniel</div>
              <div class="col-sm-6 col-md-4">Popovici Bogdan</div>
              <div class="col-sm-6 col-md-4">Popovici Ellen</div>
              <div class="col-sm-6 col-md-4">Postăveanu Vasile-Bogdan</div>
              <div class="col-sm-6 col-md-4">Postică Andrei</div>
              <div class="col-sm-6 col-md-4">Preda Ovidiu-Alin</div>
              <div class="col-sm-6 col-md-4">Presadă Florina-Raluca</div>
              <div class="col-sm-6 col-md-4">Prisnel Adrian-Claudiu</div>
              <div class="col-sm-6 col-md-4">Prună Cristina-Mădălina</div>
              <div class="col-sm-6 col-md-4">Purnavel Cătălin</div>
              <div class="col-sm-6 col-md-4">Racu Mihai</div>
              <div class="col-sm-6 col-md-4">Radu Şerban-Mihai</div>
              <div class="col-sm-6 col-md-4">Radu Maria Magdalena</div>
              <div class="col-sm-6 col-md-4">Radulescu Dan-Razvan</div>
              <div class="col-sm-6 col-md-4">Rădulescu Eduard</div>
              <div class="col-sm-6 col-md-4">Răpcău Daniel-Ioan</div>
              <div class="col-sm-6 col-md-4">Reti Cosmin</div>
              <div class="col-sm-6 col-md-4">Robea Ionut-Petru</div>
              <div class="col-sm-6 col-md-4">Rodeanu Bogdan Ionel</div>
              <div class="col-sm-6 col-md-4">Roman Mihaela</div>
              <div class="col-sm-6 col-md-4">Roșiu Victor</div>
              <div class="col-sm-6 col-md-4">Roşu Cristian</div>
              <div class="col-sm-6 col-md-4">Rus-Mițco Ioan-Dorin</div>
              <div class="col-sm-6 col-md-4">Rusu Rareș Gabriel</div>
              <div class="col-sm-6 col-md-4">Rusu Liviu</div>
              <div class="col-sm-6 col-md-4">Rusu Dumitru-Cristian</div>
              <div class="col-sm-6 col-md-4">Rusu Daniela Viorica</div>
              <div class="col-sm-6 col-md-4">Rusu Mihaela-Paula</div>
              <div class="col-sm-6 col-md-4">Sabau Adrian</div>
              <div class="col-sm-6 col-md-4">Sabou Anca-Maria</div>
              <div class="col-sm-6 col-md-4">Sachetti Giusseppe-Rino</div>
              <div class="col-sm-6 col-md-4">Safta Mihaela</div>
              <div class="col-sm-6 col-md-4">Saftiuc Gheorghe</div>
              <div class="col-sm-6 col-md-4">Sandu Simona</div>
              <div class="col-sm-6 col-md-4">Sandu Anca-Elena</div>
              <div class="col-sm-6 col-md-4">Sava Mihăiță</div>
              <div class="col-sm-6 col-md-4">Schuster Christian</div>
              <div class="col-sm-6 col-md-4">Schuster Wilhelm</div>
              <div class="col-sm-6 col-md-4">Scripcaru Cristian</div>
              <div class="col-sm-6 col-md-4">Seidler Cristian-Gabriel</div>
              <div class="col-sm-6 col-md-4">Serban Ioana</div>
              <div class="col-sm-6 col-md-4">Șerban Ionel</div>
              <div class="col-sm-6 col-md-4">Șerban George</div>
              <div class="col-sm-6 col-md-4">Sfărăilă Dan-Mihai</div>
              <div class="col-sm-6 col-md-4">Silitra Alin</div>
              <div class="col-sm-6 col-md-4">Sim Octav-Teodorus</div>
              <div class="col-sm-6 col-md-4">Simion Valentin</div>
              <div class="col-sm-6 col-md-4">Sipoteanu Gabriela</div>
              <div class="col-sm-6 col-md-4">Sirbu Vlad</div>
              <div class="col-sm-6 col-md-4">Staicu Gabriel-Sorin</div>
              <div class="col-sm-6 col-md-4">Stăicuț Cosmin</div>
              <div class="col-sm-6 col-md-4">Stan Ion</div>
              <div class="col-sm-6 col-md-4">Stan Calin</div>
              <div class="col-sm-6 col-md-4">Stana Carmen-Maria</div>
              <div class="col-sm-6 col-md-4">Stanciu Lucian</div>
              <div class="col-sm-6 col-md-4">Stanciu-Viziteu Lucian Daniel</div>
              <div class="col-sm-6 col-md-4">Stancu Ionuț-Cătălin</div>
              <div class="col-sm-6 col-md-4">Ștef Ana</div>
              <div class="col-sm-6 col-md-4">Stefanut Tudor-Petru</div>
              <div class="col-sm-6 col-md-4">Stoian Ovidiu</div>
              <div class="col-sm-6 col-md-4">Suciu Andrei-Nicolae</div>
              <div class="col-sm-6 col-md-4">Suteu Ioan-Florin</div>
              <div class="col-sm-6 col-md-4">Svab Nicolae-Mihai</div>
              <div class="col-sm-6 col-md-4">Țăcălău Irina-Sînziana</div>
              <div class="col-sm-6 col-md-4">Taivan Daniel</div>
              <div class="col-sm-6 col-md-4">Tamas Mihai-Dan</div>
              <div class="col-sm-6 col-md-4">Tamaş Gheorghe</div>
              <div class="col-sm-6 col-md-4">Tărăbuță Marcel-Florin</div>
              <div class="col-sm-6 col-md-4">Țăranu George</div>
              <div class="col-sm-6 col-md-4">Taşcu-Stavre Miroslav-Valeriu</div>
              <div class="col-sm-6 col-md-4">Tatu Mihai</div>
              <div class="col-sm-6 col-md-4">Teleki Dominic David</div>
              <div class="col-sm-6 col-md-4">Tent Mihai</div>
              <div class="col-sm-6 col-md-4">Teșcanu Elena</div>
              <div class="col-sm-6 col-md-4">Tica Leonid-Cristian</div>
              <div class="col-sm-6 col-md-4">Tichindelean Daniel</div>
              <div class="col-sm-6 col-md-4">Toderascu Bogdan-George</div>
              <div class="col-sm-6 col-md-4">Todoca Ioana Mihaela</div>
              <div class="col-sm-6 col-md-4">Todosiu Beniamin</div>
              <div class="col-sm-6 col-md-4">Tofan-Hodorogia Paul</div>
              <div class="col-sm-6 col-md-4">Toma Călin</div>
              <div class="col-sm-6 col-md-4">Toma Giani Cristinel</div>
              <div class="col-sm-6 col-md-4">Tomoiagă Mariana</div>
              <div class="col-sm-6 col-md-4">Tomozăi Gheorghe Lucian</div>
              <div class="col-sm-6 col-md-4">Toth Attila-Lorand</div>
              <div class="col-sm-6 col-md-4">Trandafir Georgeta</div>
              <div class="col-sm-6 col-md-4">Trifan Raoul-Adrian</div>
              <div class="col-sm-6 col-md-4">Trofin Catrinel-Paula</div>
              <div class="col-sm-6 col-md-4">Trofin Magdalena</div>
              <div class="col-sm-6 col-md-4">Trufan Radu Daniel</div>
              <div class="col-sm-6 col-md-4">Truţă Ana Maria</div>
              <div class="col-sm-6 col-md-4">Tudorică Felix-Sava</div>
              <div class="col-sm-6 col-md-4">Tuță-Osman Doina</div>
              <div class="col-sm-6 col-md-4">Ungureanu Emanuel Dumitru</div>
              <div class="col-sm-6 col-md-4">Ungureanu Viorica Mariela</div>
              <div class="col-sm-6 col-md-4">Ungureanu Marius Ionel</div>
              <div class="col-sm-6 col-md-4">Ursoiu Radu</div>
              <div class="col-sm-6 col-md-4">Văcăreanu Ciprian-Constantin</div>
              <div class="col-sm-6 col-md-4">Valache Alexandru Ionuț</div>
              <div class="col-sm-6 col-md-4">Vălean Alexandra Maria</div>
              <div class="col-sm-6 col-md-4">Vasile Maria</div>
              <div class="col-sm-6 col-md-4">Vasilescu Andreea</div>
              <div class="col-sm-6 col-md-4">Vătămănelu Francisc</div>
              <div class="col-sm-6 col-md-4">Velea Florin</div>
              <div class="col-sm-6 col-md-4">Verman Daniela</div>
              <div class="col-sm-6 col-md-4">Vețan Ionuț-Cristian</div>
              <div class="col-sm-6 col-md-4">Viasu Cosmin Cristian</div>
              <div class="col-sm-6 col-md-4">Vintila Dorin-Ionut</div>
              <div class="col-sm-6 col-md-4">Vintilescu George-Lucian</div>
              <div class="col-sm-6 col-md-4">Visloguzov Ramona Sabina Adriana</div>
              <div class="col-sm-6 col-md-4">Vlad Sergiu-Cosmin</div>
              <div class="col-sm-6 col-md-4">Vlad Silviu</div>
              <div class="col-sm-6 col-md-4">Voinea Ionuţ-Alin</div>
              <div class="col-sm-6 col-md-4">Voinea Florin</div>
              <div class="col-sm-6 col-md-4">Vornicu Ciprian</div>
              <div class="col-sm-6 col-md-4">Wagner Irina</div>
              <div class="col-sm-6 col-md-4">Wiener Adrian</div>
              <div class="col-sm-6 col-md-4">Zaharescu Nicoleta Daniela</div>
              <div class="col-sm-6 col-md-4">Zahariea Cătălin</div>
              <div class="col-sm-6 col-md-4">Zainea Cornel</div>
              <div class="col-sm-6 col-md-4">Zaman Adriana-Gabriela</div>
              <div class="col-sm-6 col-md-4">Zamfir Marian</div>
              <div class="col-sm-6 col-md-4">Zavaliche Radu-Mirel</div>
              <div class="col-sm-6 col-md-4">Zdrobiș Cătălin</div>
              <div class="col-sm-6 col-md-4">Zelincă Lucian</div>
              <div class="col-sm-6 col-md-4">Zevedei Eduard</div>
              <div class="col-sm-6 col-md-4">Zinică Daniel</div>
              <div class="col-sm-6 col-md-4">Zvîncă Bogdan-Robert</div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Închide</button>
          </div>
        </div>
      </div>
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
