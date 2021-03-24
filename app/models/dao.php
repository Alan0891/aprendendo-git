<?php
namespace app\models;
use app\models\connection;

class dao{

   public function setBind($stmt,$key,$value){
       $stmt->bindParam($key,$value);
   } 
   public function setParams($stmt,$params){
      foreach($params as $key => $value){
          $this->setBind($stmt,$key,$value);
      }
   } 
   public function sql ($query,$params=[]){
       $conn = new connection;
       $stmt = $conn->connectar()->prepare($query);
       $this->setParams($stmt,$params);
       $stmt->execute();
   }
}