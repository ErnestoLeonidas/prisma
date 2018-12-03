<?php
session_start();
$m_areas = $_SESSION['m_areas'];

include_once('cargahh-administrador.php');

?>
    
<!-- el contenido va acá -->
<div class="container">
    <div class="row">
        <div class="col text-center mt-2">	
            <h2>AREAS</h2>
        </div>
    

        <table class="table table-sm table-hover" id="tablas">
            <thead>
                <tr class="table-info">
                    <th scope="col">Nombre</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($m_areas as $row){ ?> 
                <tr>			
                    <td><?php echo utf8_encode(ucfirst($row['AREA'])) ?></td>
                    <td>
                        <div class="text-center">
                            <a href="#" data-toggle="modal" data-target="#eliminar<?php echo $row['ID_AREA']; ?>" ><span class="glyphicon glyphicon-trash"></a>
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal<?php echo $row['ID_AREA']; ?>" ><span class="glyphicon glyphicon-pencil"></a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>


<!-- fin contenido  -->

<!-- carga el footer y los script generales como el reloj -->

<?php include_once('footer.php'); ?>