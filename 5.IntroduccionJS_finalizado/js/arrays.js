//Arreglos o Arrays

const numeros = [10, 20, 30, 40, 50];




const array = ['Hola', 10, false, "no", null, { nombre: 'Daniel', trabajo: 'Programador' },
    [1, 2, 3]
];

// console.table(array);


//Acceder a los valores de un array

// console.log(numeros[4]);
// console.log(numeros[2]);

//Conocer la longitud del Array

// console.log(meses.length);


// meses.forEach(function(mes) {
//     console.log(mes);
// })


numeros.push(2, 22, 222); //Agrega al final del array


numeros.unshift(-10, -11, -12) //Agrega al Principio del array

console.table(numeros);


const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

// meses.pop(); //Elimina el último elemento del Array
// meses.shift(); //Elimina el primer elemento del Array

// meses.splice(2, 1)


// console.table(meses);

//Rest Operator o Spread Operator

// const nuevoArray = [...meses, 'Junio']
const nuevoArray = ['Diciembre', ...meses]
console.log(nuevoArray);