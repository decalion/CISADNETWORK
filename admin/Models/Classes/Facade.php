<?php

/**
 * Basic Funcion for fast call and unification
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
    
    /**
     * Generic Update data
     * @param type $sql
     * @return type
     */
    public function updateData($sql){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->modify($sql);
        $db->close();
        return $result;
        
    }
    
    /**
     * Add data generic
     * @param type $sql
     * @return type
     */
     public function addData($sql){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->add($sql);
        $db->close();
        return $result;
        
    }
    
    /**
     * Genric Deleted Data
     * @param type $sql
     * @return type
     */
    public function deletedData($sql){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->deleted($sql);
        $db->close();
        return $result;
        
    }
    
    
    /**
     * Function to get all Movies Data
     * @return type
     */
    public function selectMoviesData(){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectMoviesData();
        $db->close();
        return $result;
        
    }
    
    
    
    public function selectSeriesData(){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectSeriesData();
        $db->close();
        return $result;
        
    }
    
    /**
     * Generic Select Data Actors 
     * @param type $sql
     * @return type
     */
        public function selectActorsAdd($sql){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectActorsAdd($sql);
        $db->close();
        return $result;
        
    }
    
        public function selectDirectorsAdd($sql){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectDirectorsAdd($sql);
        $db->close();
        return $result;
        
    }
    
    
    /**
     * Select All From Recipes
     * @return type
     */
    
    public function selectCooksData(){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectCooksData();
        $db->close();
        return $result;
        
    }
    
        /**
     * Select All From Books
     * @return type
     */
    
    public function selectBooksData(){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectBooksData();
        $db->close();
        return $result;   
    }
    
    
    public function selectAuthorAdd($sql){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectAuhorsAdd($sql);
        $db->close();
        return $result;  
    }
    
    
    public function selectNewsData(){
        $connection = new UConnection(HOST, USER, PASS, DATABASE);
        $db = new AdminMysqlImpl($connection);
        $result = $db->selectNewsData();
        $db->close();
        return $result; 
        
    }
    
    
}
