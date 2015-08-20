<?php
session_start();
include_once("../controlador/conexion.php");

class Interno{

 	var $conex;
 	function Interno(){
 		$this->conex=new Conectar;		
 	}

	function insertar($campos){
		if($this->conex->con()==true){
			//print_r($campos);
			return pg_query("INSERT INTO pruebas_internos (fecha_prueba,verbal,numerica,administrativas,cedula_personal) 
			VALUES ('".$campos[0]."','".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')");
		}
	}
	
	function actualizar($campos,$id){
		if($this->conex->con()==true){
			//print_r($campos);
			return pg_query("UPDATE pruebas_internos SET fecha_prueba = '".$campos[0]."', verbal = '".$campos[1]."',"
                                . "numerica = '".$campos[2]."',administrativas = '".$campos[3]."',cedula_personal = '".$campos[4]."' "
                                . "WHERE cod_prueba = '".$id."'");
		}
	}
	
	function mostrar_interno($id){
		if($this->conex->con()==true){
			return pg_query("SELECT * FROM pruebas_internos WHERE cod_prueba='".$id."'");
		}
	}

	function mostrar_internos(){
		if($this->conex->con()==true){
			return pg_query("SELECT * FROM pruebas_internos ORDER BY cod_prueba ASC");
		}
	}

	function eliminar($id){
		if($this->conex->con()==true){
                        agregar_proceso($_SESSION["session_user"],date("Y-m-d"),"Elimina Prueba Interna: ".$id);
			return pg_query("DELETE FROM pruebas_internos WHERE cod_prueba='".$id."'");
		}
	}
}
?>