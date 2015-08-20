<?php
include("../base/base.php");
?>

<head>
<meta charset="UTF-8" />

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header">
                    <h2>Formulario Modelo</h2>
                </div>

                <form id="defaultForm" method="post" class="form-horizontal" action="">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nombre</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nombre" placeholder="Primer Nombre" />
                        </div>
                        <label class="col-sm-1 control-label">Apellido</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="apellido" placeholder="Primer Apellido" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Usuario</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="usuario" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contraseña</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                    		<label class="col-sm-3 control-label">Fecha</label>
                        	<div class="col-sm-5">
                        		<div class="input-group date">
                           	<input type="text" class="form-control datepicker" id="datetimePicker" name="datetimePicker" />
                              	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
											<script type="text/javascript">
                							$('.datepicker').datepicker()
											</script>                              	
                              	</span>
                              </div>
                           </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Genero</label>
                        <div class="col-sm-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="male" /> Masculino
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="female" /> Femenino
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="other" /> Otro
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="captchaOperation"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree" value="agree" /> Acepto los Terminos y Condiciones
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').formValidation({
        message: 'Este Valor no es Valido',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'El Nombre es Requerido'
                    }
                }
            },
            apellido: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'El Apellido es Requerido'
                    }
                }
            },
            usuario: {
                message: 'El Usuario no es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Usuario es Requerido'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'El Usuario debe contener minimo 6 y maximo 30 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El Usuario solo puede tener letras y numeros, no guiones bajos'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'El Email es requerido'
                    },
                    emailAddress: {
                        message: 'Email no Valido'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'La Contraseña es requerida'
                    },
                    different: {
                        field: 'usuario',
                        message: 'La Contraseña no puede ser el mismo Usuario'
                    }
                }
            },

				datetimePicker: {
                validators: {
                    notEmpty: {
                        message: 'Fecha requerida y no puede ser vacio'
                    },
                    date: {
                        format: 'MM/DD/YYYY h:m A'
                    }
                }
            },            
            
            gender: {
                validators: {
                    notEmpty: {
                        message: 'El Genero es Requerido'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Respuesta Incorrecta',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'Debe aceptar los terminos y condiciones'
                    }
                }
            }
        }
    });
});
</script>

</body>
