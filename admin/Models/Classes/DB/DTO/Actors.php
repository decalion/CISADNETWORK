<?php

/**
 * DTO (Data Transfer Object) Class of Actors Table
 *
 * @author Ismael Caballero
 */
class Actors {

    private $idactors;
    private $name;
    private $image;

    /**
     * Construct
     */
    public function __construct() {
        
    }

    /**
     * GETTERS/SETTERS
     */
    function getIdactors() {
        return $this->idactors;
    }

    function getName() {
        return $this->name;
    }

    function getImage() {
        return $this->image;
    }

    function setIdactors($idactors) {
        $this->idactors = $idactors;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setImage($image) {
        $this->image = $image;
    }

}
