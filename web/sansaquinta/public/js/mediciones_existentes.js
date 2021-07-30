const eliminar = async function(){
    let id = this.idLectura;
    let res = await Swal.fire({
        title: "Estas Seguro?",
        text: "No hay forma de revertir esta accion",
        icon: "error",
        showCancelButton: true
    });
    if(res.isConfirmed){
        if(await eliminarLectura(id)){
            cargarTabla();
            Swal.fire("Lectura Descartada", "Eliminacion Correcta", "info");
        }else{
            Swal.fire("Error", "No se ha podido descartar la lectura", "error");
        }
    }else{
        Swal.fire("Cancelado", "Eliminacion Cancelada", "info");
    }
};

const cargarTabla = async ()=>{
    let res = await axios.get("api/lecturas/get");
    let lecturas = res.data;

    let tbody = document.querySelector('#tbody-lecturas');
    tbody.innerHTML = "";
    lecturas.forEach(lectura => {
        let tr = document.createElement('tr');
        let tdFecha = document.createElement('td');
        let tdHora = document.createElement('td');
        let tdMedidor = document.createElement('td');
        let tdValor = document.createElement('td');
        let tdAcciones = document.createElement('td');
        let btnDescartar = document.createElement('button');
        let icono = document.createElement("i");

        tdFecha.innerText = lectura.fecha;
        tdHora.innerText = lectura.hora;
        tdMedidor.innerText = lectura.medidor;
        tdValor.innerText = lectura.valor;

        if(lectura.tipo_medida == "kW"){
            icono.classList.add("fas", "fa-bolt", "text-warning");
        }
        else if(lectura.tipo_medida =="W"){
            icono.classList.add("fas", "fa-bolt");
        } else {
            icono.classList.add("fas", "fa-thermometer-full", "text-info");
            if(+lectura.valor > 60){
                let fire = document.createElement('i');
                fire.classList.add("fas", "fa-fire", "text-danger");
                tdValor.appendChild(fire);
            }
        }
        tdValor.appendChild(icono);

        btnDescartar.innerText = "Descartar Lectura";
        btnDescartar.classList.add("btn", "btn-danger");
        btnDescartar.idLectura = lectura.id;
        btnDescartar.addEventListener("click", eliminar);
        tdAcciones.appendChild(btnDescartar);

        tr.appendChild(tdFecha);
        tr.appendChild(tdHora);
        tr.appendChild(tdMedidor);
        tr.appendChild(tdValor);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarTabla();
});
