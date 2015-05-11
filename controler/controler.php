<?php


    print_r($_POST);
    if(isset($_POST['type']) == 'register') {
        switch ($_POST['state']) {
            case 0:
                include './views/noLogin/registerForm.php';
                break;
            case 1:
                
                break;
            default:
                break;
        }
    }
    
?>