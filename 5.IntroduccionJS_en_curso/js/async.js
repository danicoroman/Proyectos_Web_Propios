//Async / Await

function descargarNuevosClientes() {
    return new Promise(resolve => {
        console.log('Descargando Clientes...espere...');

        setTimeout(() => {
            resolve('Los Clientes fueron Descargados');
        }, 5000);
    })
}

function descargarUltimosPedidos() {
    return new Promise(resolve => {
        console.log('Descargando Pedidos...espere...');

        setTimeout(() => {
            resolve('Los Pedidos fueron Descargados');
        }, 3000);
    })
}


async function app() {
    try {
        // const clientes = await descargarNuevosClientes();
        // const pedidos = await descargarUltimosPedidos();
        // console.log(clientes);
        // console.log(pedidos);
        const resultado = await Promise.all([descargarNuevosClientes(), descargarUltimosPedidos()]) //Se ejecutan las dos al mismo tiempo
        console.log(resultado[0]);
        console.log(resultado[1]);
    } catch (error) {
        console.log(error);
    }
}

app();


console.log('Este código no se bloquea');