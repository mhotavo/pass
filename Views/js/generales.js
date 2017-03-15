function __(id) {
    return document.getElementById(id);
}

function DeleteItem(contenido, url) {
    var action = window.confirm(contenido);
    if (action) {
        window.location = url;
    }
}

function pad(str, max) {
    str = str.toString();
    return str.length < max ? pad("0" + str, max) : str;
}

function mostrarFecha(days) {
    milisegundos = parseInt(35 * 24 * 60 * 60 * 1000);
    fecha = new Date();
    day = fecha.getDate();
    // el mes es devuelto entre 0 y 11
    month = fecha.getMonth() + 1;
    year = fecha.getFullYear();
    //document.write("Fecha actual: "+day+"/"+month+"/"+year);
    //Obtenemos los milisegundos desde media noche del 1/1/1970
    tiempo = fecha.getTime();
    //Calculamos los milisegundos sobre la fecha que hay que sumar o restar...
    milisegundos = parseInt(days * 24 * 60 * 60 * 1000);
    //Modificamos la fecha actual
    total = fecha.setTime(tiempo + milisegundos);
    day = fecha.getDate();
    month = fecha.getMonth() + 1;
    year = fecha.getFullYear();
    return year + "-" + pad(month, 2) + "-" + pad(day, 2);
}

function mesLetras(mes) {
    switch (mes) {
        case '01':
            return 'Ene';
            break;
        case '02':
            return 'Fab';
            break;
        case '03':
            return 'Mar';
            break;
        case '04':
            return 'Abr';
            break;
        case '05':
            return 'May';
            break;
        case '06':
            return 'Jun';
            break;
        case '07':
            return 'Jul';
            break;
        case '08':
            return 'Ago';
            break;
        case '09':
            return 'Sep';
            break;
        case '10':
            return 'Oct';
            break;
        case '11':
            return 'Nov';
            break;
        case '12':
            return 'Dic';
            break;
    }
}
//STATISTICS
function longevos() {
    $("#longevos").empty();
    $.getJSON('Integrantes/LongevoJSON', function(resp) {
        $.each(resp, function(i, item) {
            $("#longevos").append(' <li><span class="text-info">' + item.NOMBRES + '</span> <b class="text-success">' + item.EDAD + ' Años</b></li>');
        });
    });
}

function jovenes() {
    $("#jovenes").empty();
    $.getJSON('Integrantes/JovenJSON', function(resp) {
        //console.log(resp);
        $.each(resp, function(i, item) {
            $("#jovenes").append(' <li><span class="text-info">' + item.NOMBRES + '</span> <b class="text-success">' + item.EDAD + ' Años</b></li>');
        });
    });
}

function masParticipativos() {
    $("#participativos").empty();
    $.getJSON('Integrantes/ParticipativoJSON', function(resp) {
        //console.log(resp);
        $.each(resp, function(i, item) {
            $("#participativos").append(' <li><span class="text-info">' + item.NOMBRES + '</span> <b class="text-success" >(' + item.TOTAL + ') <i class="fa fa-user-plus" aria-hidden="true"></i></i></b>  </li>');
        });
    });
}

function menosParticipativos() {
    $("#participativos").empty();
    $.getJSON('Integrantes/MenosParticipativoJSON', function(resp) {
        console.log(resp);
        $.each(resp, function(i, item) {
            $("#NoParticipativos").append(' <li><span class="text-info">' + item.NOMBRES + '</span> <b class="text-danger" >(' + item.TOTAL + ')   <i class="fa fa-user-times" aria-hidden="true"></i></i></i>  </li>');
        });
    });
}

function cargarAsistencia(val) {
    var fecha = val;
    //LISTAMOS INTEGRANTES
    $.getJSON('Integrantes/listarAllJSON', function(resp) {
        for (var i in resp) {
            var id = resp[i].DOCUMENTO;
            $.getJSON('asistencia/verJSON', {
                id: id,
                fecha: fecha
            }, function(data) {
                if (data.length > 0) {
                    $("#alert").empty();
                    $("#alert").append('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Asistencia registrada</strong> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </div>');
                    var comentario = "";
                    for (var i in data) {
                        //console.log(data[i].ID_INTEGRANTE+" "+data[i].ASISTENCIA);
                        if (data[i].ASISTENCIA == 1) {
                            $("#si_" + data[i].ID_INTEGRANTE).attr('checked', true);
                        } else {
                            $("#no_" + data[i].ID_INTEGRANTE).attr('checked', true);
                        }
                        comentario = data[i].COMENTARIO;
                    }
                    $("#comentario").val(comentario);
                } else {
                    $("input[name^='asistencia']").attr('checked', false);
                }
            }).error(function(e) {
                console.log(e);
            })
        }
    }).error(function(e) {
        console.log(e);
    })
}

