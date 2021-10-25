
<?php

use app\core\Controller;

class Brawler extends Controller
{
  // entrada no index brawler 
  public function index(){
    if (isAuthenticated()) {
      $Brawlers = $this->model('Brawlers'); // é retornado o model Brawlers()
      $data = $Brawlers::findAll();
      $this->view('brawler/index', ['brawlers' => $data]);
    } else {
      header("Location: /autentication/loginuser"); //   
      die();
    }
  }

  public function notFound()
  {
    if (isAuthenticated()) {
      header("Location: /brawler/index");
    }
  }

  //chama about do brawler 
  public function about()
  {
    if (isAuthenticated()) {
      error_reporting(0);
      $this->view('brawler/about', $data);
    }
  }
//chamar creat brawler
  public function createBrawler()
  {
    if (isAuthenticated()) {

      $Brawlers = $this->model('Brawlers');
      $dataBrawler = $Brawlers::findAll();
      $datainfo = [
        'info' => ''
      ];
      $data = $dataBrawler + $datainfo;
      $this->view('brawler/createBrawler', ['brawler' => $data]);
    } else {
      $this->view("autentication/loginuser");
      die();
    }
  }

  
//get brawler inside brawler
  public function get($id = null)
  {
    if (is_numeric($id)) {

      $Brawlers = $this->model('Brawlers');
      $data = $Brawlers::findById($id);
      if (!$data) {
        header("Location: /brawler/index");
        die();
      }
      $this->view('brawler/get', ['brawlers' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

  // Metodo que retorna a view do update
  public function update($id = null, $data = null)
  {
    if (isAuthenticated()) {
      $id = $_POST['brawler_id'];
      $Brawlers = $this->model('Brawlers');
      $data = $Brawlers::findById($id);
      $array = [
        'info' => ''
      ];
      $newdata = $data + $array;
      $this->view('brawler/updateBrawler', ['brawler' => $newdata]);
    } else {
      $this->view("autentication/loginuser");
      die();
    }
  }
 // Metodo que atualiza o brawler em todos os parametros
  public function updateBrawler($id)
  {
    $photo = $_FILES['imagem']['name'];
    $photo_folder = '../IMG/brawlers/' . $photo;
    $photo_folderBD = '../IMG/brawlers/' . $photo;
    error_reporting(0);
    $brawler = $this->model('Brawlers');
    $resOldDataBrawler = $brawler->findById($id);


    $inputs = [

      "name" => $_POST["name"],
      "style" => $_POST["style"],
      "rarity" => $_POST["rarity"],
      "health" => $_POST["health"],
      "damage" => $_POST["damage"],
      "imagem" => $photo_folderBD,
      "super" => $_POST["super"],
      "length" => $_POST["length"],
      "rld_spd" => $_POST["rld_spd"],
      "atk_spd" => $_POST["atk_spd"],
      "spd" => $_POST["spd"],
      "atk_rg" => $_POST["atk_rg"],
      "id" => $id

    ];
    if (strlen($inputs["health"]) === 0) {
      $inputs["health"] = $resOldDataBrawler[0]["health"];
    }
    if (strlen($inputs["super"]) === 0) {
      $inputs["super"] = $resOldDataBrawler[0]["super"];
    }
    if (strlen($inputs["length"]) === 0) {
      $inputs["length"] = $resOldDataBrawler[0]["length"];
    }
    if (strlen($inputs["rld_spd"]) === 0) {
      $inputs["rld_spd"] = $resOldDataBrawler[0]["rld_spd"];
    }
    if (strlen($inputs["atk_spd"]) === 0) {
      $inputs["atk_spd"] = $resOldDataBrawler[0]["atk_spd"];
    }
    if (strlen($inputs["spd"]) === 0) {
      $inputs["spd"] = $resOldDataBrawler[0]["spd"];
    }
    if (strlen($inputs["atk_rg"]) === 0) {
      $inputs["atk_rg"] = $resOldDataBrawler[0]["atk_rg"];
    }
    if (strlen($inputs["id"]) === 0) {
      $inputs["id"] = $resOldDataBrawler[0]["id"];
    }
    if (strlen($inputs["name"]) === 0) {
      $inputs["name"] = $resOldDataBrawler[0]["name"];
    }
    if (strlen($inputs["style"]) === 0) {
      $inputs["style"] = $resOldDataBrawler[0]["style"];
    }
    if (strlen($inputs["rarity"]) === 0) {
      $inputs["rarity"] = $resOldDataBrawler[0]["rarity"];
    }
    if (strlen($inputs["damage"]) === 0) {
      $inputs["damage"] = $resOldDataBrawler[0]["damage"];
    }
    if (strlen($photo) === 0) {
      $inputs["imagem"] = $resOldDataBrawler[0]["img"];
    }


    $res = $brawler->updateBrawler(array_values($inputs));
    move_uploaded_file($_FILES['imagem']['tmp_name'], $photo_folder);
    if ($res === true) {
  
      $data = [
        'info' => 'PARABÉNS BRAWLER ATUALIZADO COM SUCESSO!!'
      ];


      $this->view('brawler/get', ['brawler' => $data]);
      exit();

    
    } else {
      $data = [
        'info' => 'ERRO BRAWLER NÃO FOI ATUALIZADO COM SUCESSO!!'
      ];

      $this->view('brawler/updateBrawler', ['brawler' => $resOldDataBrawler]);
    }
  }



  // Metodo que cria o brawler em todos os parametros 
  public function creatBrawler()
  {
    
    $photo = $_FILES['imagem']['name'];
    $photo_folder = '../IMG/brawlers/' . $photo;
    $photo_folderBD = '../IMG/brawlers/' . $photo;
    error_reporting(0);
    $inputs = [
      "id" => $_POST["id"],
      "name" => $_POST["name"],
      "style" => $_POST["style"],
      "rarity" => $_POST["rarity"],
      "health" => $_POST["health"],
      "damage" => $_POST["damage"],
      "imagem" => $photo_folderBD,
      "super" => $_POST["super"],
      "length" => $_POST["length"],
      "rld_spd" => $_POST["rld_spd"],
      "atk_spd" => $_POST["atk_spd"],
      "spd" => $_POST["spd"],
      "atk_rg" => $_POST["atk_rg"]
    ];

    if ($_FILES['imagem']['error'] > 0) {
      switch ($_FILES['imagem']['error']) {
       
        case 1:
          $data = [
            'info' => 'Escolha uma imagem.'
          ];

          $this->view('brawler/createBrawler', ['brawler' => $data]);
          exit();
          break;
      }
    }

    $brawler = $this->model('Brawlers');
    $res = $brawler->creatBrawler(array_values($inputs));
    move_uploaded_file($_FILES['imagem']['tmp_name'], $photo_folder);
    if ($res === true) {
      $data = [
        'info' => 'PARABÉNS BRAWLER CRIADO COM SUCESSO!!'
      ];


      $this->view('brawler/createBrawler', ['brawler' => $data]);
      exit();
    
    } else {

      $data = [
        'info' => 'ERRO BRAWLER NÃO FOI CRIADO COM SUCESSO!!'
      ];
      $this->view("brawler/createBrawler", $data);

    }
  }




  //Delete de brawlers
  public function DeleteBrawler()
  {
    $id = $_POST['brawler_id'];
    $brawler = $this->model('Brawlers');
    $res = $brawler->DeleteBrawler($id);
    if ($res === true) {
     
     header("Location: /brawler/index");
     die();
    } else {
     
    }
  }
}
