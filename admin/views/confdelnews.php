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
                $data = $facade->selectCooksData();
                $id=$_GET['action'];
                //print_r($data);
                $news = $data[$_GET['action']];
                ?>

                <form method="post" action="index.php">
                    <div class="mtop">
                        <input type="text"  name="idnews"  value="<?php echo $news->getIdnew(); ?>" hidden />
                        <label>Name :</label> <?php echo $news->getName(); ?>
                    </div>
                    <div class="mtop">
                         <label>Descirpion :</label><br><?php echo $news->getDescription(); ?>
                    </div>
                    <div class="mtop">
                        <input type="text"  name="ids"  value="148" hidden />
                        <input type="submit" value="Delete" />
                    </div>
                </form>
                <div class="mtop">
                    <?php echo "<a href='index.php?ids=" . BACKNEWS . "'><button>Back</button></a>"; ?>
                </div>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
