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
        
    }

    public function deleted($sql) {
        
    }

    public function modify($sql) {
        
    }

    public function select() {
        
    }

    public function SelectCredencials() {
        
        $query = $this->conection->query("SELECT nickname,pass,idrol FROM user");
        $result = array();
         while ($rst = $this->conection->result($query)) {

            $temp=null;
            $user = $rst["nuser"];  
            $pass = $rst["npass"];
            $rol= $rst["idrol"];
            $temp=new Login($user, $pass, $ip);
            
            array_push($result, $temp);
        }
        
        $this->conection->free($query);
        return $result;
    }

}
