<?php

    class Director {
        
        private $iddirectors;
        private $name;
        private $imageurl;
        
        private $movies;
        private $series;
        
        function __construct($iddirectors, $name, $imageurl) {
            $this->iddirectors = $iddirectors;
            $this->name = $name;
            $this->imageurl = $imageurl;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        function getIdirectors() {
            return $this->iddirectors;
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

        function setIddirectors($iddirectors) {
            $this->iddirectors = $iddirectors;
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
            $query = 'select directorsmovies.idmovies, movies.name from directorsmovies inner join directors on directors.iddirectors = directorsmovies.iddirectors inner join movies on movies.idmovies = directorsmovies.idmovies where directors.iddirectors = '.$this->iddirectors.';';
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
            $query = 'select directorsseries.idseries, series.name from directorsseries inner join directors on directors.iddirectors = directorsseries.iddirectors inner join series on series.idseries = directorsseries.idseries where directors.iddirectors = '.$this->iddirectors.';';
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