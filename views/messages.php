<form action="./index.php" method="post">
    <input hidden type="text" name="type" value="messages" />
    <input hidden type="text" name="state" value="1" />
    <input hidden type="text" name="showAll" value="0" />
    <input type="submit" value="New message" />
</form>
<?php
    if ($_POST['showAll'] == 0) {
?>
    <form action="./index.php" method="post">
        <input hidden type="text" name="type" value="messages" />
        <input hidden type="text" name="state" value="0" />
        <input hidden type="text" name="showAll" value="1" />
        <input type="submit" value="Show all messages" />
    </form>
<?php
        $query = 'select * from messages where receiver = "'.$_SESSION['userData']['idusers'].'" and readed = "0";';
        $result = $link->query($query);
        echo '<hr>';
        foreach ($result as $key => $value) {
            echo '<p>From: '.getUsernameById($link, $value['sender']).'</p>';
            $messagesToMarkReaded[] = $value['idmessages'];
            echo '<p>Message: '.$value['message'].'</p>';
            echo '<hr>';
        }
        if (isset($messagesToMarkReaded)) {
            foreach ($messagesToMarkReaded as $value) {
                $query = 'update messages set readed = 1 where receiver = "'.$_SESSION['userData']['idusers'].'";';
                $link->query($query);
            }
        }
    } elseif ($_POST['showAll'] == 1) {
        $query = 'select * from messages where receiver = "'.$_SESSION['userData']['idusers'].'";';
        $result = $link->query($query);
        echo '<hr>';
        foreach ($result as $value) {
            $query = 'select username from users where idusers = "'.$value['sender'].'";';
            $result2 = $link->query($query);
            foreach ($result2 as $username) {
                echo '<p>From: '.getUsernameById($link, $value['sender']).'</p>';
            }
            $messagesToMarkReaded[] = $value['idmessages'];
            echo '<p>Message: '.$value['message'].'</p>';
            echo '<hr>';
        }
    }

?>