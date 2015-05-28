<?php

    class Group {
        
        private $idgroups;
        private $name;
        private $year;
        private $imageurl;
        private $average;
        private $totalvotes;
        
        private $cds;
        private $singers;
        
        function __construct($idgroups, $name, $year, $imageurl, $average, $totalvotes) {
            $this->idgroups = $idgroups;
            $this->name = $name;
            $this->year = $year;
            $this->imageurl = $imageurl;
            $this->average = $average;
            $this->totalvotes = $totalvotes;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->year.'</h1>';
            echo '<h1>'.$this->average.'</h1>';
            echo '<h1>'.$this->totalvotes.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }

        function getIdgroups() {
            return $this->idgroups;
        }

        function getName() {
            return $this->name;
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
        
        function getCds() {
            return $this->cds;
        }
        
        function getSingers() {
            return $this->singers;
        }

        function setIdgroups($idgroups) {
            $this->idgroups = $idgroups;
        }

        function setName($name) {
            $this->name = $name;
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
            $this->setCds($link);
            $this->setSingers($link);
        }
        
        function setCds($link) {
            $query = 'select cds.idcds, cds.name from cds inner join groups on groups.idgroups = cds.idgroups where groups.idgroups = '.$this->idgroups.';';
            $cds = $link->query($query);
            if ($cds->num_rows > 0) {
                foreach ($cds as $cd) {
                    $this->cds[] = '<p><a href="index.php?type=cds&id='.$cd['idcds'].'">'.$cd['name'].'</a></p>';
                }
            } else {
                $this->cds[] = "This group don't have any cd yet!";
            }
        }
        
        function setSingers($link) {
            $query = 'select singers.idsingers, singers.name from singers inner join groupsmembers on singers.idsingers = groupsmembers.idsingers inner join groups on groupsmembers.idgroups = groups.idgroups where groups.idgroups = '.$this->idgroups.';';
            $singers = $link->query($query);
            if ($singers->num_rows > 0) {
                foreach ($singers as $singer) {
                    $this->singers[] = '<p><a href="index.php?type=singers&id='.$singer['idsingers'].'">'.$singer['name'].'</a></p>';
                }
            } else {
                $this->singers[] = "This group don't have any member yet!";
            }
        }
        
    }

?>