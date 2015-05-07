<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstractDB
 *
 * @author decalion
 */
Abstract class AbstractDB {
     protected $conection;
    
    public function __construct(UConnection $connection) {
        $this->conection=$connection;
        
    }
    
    public abstract function add($sql);
    public abstract function select();
    public abstract function deleted($sql);
    public abstract function modify($sql);
    public abstract function close();
    

}
