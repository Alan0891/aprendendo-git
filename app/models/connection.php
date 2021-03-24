<?php 

namespace app\models;
use PDO;
use PDOException;

class connection{
  public function connectar(){
    try{
        $conn = new PDO (DBDRIVER.":host=".DBHOST.";name=".DBNAME.";",DBUSER,DBPASS);
        return $conn;
      }catch(PDOException $e){
          $e->getMessage('Error');
      }
  }
}