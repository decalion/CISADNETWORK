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
                $user = $data[$_GET['action']];
                ?>
                <form method="post" action="">
                    <div>
                        <input type="text"  name="iduser"  value="<?php echo $user->getId(); ?>" hidden />
                        <label>Username :</label> <?php echo $user->getUsername(); ?>
                    </div>
                    <div>
                        <label>Password :</label><?php echo $user->getPass(); ?>
                    </div>
                    <div>
                        <label>name :</label><?php echo $user->getName(); ?>
                    </div>
                    <div>
                        <label>surname :</label><?php echo $user->getLastname(); ?>
                    </div>
                    <div>
                        <label>email :</label><?php echo $user->getEmail(); ?>
                    </div>
                    <div>
                        <label>Permision :</label>
 
                            <?php
                            if ($user->getIdrol() == 1) {
                                echo"Admin";
                            } else {
                                echo"User";
                            }
                            ?>
                    </div>
                    <div>
                        <label>Active User :</label> 
                            <?php
                            if ($user->getActive() == 1) {
                                echo"Active";
                            } else {
                                echo"disable";
                            }
                            ?>

                    </div>
                    <div>
                        <input type="text"  name="ids"  value="105" hidden />
                        <input type="submit" value="Deleted" />

                    </div>
                </form>
                <div>
                    <?php echo "<a href='index.php?ids=" . BACK . "'><button>Back</button></a>"; ?>
                </div>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
