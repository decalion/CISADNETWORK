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
                $data = $facade->selectMoviesData();
                //print_r($data);
                $movie = $data[$_GET['action']];
         
            ?>
          
            <form method="post" action="index.php">
                <div>
                    <input type="text"  name="idmovie"  value="<?php echo $movie->getIdmovie(); ?>" hidden />
                    <label>Name :</label> <input type="text" name="username" size="35" value="<?php echo $movie->getName();?>"/>
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
