function registraseBiker(){
 document.getElementByClassName('registroFormulario').style.display = 'none';
 document.getElementByClassName('registroAprobado').style.display = 'flex';
}

function mostrarSolicitud(){
    document.getElementById('orden-solicitud').style.display = 'flex';
    document.getElementById('orden-Tomadas').style.display = 'none';
    document.getElementById('orden-entregadas').style.display = 'none';
    document.getElementById('estado-entrega').style.display ='none';
    document.getElementById('Factura').style.display = 'none;'
}
function mostrarTomadas(){
    document.getElementById('orden-solicitud').style.display = 'none';
    document.getElementById('orden-Tomadas').style.display = 'flex';
    document.getElementById('orden-entregadas').style.display = 'none';
    document.getElementById('estado-entrega').style.display ='none';
    document.getElementById('Factura').style.display = 'none;'
}
function mostrarEntregadas(){
    document.getElementById('orden-solicitud').style.display = 'none';
    document.getElementById('orden-Tomadas').style.display = 'none';
    document.getElementById('orden-entregadas').style.display = 'flex';
    document.getElementById('estado-entrega').style.display ='none';
    document.getElementById('Factura').style.display = 'none;'
}
function mostrarDescripcionOrden(){
    document.getElementById('descripcion-orden').style.display = 'flex';
    document.getElementById('orden-solicitud').style.display = 'none';
    document.getElementById('orden-Tomadas').style.display = 'none';
    document.getElementById('orden-entregadas').style.display = 'none';
}

function mostrarAprobado(){
    document.getElementById('contenido').style.display = 'flex';
    document.getElementById('formulario-registro').style.display = 'none';
}

function mostrarEstadoOrden(){
    document.getElementById('descripcion-orden').style.display = 'none';
    document.getElementById('orden-solicitud').style.display = 'none';
    document.getElementById('orden-Tomadas').style.display = 'none';
    document.getElementById('orden-entregadas').style.display = 'none';
    document.getElementById('estado-entrega').style.display ='flex';

}

function mostrarFactura(){
    document.getElementById('descripcion-orden').style.display = 'none';
    document.getElementById('orden-solicitud').style.display = 'none';
    document.getElementById('orden-Tomadas').style.display = 'none';
    document.getElementById('orden-entregadas').style.display = 'none';
    document.getElementById('estado-entrega').style.display ='none';
    document.getElementById('Factura').style.display = 'flex';

}