<?php
/**
 * Description of News
 *
 * @author Ismael Caballero
 */
class News {
    
    private $idnew;
    private $iduser;
    private $author;
    private $name;
    private $imageurl;
    private $description;
    private $date;
    private $average;
    private $totalvotes;
    
    
    public function __construct() {
        
    }
    
    
    function getIdnew() {
        return $this->idnew;
    }

    function getIduser() {
        return $this->iduser;
    }

    function getAuthor() {
        return $this->author;
    }

    function getName() {
        return $this->name;
    }

    function getImageurl() {
        return $this->imageurl;
    }

    function getDescription() {
        return $this->description;
    }

    function getDate() {
        return $this->date;
    }

    function getAverage() {
        return $this->average;
    }

    function getTotalvotes() {
        return $this->totalvotes;
    }

    function setIdnew($idnew) {
        $this->idnew = $idnew;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setImageurl($imageurl) {
        $this->imageurl = $imageurl;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setAverage($average) {
        $this->average = $average;
    }

    function setTotalvotes($totalvotes) {
        $this->totalvotes = $totalvotes;
    }


    
    
    
    
    
}
