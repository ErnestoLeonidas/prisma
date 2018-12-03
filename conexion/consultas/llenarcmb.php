<?php

function llenarUsuarios()
{
    include 'basedatos.php';
    $consulta = "select USUARIO from USUARIO where ID_USUARIO > 1 order by USUARIO asc";
    $cmbUsuario = $mysqli->query($consulta);

    while ($datos = $cmbUsuario->fetch_assoc()){
        echo '<option value ="' . utf8_encode($datos['USUARIO']) . '">' . utf8_encode($datos['USUARIO']) . '</option>';
    }
}

function llenarLocalidad()
{
    include 'basedatos.php';
    $consulta = "select ID_LOCALIDAD as ID, NOMBRE_LOCALIDAD as LOCALIDAD from LOCALIDAD order by LOCALIDAD asc";
    $cmbLocalidad = $mysqli->query($consulta);

    while ($datos = $cmbLocalidad->fetch_assoc()){
        echo '<option value ="' . $datos['ID'] . '">' . utf8_encode($datos['LOCALIDAD']) . '</option>';
    }
}


function llenarProyecto()
{
    include 'basedatos.php';
    $consulta = "select ID_SOLICITO as ID, NOMBRE_COMPLETO as NOMBRE from SOLICITO order by NOMBRE asc";
    $cmbProyecto = $mysqli->query($consulta);

    while ($datos = $cmbProyecto->fetch_assoc()) {
        echo '<option value ="' . utf8_encode($datos['ID']) . '">' . utf8_encode($datos['NOMBRE']) . '</option>';
    }  
}



?>