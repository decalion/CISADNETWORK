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
                <h2>Director List</h2>
            </div>
            <div class="center">
                <?php
                $data = $facade->selectSeriesData();
                $serie = $data[$_GET['action']];
                
                $directormovie = $serie->getDirectors();

                $sql = "SELECT iddirectors,name FROM directors WHERE iddirectors NOT IN (";
                $totalactors = count($directormovie);
               

                foreach ($directormovie as $i => $director) {

                    if ($i == $totalactors - 1) {

                        $sql.="" . $director->getIddirector() . ")";
                    } else {

                        $sql.="" . $director->getIddirector() . ",";
                    }
                }
               
                $list = $facade->selectDirectorsAdd($sql);

                ?>
                <center>
                    <table border="2">
                        <tr>
                            <td>Name</td>
                            <td>Add</td>
                        </tr>
                        <?php
                            foreach ($list as $person){
                                echo"<tr>";
                                echo"<td>".$person->getName()."</td>";
                                echo "<td><a href='index.php?ids=".ADDDIRECTORSERIES."&action=".$serie->getIdserie()."&ad=".$person->getIddirector()."'><button>Add</button></a></td>";
                                echo"</tr>";

                            }
                        ?>
                    </table>
                </center>
            </div>
            <div>
                <?php echo "<a href='index.php?ids=" . BACKSERIES . "'><button>Back</button></a>"; ?>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>