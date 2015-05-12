<?php

    switch ($_POST['type']) {
        case 'films':
            switch ($_POST['state']) {
                case 0:
                    include './views/noLogin/films.php';
                    break;
                default:
                    break;
            }
            break;
        case 'series':
            switch ($_POST['state']) {
                case 0:
                    include './views/noLogin/series.php';
                    break;
                default:
                    break;
            }
            break;
        case 'recipes':
            switch ($_POST['state']) {
                case 0:
                    include './views/noLogin/recipes.php';
                    break;
                default:
                    break;
            }
            break;
        case 'books':
            switch ($_POST['state']) {
                case 0:
                    include './views/noLogin/books.php';
                    break;
                default:
                    break;
            }
            break;
        case 'music':
            switch ($_POST['state']) {
                case 0:
                    include './views/noLogin/music.php';
                    break;
                default:
                    break;
            }
            break;
        case 'search':
            include './views/search.php';
            break;
        case 'register':
            switch ($_POST['state']) {
                case 0:
                    include './views/noLogin/registerForm.php';
                    break;
                case 1:
                    include './checkRegister.php';
                    break;
                default:
                    break;
            }
            break;
        case 'login':
            switch ($_POST['state']) {
                case 0:
                    include './views/noLogin/loginForm.php';
                    break;
                default:
                    break;
            }
            break;
        case 'faq':
            switch ($_POST['state']) {
                case 0:
                    include './views/faq.php';
                    break;
                default:
                    break;
            }
            break;
        case 'meetUs':
            switch ($_POST['state']) {
                case 0:
                    include './views/meetUs.php';
                    break;
                default:
                    break;
            }
            break;
        case 'rules':
            switch ($_POST['state']) {
                case 0:
                    include './views/rules.php';
                    break;
                default:
                    break;
            }
            break;
        default:
            break;
    }
    
?>