<?php

function cargar_tabla($usuarioActivo, $dia, $anio){

    include 'basedatos.php';
    
    $consul = "select ACTIVIDAD.ID_ACTIVIDADES as `ID`, ACTIVIDAD.FECHA as `FECHA`, PROYECTO.NOMBRE_PROYECTO as PROYECTO, ESPECIALIDAD.TIPO_ESPECIALIDAD as `ESPECIALIDAD`, ACTIVIDAD.DESCRIPCION_ACTIVIDAD as `DESCRIPCION`, ACTIVIDAD.HH_USADAS as `HH`, ACTIVIDAD.HH_EXTRAS as `HH EXTRA`, SOLICITO.NOMBRE as `SOLICITANTE` from PROYECTO, SOLICITO, ESPECIALIDAD, ACTIVIDAD where ACTIVIDAD.ID_PROYECTO = PROYECTO.ID_PROYECTO and ACTIVIDAD.ID_SOLICITO = SOLICITO.ID_SOLICITO and ACTIVIDAD.ID_ESPECIALIDAD = ESPECIALIDAD.ID_ESPECIALIDAD and ACTIVIDAD.ID_USUARIO = '$usuarioActivo' AND MONTH(ACTIVIDAD.FECHA) = '$dia' and YEAR(ACTIVIDAD.FECHA) = '$anio' ORDER BY `ACTIVIDAD`.`FECHA` DESC";
    
    $cTablaMes = $mysqli->query($consul);

            echo '<table border="1" id="tablas">';
            
            echo '<thead>';
            echo '<tr>';
                echo '<th>FECHA</th>';
                echo '<th style="width: 15%">PROYECTO</th>';
                echo '<th style="width: 15%">ESPECIALIDAD</th>';
                echo '<th>DESCRIPCION</th>';
                echo '<th>HH</th>';
                echo '<th style="width: 60px">HH EXTRA</th>';    
            echo '</tr>';
            echo '</thead>';
            
            echo '<tbody>';
            
            while ($fila = $cTablaMes->fetch_assoc()) {
                echo '<tr>';
                echo '<td>'.utf8_encode($fila['FECHA']).'</td>';
                echo '<td>'.utf8_encode($fila['PROYECTO']).'</td>';
                echo '<td>'.utf8_encode($fila['ESPECIALIDAD']).'</td>';
                echo '<td>'.utf8_encode($fila['DESCRIPCION']).'</td>';
                echo '<td>'.utf8_encode($fila['HH']).'</td>';
                echo '<td>'.utf8_encode($fila['HH EXTRA']).'</td>';  
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
}


?>