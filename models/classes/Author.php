<?php

    /**
     * Class for manage the authors
     * 
     * @property INT $idactors
     * @property String $name
     * @property String $imageurl
     * 
     * @property Array $books
     * 
     */

    class Author {
        
        private $idauthors;
        private $name;
        private $imageurl;
        
        private $books;
        
        function __construct($idauthors, $name, $imageurl) {
            $this->idauthors = $idauthors;
            $this->name = $name;
            $this->imageurl = $imageurl;
        }
        
        public function show() {
            echo '<h1>'.$this->name.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        function getIdauthors() {
            return $this->idauthors;
        }

        function getName() {
            return $this->name;
        }

        function getImageurl() {
            return $this->imageurl;
        }
        
        function getBooks() {
            return $this->books;
        }

        function setIdauthors($idauthors) {
            $this->idauthors = $idauthors;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }
        
        function setBooks($link) {
            $query = 'select authorsbooks.idbooks, authors.name from authors inner join authorsbooks on authorsbooks.idauthors = authors.idauthors inner join books on books.idbooks = authorsbooks.idbooks where authorsbook.idauthors = '.$this->idauthors.';';
            $result = $link->query($query);
            print_r($result);
            if (!$result) {
                $this->books[] = "This author doesn't have any book yet!";
            } else {
                foreach ($result as $book) {
                    print_r($book);
                    $this->books[] = '<p><a href="index.php?type=books&id='.$book['idbooks'].'">'.$book['name'].'</a></p>';
                }
            }
        }
        
        function loadInfo($link) {
            $this->setBooks($link);
        }
        
    }

?>