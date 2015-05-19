<?php

    class Actor {
        
        private $idactors;
        private $name;
        private $imageurl;
        
        function __construct($idactors, $name, $imageurl) {
            $this->idactors = $idactors;
            $this->name = $name;
            $this->imageurl = $imageurl;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        function getIdactors() {
            return $this->idactors;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }

        function setIdactors($idactors) {
            $this->idactors = $idactors;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }
        
    }

?>