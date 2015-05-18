<?php

/**
 *  DTO (Data Transfer Object) Class of Movies Table
 *
 * @author Ismael Caballero
 */
class Movie {

    private $idmovie;
    private $name;
    private $sinopsi;
    private $year;
    private $image;
    private $average;
    private $totalvotes;
    private $actors = array();
    private $genres = array();

    /**
     * Construct
     */
    public function __construct() {
        
    }
    

    /**
     * GETTERS/SETTERS
     */
    
    function getAverage() {
        return $this->average;
    }

    function getTotalvotes() {
        return $this->totalvotes;
    }

    function setAverage($average) {
        $this->average = $average;
    }

    function setTotalvotes($totalvotes) {
        $this->totalvotes = $totalvotes;
    }

        function getIdmovie() {
        return $this->idmovie;
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

    function getImage() {
        return $this->image;
    }

    function getActors() {
        return $this->actors;
    }

    function getGenres() {
        return $this->genres;
    }

    function setIdmovie($idmovie) {
        $this->idmovie = $idmovie;
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

    function setImage($image) {
        $this->image = $image;
    }

    function setActors($actors) {
        $this->actors = $actors;
    }

    function setGenres($genres) {
        $this->genres = $genres;
    }

}
