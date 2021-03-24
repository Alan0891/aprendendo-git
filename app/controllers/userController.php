<?php

namespace app\controllers;
use app\models\user;
class userController{
    public function cadastro(){
      $user = new user;
      $user->register('Alan','acesarrocha3@hotmail.com','12345');
    }
}