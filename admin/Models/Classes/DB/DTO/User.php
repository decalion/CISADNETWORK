<?php
/**
 * DTO Class for TABLE USER.
 *
 * @author Ismael Caballlero
 */
class User {
    private $Id;
    private $username;
    private $pass;
    private $name;
    private $lastname;
    private $email;
    private $avatarurl;
    private $idrol;
    private $rolname;
    private $activemail;
    private $active;
    
    function __construct() {
        
    }
    
    
    function getId() {
        return $this->Id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPass() {
        return $this->pass;
    }

    function getName() {
        return $this->name;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getEmail() {
        return $this->email;
    }

    function getAvatarurl() {
        return $this->avatarurl;
    }

    function getIdrol() {
        return $this->idrol;
    }

    function getRolname() {
        return $this->rolname;
    }

    function getActivemail() {
        return $this->activemail;
    }

    function getActive() {
        return $this->active;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAvatarurl($avatarurl) {
        $this->avatarurl = $avatarurl;
    }

    function setIdrol($idrol) {
        $this->idrol = $idrol;
    }

    function setRolname($rolname) {
        $this->rolname = $rolname;
    }

    function setActivemail($activemail) {
        $this->activemail = $activemail;
    }

    function setActive($active) {
        $this->active = $active;
    }



    
    
}
