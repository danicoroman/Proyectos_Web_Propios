"use strict"; //Correr JS en modo estricto

//Objetos

const producto = {
    nombreProducto: 'Monitor 20 Pulgadas',
    precio: 300,
    disponible: true
}


//Método para no poder ni añadir nuevas propiedade, ni modificar o borrar las existentes
Object.freeze(producto);

//Método parecido a freeze, pero pudiendo modificar las propiedades
Object.seal(producto);


producto.imagen = 'imagen.png';



console.log(producto);