<?php

    /**
     * Class for manage the cds
     * 
     * @property INT $idcds
     * @property INT $idgroups
     * @property String $name
     * @property String $imageurl
     * 
     * @property Array $groups
     * @property Array $songs
     * 
     */

    class CD {
        
        private $idcds;
        private $idgroups;
        private $name;
        private $imageurl;
        
        private $group;
        private $songs;
        
        function __construct($idcds, $idgroups, $name, $imageurl) {
            $this->idcds = $idcds;
            $this->idgroups = $idgroups;
            $this->name = $name;
            $this->imageurl = $imageurl;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        function getIdcds() {
            return $this->idcds;
        }

        function getIdgroups() {
            return $this->idgroups;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }
        
        function getGroup($field) {
            return $this->group[$field];
        }
        
        function getSongs() {
            return $this->songs;
        }

        function setIdcds($idcds) {
            $this->idcds = $idcds;
        }

        function setIdgroups($idgroups) {
            $this->idgroups = $idgroups;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }
        
        function loadInfo($link) {
            $this->setGroup($link);
            $this->setSongs($link);
        }
        
        function setGroup($link) {
            $query = 'select idgroups, name from groups where groups.idgroups = '.$this->idgroups.';';
            $groups = $link->query($query);
            if ($groups->num_rows > 0) {
                foreach ($groups as $group) {
                    $this->group = array('idgroups' => $group['idgroups'], 'name' => $group['name']);
                }
            } else {
                $this->group[] = "This cd don't have any group yet!";
            }
        }
        
        function setSongs($link) {
            $query = 'select name from songs where idcds = '.$this->idcds.';';
            $songs = $link->query($query);
            if ($songs->num_rows > 0) {
                foreach ($songs as $song) {
                    $this->songs[] = '<p>'.$song['name'].'</p>';
                }
            } else {
                $this->songs[] = "This cd don't have any song yet!";
            }
        }
        
    }

?>