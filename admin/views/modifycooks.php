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
                //print_r($data);
                $cooks = $data[$_GET['action']];
                ?>
                <form method="post" action="index.php">
                    <div>
                        <input type="text"  name="idcooks"  value="<?php echo $cooks->getIdrecipes(); ?>" hidden />
                        <label>Cookname :</label> <input type="text" name="cookname" size="35" value="<?php echo $cooks->getName(); ?>"/>
                    </div>
                    <div>
                        <label>Descirpion :</label><br><textarea rows="4" cols="50" name="desc" ><?php echo $cooks->getDescription(); ?> </textarea>
                    </div>
                    <div>
                        <input type="text"  name="ids"  value="133" hidden />
                        <input type="submit" value="Modify" />

                    </div>
                </form>
                <div>
                    <?php echo "<a href='index.php?ids=" . BACKCOOKRECIDE . "'><button>Back</button></a>"; ?>
                </div>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
