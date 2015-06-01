<?php

    /**
     * Class for manage the series
     * 
     * @property INT $idseries
     * @property String $name
     * @property String $sinopsi
     * @property String $year
     * @property String $imageurl
     * @property INT $seasons
     * @property INT $totalchapters
     * @property INT $average
     * @property INT $totalvotes
     * 
     * @property Array $director
     * @property Array $actors
     * 
     */

    class Serie {
        
        private $idseries;
        private $name;
        private $sinopsi;
        private $year;
        private $imageurl;
        private $seasons;
        private $totalchapters;
        private $average;
        private $totalvotes;
        
        private $director;
        private $actors;
        
        function __construct($idseries, $name, $sinopsi, $year, $imageurl, $seasons, $totalchapters, $average, $totalvotes) {
            $this->idseries = $idseries;
            $this->name = $name;
            $this->sinopsi = $sinopsi;
            $this->year = $year;
            $this->imageurl = $imageurl;
            $this->seasons = $seasons;
            $this->totalchapters = $totalchapters;
            $this->average = $average;
            $this->totalvotes = $totalvotes;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->year.'</h1>';
            echo '<h1>'.$this->sinopsi.'</h1>';
            echo '<h1>'.$this->seasons.'</h1>';
            echo '<h1>'.$this->totalchapters.'</h1>';
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
        
        function getSinopsi() {
            return $this->sinopsi;
        }
        
        function getImageurl() {
            return $this->imageurl;
        }

        function getSeason() {
            return $this->season;
        }

        function getTotalChapters() {
            return $this->totalchapters;
        }

        function getAverage() {
            return $this->average;
        }

        function getTotalvotes() {
            return $this->totalvotes;
        }
        
        function getDirector($field) {
            return $this->director[$field];
        }
        
        function getActors() {
            return $this->actors;
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
            $this->totalchapters = $totalChapters;
        }

        function setAverage($average) {
            $this->average = $average;
        }

        function setTotalvotes($totalvotes) {
            $this->totalvotes = $totalvotes;
        }
        
        function loadInfo($link) {
            $this->setDirector($link);
            $this->setActors($link);
        }
        
        function setDirector($link) {
            $query = 'select directorsseries.iddirectors, name from directorsseries inner join directors where directorsseries.iddirectors = directors.iddirectors and directorsseries.idseries = "'.$this->idseries.'";';
            $result = $link->query($query);
            if (!$result) {
                    $this->director = "None.";
            } else {
                foreach ($result as $director) {
                    $this->director = array('iddirectors' => $director['iddirectors'], 'name' => $director['name']);
                }
            }
        }
        
        function setActors($link) {
            $query = 'select actorsseries.idactors, name from actorsseries inner join actors where actorsseries.idactors = actors.idactors and actorsseries.idseries = "'.$this->idseries.'";';
            $result = $link->query($query);
            if (!$result) {
                    $this->actors = "None.";
            } else {
                foreach ($result as $actor) {
                    $this->actors[] = array('idactors' => $actor['idactors'], 'name' => $actor['name']);
                }
            }
        }
        
    }

?>