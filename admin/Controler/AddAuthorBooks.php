<?php

$book=$_GET['action'];
$autor=$_GET['ad'];


$sql="INSERT INTO authorsbooks (idbooks,idauthors) VALUES ($book,$autor)";

$result=$facade->addData($sql);


if($result){
    
    $msg="Author Add Succefuly";
}else{
    
    $msg="Error to Add Author";
    
}

include './views/bookspanel.php';


?>