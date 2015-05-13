<?php
    
    $result = $link->query('select * from user');
    $correct = false;
    while($row = mysqli_fetch_array($result)) {
        if (($row['username'] == $_POST['username']) && ($row['password'] == $_POST['password'])) {
            $_SESSION['userData']['username'] = $row['username'];
            $correct = true;
        }
    }
    if (!$correct) {
        $toInclude = './views/noLogin/loginForm.php';
        $log['incorrectLogin'] = 'Incorrect login!';
    }
    $link->closeConnection();

?>
