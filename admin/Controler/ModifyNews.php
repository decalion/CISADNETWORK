<?php
/**
 * Controler for Change News Data
 */

$idnews=$_POST['idnews'];
$title=$_POST['title'];
$desc=$_POST['desc'];



$check=$facade->updateData("Update news Set name='$title',description='$desc' Where idnews=$idnews");


if($check==true){
    
    $msg="News $title change Correct";
    
}else{
    
    $msg="Error to Modify News $title";
    
}

$_POST=array();

include './views/newspanel.php';





?>
