<?php

/*Creamos la conexión a la base de datos*/

class Conexion {

    private $server;
    private $user;
    private $pass;
    private $dbname;
    
    public function __construct() {
        $this->server = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'nipio';
    }

    public function connect() {
        $conn = new mysqli($this->server, $this->user, $this->pass, $this->dbname);
        return $conn;
        
    }

    

} 


   

?>
