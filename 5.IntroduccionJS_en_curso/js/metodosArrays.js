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
meses.forEach(function(mes) {
    if (mes == 'Marzo') {
        console.log('Marzo sí existe');
    }
})


//Includes

let resultado = meses.includes('Marzo');


console.log(resultado);


//Some ideal para array de objetos
resultado = carrito.some(function(producto) {
    return producto.nombre === 'Móvil'
})

//Reduce

resultado = carrito.reduce(function(total, producto) {
        return total + producto.precio
    }, 0) //0 es el valor inicial

//Filter

resultado = carrito.filter(function(producto) {
    return producto.precio > 400
});
resultado = carrito.filter(function(producto) {
    return producto.nombre !== 'Móvil'
});

console.log(resultado);