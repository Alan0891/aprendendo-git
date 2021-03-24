<?php
namespace app\models;
use app\models\dao;
class user {
   public function register($nome,$mail,$pass){
       $db = new dao;
       $db->sql('INSERT INTO tb_user (nome,mail,pass) VALUES (:nome,:mail,:pass)',array(':nome'=>$nome,':mail'=>$mail,':pass'=>password_hash($pass,PASSWORD_BCRYPT)));
    }
}