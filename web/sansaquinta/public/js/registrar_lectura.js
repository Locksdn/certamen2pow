document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#date").value;
    let hora = document.querySelector("#hour").value.trim();
    let medidor = document.querySelector("#medidor").value;
    let direccion = document.querySelector("#direccion").value.trim();
    let valor = document.querySelector("#valor").value;
    let tipo = document.querySelector("#tipo").value;

    //  Validacion
    let errores = [];

    //  Validar Hora
    if (hora.split(':').length != 2 || hora.length != 5){
        errores.push("Por favor ingresar una hora con formato correcto");
    }

    //  Validar Fecha
    if(fecha == ""){
        errores.push("No se ha ingresado una fecha");
    }

    //  Validar Direccion
    if(direccion == ""){
        errores.push("Por favor ingresar una direccion");
    }

    //  Validar Valor
    if(valor == ""){
        errores.push("No se ha ingresado un valor");
    }

    if(errores.length == 0){
        let lectura = {};
        lectura.fecha = fecha;
        lectura.hora = hora;
        lectura.medidor = medidor;
        lectura.direccion = direccion;
        lectura.valor = valor;
        lectura.tipo_medida = tipo;

        crearLectura(lectura);

        await Swal.fire("Lectura Registrada", "Lectura Registrada exitosamente", "info");

        window.location.href = "mediciones_existentes";
    }else{
        Swal.fire({
            title: "Error de ingreso",
            icon:"warning",
            html:errores.join("<br>")
        });
    }
});
