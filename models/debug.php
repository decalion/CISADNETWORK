<?php

    function createDefault($link, $n) {
        createDefaultMovies($link, $n);
    }

    function createDefaultMovies($link, $n) {
        for ($i = 0; $i < $n; $i++) {
            $result = $link->query('insert into movies values (null, "title'.$i.'", "sinopsi'.$i.'", "url'.$i.'", 0, 0);');
            if (!$result) {
                die('Invalid query: '.$link->getError());
            }
        }
    }

?>
