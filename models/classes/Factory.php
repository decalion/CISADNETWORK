<?php

    class Factory {
        
        private $type;
        private $link;
        
        public function __construct($type, $link) {
            $this->type = $type;
            $this->link = $link;
        }
        
        public function loadDefaultInfo() {
            echo '<h1>Top 10</h1>';
            $array = $this->getTop();
            if ($array == null) {
                echo 'No '.$this->type.' were found!';
            } else {
                foreach ($array as $key => $value) {
                    print_r($value);
                    echo "<br>";
                }
            }
            
            echo '<h1>'.$this->type.'</h1>';
            $array = $this->getAll();
            if ($array == null) {
                echo 'No '.$this->type.' were found!';
            } else {
                foreach ($array as $key => $value) {
                    print_r($value);
                    echo "<br>";
                }
            }
        }
        
        public function getAll() {
            $result = $this->link->query('select * from '.$this->type.';');
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_array($result)) {
                    $return[] = $row;
                }
                return $return;
            } else {
                return null;
            }
        }
        
        public function getTop() {
            $result = $this->link->query('select * from '.$this->type.' order by average desc limit 10');
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_array($result)) {
                    $return[] = $row;
                }
                return $return;
            } else {
                return null;
            }
        }
        
        public function getGenres(){
            $result=$this->link->query("SELECT name FROM genres INNER JOIN genres".$this->type." WHERE genres.idgenres = genres".$this->type.".idgenres GROUP BY idgenres;");
            while($row=  mysqli_fetch_row($result)) {
                $return[]=$row;
            }
            return $return;
        }
        
    }

?>
