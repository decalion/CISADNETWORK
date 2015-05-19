<?php

    class CD {
        
        private $idcds;
        private $idgroups;
        private $name;
        private $imageurl;
        
        function __construct($idcds, $idgroups, $name, $imageurl) {
            $this->idcds = $idcds;
            $this->idgroups = $idgroups;
            $this->name = $name;
            $this->imageurl = $imageurl;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        function getIdcds() {
            return $this->idcds;
        }

        function getIdgroups() {
            return $this->idgroups;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }

        function setIdcds($idcds) {
            $this->idcds = $idcds;
        }

        function setIdgroups($idgroups) {
            $this->idgroups = $idgroups;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }
        
    }

?>