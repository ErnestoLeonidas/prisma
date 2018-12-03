<?php
require_once '../conexion/conexion.php';

class Area{
    private $id_area;
    private $tipo_area;

    const TABLA="AREA";

    public function __construct(){
    }

    public function setId_area($id_area){ $this->id_area=$id_area; }
    public function getId_area(){ return $this->id_area; }

    public function setTipo_area($tipo_area){ $this->tipo_area=$tipo_area; }
    public function getTipo_area(){ return $this->tipo_area; }

    //PENDIENTE
    public function buscarTodo(){
        $conexion = new Conexion();
		$consulta = $conexion->prepare(
            'SELECT 
                ID_AREA,
                lower(TIPO_AREA) as AREA
            FROM ' . self::TABLA . ' 
            ORDER BY TIPO_AREA ASC'
            );
		$consulta->execute();
		$registros = $consulta->fetchAll();
		return $registros;
    }



}

?>