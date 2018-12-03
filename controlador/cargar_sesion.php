<?php
    require_once '../modelos/actividad.php';
    require_once '../modelos/area_especialidad.php';
    require_once '../modelos/proyecto.php';
    require_once '../modelos/localidad.php';
    require_once '../modelos/solicito.php';
    require_once '../modelos/area.php';
    require_once '../modelos/especialidad.php';
    require_once '../modelos/usuario.php';
    session_start();

    $id_activo = $_SESSION['usuario_activo'][0]['ID_USUARIO'];
    $nombre_activo = $_SESSION['usuario_activo'][0]['NOMBRE'];
    $area_activo = $_SESSION['usuario_activo'][0]['ID_AREA'];

    /*  CARGAR DATOS DE MANTENCION 
    *   AREA                ID_AREA, AREA
    *   TRABAJADORES        ID_USUARIO, NOMBRE, APELLIDO, USUARIO, PASS, FACTOR, VALOR, ID_AREA
    *   PROYECTO            ID_PROYECTO, NOMBRE, ESTADO, ID_LOCALIDAD 
    *   LOCALIDAD           ID_LOCALIDADES, NOMBRE
    *   SOLICITANTE         ID_SOLICITO, NOMBRE, NOMBRE_COMPLETO
    *   ESPECIALDIAD        ID_ESPECIALIDAD, TIPO_ESPECIALIDAD
    */

    $m_area = Area::buscarTodo();
    $_SESSION['m_areas'] = $m_area; 

    $m_tra = Usuario::buscarTodo();
    $_SESSION['m_usuarios'] = $m_tra;

    $m_pro = Proyecto::buscarTodo();
    $_SESSION['m_proyectos'] = $m_pro;

    $m_loc = Localidad::buscarTodo();
    $_SESSION['m_localidades'] = $m_loc; 

    $m_sol = Solicito::buscarTodos(); 
    $_SESSION['m_mandantes'] = $m_sol;

    $m_esp = Especialidad::buscarTodo();
    $_SESSION['m_especialidades'] = $m_esp;

    /* FIN CARGA PARA MANTENCION */


    /* DATOS DEL USUARIO CONECTADO */

    //Especialidades del usuario
    $especialidad_usuario = new AreaEspecialidad();
    $especialidad_usuario->setId_area($area_activo);
    $especialidades = $especialidad_usuario->buscarEspecialidades();
    $_SESSION['especialidades'] = $especialidades; //  VALORES: ID, NOMBRE
        //print_r($_SESSION['especialidades']);die;

    //Proyectos Activos
    $proy_en_ejecucion = new Proyecto();
    $proyectos_activos = $proy_en_ejecucion->buscarActivos(); 
    $_SESSION['proyectos_activos'] = $proyectos_activos; // VALORES: ID_PROYECTO, NOMBRE_PROYECTO, ID_LOCALIDAD
        //print_r($_SESSION['proyectos_activos']);die;

    // HH del usuario
    $horas_mes = new Actividad();
    $horas_mes->setId_usuario($id_activo);
    $hhs = $horas_mes->mostrar();
    $_SESSION['hh_mes'] = $hhs;
        //print_r($_SESSION['hh_mes']);die;


    header('location: ../vista/hhmes.php');
?>