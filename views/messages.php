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
    }

    if ($_POST['showAll'] == 0) {
        $query = 'select * from messages where receiver = "'.$_SESSION['userData']['idusers'].'" and readed = "0";';
        $result = $link->query($query);
        echo '<hr>';
        foreach ($result as $value) {
            foreach ($value as $key => $message) {
                if ($key == 'idmessages') {
                    $messagesToMarkReaded[] = $message;
                }
                echo $key.': '.$message.'<br>';
            }
            echo '<hr>';
        }
        foreach ($messagesToMarkReaded as $value) {
            $query = 'update messages set readed = 1 where receiver = "'.$_SESSION['userData']['idusers'].'";';
            $link->query($query);
        }
    } elseif ($_POST['showAll'] == 1) {
        $query = 'select * from messages where receiver = "'.$_SESSION['userData']['idusers'].'";';
        $result = $link->query($query);
        echo '<hr>';
        foreach ($result as $value) {
            foreach ($value as $key => $message) {
                echo $key.': '.$message.'<br>';
            }
            echo '<hr>';
        }
    }

?>