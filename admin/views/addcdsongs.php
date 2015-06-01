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
                <h2>Add Songs</h2>
            </div>
            <div class="center">
                <form method="POST" >
                    <div>
                        <input type="text"  name="idmusic"  value="<?php echo $_GET['action']; ?>" hidden />
                        <input type="text"  name="idcds"  value="<?php echo $_GET['state']; ?>" hidden />
                    </div>
                    <div>
                        <label>Song Name :</label>  <input type="text"  name="name" size="35" />
                    </div>
                    <div>
                        <input type="text"  name="ids"  value="161" hidden />
                        <input type="submit" value="Add Song" />
                    </div>
                </form>
            </div>
            <div>
                <?php echo "<a href='index.php?ids=" . BACKMUSIC . "'><button>Back</button></a>"; ?>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>