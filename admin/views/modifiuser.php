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

            </div>
            <div class="center">
                <?php
                $data = $facade->selectUserData();
                //print_r($data);
                $user=$data[$_GET['action']];
                ?>
                <form method="post" action="">
                    <div>
                    <label>Username :</label> <input type="text" name="username" value="<?php echo $user->getUsername();  ?>"/>
                    </div>
                    <div>
                    <label>Password :</label> <input type="text" name="pass" value="<?php echo $user->getPass();  ?>"/>
                    </div>
                    <div>
                    <label>name :</label> <input type="text" name="name" value="<?php echo $user->getName();  ?>"/>
                    </div>
                    <div>
                    <label>surname :</label> <input type="text" name="surname" value="<?php echo $user->getLastname();  ?>"/>
                    </div>
                    <div>
                    <label>email :</label> <input type="text" name="email" value="<?php echo $user->getEmail();  ?>"/>
                    </div>
                    <div>
                        <select>
                            <?php   
                                 if($user->getIdrol()==1){
                                     echo"<option value='1' selected>Admin</option>";
                                     echo"<option value='2'>User</option>";
                                 }else{
                                     echo"<option value='1'>Admin</option>";
                                     echo"<option value='2' selected>User</option>";
                                 }
                            
                            ?>
                        </select>
                    </div>
                    
                    
                    
                </form>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
