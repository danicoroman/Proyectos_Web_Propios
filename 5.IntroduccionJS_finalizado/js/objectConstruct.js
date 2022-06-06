//POO

/*Object Literal*/
const producto = {
    nombre: 'Tablet',
    precio: 500
}

//Object Constructor

function Producto(nombre, precio) {
    this.nombre = nombre;
    this.precio = precio;
}

//Crear funciones que sólo se utilizan en un objeto en específico

Producto.prototype.formatearProducto = function() {
    return `El Producto ${this.nombre} tiene un precio de: ${this.precio} €`
}



const producto2 = new Producto('Monitor Curvo de 49"', 500);
const producto3 = new Producto('Portatil', 300);



console.log(producto2.formatearProducto());
console.log(producto3.formatearProducto());