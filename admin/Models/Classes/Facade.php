<?php

/**
 * Description of Facade
 *
 * @author Ismael Caballero
 */
class Facade {

    public function __construct() {
        
    }

    /**
     * Funcion to get the user list name,pass,permision
     * @return type
     */
    public function selectCredencials() {
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectCredencials();
        $db->close();
        return $result;
    }
    
    
    /**
     * funcion to get all user data
     * @return type
     */
    public function selectUserData() {
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectUserData();
        $db->close();
        return $result;
    }
    
    
    public function updateData($sql){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->modify($sql);
        $db->close();
        return $result;
        
    }
    
    public function deletedData($sql){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->deleted($sql);
        $db->close();
        return $result;
        
    }
}
