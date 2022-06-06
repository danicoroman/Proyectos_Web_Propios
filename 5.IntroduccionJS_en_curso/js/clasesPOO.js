//Clases

class Producto {
    constructor(nombre, precio) {
        this.nombre = nombre;
        this.precio = precio;
    }

    formatearProducto() {
        return `El Producto ${this.nombre} tiene un precio de: ${this.precio} €`;
    }

    precioProducto() {
        return `El precio de este producto es de: ${this.precio} €`;
    }

}

const producto2 = new Producto('Monitor Curvo de 49"', 500);


//Herencia
class Libro extends Producto {
    constructor(nombre, precio, isbn) {
        super(nombre, precio); //Sirve para Heredar el Constructor de la Clase Padre(en esste caso Producto) 
        this.isbn = isbn;
    }
    formatearProducto() {
        return `${super.formatearProducto()} y su isbn es: ${this.isbn}`; //Sirve para Heredar el Método
    }

}
const libro = new Libro('JavaScript la Revolución', 120, '910313981389139');


console.log(producto2.formatearProducto());
console.log(libro.formatearProducto());