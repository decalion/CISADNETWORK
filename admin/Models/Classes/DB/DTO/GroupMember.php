<?php
/**
 * 
 *
 * @author Ismael Caballero
 */
class GroupMember {
    
    private $singer=array();
    
    
    
    public function __construct(){
        
    }
    
    
    function getSinger() {
        return $this->singer;
    }

    function setSinger($singer) {
        $this->singer = $singer;
    }


    
    
    
}
