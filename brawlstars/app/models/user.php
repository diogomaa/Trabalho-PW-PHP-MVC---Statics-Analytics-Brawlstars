<?php

namespace app\models;

use app\core\Db;

class user
{

    public function __construct()
    { }


        //criar o utilizador
    public static function createuser($data)
    {
        $conn = new Db();
      
        $query = 'INSERT INTO user (user,email,password) VALUES (?, ?, ?)';
        return $conn->execNonQuery($query, ["sss", $data]);
    }   
        //testa se o utilizador existe e se existe as credenciais
    public static function testuser($data)
    {
        foreach ($data as $input) {
            if (empty($input)) return false;
        }

        $conn = new Db();
        $query = 'SELECT id_user, user, password FROM user where email = ?';
        $user = $conn->execQuery($query, ["s", [$data["email"]]]);

        if (!$user) return $user;

        $passVerify = password_verify($data["password"], $user[0]["password"]);

        if (!$passVerify) return $passVerify;

        return true;
    }

    public static function findByEmail($email)
    {
        $conn = new Db();
        $query = 'SELECT * FROM user where email = ?';
        $user = $conn->execQuery($query, ["s", [$email]]);

        if (!$user || count($user) < 0) {
            return null;
        } else {
            return $user[0];
        }
    }

    public static function findById($id)
    {
        $conn = new Db();
        $query = 'SELECT * FROM user where id_user = ?';
        $user = $conn->execQuery($query, ["i", [$id]]);

        if (!$user || count($user) < 0) {
            return null;
        } else {
            return $user[0];
        }
    }
}
