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
                //print_r($data);
                $books = $data[$_GET['action']];
                ?>
                <form method="post" action="index.php">
                    <div>
                        <input type="text"  name="idbooks"  value="<?php echo $books->getIdbooks(); ?>" hidden />
                        <label>BookName :</label> <input type="text" name="bookname" size="35" value="<?php echo $books->getName(); ?>"/>
                    </div>
                    <div>
                        <label>Sinopsi :</label><br><textarea rows="4" cols="50" name="sinopsi" ><?php echo $books->getSinopsi(); ?> </textarea>
                    </div>
                    <div>
                        <label>Year :</label><br><input type="text" name="bookyear" size="35" value="<?php echo $books->getYear(); ?>"/>
                    </div>
                    <div>
                          <label>ISBN :</label><br><input type="text" name="isbn" size="35" value="<?php echo $books->getIsbn(); ?>"/>
                    </div>
                    <div>
                        <input type="text"  name="ids"  value="138" hidden />
                        <input type="submit" value="Modify" />

                    </div>
                </form>
                <div class="mtop">
                        <label>Authos List : </label>
                        <center>
                        <table border="2">
                            <tr>
                                <td>Name</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <?php
                                $authors = $books->getAuthors();
                                foreach ($authors as $i => $author) {
                                    echo"<tr>";
                                    echo"<td>" . $author->getName() . "</td>";
                                    echo "<td><a href='index.php?ids=".DELAUTHOR."&action=".$books->getIdbooks()."&del=".$author->getIdauthor()."'><button>Deleted</button></a></td>";
                                    echo"</tr>";
                                    //echo"<option value='$i' selected>".$actor->getName()."</option>";
                                }
                                ?>
                            </tr>
                        </table>
                            </center>
                            <?php echo "<a href='index.php?ids=" . AUTHORBOOKS. "&action=$id'><button>Add New Actor </button></a>"; ?>
                    </div>
                <div>
                    <?php echo "<a href='index.php?ids=" . BACKBOOKS . "'><button>Back</button></a>"; ?>
                </div>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
