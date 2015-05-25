<?php

    class Book {
        
        private $idbooks;
        private $name;
        private $sinopsi;
        private $year;
        private $imageurl;
        private $isbn;
        private $average;
        private $totalvotes;
        
        private $authors;
        
        function __construct($idbooks, $name, $sinopsi, $year, $imageurl, $isbn, $average, $totalvotes) {
            $this->idbooks = $idbooks;
            $this->name = $name;
            $this->sinopsi = $sinopsi;
            $this->year = $year;
            $this->imageurl = $imageurl;
            $this->isbn = $isbn;
            $this->average = $average;
            $this->totalvotes = $totalvotes;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->sinopsi.'</h1>';
            echo '<h1>'.$this->year.'</h1>';
            echo '<h1>'.$this->isbn.'</h1>';
            echo '<h1>'.$this->average.'</h1>';
            echo '<h1>'.$this->totalvotes.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }

        function getIdbooks() {
            return $this->idbooks;
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

        function getIsbn() {
            return $this->isbn;
        }

        function getAverage() {
            return $this->average;
        }

        function getTotalvotes() {
            return $this->totalvotes;
        }
        
        function getAuthors($field) {
            return $this->authors[$field];
        }

        function setIdbooks($idbooks) {
            $this->idbooks = $idbooks;
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

        function setIsbn($isbn) {
            $this->isbn = $isbn;
        }

        function setAverage($average) {
            $this->average = $average;
        }

        function setTotalvotes($totalvotes) {
            $this->totalvotes = $totalvotes;
        }


        
    }

?>