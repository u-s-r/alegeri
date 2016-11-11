<?php
require 'config.php';

$url = 'https://script.google.com/macros/s/AKfycbwzaTnsfEmM32gfIf3QbVimFzHn803KrqsZ4b97b_iZEhum4ocL/exec';

header('Content-Type: application/json');

if (!isset($_POST['tip'])) {
  exit('false');
}

$data = array(
  'sheetName' => 'Sheet1',
  'entry.29'  => 'delegat' === $_POST['tip'] ? 'Delegat' : 'Reprezentant',
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
  'entry.22'  => 'Sunt de acord sa intru in baza de date USR',
  'entry.27'  => 'FormularAlegeri',
  'entry.28'  => 'update'
);

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

exit(json_encode(false !== $response));
