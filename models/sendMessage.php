<?php

    /**
     * File for manage the messages
     */

    $to = getIdByUsername($link, $_POST['to']);
    if ($to == null) {
        echo 'User not found!';
    } elseif($to == $_SESSION['userData']['idusers']) {
        echo "You can't send a message to yourself!";
    }else {
        $query = 'insert into messages (sender, receiver, message) values ("'.$_SESSION['userData']['idusers'].'", "'.$to.'", "'.$_POST['message'].'")';
        $result = $link->query($query);
        echo 'Message sent!';
    }

?>