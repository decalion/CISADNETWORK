<?php
    
    $result = $link->query('select * from users');
    $correct = false;
    $encryptedPassword = encrypt($_POST['password']);
    while($row = mysqli_fetch_array($result)) {
        if (($row['username'] == $_POST['username']) && ($row['password'] == $encryptedPassword)) {
            $_SESSION['userData']['idusers'] = $row['idusers'];
            $_SESSION['userData']['username'] = $row['username'];
            $_SESSION['userData']['name'] = $row['name'];
            $_SESSION['userData']['lastname'] = $row['lastname'];
            $_SESSION['userData']['email'] = $row['email'];
            $_SESSION['userData']['imageurl'] = $row['imageurl'];
            $_SESSION['userData']['idroles'] = $row['idroles'];
            $_SESSION['userData']['userKey'] = $row['userKey'];
            $_SESSION['userData']['privacity'] = $row['privacity'];
            $correct = true;
        }
    }
    if (!$correct) {
        $toInclude = './views/noLogin/loginForm.php';
        $log['incorrectLogin'] = 'Incorrect login!';
    }

?>
