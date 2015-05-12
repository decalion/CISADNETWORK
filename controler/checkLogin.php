<?php
    
    $result = $link->query('select * from user');
    while($row = mysqli_fetch_array($result)) {
        if (($row['username'] == $_POST['username']) && ($row['password'] == $_POST['password'])) {
            $_SESSION['userData']['username'] = $row['username'];
            break;
        } else {
            $correct = false;
        }
    }
    if (!$correct) {
        include './views/noLogin/loginForm.php';
    }
    echo 'Incorrect login!';
    $link->closeConnection();

?>
