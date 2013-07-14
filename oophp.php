<?php
//Noah
//Object-Oriented PHP
//simple user class w/constructor

class User{
  var $loginID, $password;

  //constructor for User
  function __construct($loginID, $password){
   $this -> loginID = $loginID;
   $this -> password = $password;
  }

  //fcn returns name
  function get_loginID(){
   return $this -> loginID;
  }

  //fcn returns password
  function get_password(){
    return $this -> password;
  }

  //fcn sets new name
  function set_loginID($loginID){
    $this -> loginID = $loginID;
  }

  //fcn sets password
  function set_password($password){
    $this -> password = $password;
  }


  //destructor
  function __destructor(){
   echo "call to destructor complete.";
  }
  
}
?>
