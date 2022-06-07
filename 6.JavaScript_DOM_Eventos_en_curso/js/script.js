// querySelector SE USA ACTUALMENTE
const heading = document.querySelector('#heading'); //Retorna 0 o 1 Elemento
heading.textContent = 'Danielo';

console.log(heading);



//querySelectorAll


const enlaces = document.querySelectorAll('.navegacion a');
enlaces[0].textContent = 'Nuevo texto para Enlace';
enlaces[0].href = 'https://google.com'
enlaces[0].classList.add('hola');
enlaces[0].classList.remove('navegacion__enlace');


//getElementById NO SE USA ACTUALMENTE

const heading2 = document.getElementById('heading');
// console.log(heading2);