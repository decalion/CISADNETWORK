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
            $query = 'select groups.idgroups, groups.name from singers inner join groupsmembers on singers.idsingers = groupsmembers.idsingers inner join groups on groupsmembers.idgroups = groups.idgroups where singers.idsingers = '.$this->idsingers.';';
            $groups = $link->query($query);
            if ($groups->num_rows > 0) {
                foreach ($groups as $group) {
                    $this->groups[] = '<p><a href="index.php?type=groups&id='.$group['idgroups'].'">'.$group['name'].'</a></p>';
                }
            } else {
                $this->groups[] = "This group don't have any member yet!";
            }
        }
        
    }

?>