<?php

    $table_names = array("movies", "books", "users", "recipes", "authors", "groups", "cds", "singers", "actors", "directors", "series", "news", "songs");

    if (strlen($_POST['userInputSearch']) !== 0) {
        foreach ($table_names as $table_name) {
            if (strcmp($table_name, 'users') == 0) {
                $field = 'username';
            } else {
                $field = 'name';
            }
            $query = 'select id'.$table_name.', '.$field.' from '.$table_name;
            $result=$link->query($query);
            if($result) {
                foreach ($result as $object) {
                    if($object !== null){
                        $pos = strpos(strtolower($object[$field]), strtolower($_POST['userInputSearch']));
                        if ($pos !== false) {
                            $linksArray[$table_name][] = '<li><a href="index.php?type='.$table_name.'&id='.$object['id'.$table_name].'"/>'.$object[$field].'</a></li>';
                        }
                    }
                }    
            }
        }
    }
    if (isset($linksArray)) {
        foreach ($linksArray as $key => $links) {
            echo '<h1 class="capitalize">'.$key.'</h1>';
            foreach ($links as $object) {
                echo $object;
            }
        }
    } else {
        echo 'Nothing found!';
    }

?>