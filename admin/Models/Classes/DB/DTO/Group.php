<?php

/**
 * DTO (Data Transfer Object) Class of Group Table
 *
 * @author Ismael Caballero 
 */
class Group {
   
    private $idgroup;
    private $name;
    private $year;
    private $imageurl;
    private $average;
    private $totalvotes;
    private $singer=array();
    private $cds=array();
    
    
    
    public function __construct() {
        
    }
    
    function getIdgroup() {
        return $this->idgroup;
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

    function getAverage() {
        return $this->average;
    }

    function getTotalvotes() {
        return $this->totalvotes;
    }


    function getCds() {
        return $this->cds;
    }

    function setIdgroup($idgroup) {
        $this->idgroup = $idgroup;
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

    function setAverage($average) {
        $this->average = $average;
    }

    function setTotalvotes($totalvotes) {
        $this->totalvotes = $totalvotes;
    }

    function setCds($cds) {
        $this->cds = $cds;
    }


    function getSinger() {
        return $this->singer;
    }

    function setSinger($singer) {
        $this->singer = $singer;
    }


    
    
    
}
