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
            $array = $this->getTop($this->type);
            if ($array == null) {
                echo 'No '.$this->type.' were found!';
            } else {
                foreach ($array as $key => $value) {
                    print_r($value);
                    echo "<br>";
                }
            }
            echo '<h1>'.$this->type.'</h1>';
            $array = $this->getAll($this->type);
            if ($array == null) {
                echo 'No '.$this->type.' were found!';
            } else {
                foreach ($array as $key => $value) {
                    print_r($value);
                    echo "<br>";
                }
            }
        }
        
        public function getAll($type) {
            $result = $this->link->query('select * from '.$type.';');
            while($row = mysqli_fetch_array($result)) {
                $return[] = $row;
            }
            return $return;
        }
        
        public function getTop($type) {
            $result = $this->link->query('select * from '.$type.' order by average asc limit 10');
            while($row = mysqli_fetch_array($result)) {
                $return[] = $row;
            }
            return $return;
        }
        
    }

?>