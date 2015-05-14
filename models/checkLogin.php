<?php
    
    $result = $link->query('select * from users');
    $correct = false;
    $encryptedPassword = encrypt($_POST['password']);
    while($row = mysqli_fetch_array($result)) {
        if (($row['username'] == $_POST['username']) && ($row['password'] == $encryptedPassword)) {
            $_SESSION['userData']['username'] = $row['username'];
            $correct = true;
        }
    }
    if (!$correct) {
        $toInclude = './views/noLogin/loginForm.php';
        $log['incorrectLogin'] = 'Incorrect login!';
    }

?>
