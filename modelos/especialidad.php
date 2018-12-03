<?php
require_once '../conexion/conexion.php';

class Especialidad{
    private $id_especialidad;
    private $tipo_especialidad;

    const TABLA="ESPECIALIDAD";

    public function __construct(){
    }

    public function setId_especialidad($id_especialidad){ $this->id_especialidad=$id_especialidad; }
    public function getId_especialidad(){ return $this->id_especialidad; }

    public function setTipo_especialidad($tipo_especialidad){ $this->tipo_especialidad=$tipo_especialidad; }
    public function getTipo_especialidad(){ return $this->tipo_especialidad; }

    //PENDIENTE
    public function buscarTodo(){
        $conexion = new Conexion();
		$consulta = $conexion->prepare(
            'SELECT 
                ID_ESPECIALIDAD, 
                lower(TIPO_ESPECIALIDAD) as TIPO_ESPECIALIDAD 
            FROM ' . self::TABLA . ' 
            ORDER BY TIPO_ESPECIALIDAD'
        );
		$consulta->execute();
		$registros = $consulta->fetchAll();
		return $registros;
    }



}

?>