// querySelector SE USA ACTUALMENTE
const heading = document.querySelector('#heading'); //Retorna 0 o 1 Elemento
heading.textContent = 'Danielo';

console.log(heading);



//querySelectorAll


const enlaces = document.querySelectorAll('.navegacion a');
enlaces[0].textContent = 'Nuevo texto para Enlace';
enlaces[0].href = 'https://google.com'
enlaces[0].classList.add('hola');
// enlaces[0].classList.remove('navegacion__enlace');


//getElementById NO SE USA ACTUALMENTE

const heading2 = document.getElementById('heading');
// console.log(heading2);


//Generar un nuevo Enlace

const nuevoEnlace = document.createElement('A'); //Se Recomienda que se escriban los elementos en Mayúsculas

//Agregar el Href
nuevoEnlace.href = 'nuevo-enlace.html';
//Agregar el Texto
nuevoEnlace.textContent = 'Tienda';
//Agregar la clase
nuevoEnlace.classList.add('navegacion__enlace');
//Agregarlo al Documento
const navegacion = document.querySelector('.navegacion');
navegacion.appendChild(nuevoEnlace);

// console.log(nuevoEnlace);

//Eventos

// console.log(1);
// window.addEventListener('load', function() { //load espera a que el JS y los archivos que dependen del HTML estén listos(y las imágenes)
//     console.log(2);
// })

// window.onload = function() { //Lo mismo que el de arriba
//     console.log(3);
// }

// document.addEventListener('DOMContentLoaded', function() { //Solo espera por el el HTML, pero no espera CSS o imágenes
//     console.log(4);
// })
// console.log(5);


// window.onscroll = function() {
//     console.log('Scrolling...');
// }


//Seleccionar elementos y asociarles un Evento

// const btnEnviar = document.querySelector('.boton--primario');
// btnEnviar.addEventListener('click', function(evento) {
//     console.log(evento);
//     evento.preventDefault(); //Evita que realice la acción por defecto ej.Mandar un formulario al pulsar ENVIAR
//     //Validar un Formulario
//     console.log('Enviando formulario');
// })





//Eventos de los Inputs y Textarea
const datos = {
    nombre: '',
    email: '',
    mensaje: ''
}

const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');
const formulario = document.querySelector('.formulario');

nombre.addEventListener('input', leerTexto)

email.addEventListener('input', leerTexto)

mensaje.addEventListener('input', leerTexto)

//El Evento de Submit

formulario.addEventListener('submit', function(evento) { //Se usa este evento en los formularios y se selecciona el formulario,no el input/boton de enviar
    evento.preventDefault();


    //Validar el Formulario
    const { nombre, email, mensaje } = datos;

    if (nombre === '' || email === '' || mensaje === '') {
        mostrarAlerta('Todos los campos son obligatorios', true);
        return; //Corta la ejecución del código
    }
    //Enviar el Formulario
    mostrarAlerta('El formulario se ha enviado correctamente');
})


function leerTexto(e) {
    // console.log(e.target.value);

    datos[e.target.id] = e.target.value; //Se coge el id del html y se rellena en los campos del objeto específicos

    // console.log(e.target);

    // console.log(datos);
}


//Mostrar alerta en pantalla en caso de error o de mandarlo correctamente

function mostrarAlerta(mensaje, error = null) {
    const alerta = document.createElement('P');
    alerta.textContent = mensaje;
    if (error) {
        alerta.classList.add('error');
    } else {
        alerta.classList.add('correcto');

    }
    formulario.appendChild(alerta);
    //Desaparezca después de 4 segundos
    setTimeout(() => {
        alerta.remove();
    }, 4000);


}