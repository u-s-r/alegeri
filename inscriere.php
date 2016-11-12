<?php
require 'config.php';

header('Content-Type: application/json');

$required_fields = array(
  'tip',
  'prenume',
  'nume',
  'email',
  'telefon',
  'cnp',
  'serie',
  'numar',
  'adresa',
  'regiune',
  'localitate',
  'tara',
  'acord',
  'g-recaptcha-response'
);

foreach ($required_fields as $key) {
  if (empty($_POST[$key])) {
    exit('false');
  }
}

$tip = 'delegat' === $_POST['tip'] ? 'Delegat' : 'Reprezentant';

if ('Reprezentant' === $tip && !isset($_POST['confirmare'])) {
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

if (false === $response->success) {
  exit('false');
}

$response = post(SPREADSHEET_ALEGERI_URL, array(
  'sheetName' => 'Sheet1',
  'entry.1'   => $_SERVER['REMOTE_ADDR'],
  'entry.29'  => $tip,
  'entry.30'  => isset($_POST['delegat']) ? 'Da' : 'Nu',
  'entry.3'   => $_POST['prenume'],
  'entry.4'   => $_POST['nume'],
  'entry.7'   => $_POST['email'],
  'entry.6'   => $_POST['telefon'],
  'entry.31'  => $_POST['cnp'],
  'entry.32'  => $_POST['serie'],
  'entry.33'  => $_POST['numar'],
  'entry.34'  => $_POST['adresa'],
  'entry.8'   => $_POST['regiune'],
  'entry.9'   => $_POST['localitate'],
  'entry.10'  => $_POST['tara'],
  'entry.25'  => $_POST['observatii'],
  'entry.22'  => 'Sunt de acord să intru în baza de date USR',
  'entry.27'  => 'FormularAlegeri'
));

exit(json_encode(false !== $response));
