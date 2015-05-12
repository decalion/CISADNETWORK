<?php
include_once './Models/Classes/Utils/Constants.php';
include_once './Models/Classes/Utils/Uconnection.php';
include_once './Models/Classes/DB/AbstractDB.php';
include_once './Models/Classes/DB/impl/AdminMysqlImpl.php';
include_once './Models/Classes/Facade.php';
include_once './Models/Classes/DB/DTO/Login.php';


$facade=new Facade();



if(isset($_POST['ids'])){
    $id=$_POST['ids'];
    
    switch($id){
        case AUTHENTICATION:
            include './Controler/authentication.php';
         break;
     
     default : include './views/adminLogin.php'; break;
        
        
    }
       
}else{
    
include './views/adminLogin.php';
    
}





?>