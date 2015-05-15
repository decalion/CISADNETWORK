<?php

include './models/classes/Factory.php';

function loadDefault($type, $link) {
    $factory = new Factory($type, $link);
    $factory->loadDefaultInfo();
}

function encrypt($password) {
    return sha1($password);
}

function getMovie() {

    $result = $this->link->query("SELECT name FROM genres INNER JOIN genresmovies WHERE genres.idgenres = genres" . $this->type . ".idgenres GROUP BY idgenres ;");
    while ($row = mysqli_fetch_row($result)) {
        $return[] = $row;
    }
    return $return;
}

?>
