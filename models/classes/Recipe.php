<?php

    class Recipe {
        
        private $idrecipes;
        private $name;
        private $imageurl;
        private $description;
        private $average;
        private $totalvotes;
        
        function __construct($idrecipes, $name, $imageurl, $description, $average, $totalvotes) {
            $this->idrecipes = $idrecipes;
            $this->name = $name;
            $this->imageurl = $imageurl;
            $this->description = $description;
            $this->average = $average;
            $this->totalvotes = $totalvotes;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->description.'</h1>';
            echo '<h1>'.$this->average.'</h1>';
            echo '<h1>'.$this->totalvotes.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }

        function getIdrecipes() {
            return $this->idrecipes;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }

        function getDescription() {
            return $this->description;
        }

        function getAverage() {
            return $this->average;
        }

        function getTotalvotes() {
            return $this->totalvotes;
        }

        function setIdrecipes($idrecipes) {
            $this->idrecipes = $idrecipes;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setAverage($average) {
            $this->average = $average;
        }

        function setTotalvotes($totalvotes) {
            $this->totalvotes = $totalvotes;
        }
        
    }

?>