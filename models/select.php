    <?php

    $ajax = true;

    include './classes/Connection.php';
    include './dbConnection.php';
    include './functions.php';

    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), 'cisadnetwork');

    $table_names = array("movies", "books", "users","","","");


    foreach ($table_names as $table_name) {

        $results[] = getDataByType($link, $table_name);
    }
    foreach ($results as $key => $value) {

        foreach ($value as $key => $values) {

            $fields[] = $values;
        }
    }
    /*
    echo "<h1></h1>";
    var_dump($fields);
*/


    

     
      //$array=array("hola","que","tal");
      //echo count($data);
      $q=$_GET['q'];



      
      $lastFinds[]=null;
      //echo "<ul class='search'>";
      if (strlen($q) !== 0) {
      foreach ($fields as $key => $value) {

      $pos = strpos($value, $q);
      if ($pos !== false) {
      $lastFinds[] = $value;
      }
      }
      foreach ($lastFinds as $value) {

      echo "<li><a href='index.php?type=movies&id=1>".$value."</a></li>";
      }
      }
     
      //echo "</ul>";
     
    $link->closeConnection();
    ?>