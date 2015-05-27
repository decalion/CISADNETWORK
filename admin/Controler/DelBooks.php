<?php

/**
 * Controler for Delet Books
 */



$idbooks=$_POST['idbooks'];

$check=$facade->updateData("DELETE FROM books WHERE idbooks=$idbooks");


if($check==true){
    
    $msg="Book Delete Correct";
    
}else{
    
    $msg="Error to Delete Book";
    
}
$_POST=array();

include './views/bookspanel.php';


?>
