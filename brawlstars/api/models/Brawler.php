<?php
class Brawler_api
{

  private $id;
  private $name;
  private $rarity;
  private $style;
  private $health;
  private $damage;
  private $image;
  private $super;
  private $length;
  private $rld_spd;
  private $atk_spd;
  private $spd;
  private $atk_rg;

  private $table;



  public function __construct()
  {
    $this->table = 'brawlers';
  }

  public function setData($id, $name, $rarity, $style, $health, $damage, $img, $super, $length, $rld_spd, $atk_spd, $spd, $atk_rg  )
  {
    $this->id = $id;
    $this->name = $name;
    $this->rarity = $rarity;
    $this->style = $style;
    $this->health = $health;
    $this->damage = $damage;
    $this->image = $img;
    $this->super = $super;
    $this->length = $length;
    $this->rld_spd = $rld_spd;
    $this->atk_spd = $atk_spd;
    $this->spd = $spd;
    $this->atk_rg = $atk_rg;
  }

  public function get()
  {
    $conn = new Db();
    $response = $conn->execQuery('SELECT id, name,rarity,style,health,damage,img,super,length,rld_spd,atk_spd,spd,atk_rg FROM brawlers');
    return $response;
  }

  public function getById(int $id)
  {
    $conn = new Db();
    $response = $conn->execQuery('SELECT id, name,rarity,style,health,damage,img,super,length,rld_spd,atk_spd,spd,atk_rg FROM brawlers WHERE id = ?', array('i', array($id)));
    return $response;
  }
}
