<?php

/**
 * Description of Facade
 *
 * @author Ismael Caballero
 */
class Facade {

    public function __construct() {
        
    }

    public function selectCredencials() {
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectCredencials();
        $db->close();
        return $result;
    }

}
