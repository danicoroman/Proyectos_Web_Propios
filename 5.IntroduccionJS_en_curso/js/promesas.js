const usuarioAutenticado = new Promise((resolve, reject) => {

    const auth = true;
    if (auth) {
        resolve('Usuario Autenticado'); //EL PROMISE SE CUMPLE
    } else {
        reject('No se pudo iniciar sesión'); //EL PROMISE NO SE CUMPLE
    }

});

usuarioAutenticado
    .then((resultado) => console.log(resultado))
    .catch((error) => console.log(error))


//EN los Promises existen 3 valores
//Pending: No se ha cumplido pero tampoco se ha rechazado
//Fulfilled: Ya se cumplió el Promise
//Rejected: Se ha rechazado o no se pudo cumplir