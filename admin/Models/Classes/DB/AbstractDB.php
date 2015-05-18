<?php
/**
 * Abstract Factory of BD
 *
 * @author Ismael Caballero
 */
Abstract class AbstractDB {
    
    /**
     * Protected connection
     * @var type Uconnection
     */
     protected $conection;
    
     /**
      * Construct
      * @param UConnection $connection
      */
    public function __construct(UConnection $connection) {
        $this->conection=$connection;
        
    }
    
    /**
     * Abstract Method List for Basic Function
     */
    
    public abstract function add($sql);
    public abstract function select();
    public abstract function deleted($sql);
    public abstract function modify($sql);
    public abstract function close();
    

}
