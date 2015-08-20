<?php
/*
**************************************************************************************
Esta funcion permite realizar el calculo de la edad
**************************************************************************************
*/

function calcular_edad($fecha){
$dias = explode("/",$fecha,3);
$dias = mktime(0,0,0,$dia[1],$dias[0],$dias[2]);
$edad = (int)((time()-$dias)/31556926);
return $edad;
}

/*
**************************************************************************************
Esta funcion permite llevar un registro de los procedimientos que realizan en el
sistema.
Debe crear una tabla en la base de datos de nombre "proceso" (si coloca otro nombre
debe tomar en cuenta las consideraciones necesarias en el la funcion para que
pueda guardar los procesos); la cual debe contener los siguientes campos:
- operador => usuario activo en la sesion del sistema
- fecha_operacion => fecha en que se realizo la accion
- accion_ejecutada => que accion se realizo en el sistema (guardar, editar, etc.)
- equipo_operado => direccion ip del equipo desde donde se esta realizando la operacion
***************************************************************************************
*/

function agregar_proceso($ced,$fecha,$accion){
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    return pg_query("INSERT INTO proceso (operador,fecha_operacion,accion_ejecutada,equipo_operado)
    VALUES ('".$ced."','".date("Y-m-d H:i:s", time())."','".$accion."','".$hostname."')");
}

 ?>
