<?php

    switch ($_POST['type']) {
        case 'register':
            switch ($_POST['state']) {
                case 0:
                    include './views/noLogin/registerForm.php';
                    break;
                default:
                    break;
            }
            break;
        default:
            break;
    }
    
?>