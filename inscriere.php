<?php
require 'config.php';

$url = 'https://script.google.com/macros/s/AKfycbwzaTnsfEmM32gfIf3QbVimFzHn803KrqsZ4b97b_iZEhum4ocL/exec';

$data = array();

if (!isset($_POST['tip'])) {
  exit('false');
}

$data['sheetName']  = 'Sheet1';
$data['tip']        = 'delegat' === $_POST['tip'] ? 'Delegat' : 'Reprezentant';
$data['entry.3']    = $_POST['prenume'];
$data['entry.4']    = $_POST['nume'];
$data['entry.7']    = $_POST['email'];
$data['entry.6']    = $_POST['telefon'];
$data['cnp']        = $_POST['cnp'];
$data['serie']      = $_POST['serie'];
$data['numar']      = $_POST['numar'];
$data['adresa']     = $_POST['adresa'];
$data['entry.8']    = $_POST['regiune'];
$data['entry.9']    = $_POST['localitate'];
$data['entry.10']   = $_POST['tara'];
$data['entry.25']   = $_POST['observatii'];
$data['delegat']    = isset($_POST['delegat']);
$data['confirmare'] = isset($_POST['confirmare']);
$data['entry.27']   = 'FormularAlegeri';
$data['entry.28']   = 'update';

$ch = curl_init();

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

$response = curl_exec($ch);

curl_close($ch);

var_dump($response);

exit('true');
