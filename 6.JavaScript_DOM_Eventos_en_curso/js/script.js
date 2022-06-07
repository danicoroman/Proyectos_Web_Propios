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

console.log(1);
window.addEventListener('load', function() { //load espera a que el JS y los archivos que dependen del HTML estén listos(y las imágenes)
    console.log(2);
})

window.onload = function() { //Lo mismo que el de arriba
    console.log(3);
}

document.addEventListener('DOMContentLoaded', function() { //Solo espera por el el HTML, pero no espera CSS o imágenes
    console.log(4);
})
console.log(5);


window.onscroll = function() {
    console.log('Scrolling...');
}


//Seleccionar elementos y asociarles un Evento

const btnEnviar = document.querySelector('.boton--primario');
btnEnviar.addEventListener('click', function(evento) {
    console.log(evento);
    evento.preventDefault(); //Evita que realice la acción por defecto ej.Mandar un formulario al pulsar ENVIAR
    //Validar un Formulario
    console.log('Enviando formulario');
})