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
               <?php include './views/menuitem.php'; ?>
            </div>
            <div class="center">
              <center>
                    <?php if(isset($msg)){ echo $msg;} ?>
                    <table border=2>
                        <tr>
                            <td>Idgroup</td>
                            <td>Name</td>
                            <td>Modify</td>
                            <td>Deleted</td>
                        </tr>
                        <?php
                       $musics=$facade->selectMusicData();
                       foreach($musics as $i => $music){
                           echo"<tr>";
                           echo"<td>".$music->getIdgroup() ."</td>";
                           echo"<td>" .$music->getName() . "</td>";
                           echo "<td><a href='index.php?ids=".MODIFYMUSIC."&action=$i'><button>Modify</button></a></td>";
                           echo "<td><a href='index.php?ids=".CONFDELMUSIC."&action=$i'><button>Deleted</button></a></td>";
                           echo"</tr>";
                       }
                        ?>
                        
                    </table>
              </center>

            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
