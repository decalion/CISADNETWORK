<?php

    function createDefault($link, $n) {
        for ($i = 0; $i < $n; $i++) {
            $result = $link->query('insert into movies values (null, "name'.$i.'", "sinopsi'.$i.'", "'.$i.'", "error.png", 0, 0);');
            if (!$result) {
                die('Invalid query: '.$link->getError());
            }
        }
        /*
        for ($i = 0; $i < $n; $i++) {
            $result = $link->query('insert into series values ();');
            if (!$result) {
                die('Invalid query: '.$link->getError());
            }
        }
        for ($i = 0; $i < $n; $i++) {
            $result = $link->query('insert into books values ();');
            if (!$result) {
                die('Invalid query: '.$link->getError());
            }
        }
        for ($i = 0; $i < $n; $i++) {
            $result = $link->query('insert into groups values ();');
            if (!$result) {
                die('Invalid query: '.$link->getError());
            }
        }
        for ($i = 0; $i < $n; $i++) {
            $result = $link->query('insert into recipes values ();');
            if (!$result) {
                die('Invalid query: '.$link->getError());
            }
        }
        */
    }

?>
