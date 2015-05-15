<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="./css/panelstyle.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="menubuton">
                    <label><a href="./index.php?ids=101">User</a></label>
                </div>
                <div class="menubuton">
                    <label>Movie</label>
                </div>
                <div class="menubuton">
                    <label>Series</label>
                </div>
                <div class="menubuton">
                    <label>Music</label>
                </div>
                <div class="menubuton">
                    <label>News</label>
                </div>
                <div class="menubuton">
                    <label>Cookrecide</label>
                </div>
                <div class="menubuton">
                    <label>Books</label>
                </div>
                <div class="menubuton">
                    <label>Backups</label>
                </div>
                <div class="menubuton">
                    <label><a href="./index.php?ids=10">Logout</a></label>
                </div>
            </div>
            <div class="center">
                <center>
                    <table border=2>
                        <tr>
                            <td>id</td>
                            <td>nameuser</td>
                            <td>password</td>
                            <td>name</td>
                            <td>lastname</td>
                            <td>email</td>
                            <td>avatarurl</td>
                            <td>rol</td>
                            <td>activemail</td>
                            <td>active</td>
                            <td>Modify</td>
                        </tr>
                        <?php
                        $data = $facade->selectUserData();
                        foreach ($data as $i => $user) {
                            echo"<tr>";
                            echo"<td>" . $user->getId() . "</td>";
                            echo"<td>" . $user->getUsername() . "</td>";
                            echo"<td>" . $user->getPass() . "</td>";
                            echo"<td>" . $user->getName() . "</td>";
                            echo"<td>" . $user->getLastname() . "</td>";
                            echo"<td>" . $user->getEmail() . "</td>";
                            echo"<td>" . $user->getAvatarurl() . "</td>";
                            echo"<td>" . $user->getRolname() . "</td>";
                            echo"<td>" . $user->getActivemail() . "</td>";
                            echo"<td>" . $user->getActive() . "</td>";
                            echo "<td><a href='index.php?ids=".USERMODIFY."&action=$i'><button>Modify</button></a></td>";
                            echo"</tr>";
                        }
                        ?>
                    </table>
                </center>
<?php //print_r($facade->selectUserData());   ?>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
