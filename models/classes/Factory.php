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
            $this->testArray($array);
            echo '<h1 style="text-transform:capitalize;">'.$this->type.'</h1>';
            $array = $this->getAll();
            $this->testArray($array);
        }
        
        public function testArray($array) {
            if ($array == null) {
                echo 'No '.$this->type.' were found!';
            } else {
                foreach ($array as $key => $value) {
                    $this->buildSquare($value);
                }
            }
        }
        
        public function buildSquare($value) {
            echo '<div class="square">';
                if ($value['imageurl'] == 'error.png') {
                    echo '<img class="imgMainSquare" src="./images/'.$value['imageurl'].'" />';
                } else {
                    echo '<img class="imgMainSquare" src="./images/'.$value['imageurl'].'" />';
                }
                echo '<div class="textFromMainSquare"><a href="index.php?type='.$this->type.'&id='.$value['id'.$this->type].'">'.$value['name'].'</a>';
                echo '</div>';
            echo '</div>';
        }
        
        public function getTop() {
            $result = $this->link->query('select * from '.$this->type.' order by average desc limit 10');
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $return[] = $row;
                }
                return $return;
            } else {
                return null;
            }
        }
        
        public function getAll() {
            $result = $this->link->query('select * from '.$this->type.';');
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $return[] = $row;
                }
                return $return;
            } else {
                return null;
            }
        }
        
        public function getGenres(){
            $result = $this->link->query("SELECT name FROM genres INNER JOIN genres".$this->type." WHERE genres.idgenres = genres".$this->type.".idgenres GROUP BY idgenres;");
            return mysqli_fetch_array($result);
        }
        
        public function loadDetail($id) {
            $result = $this->link->query('select * from '.$this->type.' where id'.$this->type.' = '.$id.';');
            if ($result->num_rows > 0) {
                return mysqli_fetch_array($result);
            } else {
                return null;
            }
        }
        
    }

?>