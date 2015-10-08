
<?php
include("../base/base.php");
session_start();

//Si desloguea se va a la pagina principal
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:../index.php");
}
?>
 <div align="right">
    Logueado como: <?php echo $_SESSION["session_user"];
 	//echo $_SESSION["session_nivel"]
    ?>&nbsp;&nbsp;
    <a href='principal.php?logout'>Cerrar Sesion<?php session_name("session_user"); ?></a><br>
    <div id="valor" value="<?php echo $_SESSION['session_nivel']; ?>"></div>
    Nivel: <strong><?php if($_SESSION["session_nivel"]==1) {
    	echo "Administrador";
    }else {
    	echo "Usuario";
         } ?></strong>
 </div>
