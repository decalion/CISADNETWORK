<?php

/**
 * Class For Connect with DataBase and make Basic funnction
 *
 * @author Ismael Caballero
 */
class Uconnection {

    private $conection;

    /**
     * Construct with basic parameters
     * @param type $host
     * @param type $user
     * @param type $pass
     * @param type $dataBase
     */
    function __construct($host, $user, $pass, $dataBase) {

        if ($dataBase == null) {
            $this->conection = new mysqli($host, $user, $pass);
        } else {

            $this->conection = new mysqli($host, $user, $pass, $dataBase);
        }


        if ($this->conection->connect_errno) {

            echo "Connexió fallida: " . $this->conection->connect_error;
            exit();
        }
    }

    /**
     * Close Connection
     */
    function closeConection() {
        $this->conection->close();
    }

    /**
     * Free memori
     * @param type $consulta
     */
    function free($consulta) {
        $consulta->free();
    }

    /**
     * Execute a query
     * @param type $sentenciSql
     * @return type
     */
    function query($sentenciSql) {
        return $this->conection->query($sentenciSql);
    }

    /**
     * Get SQL result
     * @param type $consulta
     * @return type
     */
    function result($consulta) {
        return $consulta->fetch_array(MYSQLI_ASSOC);
    }

    /**
     * Get number error 
     * @return type
     */
    function getErrorNum() {
        return $this->conection->errno;
    }

}
