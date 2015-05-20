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
                <h2>Actor List</h2>
            </div>
            <div class="center">
                <?php
                $data = $facade->selectMoviesData();
                $movie = $data[$_GET['action']];
                //print_r($movie);
                $actormovie = $movie->getActors();

                $sql = "SELECT idactors,name FROM actors WHERE idactors NOT IN (";
                $totalactors = count($actormovie);


                foreach ($actormovie as $i => $actor) {

                    if ($i == $totalactors - 1) {

                        $sql.="" . $actor->getIdactors() . ")";
                    } else {

                        $sql.="" . $actor->getIdactors() . ",";
                    }
                }

                $list = $facade->selectActorsAdd($sql);

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
                                echo "<td><a href='index.php?ids=".ADDACTORMOVIE."&action=".$movie->getIdmovie()."&ad=".$person->getIdactors()."'><button>Add</button></a></td>";
                                echo"</tr>";

                            }
                        ?>
                    </table>
                </center>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>