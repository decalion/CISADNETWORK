<?php

    class Director {
        
        private $iddirectors;
        private $name;
        private $imageurl;
        
        function __construct($iddirectors, $name, $imageurl) {
            $this->idactors = $iddirectors;
            $this->name = $name;
            $this->imageurl = $imageurl;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        function getIdirectors() {
            return $this->iddirectors;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }

        function setIddirectors($iddirectors) {
            $this->iddirectors = $iddirectors;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }
        
    }

?>