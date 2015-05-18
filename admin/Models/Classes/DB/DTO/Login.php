<?php

/**
 * DTO(Data Transfer Object) of User Table for Credential.
 *
 * @author Ismael Caballero
 */
class Login {
       
    
    private $username;
    private $pass;
    private $idrol;
    
   function __construct($username, $pass, $idrol) {
        $this->username = $username;
        $this->pass = $pass;
        $this->idrol = $idrol;
    }

    
    function getUsername() {
        return $this->username;
    }

    function getPass() {
        return $this->pass;
    }

    function getIdrol() {
        return $this->idrol;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setIdrol($idrol) {
        $this->idrol = $idrol;
    }
}
