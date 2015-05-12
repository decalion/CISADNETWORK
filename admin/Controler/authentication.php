<?php

if(($_POST['user']==NULL) || ($_POST['pass']==NULL) ) {
    
    
    $message="Username or Password can't no be null";
    $_POST['ids']=0;
    
    include './index.php';
}else{
    
    
    print_r($facade->selectCredencials());
    
    
    
    
    
}




?>