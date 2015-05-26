<?php

/**
 * DTO (Data Transfer Object) Class of Books Table
 *
 * @author ismael caballero
 */
class Books {
   
    private $idbooks;
    private $name;
    private $sinopsi;
    private $year;
    private $imageurk;
    private $isbn;
    private $average;
    private $totalvotes;
    private $authors=array();
    
    
    public function __construct() {
        
    }
    
    
    
    function getAuthors() {
        return $this->authors;
    }

    function setAuthors($authors) {
        $this->authors = $authors;
    }

        
    
    function getIdbooks() {
        return $this->idbooks;
    }

    function getName() {
        return $this->name;
    }

    function getSinopsi() {
        return $this->sinopsi;
    }

    function getYear() {
        return $this->year;
    }

    function getImageurk() {
        return $this->imageurk;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function getAverage() {
        return $this->average;
    }

    function getTotalvotes() {
        return $this->totalvotes;
    }

    function setIdbooks($idbooks) {
        $this->idbooks = $idbooks;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSinopsi($sinopsi) {
        $this->sinopsi = $sinopsi;
    }

    function setYear($year) {
        $this->year = $year;
    }

    function setImageurk($imageurk) {
        $this->imageurk = $imageurk;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setAverage($average) {
        $this->average = $average;
    }

    function setTotalvotes($totalvotes) {
        $this->totalvotes = $totalvotes;
    }

}
