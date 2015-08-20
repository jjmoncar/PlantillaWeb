<!--
Documento: menu
Creado en: 20/06/2015
Author: julio montaño (jjmoncar@gmail.com)
Description:
    Modulo que contiene la estructura basica de un menu hecho para su visualizacion con bootstrap3.
    Puede modificar o sustituir este menu segun su conveniencia o de acuerdo a las exigencias
    del desarrollo que este realizando.
-->
<div class="opciones">
            <ul class="nav nav-pills">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <span class="glyphicon glyphicon-ok-circle"></span> Opiones <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Opcion 1</a></li>
                        <li><a href="#">Opcion 2</a></li>
                        <li><a href="#">Opcion 3</a></li>
                        <li><a href="#">Opcion 4</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    <span class="glyphicon glyphicon-edit"></span> Reportes <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Reporte 1</a></li>
                        <li><a href="#">Reporte 2</a></li>
                        <li><a href="#">Reporte 3</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    <span class="glyphicon glyphicon-info-sign"></span> Ayuda <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Manual Oficial</a></li>
                        <li><a href="#">Licencia</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Acerca de</a></li>
                    </ul>
                </li>
            </ul>
        </div>
