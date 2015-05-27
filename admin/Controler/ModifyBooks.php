<?php
/**
 * Controler for Change Books Data
 */

$idbook=$_POST['idbooks'];
$bookname=$_POST['bookname'];
$bookyear=$_POST['bookyear'];
$sinopsi=$_POST['sinopsi'];
$isbn=$_POST['isbn'];


$check=$facade->updateData("Update books Set name='$bookname',sinopsi='$sinopsi',year=$bookyear,isbn='$isbn' Where idbooks=$idbook");


if($check==true){
    
    $msg="Book $bookname change Correct";
    
}else{
    
    $msg="Error to Modify Book $bookname";
    
}

$_POST=array();
include './views/bookspanel.php';





?>
