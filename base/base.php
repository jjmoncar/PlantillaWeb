<!--
Documento: base
Creado en: 20/06/2015
Author: julio montaño (jjmoncar@gmail.com)
Description:
    Modulo base que contiene el llamado a los script de los frameworks que se
    utilizan para realizar las validaciones de los formularios, estilos,
    paginación entre otros.
    Tambien incluye la cabecera para el banner y el llamado al menu que
    debe ser modificado por el usuario segun las exigencias del sistema a
    desarrollar.
-->

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../dist/css/formValidation.css"/>
    <link rel="stylesheet" href="../dist/css/datepicker.css"/>
	 <link rel="stylesheet" href="../src/css/menu.css" />
    <script type="text/javascript" src="../vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../dist/js/formValidation.js"></script>
    <script type="text/javascript" src="../dist/js/framework/bootstrap.js"></script>
    <script type="text/javascript" language="javascript" src="../dist/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="../dist/js/jquery-DT-pagination.js"></script>
    <script type="text/javascript" src="../dist/js/bootstrap-datepicker.js"></script>

	 <div class="row">
    	<header id="banner" class="text-center"><img src="../src/imagenes/banner.png" alt="banner escuela"></header>
	 </div>

	 <?php
	 	include("../base/menu.php");
	 ?>
