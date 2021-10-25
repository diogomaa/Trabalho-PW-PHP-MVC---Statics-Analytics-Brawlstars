<?php

use app\models\user;

spl_autoload_register(function ($filename) {
  $file = $filename . '.php';
  $file = str_replace('\\', '/', $file);
  if (file_exists($file)) {
    require $file;
  } else {
    echo "Debug: Erro na importação do ficheiro (rever caminho...)";
  }
});

function isAuthenticated()
{
  return isset($_SESSION["user_id"]);
}



function getAuthUser()
{
  $uid = $_SESSION["user_id"];

  return user::findById($uid);
}
