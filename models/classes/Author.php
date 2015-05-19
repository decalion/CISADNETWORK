<?php

    class Author {
        
        private $idauthors;
        private $name;
        private $imageurl;
        
        function __construct($idauthors, $name, $imageurl) {
            $this->idauthors = $idauthors;
            $this->name = $name;
            $this->imageurl = $imageurl;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        function getIdauthors() {
            return $this->idauthors;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }

        function setIdauthors($idauthors) {
            $this->idauthors = $idauthors;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }
        
    }

?>