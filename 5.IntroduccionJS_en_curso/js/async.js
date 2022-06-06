//Async / Await

function descargarNuevosClientes() {
    return new Promise(resolve => {
        console.log('Descargando Clientes...espere...');

        setTimeout(() => {
            resolve('Los Clientes fueron Descargados');
        }, 5000);
    })
}


async function app() {
    try {
        const resultado = await descargarNuevosClientes();
        console.log(resultado);
    } catch (error) {
        console.log(error);
    }
}

app();


console.log('Este código no se bloquea');