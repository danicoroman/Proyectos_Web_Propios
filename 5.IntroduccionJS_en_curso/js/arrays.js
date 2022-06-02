//Arreglos o Arrays

const numeros = [10, 20, 30, 40, 50];

console.table(numeros);


const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

console.table(meses);


const array = ['Hola', 10, false, "no", null, { nombre: 'Daniel', trabajo: 'Programador' },
    [1, 2, 3]
];

// console.table(array);


//Acceder a los valores de un array

console.log(numeros[4]);
console.log(numeros[2]);

//Conocer la longitud del Array

console.log(meses.length);


meses.forEach(function(mes) {
    console.log(mes);
})