<?php

    if (isset($ajax)) {
        include './classes/Factory.php';
    } else {
        include './models/classes/Factory.php';
    }
    
    function loadDefault($type, $link) {
        $factory = new Factory($type, $link);
        $factory->loadDefaultInfo();
    }

    function loadDetail($type, $link) {
        $factory = new Factory($type, $link);
        return $factory->loadDetail($_GET['id']);
    }

    function encrypt($password) {
        return sha1($password);
    }
    
    function getUsernameById($link, $id) {
        $query = 'select username from users where idusers = "'.$id.'";';
        $result = $link->query($query);
        if (!$result) {
            return null;
        } else {
            foreach ($result as $username) {
                return $username['username'];
            }
        }
    }
    
    function getNumMessages($link) {
        $query = 'select * from messages where receiver = "'.$_SESSION['userData']['idusers'].'" and readed = "0";';
        $result = $link->query($query);
        return $result->num_rows;
    }
        
    function getIdByUsername($link, $username) {
        $query = 'select idusers from users where username = "'.$username.'";';
        $result = $link->query($query);
        if (!$result) {
            return null;
        } else {
            foreach ($result as $id) {
                return $id['idusers'];
            }
        }
    }
    
    function buildLastPoll($link) {
        echo '<div class="defaultBorder" style="background-color: #3C90BE;">';
        $query = 'select polls.idpolls, question from polls inner join lastpolls where polls.idpolls = lastpolls.idpolls';
        $result = $link->query($query);
        if (!$result) {
            return null;
        } else {
            foreach ($result as $question) {
                if (isset($_SESSION['userData'])) {
                    $_SESSION['userData']['lastPollId'] = $question['idpolls'];
                }
                echo $question['question'];
            }
        }
        echo '</div>';
        if (userVoted($link)) {
            buildVoted($link);
        } else {
            buildNoVoted($link);
        }
    }
    function buildVoted($link) {
        echo '<ul id="navListFooterPoll">';
        $query = 'select polls.idpolls, idanswers, answer from answers inner join polls on answers.idpolls = polls.idpolls inner join lastpolls on polls.idpolls = lastpolls.idpolls';
        $result = $link->query($query);
        if (!$result) {
            return null;
        } else {
            $idAnswer = getAnswerFromPoll($link);
            foreach ($result as $answer) {
                // echo '<li><p>'.$answer['idanswers'].' '.$answer.'</p></li>';
                if (strcmp($answer['idanswers'], $idAnswer) == 0) {
                    echo '<li><p class="buttonPoll voted">'.$answer['answer'].'</p></li>';
                } else {
                    echo '<li><p class="buttonPoll">'.$answer['answer'].'</p></li>';
                }
            }
        }
        echo '</ul>';
    }
    
    function buildNoVoted($link) {
        if (isset($_SESSION['userData'])) {
            echo '<script src="js/poll.js"></script>';
        }
        echo '<ul id="navListFooterPoll">';
        $query = 'select polls.idpolls, idanswers, answer from answers inner join polls on answers.idpolls = polls.idpolls inner join lastpolls on polls.idpolls = lastpolls.idpolls';
        $result = $link->query($query);
        if (!$result) {
            return null;
        } else {
            foreach ($result as $answer) {
                echo '<li><p class="buttonPoll" value="'.$answer['idanswers'].'">'.$answer['answer'].'</p></li>';
            }
        }
        echo '</ul>';
    }
    
    function userVoted($link) {
        if (isset($_SESSION['userData'])) {
            $query = 'select idusers from usersvotes where idpolls = '.$_SESSION['userData']['lastPollId'].' and idusers = '.$_SESSION['userData']['idusers'].';';
            $result = $link->query($query);
            if ($result) {
                foreach ($result as $value) {
                    return true;
                }
            }
        }
        return false;
    }
    
    function getAnswerFromPoll($link) {
        $query = 'select answer from usersvotes where idpolls = '.$_SESSION['userData']['lastPollId'].' and idusers = '.$_SESSION['userData']['idusers'].';';
        $result = $link->query($query);
        if ($result) {
            foreach ($result as $value) {
                return $value['answer'];
            }
        }
        return false;
    }
    
?>
