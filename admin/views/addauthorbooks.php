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
                <h2>Author List</h2>
            </div>
            <div class="center">
                <?php
                $data = $facade->selectBooksData();
                $book = $data[$_GET['action']];
                
                $authorbook = $book->getAuthors();

                $sql = "SELECT idauthors,name FROM authors WHERE idauthors NOT IN (";
                $totalactors = count($authorbook);
               

                foreach ($authorbook as $i => $author) {

                    if ($i == $totalactors - 1) {

                        $sql.="" . $author->getIdauthor() . ")";
                    } else {

                        $sql.="" . $author->getIdauthor() . ",";
                    }
                }
               
                $list = $facade->selectAuthorAdd($sql);

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
                                echo "<td><a href='index.php?ids=".ADDAUTHORSBOOK."&action=".$book->getIdbooks()."&ad=".$person->getIdauthor()."'><button>Add</button></a></td>";
                                echo"</tr>";

                            }
                        ?>
                    </table>
                </center>
            </div>
            <div>
                <?php echo "<a href='index.php?ids=" . BACKBOOKS . "'><button>Back</button></a>"; ?>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>