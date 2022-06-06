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


carrito.forEach(producto => console.log(producto)) //Para mostrar algo en consola o imprimirlo en el html(Para iterar entre los elementos del array)


//map

const array2 = carrito.map(producto => `${producto.nombre} - ${producto.precio}`) //Se usa para crear un nuevo array

console.log(array2);