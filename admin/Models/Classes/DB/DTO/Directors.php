<?php

/**
 * DTO (Data Transfer Object) Class of Directors Table
 *
 * @author Ismael Caballero
 */
class Directors {
    
    
    private $iddirector;
    private $name;
    private $imageurl;
    
    
    
    public function __construct() {
       
    }
    
    function getIddirector() {
        
        return $this->iddirector;
    }

    function getName() {
        return $this->name;
    }

    function getImageurl() {
        return $this->imageurl;
    }

    function setIddirector($iddirector) {
        $this->iddirector = $iddirector;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setImageurl($imageurl) {
        $this->imageurl = $imageurl;
    }


    
    
    
    
}
