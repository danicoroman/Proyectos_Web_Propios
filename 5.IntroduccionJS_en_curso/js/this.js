//This

const reserva = {
    nombre: 'Dani',
    apellido: 'Corona',
    total: 2000,
    pagado: false,
    informacion: function() { //Hay que usar function en vez de un arrow function
        console.log(`El Cliente ${this.nombre} reservó y su cantidad a pagar es de ${this.total} €`);
    }
}


reserva.informacion();