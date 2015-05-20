<?php

/**
 * Mysql implement of BD cisadnetwork
 *
 * @author Ismael Caballero
 */
class AdminMysqlImpl extends AbstractDB {

    public function add($sql) {
        $query = $this->conection->query($sql);
        if ($this->conection->getErrorNum() == 0) {
            return true;
        }
        return false;
    }

    /**
     * Funcion for close conection
     */
    public function close() {
        $this->conection->closeConection();
    }

    /**
     * Funcion for delete
     * @param type $sql query
     * @return boolean true o false
     */
    public function deleted($sql) {
        $query = $this->conection->query($sql);
        if ($this->conection->getErrorNum() == 0) {
            return true;
        }
        return false;
    }

    public function modify($sql) {
        $query = $this->conection->query($sql);
        if ($this->conection->getErrorNum() == 0) {
            return true;
        }
        return false;
    }

    /**
     * GenericSelect
     */
    public function select() {
        
    }

    /**
     * Funcion for get the credencial list
     * @return array with username,password and rol
     */
    public function SelectCredencials() {

        $query = $this->conection->query("SELECT username,password,idroles FROM users");
        $result = array();
        while ($rst = $this->conection->result($query)) {

            $temp = null;
            $user = $rst["username"];
            $pass = $rst["password"];
            $rol = $rst["idroles"];
            $temp = new Login($user, $pass, $rol);
            array_push($result, $temp);
        }

        $this->conection->free($query);
        return $result;
    }

    /**
     * Funcion for get all user data
     * @return array User DTO
     */
    public function selectUserData() {
        $query = $this->conection->query("SELECT * FROM users");
        $result = array();
        while ($rst = $this->conection->result($query)) {

            $temp = new User();
            $temp->setId($rst["idusers"]);
            $temp->setUsername($rst["username"]);
            $temp->setPass($rst["password"]);
            $temp->setName($rst["name"]);
            $temp->setLastname($rst["lastname"]);
            $temp->setEmail($rst["email"]);
            $temp->setAvatarurl($rst["imageurl"]);
            $temp->setIdrol($rst["idroles"]);
            $temp->setRolname($this->selectRolName($rst["idroles"]));
            $temp->setActivemail($rst["activemail"]);
            $temp->setActive($rst["active"]);

            array_push($result, $temp);
        }

        $this->conection->free($query);
        return $result;
    }

    /**
     * Private function for get role name
     * @param type $id of the role
     * @return type string
     */
    private function selectRolName($id) {
        $query = $this->conection->query("SELECT name FROM roles WHERE idroles=$id");

        $rst = $this->conection->result($query);

        //var_dump($rst);

        return $rst['name'];
    }


    /**
     * Select all movie data
     * @return array
     */
    public function selectMoviesData(){
        $query = $this->conection->query("SELECT * FROM  movies");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp=new Movie();
            $temp->setIdmovie($rst['idmovies']);
            $temp->setName($rst['name']);
            $temp->setSinopsi($rst['sinopsi']);
            $temp->setYear($rst['year']);
            $temp->setImage($rst['imageurl']);
            $temp->setAverage($rst['average']);
            $temp->setTotalvotes($rst['totalvotes']);
            $temp->setActors($this->selectMoviesActors($rst['idmovies']));
            
            array_push($result, $temp);
            
        }
        return $result;  
    }
    
    
    /**
     * Select the actors from the movie
     * @param type $id movie
     * @return array
     */
    private function selectMoviesActors($id){
        $query = $this->conection->query("SELECT idactors FROM  actorsmovies WHERE idmovies=$id");
         $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp=$this->selectActors($rst['idactors']);
            array_push($result, $temp);
            
        }
        
        return $result;
        
    }
    
    
    /**
     * Select all from actor
     * @param type $id actors
     * @return \Actors´
     */
    private function selectActors($id){
        $query = $this->conection->query("SELECT idactors,name,imageurl FROM  actors WHERE idactors=$id");
        $rst = $this->conection->result($query);
        
        $temp=new Actors();
        $temp->setIdactors($rst['idactors']);
        $temp->setName($rst['name']);
        $temp->setImage($rst['imageurl']);
        
        return $temp;
    }
    
    
    public function selectActorsAdd($sql){
        $query = $this->conection->query($sql);
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp=new Actors();
            $temp->setIdactors($rst['idactors']);
            $temp->setName($rst['name']);
            array_push($result, $temp);
        }
        
        return $result;
    }
    
    
}
