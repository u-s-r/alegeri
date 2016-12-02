<?php
require 'config.php';
require 'vendor/autoload.php';

$url = sprintf('https://spreadsheets.google.com/feeds/list/%s/%s/public/basic?alt=json', SPREADSHEET_SEMNEAZA_KEY, SPREADSHEET_SEMNEAZA_WORKSHEET);

function parse_entry_content($str) {
  $props   = explode(', ', $str);
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

  $cache   = new Gilbitron\Util\SimpleCache();
  $alegeri = $cache->get_data('alegeri', $url);
  $alegeri = json_decode($alegeri);

  $sectii          = 0;
  $sectiiAcoperite = 0;
  $min             = 0;
  $max             = 0;

  foreach ($alegeri->feed->entry as $entry) {
    $content = parse_entry_content($entry->content->{'$t'});

    if (!isset($content['prescurtarejudet'])) {
      continue;
    }

    $keys = array('nrsectiidevotare', 'nrreprezentanti', 'nrdelegati');

    foreach ($keys as $key) {
      if (!isset($content[$key])) {
        $content[$key] = 0;
      }
    }

    $sectii          += $content['nrsectiidevotare'];
    $sectiiAcoperite += $inscrieriValidate = $content['nrreprezentanti'] + $content['nrdelegati'];

    if ($max < $inscrieriValidate) {
      $max = $inscrieriValidate;
    }

    $alegeri = array(
      'sectii'        => $content['nrsectiidevotare'],
      'reprezentanti' => $content['nrreprezentanti'],
      'delegati'      => $content['nrdelegati']
    );

    if ('DIASPORA' === $content['prescurtarejudet']) {
      $data['diaspora']['alegeri'][$content['prescurtarejudet']] = $alegeri;

      continue;
    }

    $data['alegeri'][$content['prescurtarejudet']] = $alegeri;
  }

  $data['sectii']          = $sectii;
  $data['sectiiAcoperite'] = $sectiiAcoperite;
  $data['min']             = $min;
  $data['max']             = 100;

  return $data;
}
