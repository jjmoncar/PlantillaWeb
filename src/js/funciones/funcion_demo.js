/*
Este es un ejemplo de funcion utilizando jquery para el envio asincrono de los
datos del formulario a la base de datos.
Contiene los metodos basicos de CRUD.
Nota: Debe contener tantos archivos como este segun la cantidad de tablas que
contenga la base de datos. TODOS LOS DATOS EN LAS FUNCIONES ABAJO ESCRITRAS, SON
EJEMPLOS QUE DEBE MODIFICAR PARA APLICAR EN SU SOFTWARE
*/

function ActualizarDatos(){
    var cedula = $('#cedula').attr('value');
    var nombre = $('#nombre').attr('value');
    var apellido = $('#apellido').attr('value');
    //Si la tabla posee campo sexo se procesa asi
    //var sexo = $("input[@name='sexo']:checked").attr("value");
    var cel = $("#cel").attr("value");
    var email = $("#email").attr("value");
    var cod_proy = $("#cod_proy").attr("value");

    $.ajax({
        url: 'alumno_actualizar.php',
        type: "POST",
        data: "submit=&cedula="+cedula+"&nombre="+nombre+"&apellido="+apellido+"&sexo="+sexo+"&cel="+cel+"&email="+email+"&cod_proy="+cod_proy,
        success: function(datos){
            alert(datos);
            ConsultaDatos();
            $("#formulario").hide();
            $("#tabla").show();
        }
    });
    return false;
}

function ConsultaDatos(){
    $.ajax({
        url: 'alumno_consulta.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarDato(cedula){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'alumno_eliminar.php',
            type: "GET",
            data: "cedula="+cedula,
            success: function(datos){
                alert(datos);
                $("#fila-"+cedula).remove();
            }
        });
    }
    return false;
}

function GrabarDatos(){
    var cedula = $('#cedula').attr('value');
    var nombre = $('#nombre').attr('value');
    var apellido = $('#apellido').attr('value');
    var sexo = $('#sexo').attr("value");
    var cel = $("#cel").attr("value");
    var email = $("#email").attr("value");
    var cod_proy = $("#cod_proy").attr("value");

    $.ajax({
        url: 'alumno_nuevo.php',
        type: "POST",
        data: "submit=&cedula="+cedula+"&nombre="+nombre+"&apellido="+apellido+"&sexo="+sexo+"&cel="+cel+"&email="+email+"&cod_proy="+cod_proy,
        success: function(datos){
            ConsultaDatos();
            alert(datos);
            $("#formulario").hide();
            $("#tabla").show();
        }
    });
    return false;
}

function Cancelar(){
    $("#formulario").hide();
    $("#tabla").show();
    return false;
}
