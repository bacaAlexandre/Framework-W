<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;

class UserModel extends \W\Model\UsersModel
{


  public function passwordExists($password){

    $app = getApp();

    $sql = 'SELECT ' . $app->getConfig('security_password_property') . ' FROM ' . $this->table .
           ' WHERE ' . $app->getConfig('security_password_property') . ' = :password LIMIT 1';

     $dbh = ConnectionModel::getDbh();
     $sth = $dbh->prepare($sql);
     $sth->bindValue(':password', $password);
     if($sth->execute()){
        $foundUser = $sth->fetch();
         if($foundUser){
             return true;
         }
     }
     return false;
   }

   public function signUserIn($username, $email, $password){
     $app = getApp();

     $sql = "INSERT INTO ". $this->table ."(username, email, password)
     VALUES (:username, :email, :password)";
     var_dump($sql);
     $dbh = ConnectionModel::getDbh();
     $sth = $dbh->prepare($sql);
     $sth->bindValue(':password', $password);
     $sth->bindValue(':email', $email);
     $sth->bindValue(':username', $username);
     $foundUser = $sth->execute();

   }


}
