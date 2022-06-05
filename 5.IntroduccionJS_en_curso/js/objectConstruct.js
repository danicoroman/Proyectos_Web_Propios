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

const producto2 = new Producto('Monitor Curvo de 49"', 500);
const producto3 = new Producto('Portatil', 300);

console.log(producto2);
console.log(producto3);