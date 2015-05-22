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
                    <div class="mtop">
                        <input type="text"  name="idmovie"  value="<?php echo $movie->getIdmovie(); ?>" hidden />
                        <label>Name :</label> <input type="text" name="moviename" size="35" value="<?php echo $movie->getName(); ?>"/>
                    </div>
                    <div class="mtop">
                        <label>Year :</label> <input type="text" name="year" size="35" value="<?php echo $movie->getYear(); ?>"/>
                    </div>
                    <div class="mtop">
                        <label>Sinopsi :</label><br> <textarea rows="4" cols="50" name="sinopsi" ><?php echo $movie->getSinopsi(); ?> </textarea>
                    </div>
                    <div class="mtop">
                        <input type="text"  name="ids"  value="114" hidden />
                        <input type="submit" value="Modify" />
                    </div>
                </form>
                 <div class="mtop">
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
                
                <div class="mtop">
                    <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                            </tr>
                            <?php
                                $directors=$movie->getDirectors();
                                foreach ($directors as $director){
                                    echo"<tr>";
                                    echo"<td>".$director->getName()."</td>";
                                    echo "<td><a href='index.php?ids=".DELDIRECTORMOVIES."&action=".$movie->getIdmovie()."&del=".$director->getIddirector()."'><button>Deleted</button></a></td>";
                                    echo"</tr>";
                                }
                            ?>
                        </table>
                    </center>
                    <?php echo "<a href='index.php?ids=" . DIRECTORSMOVIES . "&action=$id'><button>Add New Director </button></a>"; ?>
                </div>
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
