document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#date").value;
    let hora = document.querySelector("#hour").value.trim();
    let medidor = document.querySelector("#medidor").value;
    let direccion = document.querySelector("#direccion").value.trim();
    let valor = document.querySelector("#valor").value.toString().trim();

    //validacion

    let lectura = {};
    lectura.fecha = fecha;
    lectura.hora = hora;
    lectura.medidor = medidor;
    lectura.direccion = direccion;
    lectura.valor = valor;

    console.log(lectura);
});
