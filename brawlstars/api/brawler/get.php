<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
  http_response_code(405);
  exit('405 Method Not Allowed');
}

require_once('../core/Db.php');
require_once('../models/Brawler.php');

$brawler = new Brawler_api();

if (!isset($_GET['id'])) {
  $data = $brawler->get();
} else {
  if (is_numeric($_GET['id'])) {
    $data = $brawler->getById($_GET['id']);
  } else {
    $data = array();
  }
}

$nrecords = count($data);
$info = array();

if ($nrecords > 0) {
  $info['brawler'] = array();
  foreach ($data as $brawler) {

    extract($brawler);

    $item = array(
      'id' => $id,
      'name' => $name,
      'rarity' => $rarity,
      'style' => $style,
      'health' => $health,
      'damage' => $damage,
      'image' => $img,
      'super' => $super,
      'length' => $length,
      'rld_spd' => $rld_spd,
      'atk_spd' => $atk_spd,
      'spd' => $spd,
      'atk_rg' => $atk_rg
    );

    array_push($info['brawler'], $item);
  }
} else {
  $info = array('message' => 'Nenhum Brawler Encontrado');
}

echo json_encode($info);
