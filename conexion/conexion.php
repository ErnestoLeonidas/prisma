<?php
class Conexion extends PDO { 
    /* Datos de conexion a mysql */
    private $gestor = 'mysql';
    private $host = '201.148.104.80';
    private $usu = 'nblcl';
    private $pass = 'nbl123.';
    private $nombre = 'nblcl_DB2';

    public function __construct() {    
        try{
            parent::__construct($this->gestor.':host='.$this->host.';dbname='.$this->nombre, $this->usu, $this->pass);
            //echo "conexion realizada con exito  a:".$this->nombre;
            //echo 'conexion realizada con éxito';
        }catch(PDOException $e){
        echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
        exit;
        }
    }
} 

$con = new Conexion();
?>