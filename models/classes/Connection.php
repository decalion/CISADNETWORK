<?php

    class Connection {

        private $connection;

        function __construct($host, $user, $pass, $dataBase) {
            if ($dataBase == null) {
                $this->connection = new mysqli($host, $user, $pass);
            } else {
                $this->connection = new mysqli($host, $user, $pass, $dataBase);
            }
            if ($this->connection->connect_errno) {
                echo "Failed connection: " . $this->connection->connect_error;
                exit();
            }
        }

        function closeConnection() {
            $this->connection->close();
        }

        function free($query) {
            $query->free();
        }

        function query($query) {
            return $this->connection->query($query);
        }

        function result($query) {
            return $query->fetch_array(MYSQLI_ASSOC);
        }

        function getErrorNum() {
            return $this->connection->errno;
        }
        
        function getConnection() {
            return $this->connection;
        }

    }
    
?>