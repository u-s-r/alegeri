<?php
require 'config.php';

$url = 'https://script.google.com/macros/s/AKfycbwzaTnsfEmM32gfIf3QbVimFzHn803KrqsZ4b97b_iZEhum4ocL/exec';

header('Content-Type: application/json');

if (!isset($_POST['tip'])) {
  exit('false');
}

$data = array(
  'sheetName'  => 'Sheet1';
  'tip'        => 'delegat' === $_POST['tip'] ? 'Delegat' : 'Reprezentant';
  'entry.3'    => $_POST['prenume'];
  'entry.4'    => $_POST['nume'];
  'entry.7'    => $_POST['email'];
  'entry.6'    => $_POST['telefon'];
  'cnp'        => $_POST['cnp'];
  'serie'      => $_POST['serie'];
  'numar'      => $_POST['numar'];
  'adresa'     => $_POST['adresa'];
  'entry.8'    => $_POST['regiune'];
  'entry.9'    => $_POST['localitate'];
  'entry.10'   => $_POST['tara'];
  'entry.25'   => $_POST['observatii'];
  'delegat'    => isset($_POST['delegat']);
  'confirmare' => isset($_POST['confirmare']);
  'entry.27'   => 'FormularAlegeri';
  'entry.28'   => 'update';
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_URL, $url);

$response = curl_exec($ch);

curl_close($ch);

exit(json_encode($response));
