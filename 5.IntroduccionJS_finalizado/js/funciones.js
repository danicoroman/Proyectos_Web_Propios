//Declaración de la función
sumar(); //No da error y funciona
function sumar() {
    console.log(10 + 10);
}




//Expresión de la función (Se detecta más como una variable antes que como una función)
sumar2(); //Da error
const sumar2 = function() {
    console.log(3 + 3);
}














//IIFE proteger variables y funciones de otros archivos

(function() {
    console.log('Esto es una función');
})();