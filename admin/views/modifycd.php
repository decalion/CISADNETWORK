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
                $data = $facade->selectMusicData();
                //print_r($data);
                $music = $data[$_GET['action']];
                $cds = $music->getCds();
                ?>
                    <div class="mtop">
                        <label>CDS List : </label>
                        <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <?php
                                $songs=$cds[$_GET['mod']]->getSongs();
                                $idcd=$cds[$_GET['mod']]->getIdcds();
                                
                                foreach ($songs as $i => $song) {
                                    echo"<tr>";
                                    echo"<td>" . $song->getName() . "</td>";
                                    echo "<td><a href='index.php?ids=".DELCDS."&action=".$idcd."&del=".$song->getIdsongs()."'><button>Deleted</button></a></td>";
                                    echo"</tr>";
                                    //echo"<option value='$i' selected>".$actor->getName()."</option>";
                                }
                                ?>
                            </tr>
                        </table>
                            </center>
                            <?php echo "<a href='index.php?ids=" .CDSSONGS. "&action=$id'><button>Add Songs </button></a>"; ?>
                    </div>
                
                <div>
                    <?php echo "<a href='index.php?ids=" . BACKMUSIC . "'><button>Back</button></a>"; ?>
                </div>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
