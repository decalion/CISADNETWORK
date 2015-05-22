<?php

    $toInclude = './views/default.php';
    if (isset($_GET) && count($_GET) > 0) {
        switch ($_GET['type']) {
            case 'movies':
                $toInclude = './views/details/movies.php';
                break;
            case 'books':
                $toInclude = './views/details/books.php';
                break;
            case 'series':
                $toInclude = './views/details/series.php';
                break;
            case 'groups':
                $toInclude = './views/details/groups.php';
                break;
            case 'recipes':
                $toInclude = './views/details/recipes.php';
                break;
            case 'users':
                $toInclude = './views/details/users.php';
                break;
            case 'cds':
                $toInclude = './views/details/cds.php';
                break;
            case 'actors':
                $toInclude = './views/details/actors.php';
                break;
            case 'directors':
                $toInclude = './views/details/directors.php';
                break;
            case 'authors':
                $toInclude = './views/details/actors.php';
                break;
            case 'news':
                $toInclude = './views/details/news.php';
                break;
            default:
                break;
        }
    } else {
        if (isset($_POST) && count($_POST) > 0) {
            switch ($_POST['type']) {
                case 'movies':
                    echo '<script src="js/movies/script.js"></script>';
                    switch ($_POST['state']) {
                        case 0:
                            $toInclude = './views/movies.php';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'series':
                    echo '<script src="js/series/script.js"></script>';
                    switch ($_POST['state']) {
                        case 0:
                            $toInclude = './views/series.php';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'recipes':
                    echo '<script src="js/recipes/script.js"></script>';
                    switch ($_POST['state']) {
                        case 0:
                            $toInclude = './views/recipes.php';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'books':
                    echo '<script src="js/books/script.js"></script>';
                    switch ($_POST['state']) {
                        case 0:
                            $toInclude = './views/books.php';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'groups':
                    echo '<script src="js/groups/script.js"></script>';
                    switch ($_POST['state']) {
                        case 0:
                            $toInclude = './views/groups.php';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'search':
                    $toInclude = './views/search.php';
                    break;
                case 'register':
                    switch ($_POST['state']) {
                        case 0:
                            $toInclude = './views/noLogin/registerForm.php';
                            break;
                        case 1:
                            $toInclude = './models/addRegister.php';
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
                            include './models/checkLogin.php';
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
                case 'settings':
                    switch ($_POST['state']) {
                        case 0:
                            $toInclude = './views/settings.php';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'messages':
                    switch ($_POST['state']) {
                        case 0:
                            $toInclude = './views/messages.php';
                            break;
                        case 1:
                            $toInclude = './views/newMessage.php';
                            break;
                        case 2:
                            $toInclude = './models/sendMessage.php';
                            break;
                        default:
                            break;
                    }
                    break;
                default:
                    break;
            }
        }
    }

?>