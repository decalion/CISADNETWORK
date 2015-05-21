<?php

/**
 * DTO (Data Transfer Object) Class of Series Table
 *
 * @author Ismael Caballero
 */
class Series {
    
    
    private $idserie;
    private $name;
    private $sinopsi;
    private $year;
    private $imageurl;
    private $seasons;
    private $totalchapters;
    private $average;
    private $totalvotes;
    private $chapters=array();
    private $actors=array();
    private $directors=array();
    
    
    
    /**
     * 
     */
    public function __construct() {
     
    }
    
    
    function getIdserie() {
        return $this->idserie;
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

    function getImageurl() {
        return $this->imageurl;
    }

    function getSeasons() {
        return $this->seasons;
    }

    function getTotalchapters() {
        return $this->totalchapters;
    }

    function getAverage() {
        return $this->average;
    }

    function getTotalvotes() {
        return $this->totalvotes;
    }

    function getChapters() {
        return $this->chapters;
    }

    function setIdserie($idserie) {
        $this->idserie = $idserie;
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

    function setImageurl($imageurl) {
        $this->imageurl = $imageurl;
    }

    function setSeasons($seasons) {
        $this->seasons = $seasons;
    }

    function setTotalchapters($totalchapters) {
        $this->totalchapters = $totalchapters;
    }

    function setAverage($average) {
        $this->average = $average;
    }

    function setTotalvotes($totalvotes) {
        $this->totalvotes = $totalvotes;
    }

    function setChapters($chapters) {
        $this->chapters = $chapters;
    }


    function getActors() {
        return $this->actors;
    }

    function setActors($actors) {
        $this->actors = $actors;
    }


    
    function getDirectors() {
        return $this->directors;
    }

    function setDirectors($directors) {
        $this->directors = $directors;
    }


    
}
