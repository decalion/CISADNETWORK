<?php

    class Serie {
        
        private $idseries;
        private $name;
        private $sinopsi;
        private $year;
        private $imageurl;
        private $seasons;
        private $totalChapters;
        private $average;
        private $totalvotes;
        
        function __construct($idseries, $name, $sinopsi, $year, $imageurl, $seasons, $totalChapters, $average, $totalvotes) {
            $this->idseries = $idseries;
            $this->name = $name;
            $this->sinopsi = $sinopsi;
            $this->year = $year;
            $this->imageurl = $imageurl;
            $this->seasons = $seasons;
            $this->totalChapters = $totalChapters;
            $this->average = $average;
            $this->totalvotes = $totalvotes;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->year.'</h1>';
            echo '<h1>'.$this->sinopsi.'</h1>';
            echo '<h1>'.$this->seasons.'</h1>';
            echo '<h1>'.$this->totalChapters.'</h1>';
            echo '<h1>'.$this->average.'</h1>';
            echo '<h1>'.$this->totalvotes.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
                
        function getIdseries() {
            return $this->idseries;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }

        function getSeason() {
            return $this->season;
        }

        function getTotalChapters() {
            return $this->totalChapters;
        }

        function getAverage() {
            return $this->average;
        }

        function getTotalvotes() {
            return $this->totalvotes;
        }

        function setIdseries($idseries) {
            $this->idseries = $idseries;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }

        function setSeason($season) {
            $this->season = $season;
        }

        function setTotalChapters($totalChapters) {
            $this->totalChapters = $totalChapters;
        }

        function setAverage($average) {
            $this->average = $average;
        }

        function setTotalvotes($totalvotes) {
            $this->totalvotes = $totalvotes;
        }


        
    }

?>