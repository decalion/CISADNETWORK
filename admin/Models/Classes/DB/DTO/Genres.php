<?php
/**
 * DTO (Data Transfer Object) Class of Actors Table
 *
 * @author Ismael Caballero 
 */
class Genres {
   
    private $idgenres;
    private $name;
    private $music;
    private $descripcion;
    
    
    /**
     * Construct
     */
    public function __construct() {
        
    }
    
    /**
     * GETTERS/SETTERS
     */
    
    
    function getIdgenres() {
        return $this->idgenres;
    }

    function getName() {
        return $this->name;
    }

    function getMusic() {
        return $this->music;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdgenres($idgenres) {
        $this->idgenres = $idgenres;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setMusic($music) {
        $this->music = $music;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


    
    
    
    
    
}
