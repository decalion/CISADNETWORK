<?php
/**
 * 
 *
 * @author Ismael Caballero
 */
class Songs {
    private $idsongs;
    private $name;
    
    
    public function __construct() {
        
    }
    
    
    function getIdsongs() {
        return $this->idsongs;
    }

    function getName() {
        return $this->name;
    }

    function setIdsongs($idsongs) {
        $this->idsongs = $idsongs;
    }

    function setName($name) {
        $this->name = $name;
    }


    
}
