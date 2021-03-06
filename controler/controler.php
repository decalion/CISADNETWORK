<?php

    /**
     * Filter the parameters and select the correct view to show
     * @param GET $_GET Info is send by using GET method
     * @param POST $_POST Info is send by using POST method
     */

    $toInclude = './views/default.php';
    echo '<script src="js/searchScript.js"></script>';
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
                $toInclude = './views/details/authors.php';
                break;
            case 'news':
                $toInclude = './views/details/news.php';
                break;
            case 'singers':
                $toInclude = './views/details/singers.php';
                break;
            default:
                break;
        }
    } else {
        if (isset($_POST) && count($_POST) > 0) {
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
                case 'groups':
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
                        default:
                            $toInclude = './views/settings.php';
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
