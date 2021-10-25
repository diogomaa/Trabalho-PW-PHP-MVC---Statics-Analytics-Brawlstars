<?php

namespace app\models;

use app\core\Db;

class Brawlers
{
  public static function findAll()
  {
    $conn = new Db();
    $response = $conn->execQuery('SELECT id, name,rarity,style,health,damage,img,super,length,rld_spd,atk_spd,spd,atk_rg FROM brawlers');
    return $response;
  }

  public static function findById(int $id)
  {
    $conn = new Db();
    $response = $conn->execQuery('SELECT id, name,rarity,style,health,damage,img,super,length,rld_spd,atk_spd,spd,atk_rg FROM brawlers WHERE id = ?', array('i', array($id)));
    return $response;
  }

  public function creatBrawler($data)
  {
    $conn  = new Db();
    $query = 'INSERT INTO brawlers (  id, name,style,rarity,health,damage,img,super,length,rld_spd,atk_spd,spd,atk_rg) VALUES (?, ?, ?,?,?,?,?, ?, ?,?,?,?,?)';
    return $conn->execNonQuery($query, ["sssssssssssss", $data]);
  }
  
  public function DeleteBrawler($id)
  {
    $conn  = new Db();
    $query = 'DELETE FROM brawlers WHERE id = ?';
    return $conn->execNonQuery($query, ["i", [$id]]);
  }

  public function UpdateBrawler($data)
  {
    $conn = new Db();
    $query = 'UPDATE brawlers SET name =?, style=?, rarity=?,health=?, damage=?, img=?, super=?, length=?, rld_spd=?, atk_spd=?, spd=?, atk_rg=? WHERE id=?';
    return $conn->execNonQuery($query, ["ssssssssssssi", $data]);
  }
}
