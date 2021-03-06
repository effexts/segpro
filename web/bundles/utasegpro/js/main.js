
function type(obj) {
    return Object.prototype.toString.call(obj).slice(8, -1);
}

function dateToYMD(date) {
    var d = date.getDate();
    var m = date.getMonth() + 1;
    var y = date.getFullYear();
    return '' + y + '-' + (m <= 9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);
}
function format1(n, currency) {
    return currency + " " + n.toFixed(0).replace(/./g, function(c, i, a) {
        return i > 0 && c !== "," && (a.length - i) % 3 === 0 ? "." + c : c;
    });
}


function formatearRut(Rut) {
    var sRut = new String(Rut);
    var sRutFormateado = '';

    while (sRut.indexOf(".") != -1) {
        sRut = sRut.replace(".", "");
    }

    while (sRut.indexOf("-") != -1) {
        sRut = sRut.replace("-", "");
    }

    var sDV = sRut.charAt(sRut.length - 1);
    sRut = sRut.substring(0, sRut.length - 1);

    while (sRut.length > 3) {
        sRutFormateado = "." + sRut.substr(sRut.length - 3) + sRutFormateado;
        sRut = sRut.substring(0, sRut.length - 3);
    }

    sRutFormateado = sRut + sRutFormateado;

    if (sRutFormateado != "") {
        sRutFormateado += "-" + sDV;
    } else {
        sRutFormateado += sDV;
    }

    return sRutFormateado;
}

$(document).ready(function() {

    $("#dialog").dialog({autoOpen: false,
        modal: true,
        title: 'Agregar Actividad',
        closeText: 'Cerrar'});

    $('.add_actividad_link').click(function() {
        $('#dialog').dialog('open');
    });

    //Inicializamos los campos de fecha.
    $(".datepickers").datepicker({
        // appendText: " (dd/mm/yyyy)",
        dateFormat: "dd/mm/yy",
        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        firstDay: 1
    });

});