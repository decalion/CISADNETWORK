<?php

    class Factory {
        
        private $type;
        
        public function __construct($type) {
            $this->type = $type;
            echo '<p>'.$type.'</p>';
        }
        
    }

?>