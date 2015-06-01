<?php

    /**
     * Class for manage the movies
     * 
     * @property INT $idmovies
     * @property String $name
     * @property String $sinopsi
     * @property String $year
     * @property String $imageurl
     * @property INT $average
     * @property INT $totalvotes
     * 
     * @property Array $director
     * @property Array $actors
     * 
     */

    class Movie {
        
        private $idmovies;
        private $name;
        private $sinopsi;
        private $year;
        private $imageurl;
        private $average;
        private $totalvotes;
        
        private $director;
        private $actors;

        function __construct($idmovies, $name, $sinopsi, $year, $imageurl, $average, $totalvotes) {
            $this->idmovies = $idmovies;
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
        
        function getIdmovies() {
            return $this->idmovies;
        }

        public function getName() {
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
        
        function getDirector($field) {
            return $this->director[$field];
        }
        
        function getActors() {
            return $this->actors;
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
        
        function loadInfo($link) {
            $this->setDirector($link);
            $this->setActors($link);
        }
        
        function setDirector($link) {
            $query = 'select directorsmovies.iddirectors, name from directorsmovies inner join directors where directorsmovies.iddirectors = directors.iddirectors and directorsmovies.idmovies = "'.$this->idmovies.'";';
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
            $query = 'select actorsmovies.idactors, name from actorsmovies inner join actors where actorsmovies.idactors = actors.idactors and actorsmovies.idmovies = "'.$this->idmovies.'";';
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