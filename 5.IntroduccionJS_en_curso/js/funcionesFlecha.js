//Arrow Functions

const sumar2 = (n1, n2) => console.log(n1 + n2); //Con una línea las llaves son opcionales


sumar2(5, 10);


const aprendiendo = tecnologia => console.log(`Aprendiendo ${tecnologia}`); //Con un sólo parámetro los paréntesis son opcionales


aprendiendo('JavaScript')


//Array Methods

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];


const carrito = [
    { nombre: 'Monitor 20 Pulgadas', precio: 500 },
    { nombre: 'Televisión 50 Pulgadas', precio: 700 },
    { nombre: 'Tablet', precio: 300 },
    { nombre: 'Audífonos', precio: 200 },
    { nombre: 'Teclado', precio: 20 },
    { nombre: 'Móvil', precio: 250 },
    { nombre: 'Altavoces', precio: 150 },
    { nombre: 'Portátil', precio: 850 }
];


//ForEach
meses.forEach(mes => {
    if (mes == 'Marzo') {
        console.log('Marzo sí existe');
    }
})

let resultado;

//Some ideal para array de objetos
resultado = carrito.some(producto => producto.nombre === 'Móvil');


//Reduce

resultado = carrito.reduce((total, producto) => total + producto.precio, 0) //0 es el valor inicial



//Filter

resultado = carrito.filter(producto => producto.precio > 400);

resultado = carrito.filter(producto => producto.nombre !== 'Móvil');

console.log(resultado);