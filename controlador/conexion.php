<?php
/*
Documento: conexion
Creado en: 20/06/2015
Author: julio montaño (jjmoncar@gmail.com)
Description:
    Modulo de conexion para los sistemas de gestión de base de datos mas comunes,
    tales como mysql, MariaDB y Postgresql. Por defecto se encuentra activado
    el modulo para Postgresql, pero si desea utilizar otro gestor de base de
    datos, simplemente comente el modulo que NO desea utilizar.
*/
session_start();
class Conectar
{
    function con()
        {
            $user = 'usuario';
            $passwd = 'pass_bd';
            $db = 'nombre_bd';
            $port = 5432;
            $host = 'ip_servidor';
            $strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
            $con = pg_connect($strCnx) or die ("<script type='text/javascript'>
				alert('Error de Conexion con la Base de Datos!');
				window.location='../index.php';
                              </script>". pg_last_error());
            return $con;
	}
}

/*
*******************************************************************************
* Activar para usar con MySql o MariaDB. Recuerde desactivar (comentar), la   *
* clase de conexion de Postgresql.                                            *
*******************************************************************************
class Conectar
{
	function con()
	{

		$con=mysql_connect("localhost","root","pass");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("nombre_bd");
		return $con;
	}
}
*/
?>
