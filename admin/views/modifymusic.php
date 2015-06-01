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
                ?>
                <form method="post" action="index.php">
                    <div>
                        <input type="text"  name="idmusic"  value="<?php echo $music->getIdgroup(); ?>" hidden />
                        <label>Name :</label> <input type="text" name="name" size="35" value="<?php echo $music->getName(); ?>"/>
                    </div>
                    <div>
                        <label>Year :</label><input type="text" name="year" size="35" value="<?php echo $music->getYear(); ?>"/>
                    </div>
                    <div>
                        <input type="text"  name="ids"  value="147" hidden />
                        <input type="submit" value="Modify" />

                    </div>
                </form>
                  <div class="mtop">
                        <label>Singers List : </label>
                        <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <?php
                                $singers = $music->getSinger();
                                foreach ($singers as $i => $singer) {
                                    echo"<tr>";
                                    echo"<td>" . $singer->getName() . "</td>";
                                    echo "<td><a href='index.php?ids=".DELSINGER."&action=".$music->getIdgroup()."&del=".$singer->getIdsinger()."'><button>Deleted</button></a></td>";
                                    echo"</tr>";
                                    //echo"<option value='$i' selected>".$actor->getName()."</option>";
                                }
                                ?>
                            </tr>
                        </table>
                            </center>
                            <?php echo "<a href='index.php?ids=" .MUSICSINGER. "&action=$id'><button>Add New Singer </button></a>"; ?>
                    </div>
                    <div class="mtop">
                        <label>CDS List : </label>
                        <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                                <td>Modify</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <?php
                                $cds = $music->getCds();
                                foreach ($cds as $i => $cd) {
                                    echo"<tr>";
                                    echo"<td>" . $cd->getName() . "</td>";
                                    echo "<td><a href='index.php?ids=".MODIFYCD."&action=".$cd->getIdcds()."&mod=".$i."'><button>Modify</button></a></td>";
                                    echo "<td><a href='index.php?ids=".DELCDS."&action=".$cd->getIdcds()."&del=".$music->getIdgroup()."'><button>Deleted</button></a></td>";
                                    echo"</tr>";
                                    //echo"<option value='$i' selected>".$actor->getName()."</option>";
                                }
                                ?>
                            </tr>
                        </table>
                            </center>
                            <?php echo "<a href='index.php?ids=" .MUSICSINGER. "&action=$id'><button>Add CDS </button></a>"; ?>
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
