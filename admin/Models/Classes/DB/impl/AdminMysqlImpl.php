<?php

/**
 * Description of AdminMysqlImpl
 *
 * @author Ismael Caballero
 */
class AdminMysqlImpl extends AbstractDB {

    public function add($sql) {
        
    }

    public function close() {
        $this->conection->closeConection();
    }

    public function deleted($sql) {
        
    }

    public function modify($sql) {
        
    }

    public function select() {
        
    }

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

    private function selectRolName($id) {
        $query = $this->conection->query("SELECT name FROM roles WHERE idroles=$id");

        $rst = $this->conection->result($query);

        //var_dump($rst);

        return $rst['name'];
    }

}
