<?php
/**
 * DTO (Data Transfer Object) Class of CDS Table
 *
 * @author ismael caballero
 */
class CDS {
    
    private $idcds;
    private $name;
    private $year;
    private $imageurl;
    private $songs=array();
    
    
    public function __construct() {
        
    }
    
    function getSongs() {
        return $this->songs;
    }

    function setSongs($songs) {
        $this->songs = $songs;
    }

        function getIdcds() {
        return $this->idcds;
    }

    function getName() {
        return $this->name;
    }

    function getYear() {
        return $this->year;
    }

    function getImageurl() {
        return $this->imageurl;
    }

    function setIdcds($idcds) {
        $this->idcds = $idcds;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setYear($year) {
        $this->year = $year;
    }

    function setImageurl($imageurl) {
        $this->imageurl = $imageurl;
    }


    
    
    
}
