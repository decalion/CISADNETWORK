<?php

    class Group {
        
        private $idgroups;
        private $name;
        private $year;
        private $imageurl;
        private $average;
        private $totalvotes;
        
        function __construct($idgroups, $name, $year, $imageurl, $average, $totalvotes) {
            $this->idgroups = $idgroups;
            $this->name = $name;
            $this->year = $year;
            $this->imageurl = $imageurl;
            $this->average = $average;
            $this->totalvotes = $totalvotes;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->year.'</h1>';
            echo '<h1>'.$this->average.'</h1>';
            echo '<h1>'.$this->totalvotes.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }

        function getIdgroups() {
            return $this->idgroups;
        }

        function getName() {
            return $this->name;
        }

        function getYear() {
            return $this->year;
        }

        function getImageurl() {
            return $this->imageurl;
        }

        function getAverage() {
            return $this->average;
        }

        function getTotalvotes() {
            return $this->totalvotes;
        }

        function setIdgroups($idgroups) {
            $this->idgroups = $idgroups;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setYear($year) {
            $this->year = $year;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }

        function setAverage($average) {
            $this->average = $average;
        }

        function setTotalvotes($totalvotes) {
            $this->totalvotes = $totalvotes;
        }
        
    }

?>