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
                $data = $facade->selectSeriesData();
                //print_r($data);
                $serie = $data[$_GET['action']];
                ?>
                <form method="post" action="">
                    <div>
                        <input type="text"  name="idserie"  value="<?php echo $serie->getIdserie(); ?>" hidden />
                        <label>Name chapter :</label> <input type="text" name="name" />
                    </div>
                    <div>
                        <label>Season Number :</label> <input type="text" name="season" />
                    </div>
                    <div>
                        <label>Chapter Number :</label><input type="text" name="chapter" />
                    </div>
                    <div>
                        <input type="text"  name="ids"  value="130" hidden />
                        <input type="submit" value="Add Chapter" />

                    </div>
                </form>
                <div>
                    <?php echo "<a href='index.php?ids=" . BACKSERIES . "'><button>Back</button></a>"; ?>
                </div>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
