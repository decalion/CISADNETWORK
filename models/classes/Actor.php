<?php

    /**
     * Class for manage the actors
     * 
     * @property INT $idactors
     * @property String $name
     * @property String $imageurl
     * 
     * @property Array $movies
     * @property Array $series
     * 
     */

    class Actor {
        
        private $idactors;
        private $name;
        private $imageurl;
        
        private $movies;
        private $series;
                
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
        
        function getMovies() {
            return $this->movies;
        }
        
        function getSeries() {
            return $this->series;
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
        
        function loadInfo($link) {
            $this->setMovies($link);
            $this->setSeries($link);
        }
        
        function setMovies($link) {
            $query = 'select actorsmovies.idmovies, movies.name from actorsmovies inner join actors on actors.idactors = actorsmovies.idactors inner join movies on movies.idmovies = actorsmovies.idmovies where actors.idactors = '.$this->idactors.';';
            $result = $link->query($query);
            if (!$result) {
                $this->movies = null;
            } else {
                foreach ($result as $movie) {
                    $this->movies[] = '<p><a href="index.php?type=movies&id='.$movie['idmovies'].'">'.$movie['name'].'</a></p>';
                }
            }
        }
        
        function setSeries($link) {
            $query = 'select actorsseries.idseries, series.name from actorsseries inner join actors on actors.idactors = actorsseries.idactors inner join series on series.idseries = actorsseries.idseries where actors.idactors = '.$this->idactors.';';
            $result = $link->query($query);
            if (!$result) {
                $this->series = null;
            } else {
                foreach ($result as $serie) {
                    $this->series[] = '<p><a href="index.php?type=series&id='.$serie['idseries'].'">'.$serie['name'].'</a></p>';
                }
            }
        }
        
    }

?>