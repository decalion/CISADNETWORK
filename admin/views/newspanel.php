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
               <?php include './views/menuitem.php'; ?>
            </div>
            <div class="center">
              <center>
                    <?php if(isset($msg)){ echo $msg;} ?>
                    <table border=2>
                        <tr>
                            <td>IdNew</td>
                            <td>Name</td>
                            <td>Date</td>
                            <td>Modify</td>
                            <td>Deleted</td>
                        </tr>
                        <?php
                       $news=$facade->selectNewsData();
                       
                       foreach($news as $i => $new){
                           echo"<tr>";
                           echo"<td>".$new->getIdnew() ."</td>";
                           echo"<td>" .$new->getName() . "</td>";
                           echo"<td>".$new->getDate() ."</td>";
                           echo "<td><a href='index.php?ids=".MODIFYNEWS."&action=$i'><button>Modify</button></a></td>";
                           echo "<td><a href='index.php?ids=".CONFDELNEWS."&action=$i'><button>Deleted</button></a></td>";
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
