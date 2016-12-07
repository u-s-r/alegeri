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
    <meta property="og:description" content="Înscrie-te ca delegat ca să asigurăm corectitudinea procesului electoral din ziua votului!">
    <meta property="og:image" content="https://usr.ro/alegeri/assets/app/img/alegeri.jpg?v=1.0.0">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.ico" rel="icon">
    <title>USR &middot; Asigură corectitudinea procesului electoral din ziua votului!</title>
    <link href="https://code.cdn.mozilla.net/fonts/fira.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="assets/vendor/jvectormap/jquery-jvectormap.css" rel="stylesheet">
    <link href="assets/app/css/style.min.css?v=1.0.0" rel="stylesheet">
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
                  <li><a href="https://usr.ro/proiecte-de-guvernare/">Proiecte de guvernare</a></li>
                  <li><a href="https://usr.ro/program/">Program</a></li>
                  <li><a href="https://usr.ro/faq/">Întrebări frecvente</a></li>
                </ul>
              </li>
              <li><a href="https://usr.ro/candidati-alegerile-parlamentare-11-decembrie-2016/">Candidați</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Implică-te
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="https://usr.ro/inscrie-te-ca-voluntar/">Înscrie-te ca voluntar</a></li>
                  <li><a href="https://usr.ro/inscrie-te-ca-membru/">Înscrie-te ca membru</a></li>
                  <li><a href="https://usr.ro/sustine-online/">Susține online</a></li>
                  <li><a href="https://usr.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'doneaza')">Donează</a></li>
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
                <h1 class="panel-title">Îţi mulţumim că ne ajuţi pe 11 decembrie!</h1>
              </div>
              <div class="panel-body">
                <p>Chiar dacă România are o istorie lungă de fraudă electorală, împreună vom încerca să prevenim astfel de practici!</p>
                <p>Află mai jos răspunsurile la întrebările cele mai frecvente despre reprezentanţii sau delegaţii USR în secţiile de votare sau cunoaşte-ne candidaţii!</p>
              </div>
              <div class="panel-footer">
                <a class="btn btn-default" href="https://usr.ro/" target="_blank" onclick="ga('send', 'event', 'pagina_alegeri', 'buton', 'continuam_usr')">
                  <span class="glyphicon glyphicon-menu-right"></span>
                  În sfârşit, ai cu cine!
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
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-intrebari.png" alt="Întrebări frecvente">
              </div>
              <div class="media-body text-left">
                <h3 class="media-heading">Întrebări frecvente</h3>
                <dl class="dl-relaxed">
                  <dt>Unde votez?</dt>
                  <dd>
                    <p>Dacă în ziua votului ești în localitatea de domiciliu, votezi la secția de votare la care ești arondat (o găseşti pe <a href="https://registrulelectoral.ro" target="_blank">Registrul Electoral</a>). Dacă ești plecat din localitate, dar ești în același județ unde ai domiciliul, votezi pe liste suplimentare la orice secție de vot.</p>
                    <p>Dar dacă ești în alt județ decât acela în care este domiciliul tău? Îți trebuie viză de flotant (adresa de reşedinţă)! Cu aceasta vei putea vota şi în localitatea unde eşti flotant (la secția de votare la care ești arondat) sau în cadrul judeţului respectiv (pe liste suplimentare la orice secţie de vot)!</p>
                  </dd>
                </dl>
                <dl class="dl-relaxed">
                  <dt>Ce putere are un reprezentant în secția de vot? Dar un delegat?</dt>
                  <dd>
                    <p>Principala diferență dintre reprezentant și delegat este aceea că reprezentantul participă la operațiunile biroului electoral al secției de votare (având calitatea de membru al biroului), în timp ce delegatul doar asistă la operațiunile biroului electoral al secției de votare.</p>
                    <p>Atât reprezentantul, cât și delegatul au dreptul de a sesiza (în scris) președintele biroului secției de votare cu privire la nereguli, iar președintele biroului secției de votare trebuie să soluționeze sesizarea. În plus față de delegați, legea conferă reprezentanților dreptul de a contesta identitatea persoanei care se prezintă la vot.</p>
                  </dd>
                </dl>
                <dl class="dl-relaxed">
                  <dt>Reprezentantul poate participa la operațiunile mai multor secții de votare? Delegatul poate asista la operațiunile mai multor secții de votare?</dt>
                  <dd>Nu. Reprezentantul poate participa doar la operațiunile din secția de votare în care a fost desemnat, iar delegatul poate asista doar la operațiunile din secția de votare pentru care a fost acreditat de către biroul electoral de circumscripție.</dd>
                </dl>
                <dl class="dl-relaxed">
                  <dt>Sunt reprezentant. Dacă nu mai reușesc să ajung în biroul secției de vot pe 11 decembrie?</dt>
                  <dd>Reprezentantul are <em>obligația legală</em> de a participa la activitatea biroului electoral al secției de votare din care face parte (în conformitate cu dispozițiile art. 98 din <a href="http://legislatie.just.ro/Public/DetaliiDocument/170037" target="_blank">Legea nr. 208/2015</a>). Neparticiparea poate sa atragă o sancțiune conform art. 99 (alin. 1), între 1.500-4.500 lei.</dd>
                </dl>
                <dl class="dl-relaxed">
                  <dt>De unde și când îmi iau indemnizația după ziua votului?</dt>
                  <dd>
                    <p>Reprezentantul va afla, de la președintele biroului electoral al secției de votare, detalii privind locul și data la care își va primi indemnizația. <a href="http://legeaz.net/monitorul-oficial-691-2016/hg-637-2016-cheltuieli-pregatire-organizare-alegeri-senat-cdep-2016" target="_blank">H.G. nr. 637/2016</a> prevede că plata indemnizațiilor și drepturilor cuvenite membrilor birourilor electorale ale secțiilor de votare se face de către instituțiile prefectului sau Ministerul Afacerilor Externe, după caz.</p>
                    <p>Membrii birourilor electorale ale secțiilor de votare primesc din partea statului câte o indemnizație de 65 de lei pentru fiecare zi de activitate, dar nu mai mult de 3 zile (prin zi de activitate se înțelege munca desfășurată pe parcursul unei zile calendaristice, indiferent de numărul de ore prestate, dar nu mai puțin de 6 ore pe zi). Membrii birourilor electorale ale secțiilor de votare din străinătate primesc în plus 150 de lei pentru fiecare zi de activitate, tot din partea statului.</p>
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
                  <p>Candidații Uniunii Salvați România au nevoie de suportul nostru, al tuturor. Am avut <strong>o campanie foarte grea</strong>, pe care nu putem să o câștigăm decât împreună!</p>
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
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/vendor/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/app/js/application.min.js?v=1.0.0"></script>
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