function asistencia() {
    //LISTAMOS INTEGRANTES
    $.getJSON('../Integrantes/listarJSON', function(resp) {
        for (var i in resp) {
            $("#tablaAsistencia > tbody").append("<tr id='" + resp[i].DOCUMENTO + "'><td>" + resp[i].NOMBRE + "</td></tr>");
            var id = resp[i].DOCUMENTO;
            //LISTAMOS ASISTENCIA
            $.getJSON('../asistencia/verJSON', {
                id: id
            }, function(data) {
                //console.log(data);
                var fecha = "";
                for (var i in data.reverse()) {
                    if (data[i].ASISTENCIA == 1) {
                        $("#" + data[i].ID_INTEGRANTE).append("<td align='center'><b style='color:green;'><img src='../Views/images/true.png' width='20'></b></td>");
                    }
                    if (data[i].ASISTENCIA == 0) {
                        $("#" + data[i].ID_INTEGRANTE).append("<td align='center'><b style='color:red;'><img src='../Views/images/false.png' width='20'></b></td>");
                    }
                }
            }).error(function(e) {
                console.log(e);
            })
        }
        $("#tablaAsistencia > tbody").append("<tr align='right' id='totalAsistencias'><td><b>Total Asistencias</b></td></tr>");
        $("#tablaAsistencia > tbody").append("<tr align='right' id='totalFallas'><td><b>Total Fallas</b></td></tr>");
        $("#tablaAsistencia > tbody").append("<tr align='right' id='totalAsistentes'><td><b>Total Asistentes</b></td></tr>");
    }).error(function(e) {
        console.log(e);
    })
    //LISTAMOS FECHAS
    $.getJSON('../asistencia/fechasJSON', function(data) {
        for (var x in data.reverse()) {
            if (data[x].COMENTARIO == null) {
                data[x].COMENTARIO = "Vacio";
            }
            $("#tablaAsistencia > thead > tr").append("<th style='text-align:center;'>" + mesLetras(data[x].FECHA.slice(5, 7)) + "-" + data[x].FECHA.slice(8, 10) + " <br><span class='TextSmall'>" + data[x].COMENTARIO + "</span></th>");
            $("#totalAsistencias").append("<td style='text-align:center;color:#30B224;font-weight:bold'>" + data[x].ASISTENCIAS + "</td>");
            $("#totalFallas").append("<td style='text-align:center;color:#e30000;font-weight:bold'>" + data[x].FALLAS + "</td>");
            $("#totalAsistentes").append("<td style='text-align:center;color:#006afd;font-weight:bold'>" + data[x].TOTAL + "</td>");
            var fecha = data[x].FECHA;
            //console.log(fecha);
            var asistencias = 0;
            var fallas = 0;
        }
    }).error(function(e) {
        console.log(e);
    })
}

function validarPasswords() {
    var nueva = $("#nueva").val();
    var confir = $("#confirmar").val();
    var actual = $("#actual").val();
    $("#msjConfirmar").empty();
    if (actual == nueva) {
        $("#actual").val("");
        $("#nueva").val("");
        $("#confirmar").val("");
        $("#actual").focus();
        $("#msjConfirmar").append('<span style="color:orange;font-size:14px;font-weight:bold">La contraseña debe ser diferente a la anterior. <i class="fa fa-key" aria-hidden="true"></i></span>');
    } else {
        if ($("#nueva").val().length < 5) {
            $("#nueva").val("");
            $("#confirmar").val("");
            $("#nueva").focus();
            $("#msjConfirmar").append('<span style="color:orange;font-size:14px;font-weight:bold">Min. 5 caracteres <i class="fa fa-key" aria-hidden="true"></i></span>');
        } else {
            if (nueva != confir) {
                $("#nueva").val("");
                $("#confirmar").val("");
                $("#nueva").focus();
                $("#msjConfirmar").append('<span style="color:orange;font-size:14px;font-weight:bold">Las contraseñas no coinciden <i class="fa fa-key" aria-hidden="true"></i></span>');
            }
        }
    }
}

function validarPasswordActual() {
    $("#msjActual").empty();
    var actual = $("#actual").val();
    var id = $("#id").val();
    $.get('GoLogin/validarPassword', {
        actual: actual,
        id: id
    }, function(resp, estado, jqXHR) {
        if (resp != 1) {
            $("#actual").val("");
            $("#actual").focus();
            $("#msjActual").append('<span style="color:orange;font-size:14px;font-weight:bold">Contraseña incorrecta <i class="fa fa-key" aria-hidden="true"></i></span>');
        }
    });
}