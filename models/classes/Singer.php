<?php

    class Singer {
        
        private $idsingers;
        private $name;
        private $imageurl;
        
        private $groups;
        
        function __construct($idsingers, $name, $imageurl) {
            $this->idsingers = $idsingers;
            $this->name = $name;
            $this->imageurl = $imageurl;
        }
        
        function getIdsingers() {
            return $this->idsingers;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }
        
        function getGroups() {
            return $this->groups;
        }

        function setIdsingers($idsingers) {
            $this->idsingers = $idsingers;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }
        
        function loadInfo($link) {
            $this->setGroups($link);
        }
        
        function setGroups($link) {
            $query = '';
            $result = $link->query($query);
            if ($result) {
                $this->groups[] = '';
            } else {
                $this->groups[] = "This group don't have any cd yet!";
            }
        }
        
    }

?>