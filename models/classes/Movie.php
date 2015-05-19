<?php

    class Movie {
        
        private $idmovie;
        private $name;
        private $sinopsi;
        private $year;
        private $imageurl;
        private $average;
        private $totalvotes;

        function __construct($idmovie, $name, $sinopsi, $year, $imageurl, $average, $totalvotes) {
            $this->idmovie = $idmovie;
            $this->name = $name;
            $this->sinopsi = $sinopsi;
            $this->year = $year;
            $this->imageurl = $imageurl;
            $this->average = $average;
            $this->totalvotes = $totalvotes;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->year.'</h1>';
            echo '<h1>'.$this->sinopsi.'</h1>';
            echo '<h1>'.$this->average.'</h1>';
            echo '<h1>'.$this->totalvotes.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        function getIdmovie() {
            return $this->idmovie;
        }

        function getName() {
            return $this->name;
        }

        function getSinopsi() {
            return $this->sinopsi;
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

        function setIdmovie($idmovie) {
            $this->idmovie = $idmovie;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setSinopsi($sinopsi) {
            $this->sinopsi = $sinopsi;
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