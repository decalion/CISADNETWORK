<?php

    /**
     * Class for manage the news
     * 
     * @property INT $idnews
     * @property INT $idusers
     * @property String $name
     * @property String $imageurl
     * @property String $description
     * @property Date $date
     * @property INT $average
     * @property INT $totalvotes
     * 
     */

    class News {
        
        private $idnews;
        private $idusers;
        private $name;
        private $imageurl;
        private $description;
        private $date;
        private $average;
        private $totalvotes;
        
        function __construct($idnews, $idusers, $name, $imageurl, $description, $date, $average, $totalvotes) {
            $this->idnews = $idnews;
            $this->idusers = $idusers;
            $this->name = $name;
            $this->imageurl = $imageurl;
            $this->description = $description;
            $this->date = $date;
            $this->average = $average;
            $this->totalvotes = $totalvotes;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->description.'</h1>';
            echo '<h1>'.$this->date.'</h1>';
            echo '<h1>'.$this->average.'</h1>';
            echo '<h1>'.$this->totalvotes.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }

        function getIdnews() {
            return $this->idnews;
        }

        function getIdusers() {
            return $this->idusers;
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

        function getDate() {
            return $this->date;
        }

        function getAverage() {
            return $this->average;
        }

        function getTotalvotes() {
            return $this->totalvotes;
        }
        
        function getUsersName($link) {
                $query = 'select username from users where idusers = '.$this->idusers.';';
                $result = $link->query($query);
                if ($result->num_rows == 0) {
                    return "This user doesn't exists!";
                } else {
                    foreach ($result as $user) {
                        return $user['username'];
                    }
                }
        }

        function setIdnews($idnews) {
            $this->idnews = $idnews;
        }

        function setIdusers($idusers) {
            $this->idusers = $idusers;
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

        function setDate($date) {
            $this->date = $date;
        }

        function setAverage($average) {
            $this->average = $average;
        }

        function setTotalvotes($totalvotes) {
            $this->totalvotes = $totalvotes;
        }
        
    }

?>