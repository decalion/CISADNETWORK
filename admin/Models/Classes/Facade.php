<?php

/**
 * Description of Facade
 *
 * @author Ismael Caballero
 */
class Facade {

    public function __construct() {
        
    }

    public function selectServerFromGenesisDB() {
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminImplMysql($connection);
        $result = $db->selectServers();
        $db->close();
        return $result;
    }

}
