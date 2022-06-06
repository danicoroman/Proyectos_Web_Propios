//Desestructuracion Objetos

const producto = {
    nombreProducto: 'Monitor 20 Pulgadas',
    precio: 300,
    disponible: true
}

//Forma antigua
// const nombreProducto = producto.nombreProducto;
// const precioProducto = producto.precio;



//Destructuring
const { precio, nombreProducto, disponible } = producto;


console.log(precio);
console.log(nombreProducto);
console.log(disponible);