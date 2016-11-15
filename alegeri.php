<?php
require 'config.php';
require 'vendor/autoload.php';

$url = sprintf('https://spreadsheets.google.com/feeds/list/%s/%s/public/basic?alt=json', SPREADSHEET_SEMNEAZA_KEY, SPREADSHEET_SEMNEAZA_WORKSHEET);

function parse_entry_content($str) {
  $props = explode(', ', $str);
  $content = array();

  foreach ($props as $prop) {
    $prop = explode(': ', $prop);

    foreach ($prop as &$value) {
      $value = trim($value);
    }

    if (2 === count($prop)) {
      switch ($prop[0]) {
        case 'nrsectiidevotare':
        case 'nrreprezentanti':
        case 'nrdelegati':
          $content[$prop[0]] = intval($prop[1]);

          break;

        default:
          $content[$prop[0]] = $prop[1];

          break;
      }
    }
  }

  return $content;
}

function get_data() {
  global $url;

  $data = array();

  $cache = new Gilbitron\Util\SimpleCache();
  $alegeri = $cache->get_data('alegeri', $url);
  $alegeri = json_decode($alegeri);

  $total = 0;
  $min = 0;
  $max = 0;

  foreach ($alegeri->feed->entry as $entry) {
    $content = parse_entry_content($entry->content->{'$t'});

    if (!isset($content['_chk2m'])) {
      continue;
    }

    $sectii = $content['nrreprezentanti'] + $content['nrdelegati'];

    $total += $sectii;

    if ($max < $sectii) {
      $max = $sectii;
    }

    $alegeri = array(
      'sectii'        => $content['nrsectiidevotare'],
      'reprezentanti' => $content['nrreprezentanti'],
      'delegati'      => $content['nrdelegati']
    );

    if ('DIASPORA' === $content['_chk2m']) {
      $data['diaspora']['alegeri'][$content['_chk2m']] = $alegeri;

      continue;
    }

    $data['alegeri'][$content['_chk2m']] = $alegeri;
  }

  $data['inscrieriValidate'] = $total;
  $data['min'] = $min;
  $data['max'] = $min === $max ? $max + 1 : $max;

  return $data;
}

function send_data() {
  $data = get_data();

  header('Content-Type: application/json');

  print json_encode($data);
}

send_data();
