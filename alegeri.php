<?php
require 'functions.php';

$data = get_data();

header('Content-Type: application/json');

print json_encode($data);
