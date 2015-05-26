<?php
/**
 * DTO (Data Transfer Object) Class of Recipes Table
 *
 * @author Ismael Caballero
 */
class Recipes {
   
    private $idrecipes;
    private $name;
    private $imageurl;
    private $description;
    private $average;
    private $totalvotes;
    
    
    public function __construct() {
        
        
    }
    
    function getIdrecipes() {
        return $this->idrecipes;
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

    function getAverage() {
        return $this->average;
    }

    function getTotalvotes() {
        return $this->totalvotes;
    }

    function setIdrecipes($idrecipes) {
        $this->idrecipes = $idrecipes;
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

    function setAverage($average) {
        $this->average = $average;
    }

    function setTotalvotes($totalvotes) {
        $this->totalvotes = $totalvotes;
    }


    
    
    
    
    
    
}
