<?php
header("Content-type: text/html; charset=utf-8");
include_once("../controlador/conexion.php");

class Proyectos{
 //constructor

 	var $conex;
 	function Proyectos(){
 		$this->conex=new Conectar;
 	}

	function insertar($campos){
		if($this->conex->con()==true){
			print_r($campos);
			return mysql_query("INSERT INTO proyectos (cod_proyecto,nombre,lapso,fecha_inicio,fecha_fin,
                            descripcion,ced_docente)
			VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."',"
                                . "'".$campos[5]."','".$campos[6]."')");
		}
	}

	function actualizar($campos,$id){
		if($this->conex->con()==true){
			//print_r($campos);
			return mysql_query("UPDATE proyectos SET nombre = '".$campos[0]."', lapso = '".$campos[1]."', "
                                . "fecha_inicio = '".$campos[2]."',fecha_fin = '".$campos[3]."', descripcion = '".$campos[4]."',"
                                . "ced_docente = '".$campos[5]."' WHERE cod_proyecto = '".$id."'");
		}
	}

	function mostrar_proyecto($id){
		if($this->conex->con()==true){
			return mysql_query("SELECT * FROM proyectos WHERE cod_proyecto='".$id."'");
		}
	}

	function mostrar_proyectos(){
		if($this->conex->con()==true){
                    if($_SESSION["session_nivel"]==1){
			return mysql_query("SELECT * FROM proyectos ORDER BY cod_proyecto ASC");
                    }else{
                        return mysql_query("SELECT * FROM proyectos WHERE ci_maestro='".$_SESSION["session_cedula"]."' ORDER BY cod_proyecto ASC");
                    }
		}
	}

	function eliminar($id){
		if($this->conex->con()==true){
			return mysql_query("DELETE FROM proyectos WHERE cod_proyecto='".$id."'");
		}
	}
}
?>
