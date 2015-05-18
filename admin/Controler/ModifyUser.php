<?php
/**
 * Controler for Change user Data
 */




$iduser=$_POST['iduser'];
$username=$_POST['username'];
$password=$_POST['pass'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$role=$_POST['role'];
$active=$_POST['active'];

$check=$facade->updateData("Update users Set name='$name',lastname='$surname',email='$email',idroles=$role,active=$active Where idusers=$iduser");


if($check==true){
    
    $msg="User $username change Correct";
    
}else{
    
    $msg="Error to Modify user $username";
    
}

$_POST=array();
include './views/userpanel.php';





?>
