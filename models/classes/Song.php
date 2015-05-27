<?php

    class Song {
        
        private $idsongs;
        private $idgroups;
        private $idcds;
        private $name;
        
        function __construct($idsongs, $idgroups, $idcds, $name) {
            $this->idsongs = $idsongs;
            $this->idgroups = $idgroups;
            $this->idcds = $idcds;
            $this->name = $name;
        }

        function getIdsongs() {
            return $this->idsongs;
        }

        function getIdgroups() {
            return $this->idgroups;
        }

        function getIdcds() {
            return $this->idcds;
        }

        function getName() {
            return $this->name;
        }

        function setIdsongs($idsongs) {
            $this->idsongs = $idsongs;
        }

        function setIdgroups($idgroups) {
            $this->idgroups = $idgroups;
        }

        function setIdcds($idcds) {
            $this->idcds = $idcds;
        }

        function setName($name) {
            $this->name = $name;
        }
        
    }

?>