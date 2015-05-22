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
                $id=$_GET['action'];
                //print_r($data);
                $serie = $data[$_GET['action']];
                ?>

                <form method="post" action="index.php">
                    <div class="mtop">
                        <input type="text"  name="idmovie"  value="<?php echo $serie->getIdmovie(); ?>" hidden />
                        <label>Name :</label> <?php echo $serie->getName(); ?>
                    </div>
                    <div class="mtop">
                        <label>Year :<?php echo $serie->getYear(); ?>
                    </div>
                    <div class="mtop">
                        <label>Sinopsi :</label><?php echo $serie->getSinopsi(); ?>
                    </div>
      
                 <div class="mtop">
                        <label>Actors List : </label>
                        <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                            </tr>
                            <tr>
                                <?php
                                $actors = $serie->getActors();
                                foreach ($actors as $i => $actor) {
                                    echo"<tr>";
                                    echo"<td>" . $actor->getName() . "</td>";
                                    echo"</tr>";
                                    //echo"<option value='$i' selected>".$actor->getName()."</option>";
                                }
                                ?>
                            </tr>
                        </table>
                            </center>
                    </div>
                
                <div class="mtop">
                    <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                            </tr>
                            <?php
                                $directors=$serie->getDirectors();
                                foreach ($directors as $director){
                                    echo"<tr>";
                                    echo"<td>".$director->getName()."</td>";
                                    echo"</tr>";
                                }
                            ?>
                        </table>
                    </center>
                </div>
                    <div class="mtop">
                        <input type="text"  name="ids"  value="116" hidden />
                        <input type="submit" value="Delete" />
                    </div>
                </form>
                <div class="mtop">
                    <?php echo "<a href='index.php?ids=" . BACKMOVIES . "'><button>Back</button></a>"; ?>
                </div>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
