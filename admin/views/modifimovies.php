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
                $movie = $data[$_GET['action']];
                ?>

                <form method="post" action="index.php">
                    <div>
                        <input type="text"  name="idmovie"  value="<?php echo $movie->getIdmovie(); ?>" hidden />
                        <label>Name :</label> <input type="text" name="username" size="35" value="<?php echo $movie->getName(); ?>"/>
                    </div>
                    <div>
                        <label>Year :</label> <input type="text" name="year" size="35" value="<?php echo $movie->getYear(); ?>"/>
                    </div>
                    <div>
                        <label>Sinopsi :</label><br> <textarea rows="4" cols="50" name="sinopsi" ><?php echo $movie->getSinopsi(); ?> </textarea>
                    </div>
                   

                </form>
                 <div>
                        <label>Actors List : </label>
                        <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <?php
                                $actors = $movie->getActors();
                                foreach ($actors as $i => $actor) {
                                    echo"<tr>";
                                    echo"<td>" . $actor->getName() . "</td>";
                                    echo "<td><a href='index.php?ids=".DELMOVIEACTOR."&action=".$movie->getIdmovie()."&del=".$actor->getIdactors()."'><button>Deleted</button></a></td>";
                                    echo"</tr>";
                                    //echo"<option value='$i' selected>".$actor->getName()."</option>";
                                }
                                ?>
                            </tr>
                        </table>
                            </center>
                            <?php echo "<a href='index.php?ids=" . ACTORSMOVIE . "&action=$id'><button>Add New Actor </button></a>"; ?>
                    </div>
                <div>
                    <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                            </tr>
                            
                            
                            
                        </table>
                    </center>
                </div>
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