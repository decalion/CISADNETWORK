<?php
/**
 * DTO (Data Transfer Object) Class of Author Table
 *
 * @author Ismael Caballero
 */
class Author {
    
    private $idauthor;
    private $name;
    private $imageurl;
    
    
    
    public function __construct() {
        
    }
    
    function getIdauthor() {
        return $this->idauthor;
    }

    function getName() {
        return $this->name;
    }

    function getImageurl() {
        return $this->imageurl;
    }

    function setIdauthor($idauthor) {
        $this->idauthor = $idauthor;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setImageurl($imageurl) {
        $this->imageurl = $imageurl;
    }


    
   
}
