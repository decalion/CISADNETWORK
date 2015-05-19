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
                //print_r($data);
                $movie = $data[$_GET['action']];
         
            ?>
          
            <form method="post" action="index.php">
                <div>
                    <input type="text"  name="idmovie"  value="<?php  echo $movie->getIdmovie(); ?>" hidden />
                    <label>Name :</label> <input type="text" name="username" size="35" value="<?php echo $movie->getName();?>"/>
                </div>
                <div>
                    <label>Year :</label> <input type="text" name="year" size="35" value="<?php echo $movie->getYear();?>"/>
                </div>
                <div>
                    <label>Sinopsi :</label><br> <textarea rows="4" cols="50" name="sinopsi" ><?php echo $movie->getSinopsi();?> </textarea>
                </div>
                <div>
                    <label>Actors List : </label><select name="actors">
                        <?php
                            $actors=$movie->getActors();
                            foreach($actors as $i => $actor){
                                
                                echo"<option value='$i' selected>".$actor->getName()."</option>";
                                
                            }
                        
                        
                        ?>
                        
                    </select>
                    <?php echo "<a href='index.php?ids=" . ACTORSMOVIE . "'><button>Modifi Actors </button></a>"; ?>
                </div>
 
            </form>
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
