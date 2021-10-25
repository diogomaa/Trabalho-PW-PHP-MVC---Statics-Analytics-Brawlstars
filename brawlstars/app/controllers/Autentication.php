<?php

use app\core\Controller;

//use app\core\App;

class Autentication extends Controller
{

//chama index
    public function index()
    {
        unset($_SESSION["user_id"]);
        $data = [
            'info' => ''
        ];
        $this->view('/autentication/createuser', $data);
    }

//chama login
    public function loginuser()
    {
        $data = [
            'info' => ''
        ];

        $this->view('/autentication/loginuser', $data);
    }
//chame about entrada
    public function about()
    {
        $data = [
            'info' => ''
        ];

        $this->view('autentication/about', $data);
    }
//chama ao sair da sessão
    public function outsession()
    {
        session_unset();
        session_destroy();
        $data = [
            'info' => ''
        ];
        $this->view("/autentication/loginuser", $data);
        die();
    }
    //testar as credenciais de acesso
    public function testcredencials()
    {
        $inputs = [
            "email" => $_POST["email"],
            "password" => $_POST["password"]
        ];

        if (strlen($inputs["email"]) == 0 || strlen($inputs["password"]) == 0) {
            $data = [
                'info' => "INTRUDUZA AS CREDENCIAS CORRETAMENTE."
            ];

            $this->view("/autentication/loginuser", $data);
            die();
        }

        $user = $this->model('user');
        $res = $user::testuser($inputs);

        if ($res === false) {
            $data = [
                'info' => 'Não foi possivel iniciar sessão.'
            ];
            $this->view("/autentication/loginuser", $data);
            die();
        }

        $_SESSION["user_id"] = $user::findByEmail($inputs["email"])["id_user"];
        $_SESSION["user"] = $user::findByEmail($inputs["email"])["user"];
        header("Location: /brawler/index");
    }

//creat um usuario, avisos e chamada da BD
    public function createuser()
    {

        $inputs = [
            "user" => $_POST["user"],
            "email" => $_POST["email"],
            "password" => password_hash($_POST["password"], PASSWORD_BCRYPT),
        ];

        $user = $this->model('user');
        $res = $user->findByEmail($_POST["email"]);
        if ($res === false) {
            $data = [
                'info' => "Conta não criada!"
            ];

            $this->view('/autentication/createuser', $data);
            die();
        }
        if (strlen($inputs["email"]) == 0 || strlen($inputs["password"]) == 0 || strlen($inputs["user"]) == 0) {
            $data = [
                'info' => "Precisa de preencher todos os campos."
            ];

            $this->view('/autentication/createuser', $data);
            die();
        }



        $res = $user->createuser(array_values($inputs));
        if ($res === true) {
            $data = [
                'info' => "CRIOU A CONTA COM SUCESSO!!"
            ];
          
            $this->view("/autentication/loginuser", $data);
        } else {
            $data = [
                "info" => "Algo correu mal, a conta não foi criada!"

            ];

            $this->view('/autentication/createuser', $data);
        }
    }
}
