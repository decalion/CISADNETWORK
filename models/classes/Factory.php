<?php

    class Factory {
        
        private $type;
        
        public function __construct($type) {
            $this->type = $type;
        }
        
        public function loadDefaultInfo() {
            echo '<h1>Top 10</h1>';
            
            echo '<h1>'.$this->type.'</h1>';
        }
        
    }

?>