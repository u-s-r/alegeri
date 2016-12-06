<?php
require 'config.php';
require 'vendor/autoload.php';

header('Content-Type: application/json');

exit('false');

$required_fields = array(
  'tip',
  'nume',
  'prenume',
  'cnp',
  'serie',
  'numar',
  'adresa',
  'regiune',
  'tara',
  'telefon',
  'email',
  'g-recaptcha-response'
);

foreach ($required_fields as $key) {
  if (empty($_POST[$key])) {
    exit('false');
  }
}

$tip        = 'delegat' === $_POST['tip'] ? 'Delegat' : 'Reprezentant';
$nume       = mb_convert_case($_POST['nume'], MB_CASE_TITLE, 'UTF-8');
$prenume    = mb_convert_case($_POST['prenume'], MB_CASE_TITLE, 'UTF-8');
$serie      = strtoupper($_POST['serie']);
$observatii = trim($_POST['observatii']);

if ('Reprezentant' === $tip) {
  exit('false');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  exit('false');
}

function post($url, $data = array()) {
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_URL, $url);

  $response = curl_exec($ch);

  curl_close($ch);

  return $response;
}

$response = post(RECAPTCHA_URL, array(
  'secret'   => RECAPTCHA_SECRET,
  'response' => $_POST['g-recaptcha-response'],
  'remoteip' => $_SERVER['REMOTE_ADDR']
));

if (false === $response) {
  exit('false');
}

$response = json_decode($response);

if (true !== $response->success) {
  exit('false');
}

$data = array(
  'entry.1'   => $_SERVER['REMOTE_ADDR'],
  'entry.3'   => $prenume,
  'entry.4'   => $nume,
  'entry.6'   => '\'' . $_POST['telefon'],
  'entry.7'   => $_POST['email'],
  'entry.8'   => $_POST['regiune'],
  'entry.10'  => $_POST['tara'],
  'entry.27'  => 'FormularAlegeri',
  'entry.28'  => 'update',
  'entry.29'  => $tip,
  'entry.30'  => isset($_POST['delegat']) ? 'Da' : 'Nu',
  'entry.31'  => '\'' . $_POST['cnp'],
  'entry.32'  => $serie,
  'entry.33'  => '\'' . $_POST['numar'],
  'entry.34'  => $_POST['adresa'],
  'sheetName' => 'Sheet1'
);

if (isset($_POST['acord'])) {
  $data['entry.22'] = 'Sunt de acord să intru în baza de date USR';
}

if (!empty($observatii)) {
  $data['entry.25'] = $observatii;
}

$response = post(SPREADSHEET_ALEGERI_URL, $data);

if (false === $response) {
  exit('false');
}

$response = json_decode($response);

if (empty($response->result) || 'success' !== $response->result) {
  exit('false');
}

$templates = new League\Plates\Engine('templates');

$data = array(
  'tip'     => $tip,
  'nume'    => $nume,
  'prenume' => $prenume,
  'cnp'     => $_POST['cnp'],
  'serie'   => $serie,
  'numar'   => $_POST['numar'],
  'adresa'  => $_POST['adresa'],
  'regiune' => $_POST['regiune'],
  'tara'    => $_POST['tara'],
  'telefon' => $_POST['telefon'],
  'email'   => $_POST['email']
);

if ('Reprezentant' === $tip) {
  if (isset($_POST['delegat'])) {
    $data['delegat'] = $_POST['delegat'];
  }

  $data['confirmare'] = $_POST['confirmare'];
}

if (!empty($observatii)) {
  $data['observatii'] = $observatii;
}

if (isset($_POST['acord'])) {
  $data['acord'] = $_POST['acord'];
}

$message = $templates->render('email', $data);
$message = preg_replace('~\R~u', "\r\n", $message);
$message = wordwrap($message, 70, "\r\n");

$to      = sprintf('%s %s <%s>', $_POST['prenume'], $_POST['nume'], $_POST['email']);
$subject = 'Alegeri USR: Mulțumim pentru înscriere!';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: Alegeri USR <alegeri@usr.ro>' . "\r\n";

mail($to, $subject, $message, $headers);

exit('true');
