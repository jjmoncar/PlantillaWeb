<?php

	require('../modelo/demo_modelo.class.php');
	
	$cedula = trim($_POST['cedula']);
	$nombre = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
   $fecha_nac = trim($_POST['fecha_nac']);
   $lugar_nac = trim($_POST['lugar_nacimiento']);
   $edo_civil = trim($_POST['edo_civil']);
   $direccion = trim($_POST['direccion']);

	$objInterno=new Interno;
	if ( $objInterno->insertar(array($cedula,$nombre,$apellido,$fecha_nac,$lugar_nac,$edo_civil,$direccion)) == true){
		echo "<script type='text/javascript'>
				alert('Datos Guardados');
				window.location='../principal.php';
                              </script>";
	}else{
		echo "<script type='text/javascript'>
				alert('Se produjo un error. Intente de Nuevo');
				window.location='../principal.php';
                              </script>";
	}
?>
