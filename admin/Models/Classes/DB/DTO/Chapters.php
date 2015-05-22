<?php
/**
 * DTO (Data Transfer Object) Class of Chapters Table
 *
 * @author Ismael Caballero
 */
class Chapters {
    
    private $idchapter;
    private $name;
    private $numberchapter;
    private $seasonnumber;
    private $idserie;
    
    
    
    public function __construct() {
       
    }
    
    
    
    function getIdchapter() {
        return $this->idchapter;
    }

    function getName() {
        return $this->name;
    }

    function getNumberchapter() {
        return $this->numberchapter;
    }

    function getSeasonnumber() {
        return $this->seasonnumber;
    }

    function getIdserie() {
        return $this->idserie;
    }

    function setIdchapter($idchapter) {
        $this->idchapter = $idchapter;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setNumberchapter($numberchapter) {
        $this->numberchapter = $numberchapter;
    }

    function setSeasonnumber($seasonnumber) {
        $this->seasonnumber = $seasonnumber;
    }

    function setIdserie($idserie) {
        $this->idserie = $idserie;
    }

}
