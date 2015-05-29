<?php
/**
 * Description of Singer
 *
 * @author Ismael Caballero
 */
class Singer {
    
    private $idsinger;
    private $name;
    private $imageurl;
    
    
    public function __construct(){
        
        
    }
    
    
    function getIdsinger() {
        return $this->idsinger;
    }

    function getName() {
        return $this->name;
    }

    function getImageurl() {
        return $this->imageurl;
    }

    function setIdsinger($idsinger) {
        $this->idsinger = $idsinger;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setImageurl($imageurl) {
        $this->imageurl = $imageurl;
    }

}
