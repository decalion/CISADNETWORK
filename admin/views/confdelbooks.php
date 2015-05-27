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
                $data = $facade->selectBooksData();
                $id=$_GET['action'];
                //print_r($data);
                $books = $data[$_GET['action']];
                ?>

                <form method="post" action="index.php">
                    <div class="mtop">
                        <input type="text"  name="idbooks"  value="<?php echo $books->getIdbooks(); ?>" hidden />
                        <label>Name :</label> <?php echo $books->getName(); ?>
                    </div>
                    <div class="mtop">
                        <label>Year :<?php echo $books->getYear(); ?>
                    </div>
                    <div class="mtop">
                        <label>Sinopsi :</label><?php echo $books->getSinopsi(); ?>
                    </div>
                    <div class="mtop">
                        <label>ISBN :</label><?php echo $books->getIsbn(); ?>
                    </div>
      
                 <div class="mtop">
                        <label>Author List : </label>
                        <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                            </tr>
                            <tr>
                                <?php
                                $authors = $books->getAuthors();
                                foreach ($authors as $i => $author) {
                                    echo"<tr>";
                                    echo"<td>" . $author->getName() . "</td>";
                                    echo"</tr>";
                                    //echo"<option value='$i' selected>".$actor->getName()."</option>";
                                }
                                ?>
                            </tr>
                        </table>
                            </center>
                    </div>

                    <div class="mtop">
                        <input type="text"  name="ids"  value="140" hidden />
                        <input type="submit" value="Delete" />
                    </div>
                </form>
                <div class="mtop">
                    <?php echo "<a href='index.php?ids=" . BACKBOOKS . "'><button>Back</button></a>"; ?>
                </div>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
