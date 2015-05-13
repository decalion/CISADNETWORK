<?php

    $toInclude = './views/default.php';
    if (isset($_POST)) {
        switch ($_POST['type']) {
            case 'movies':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/movies.php';
                        break;
                    default:
                        break;
                }
                break;
            case 'series':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/series.php';
                        break;
                    default:
                        break;
                }
                break;
            case 'recipes':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/recipes.php';
                        break;
                    default:
                        break;
                }
                break;
            case 'books':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/books.php';
                        break;
                    default:
                        break;
                }
                break;
            case 'music':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/music.php';
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
                        $toInclude = './views/noLogin/registerForm.php';
                        break;
                    case 1:
                        $toInclude = './checkRegister.php';
                        break;
                    default:
                        break;
                }
                break;
            case 'login':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/noLogin/loginForm.php';
                        break;
                    case 1:
                        include './controler/checkLogin.php';
                        break;
                    default:
                        break;
                }
                break;
            case 'faq':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/faq.php';
                        break;
                    default:
                        break;
                }
                break;
            case 'meetUs':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/meetUs.php';
                        break;
                    default:
                        break;
                }
                break;
            case 'rules':
                switch ($_POST['state']) {
                    case 0:
                        $toInclude = './views/rules.php';
                        break;
                    default:
                        break;
                }
                break;
            default:
                break;
        }
    }
    
?>