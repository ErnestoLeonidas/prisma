<?php
require_once '../conexion/conexion.php';

class Solicito{
    private $id_solicito;
    private $nombre;
    private $nombre_completo;
    const TABLA="SOLICITO";

    public function __construct(){
    }

    public function setid_solicito($id_solicito){ $this->id_solicito=$id_solicito; }
    public function getid_solicito(){ return $this->id_solicito; }

    public function setNombre($nombre){ $this->nombre=$nombre; }
    public function getNombre(){ return $this->nombre; }

    public function setnombre_completo($nombre_completo){ $this->nombre_completo=$nombre_completo; }
    public function getnombre_completo(){ return $this->nombre_completo; }

    public function buscarTodos(){
        $conexion = new Conexion();
		$consulta = $conexion->prepare(
            'SELECT 
                ID_SOLICITO,
                NOMBRE AS NOMBRE, 
                lower(NOMBRE_COMPLETO) AS NOMBRE_COMPLETO
            FROM ' . self::TABLA . ' 
            ORDER BY nombre_completo'
            );
		$consulta->execute();
		$registros = $consulta->fetchAll();
		return $registros;
    }


}
?>