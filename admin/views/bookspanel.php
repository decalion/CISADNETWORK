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
                <div class="menubuton">
                    <label><a href="./index.php?ids=101">User</a></label>
                </div>
                <div class="menubuton">
                    <label><a href="./index.php?ids=106">Movies</a></label>
                </div>
                <div class="menubuton">
                    <label><a href="./index.php?ids=115">Series</a></label>
                </div>
                <div class="menubuton">
                    <label>Music</label>
                </div>
                <div class="menubuton">
                    <label>News</label>
                </div>
                <div class="menubuton">
                   <label><a href="./index.php?ids=131">cookRecipes</a></label>
                </div>
                <div class="menubuton">
                    <label><a href="./index.php?ids=136">Books</a></label>
                </div>
                <div class="menubuton">
                    <label>Backups</label>
                </div>
                <div class="menubuton">
                    <label><a href="./index.php?ids=10">Logout</a></label>
                </div>
            </div>
            <div class="center">
              <center>
                    <?php if(isset($msg)){ echo $msg;} ?>
                    <table border=2>
                        <tr>
                            <td>Idbooks</td>
                            <td>Name</td>
                            <td>Modify</td>
                            <td>Deleted</td>
                        </tr>
                        <?php
                       $books=$facade->selectBooksData();
                       
                       foreach($books as $i => $book){
                           echo"<tr>";
                           echo"<td>".$book->getIdbooks() ."</td>";
                           echo"<td>" .$book->getName() . "</td>";
                           echo "<td><a href='index.php?ids=".MODIFYBOOKS."&action=$i'><button>Modify</button></a></td>";
                           echo "<td><a href='index.php?ids=".CONFDELETECOOKS."&action=$i'><button>Deleted</button></a></td>";
                           echo"</tr>";
                       }
                        ?>
                        
                    </table>
              </center>

            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
