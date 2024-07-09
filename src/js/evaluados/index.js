import { Dropdown, Modal } from "bootstrap";
import Swal from "sweetalert2";
import Datatable from "datatables.net-bs5";
import { lenguaje } from "../lenguaje";
import { validarFormulario, Toast, confirmacion, formatearFecha, formatoTiempo, cargando, cerrarCargando } from "../funciones";
const modalFillEv = new Modal(document.getElementById('modalEvaluacion'), {
    backdrop: 'static',
    keyboard: false
})

const modalFormularioBuscar = new Modal(document.getElementById('modalFormularioBuscar'), {
    backdrop: 'static',
    keyboard: false
})


const formularioAsimilados = document.getElementById('formularioAsimilados');
const formularioLlenarAsimilados = document.getElementById('formularioEvaluadoAsimilados');
const btnCancelarEvaluacion = document.getElementById('btnCancelarEvaluacion');
const tablaAsimilados = document.getElementById('tablaAsimilados');
const radioBotones = document.querySelectorAll('.checkBiofisico');
const radioBotonesDems = document.querySelectorAll('.demeritos');
const radioBotonesArrestos = document.querySelectorAll('.arrestos');
const cuadro1 = document.getElementById('cuadro1');
const cuadro2 = document.getElementById('cuadro2');
const cuadro3 = document.getElementById('cuadro3');
const cuadro4 = document.getElementById('cuadro4');
const inputPromedios = document.querySelectorAll('.promedio');
const inputCondicionFisica = document.querySelectorAll('.radioCondicionFisica');
const preguntas = document.getElementsByName('.pregunta');
const preguntasForName = document.getElementsByName('preguntas');
const notaCantidadBatz = document.querySelectorAll('.nota_cantidad')
const notasim_pregunta = document.querySelectorAll('.notasim_pregunta')
const Excelente = document.getElementById('Excelente');
const MuyBueno = document.getElementById('MuyBueno');
const Bueno = document.getElementById('Bueno');
const Regular = document.getElementById('Regular');
const Insatisfactorio = document.getElementById('Insatisfactorio');
const asim_resultado = document.getElementById('asim_resultado');
const buttonGuardarEvaluacion = document.getElementById('btnGuardar');
const formulario = document.getElementById('')
const formularioBoletasIngresadas = document.getElementById('formularioBoletasIngresadas');
const botonFormularioBuscar = document.getElementById('btnBuscar1');
const btnBuscar = document.getElementById('btnBuscar');
const containerTableIngresos = document.getElementById('containerTableIngresos');
const btnCancelarEvaluacion2 = document.getElementById('btnCancelarEvaluacion2');
const botonesContainer = document.getElementById('botonesModificarElevar');
let perfilBiofisico;
let demeritos;
let arrestos;
let condicionFisica;
let suma1;
containerTableIngresos.style.display = 'none';
formularioLlenarAsimilados.btnElevar.style.display = "none"  
formularioLlenarAsimilados.btnModificar.style.display = "none"  
formularioLlenarAsimilados.btnGuardar.style.display = "none"  

let contador = 1;
const datatable = new Datatable('#tablaAsimilados', {
    language: lenguaje,
    data: null,

    columns: [
        {
            title: 'NO',
            className: 'text-center',
            render: () => contador++
        },
        {
            title: 'Catalogo',
            className: 'text-center',
            data: 'catalogo'
        },
        {
            title: 'Datos del Evaluado',
            className: 'text-center',
            data: 'nombres'
        },
        {
            title: 'Realizar Evaluación',
            className: 'text-center',
            searchable: false,
            orderable: false,
            render: (data, type, row, meta) =>
                `<div class="btn-group">
                    <button class="btn btn-outline-info" data-catalogo='${row['catalogo']}' style="padding: 0; width: 60px; height: 40px;">
                        <img src="./images/llenar.png" alt="Detalles" style="width: 50%; height: 80%; border: none;">
                    </button>
                </div>`
        },

        // // {
        //     //     title: 'PDF',
        //     //     className: 'text-center',
        //     //     // data: 'pdf_ruta',
        //     //     // render: function (data) {
        //         //     //     return `<button  class="btn btn-outline-info" data-ruta="${data.substr(10)}"><i class="bi bi-eye"></i>Ver PDF</button>`;
        //         //     // },
        //         //     // width: '150px'

        // // },
        // {
        //     title: 'REVISAR/MODIFICAR ',
        //     className: 'text-center',
        //     // data: 'ste_id',
        //     // searchable: false,
        //     // orderable: false,
        //     // render: (data, type, row, meta) =>
        //     //     `<div class="btn-group">
        //     //     <button class="btn btn-warning" data-id='${data}'>
        //     //         DATOS
        //     //     </button>
        //     //     <button class="btn btn-outline-warning" data-pdf_id='${row["pdf_id"]}' data-ste_cat='${row["ste_cat"]}'data-pdf_solicitud='${row["pdf_solicitud"]}' data-pdf_ruta='${row["pdf_ruta"]}'>PDF</button>
        //     // </div>`

        // },

        // {
        //     title: 'APROBAR ',
        //     className: 'text-center',
        //     // data: 'ste_id',
        //     // searchable: false,
        //     // orderable: false,
        //     // render: (data, type, row, meta) =>
        //     //     `<div class="btn-group">
        //     //     <button class="btn btn-warning" data-id='${data}'>
        //     //         DATOS
        //     //     </button>
        //     //     <button class="btn btn-outline-warning" data-pdf_id='${row["pdf_id"]}' data-ste_cat='${row["ste_cat"]}'data-pdf_solicitud='${row["pdf_solicitud"]}' data-pdf_ruta='${row["pdf_ruta"]}'>PDF</button>
        //     // </div>`

        // },
        // {

        //     title: 'Imprimir Evaluación',
        //     className: 'text-center',
        //     // data: 'grado_pareja',
        //     // visible: false
        // },
        // {
        //     title: 'ELIMINAR',
        //     className: 'text-center',
        //     // data: 'sol_id',
        //     // searchable: false,
        //     // orderable: false,
        //     // render: (data) => `<button class="btn btn-danger" data-id='${data}'>Eliminar</button>`
        // },

    ],
});

const datatable2 = new Datatable('#tablaAsimilados2', {

    language: lenguaje,
    data: null,

    columns: [
        {
            title: 'NO',
            className: 'text-center',
            render: () => contador++
        },
        {
            title: 'Catalogo',
            className: 'text-center',
            data: 'catalogo'
        },
        {
            title: 'Datos del Evaluado',
            className: 'text-center',
            data: 'nombres'
        },

        {
            title: 'Ver Evaluacion',
            className: 'text-center',
            data: 'id',
            searchable: false,
            orderable: false,
            render: (data, type, row, meta) =>

                `<div class="btn-group">
                    <button class="btn btn-outline-info btn-id" data-id='${data}' style="padding: 0; width: 60px; height: 40px;">
                        <img src="./images/llenar.png" alt="Detalles" style="width: 50%; height: 80%; border: none;">
                    </button>
                </div>`
        }
    ],
});

const buscarModalFillEvaluacion = async (e) => {
   

   cargando()

    const boton = e.target
    let cat = boton.dataset.catalogo

    const url = `/app-027/API/evaluados/llenar?catalogo=${cat}`;
    const config = {
        method: 'GET',
    }
    try {
        const respuesta = await fetch(url, config)
        const data = await respuesta.json();
        const resultado = data.resultado;
        const preguntas = data.preguntas;

        const datosBatz = resultado[0];

        for (let i = 0; i < preguntas.length; i++) {
            const inputId = `pregunta${i + 1}`;
            const inputPreguntas = document.getElementById(inputId);
            inputPreguntas.value = preguntas[i].pre_descripcion;

        }

        formularioLlenarAsimilados.datevaluado_evaluado.value = datosBatz.per_catalogo;
        formularioLlenarAsimilados.gradoEvaluado.value = datosBatz.gra_desc_md;
        formularioLlenarAsimilados.datevaluado_grado.value = datosBatz.gra_codigo;
        var nombreInput = formularioLlenarAsimilados.nombre;
        nombreInput.value = datosBatz.nombres;
        // nombreInput.style.fontSize = '12px';
        formularioLlenarAsimilados.dependeciaEvaluado.value = datosBatz.dep_desc_lg;
        formularioLlenarAsimilados.datevaluado_dependencia.value = datosBatz.org_dependencia;
        formularioLlenarAsimilados.puestoEvaluado.value = datosBatz.per_desc_empleo;
        formularioLlenarAsimilados.datevaluado_puesto.value = datosBatz.per_desc_empleo;
        const numero = datosBatz.t_puesto;

        formatoTiempo(numero).then((tiempoFormateado) => {
            formularioLlenarAsimilados.tiempoEvaluado.value = tiempoFormateado;
        })
        formularioLlenarAsimilados.datevaluado_tiempo.value = datosBatz.t_puesto;


        formularioLlenarAsimilados.btnGuardar.style.display = "block"


    } catch (error) {
        console.log(error);
    }

    modalFillEv.show()
    cerrarCargando()


}

const FillEvaluacionesIngresadas = async (e) => {
    formularioLlenarAsimilados.reset()
    cargando()

    let catalogo = formularioBoletasIngresadas.ste_cat.value
    let fecha = formularioBoletasIngresadas.ste_fecha.value
    let fechaModificada = '';


    if (catalogo.length === 0 && fecha.length === 0) {
        Toast.fire({
            title: ' Debe llenar al menos un campo',
            icon: 'info'
        })
        return
    }

    if (fecha != '') {

        let partesFecha = fecha.split('-');

        let año = partesFecha[0];
        let mes = partesFecha[1];

        if (mes === '01' || mes === '02' || mes === '03' || mes === '04' || mes === '05' || mes === '06') {
            mes = '1';
        } else if (mes === '07' || mes === '08' || mes === '09' || mes === '10' || mes === '11' || mes === '12') {
            mes = '2';
        }
        fechaModificada = mes + '-' + año

    }

    const url = `/app-027/API/evaluados/datatableEvaluacionesIngresadas?catalogo=${catalogo}&fecha=${fechaModificada}`;
    const config = {
        method: 'GET',
    }
    try {
        const respuesta = await fetch(url, config)
        const data2 = await respuesta.json();


        const { codigo, mensaje, detalle } = data2;
        let icon = 'info';
        switch (codigo) {
            case 1:
                icon = `success`
                containerTableIngresos.style.display = 'block'
                contador = 1
                datatable2.clear();
                datatable2.rows.add(detalle).draw();
                cerrarCargando()
                break
            case 2:
                icon = `error`;
                console.log(detalle);
                cerrarCargando();
                break;
            case 0:
                icon = `error`;
                console.log(detalle);
                cerrarCargando();
                break;
            default:

                break;
        }

        Toast.fire({
            icon,
            text: mensaje,
        });



    } catch (error) {
        console.log(error);
    }




}


const FillEvaluacionEvaluador = async (e) => {
    let catalogo = formularioLlenarAsimilados.datevaluador_evaluador.value



    const url = `/app-027/API/evaluados/llenarEvaluado?catalogo=${catalogo}`;
    const config = {
        method: 'GET',
    }
    try {
        const respuesta = await fetch(url, config)
        const data = await respuesta.json();
        const resultado = data.resultado;
        const fecha = data.fecha;
        // console.log("resultado", resultado); 
        // console.log("fecha", fecha); 
        const data2 = resultado

        if (!data2 || data.length === 0) {
            Toast.fire({
                title: 'No se encuentra el catalogo del evaluador',
                icon: 'info'
            });
            return
        }
        formularioLlenarAsimilados.datevaluador_evaluador.disabled = true;
        const datosBatz = data2[0];
        // formularioLlenarAsimilados.datevaluador_evaluador.value = datosBatz.per_catalogo;
        formularioLlenarAsimilados.gradoEvaluador.value = datosBatz.grado;
        formularioLlenarAsimilados.datevaluador_grado.value = datosBatz.gra_codigo;
        formularioLlenarAsimilados.datevaluador_arma.value = datosBatz.arm_codigo
        var nombreInput = formularioLlenarAsimilados.nombre_evaluador;
        nombreInput.value = datosBatz.nombres;
        // nombreInput.style.fontSize = '12px';
        formularioLlenarAsimilados.datevaluador_dependencia.value = datosBatz.dep_llave;
        formularioLlenarAsimilados.puestoEvaluador.value = datosBatz.per_desc_empleo;
        formularioLlenarAsimilados.datevaluador_puesto.value = datosBatz.per_desc_empleo
        formularioLlenarAsimilados.datevaluador_arma.value = datosBatz.arm_codigo;
        const numero = datosBatz.t_puesto;
        formularioLlenarAsimilados.datevaluador_tiempo.value = datosBatz.t_puesto


        formatoTiempo(numero).then((tiempoFormateado) => {
            formularioLlenarAsimilados.tiempoEvaluador.value = tiempoFormateado;
        })


        formularioLlenarAsimilados.asim_periodo.value = fecha



    } catch (error) {
        console.log(error);
    }




}


const FillCatG1 = async (e) => {
    let catalogo = formularioLlenarAsimilados.asim_cat_g1.value



    const url = `/app-027/API/evaluados/llenarEvaluado?catalogo=${catalogo}`;
    const config = {
        method: 'GET',
    }
    try {
        const respuesta = await fetch(url, config)
        const data = await respuesta.json();
        const resultado = data.resultado;


        const data2 = resultado

        if (!data2 || data.length === 0) {
            Toast.fire({
                title: 'No se encuentra el catalogo del G1',
                icon: 'info'
            });
            return
        } else {

            Toast.fire({
                title: 'Catalogo valido',
                icon: 'info'
            });
            const catalogo = data2[0].per_catalogo

            formularioLlenarAsimilados.asim_cat_g1.value = catalogo
        }



    } catch (error) {
        console.log(error);
    }




}

const FillCatComte = async (e) => {
    let catalogo = formularioLlenarAsimilados.asim_cat_comte.value



    const url = `/app-027/API/evaluados/llenarEvaluado?catalogo=${catalogo}`;
    const config = {
        method: 'GET',
    }
    try {
        const respuesta = await fetch(url, config)
        const data = await respuesta.json();
        const resultado = data.resultado;


        const data2 = resultado

        if (!data2 || data.length === 0) {
            Toast.fire({
                title: 'No se encuentra el catalogo del Señor Comte.',
                icon: 'info'
            });
            return
        } else {
            Toast.fire({
                title: 'Catalogo valido',
                icon: 'info'
            });

            const catalogo = data2[0].per_catalogo

            formularioLlenarAsimilados.asim_cat_comte.value = catalogo
        }



    } catch (error) {
        console.log(error);
    }




}


const cerrarModalEvaluacion = async () => {
    cargando();
    formularioBoletasIngresadas.reset()
    datatable2.clear().draw();
    containerTableIngresos.style.display = 'none'
    modalFormularioBuscar.hide()
    buscar();
    cerrarCargando()
}

const cerrarModalEvaluacion2 = async () => {
    cargando();
    formularioLlenarAsimilados.reset()
    modalFillEv.hide()
    cerrarCargando()
}

const buscar = async () => {

    // const catalogo = formulario.ste_cat.value
    // const fecha = formulario.ste_fecha.value
    formularioLlenarAsimilados.reset()

    const url = `/app-027/API/evaluados/buscar`;


    const config = {
        method: 'GET',
    }

    try {
        const respuesta = await fetch(url, config)
        const data = await respuesta.json();

        if (data.length > 0) {
            contador = 1;
            datatable.clear();
            datatable.rows.add(data).draw();

        } else {
            Toast.fire({
                title: 'No se encontraron registros',
                icon: 'info'

            })
        }


    } catch (error) {
        console.log(error);
    }



}

/// aqui inician los foreach y funciones para deshabilitar los input radio 
radioBotones.forEach(function (radio) {
    radio.addEventListener('click', function () {
        deshabilitarCasilla(this);
        sumatoria1()
        llenarFlecha()
    });
});

function deshabilitarCasilla(valueCheckBiofisico) {
    radioBotones.forEach(function (radio) {
        radio.disabled = true;
    });
    valueCheckBiofisico.disabled = false;
    perfilBiofisico = valueCheckBiofisico.value;
    formularioLlenarAsimilados.asim_perfil.value = perfilBiofisico

}

radioBotonesDems.forEach(function (dems) {
    dems.addEventListener('click', function () {
        deshabilitarCasillaDems(this);
        sumatoria1()
        llenarFlecha()
    });
});

function deshabilitarCasillaDems(valueDems) {
    radioBotonesDems.forEach(function (dems) {
        dems.disabled = true;
    });
    valueDems.disabled = false;
    demeritos = valueDems.value;
    formularioLlenarAsimilados.asim_demeritos.value = demeritos;
}

radioBotonesArrestos.forEach(function (arrestos) {
    arrestos.addEventListener('click', function () {
        deshabilitarCasillaArrestos(this);
        sumatoria1()
        llenarFlecha()
    });
});

function deshabilitarCasillaArrestos(valueArrestos) {
    radioBotonesArrestos.forEach(function (arrestos) {
        arrestos.disabled = true;
    });
    valueArrestos.disabled = false;
    arrestos = valueArrestos.value;
    formularioLlenarAsimilados.asim_arrestos.value = arrestos
}

inputPromedios.forEach(input => {
    input.addEventListener('change', async (e) => {
        unblockPromedio(e.target);
        letValorSuma1()
        sumatoria1();
        sumaSubtotal();
        llenarFlecha()

    });


});

var valoresInputs = [];
let notitas

function deshabilitarRadiosPreguntas(valuePregs) {
    // console.log("valuePregs", valuePregs.id);
    // console.log("valor del id ",valuePregs.value)

    let claseRadioSeleccionado = valuePregs.classList[0];

    let radios = document.querySelectorAll('.' + claseRadioSeleccionado);
    radios.forEach(function (radio) {
        if (radio !== valuePregs) {
            radio.disabled = true;
            // radio.checked = true;
        }
    });


    valoresInputs[valuePregs.id - 1] = valuePregs.value;


    for (var i = 0; i < valoresInputs.length; i++) {
        notitas = notaCantidadBatz[i].value = valoresInputs[i];
        parseInt(notitas)

        var notasName = notaCantidadBatz[i].name;



    }


}


for (let index = 1; index < 11; index++) {
    let contador = index;

    let radios = document.querySelectorAll('.pregunta' + contador);

    radios.forEach(function (radio) {
        radio.addEventListener('click', function () {
            deshabilitarRadiosPreguntas(this);
            sumaSubtotal();
            sumatoria1();
            llenarFlecha()
        });
    });
}
function sumaSubtotal() {
    let sumaNumeros1 = 0;
    let sumaNumeros2 = 0;
    let sumaNumeros4 = 0;
    let sumaNumeros5 = 0;
    let sumaNumeros6 = 0;
    let sumaTotal = 0;

    notaCantidadBatz.forEach(function (notasValuePregs) {
        if (notasValuePregs.value === "") {
            notasValuePregs.value = 0
        } else {

        }
        let valorInput = parseInt(notasValuePregs.value);

        if (formularioLlenarAsimilados.subtotal1.value === "") formularioLlenarAsimilados.subtotal1.value = 0;
        if (formularioLlenarAsimilados.subtotal2.value === "") formularioLlenarAsimilados.subtotal2.value = 0;
        if (formularioLlenarAsimilados.subtotal4.value === "") formularioLlenarAsimilados.subtotal4.value = 0;
        if (formularioLlenarAsimilados.subtotal5.value === "") formularioLlenarAsimilados.subtotal5.value = 0;
        if (formularioLlenarAsimilados.subtotal6.value === "") formularioLlenarAsimilados.subtotal6.value = 0;

        switch (valorInput) {
            case 1:
                sumaNumeros1++;
                formularioLlenarAsimilados.subtotal1.value = sumaNumeros1;
                break;
            case 2:
                sumaNumeros2++;
                formularioLlenarAsimilados.subtotal2.value = sumaNumeros2 * 2;
                break;
            case 4:
                sumaNumeros4++;
                formularioLlenarAsimilados.subtotal4.value = sumaNumeros4 * 4;
                break;
            case 5:
                sumaNumeros5++;
                formularioLlenarAsimilados.subtotal5.value = sumaNumeros5 * 5;
                break;
            case 6:
                sumaNumeros6++;
                formularioLlenarAsimilados.subtotal6.value = sumaNumeros6 * 6;



                break;


            default:
                break;
        }

    })


    sumaTotal = parseInt(formularioLlenarAsimilados.subtotal1.value) + parseInt(formularioLlenarAsimilados.subtotal2.value) + parseInt(formularioLlenarAsimilados.subtotal4.value) + parseInt(formularioLlenarAsimilados.subtotal5.value) + parseInt(formularioLlenarAsimilados.subtotal6.value);

    formularioLlenarAsimilados.asim_total_concep.value = sumaTotal;
    formularioLlenarAsimilados.subtotalGeneral2.value = sumaTotal;
    if (formularioLlenarAsimilados.subtotalGeneral1.value === "") formularioLlenarAsimilados.subtotalGeneral1.value = 0;
    if (formularioLlenarAsimilados.subtotalGeneral2.value === "") formularioLlenarAsimilados.subtotalGeneral2.value = 0;
    var subtotal1 = parseInt(formularioLlenarAsimilados.subtotalGeneral1.value);
    var subtotal2 = parseInt(formularioLlenarAsimilados.subtotalGeneral2.value);

    var total = subtotal1 + subtotal2;

    formularioLlenarAsimilados.asim_total.value = total;
    llenarFlecha()

}

/////////////////finaliza 


function llenarFlecha() {
    let datoDeTotal = formularioLlenarAsimilados.asim_total.value

    if (datoDeTotal === "") datoDeTotal = 0
    parseInt(datoDeTotal)

    if (datoDeTotal > 95 && datoDeTotal < 101) {
        Excelente.style.backgroundColor = "#F7B79E"
        MuyBueno.style.backgroundColor = ""
        Bueno.style.backgroundColor = ""
        Regular.style.backgroundColor = ""
        Insatisfactorio.style.backgroundColor = ""

    } else if (datoDeTotal > 84 && datoDeTotal < 96) {
        MuyBueno.style.backgroundColor = "#F7B79E"
        Excelente.style.backgroundColor = ""
        Bueno.style.backgroundColor = ""
        Regular.style.backgroundColor = ""
        Insatisfactorio.style.backgroundColor = ""

    } else if (datoDeTotal > 74 && datoDeTotal < 85) {
        Bueno.style.backgroundColor = "#F7B79E"
        Excelente.style.backgroundColor = ""
        MuyBueno.style.backgroundColor = ""
        Regular.style.backgroundColor = ""
        Insatisfactorio.style.backgroundColor = ""

    } else if (datoDeTotal > 59 && datoDeTotal < 75) {
        Regular.style.backgroundColor = "#F7B79E"
        Excelente.style.backgroundColor = ""
        MuyBueno.style.backgroundColor = ""
        Bueno.style.backgroundColor = ""
        Insatisfactorio.style.backgroundColor = ""

    } else {
        Insatisfactorio.style.backgroundColor = "#F7B79E"
        Excelente.style.backgroundColor = ""
        MuyBueno.style.backgroundColor = ""
        Bueno.style.backgroundColor = ""
        Regular.style.backgroundColor = ""

    }

    asim_resultado.value = datoDeTotal
}



function unblockPromedio() {

    if (cuadro1.value > 100 || cuadro2.value > 100 || cuadro3.value > 100 || cuadro4.value > 100) {

        Toast.fire({
            title: 'el numero no debe ser mayor a 100',
            icon: 'info'

        })
    } else {
        if (cuadro1.value === "") {
            cuadro1.value = "0";
        }
        if (cuadro2.value === "") {
            cuadro2.value = "0";
        }
        if (cuadro3.value === "") {
            cuadro3.value = "0";
        }
        if (cuadro4.value === "") {
            cuadro4.value = "0";
        }
        const suma = parseFloat(cuadro1.value) + parseFloat(cuadro2.value) + parseFloat(cuadro3.value) + parseFloat(cuadro4.value);
        const promedioGeneral = suma / 4

        // console.log("suma",suma)
        // console.log("promedio",promedioGeneral)

        formularioLlenarAsimilados.promedio.value = promedioGeneral;

        switch (true) {
            case (promedioGeneral < 60):
                formularioLlenarAsimilados.promedio1.disabled = false;
                formularioLlenarAsimilados.promedio1.checked = true;
                formularioLlenarAsimilados.promedio2.disabled = true;
                formularioLlenarAsimilados.promedio2.checked = false;
                formularioLlenarAsimilados.promedio3.disabled = true;
                formularioLlenarAsimilados.promedio3.checked = false;
                formularioLlenarAsimilados.promedio4.disabled = true;
                formularioLlenarAsimilados.promedio4.checked = false;
                formularioLlenarAsimilados.promedio5.disabled = true;
                formularioLlenarAsimilados.promedio5.checked = false;
                formularioLlenarAsimilados.promedio6.disabled = true;
                formularioLlenarAsimilados.promedio6.checked = false;
                break;
            case (promedioGeneral < 71):
                formularioLlenarAsimilados.promedio2.disabled = false;
                formularioLlenarAsimilados.promedio2.checked = true;
                formularioLlenarAsimilados.promedio1.disabled = true;
                formularioLlenarAsimilados.promedio1.checked = false;
                formularioLlenarAsimilados.promedio3.disabled = true;
                formularioLlenarAsimilados.promedio3.checked = false;
                formularioLlenarAsimilados.promedio4.disabled = true;
                formularioLlenarAsimilados.promedio4.checked = false;
                formularioLlenarAsimilados.promedio5.disabled = true;
                formularioLlenarAsimilados.promedio5.checked = false;
                formularioLlenarAsimilados.promedio6.disabled = true;
                formularioLlenarAsimilados.promedio6.checked = false;
                break;
            case (promedioGeneral < 81):
                formularioLlenarAsimilados.promedio3.disabled = false;
                formularioLlenarAsimilados.promedio3.checked = true;
                formularioLlenarAsimilados.promedio1.disabled = true;
                formularioLlenarAsimilados.promedio1.checked = false;
                formularioLlenarAsimilados.promedio2.disabled = true;
                formularioLlenarAsimilados.promedio2.checked = false;
                formularioLlenarAsimilados.promedio4.disabled = true;
                formularioLlenarAsimilados.promedio4.checked = false;
                formularioLlenarAsimilados.promedio5.disabled = true;
                formularioLlenarAsimilados.promedio5.checked = false;
                formularioLlenarAsimilados.promedio6.disabled = true;
                formularioLlenarAsimilados.promedio6.checked = false;
                break;
            case (promedioGeneral < 91):
                formularioLlenarAsimilados.promedio4.disabled = false;
                formularioLlenarAsimilados.promedio4.checked = true;
                formularioLlenarAsimilados.promedio1.disabled = true;
                formularioLlenarAsimilados.promedio1.checked = false;
                formularioLlenarAsimilados.promedio2.disabled = true;
                formularioLlenarAsimilados.promedio2.checked = false;
                formularioLlenarAsimilados.promedio3.disabled = true;
                formularioLlenarAsimilados.promedio3.checked = false;
                formularioLlenarAsimilados.promedio5.disabled = true;
                formularioLlenarAsimilados.promedio5.checked = false;
                formularioLlenarAsimilados.promedio6.disabled = true;
                formularioLlenarAsimilados.promedio6.checked = false;
                break;
            case (promedioGeneral < 100):
                formularioLlenarAsimilados.promedio5.disabled = false;
                formularioLlenarAsimilados.promedio5.checked = true;
                formularioLlenarAsimilados.promedio1.disabled = true;
                formularioLlenarAsimilados.promedio1.checked = false;
                formularioLlenarAsimilados.promedio2.disabled = true;
                formularioLlenarAsimilados.promedio2.checked = false;
                formularioLlenarAsimilados.promedio3.disabled = true;
                formularioLlenarAsimilados.promedio3.checked = false;
                formularioLlenarAsimilados.promedio4.disabled = true;
                formularioLlenarAsimilados.promedio4.checked = false;
                formularioLlenarAsimilados.promedio6.disabled = true;
                formularioLlenarAsimilados.promedio6.checked = false;
                break;
            default:
                formularioLlenarAsimilados.promedio6.disabled = false;
                formularioLlenarAsimilados.promedio6.checked = true;
                formularioLlenarAsimilados.promedio1.disabled = true;
                formularioLlenarAsimilados.promedio1.checked = false;
                formularioLlenarAsimilados.promedio2.disabled = true;
                formularioLlenarAsimilados.promedio2.checked = false;
                formularioLlenarAsimilados.promedio3.disabled = true;
                formularioLlenarAsimilados.promedio3.checked = false;
                formularioLlenarAsimilados.promedio4.disabled = true;
                formularioLlenarAsimilados.promedio4.checked = false;
                formularioLlenarAsimilados.promedio5.disabled = true;
                formularioLlenarAsimilados.promedio5.checked = false;
        }
    }



}

function letValorSuma1() {
    inputCondicionFisica.forEach(elemento => {
        if (elemento.checked) {
            suma1 = elemento.value;
        }
    });
    condicionFisica = suma1;
    formularioLlenarAsimilados.asim_pafe.value = suma1;



}

function sumatoria1() {

    // console.log(perfilBiofisico);
    // console.log(demeritos);
    // console.log(arrestos);
    // console.log("ejemplo",condicionFisica);
    if (typeof perfilBiofisico === "undefined") {
        perfilBiofisico = "0";
    }
    if (typeof demeritos === "undefined") {
        demeritos = "0";
    }
    if (typeof arrestos === "undefined") {
        arrestos = "0";
    }
    if (typeof condicionFisica === "undefined") {
        condicionFisica = "0";
    }
    const llenarSuma = parseFloat(perfilBiofisico) + parseFloat(demeritos) + parseFloat(arrestos) + parseFloat(condicionFisica);

    console.log(llenarSuma)
    formularioLlenarAsimilados.subtotalGeneral1.value = llenarSuma;
    formularioLlenarAsimilados.asim_total_salud.value = llenarSuma;
    if (formularioLlenarAsimilados.subtotalGeneral1.value === "") formularioLlenarAsimilados.subtotalGeneral1.value = 0;
    if (formularioLlenarAsimilados.subtotalGeneral2.value === "") formularioLlenarAsimilados.subtotalGeneral2.value = 0;
    var subtotal1 = parseInt(formularioLlenarAsimilados.subtotalGeneral1.value);
    var subtotal2 = parseInt(formularioLlenarAsimilados.subtotalGeneral2.value);

    var total = subtotal1 + subtotal2;

    formularioLlenarAsimilados.asim_total.value = total;
}


const buscarBoletaLlenada = async (e) => {
    
    cargando()
    const boton = e.target.closest('.btn-id');
    const id = boton.getAttribute('data-id');
   


    const url = `/app-027/API/evaluados/buscarBoletaLlena?id=${id}`;

    const config = {
        method: 'GET',

    };

    try {
        const respuesta = await fetch(url, config);
        const data = await respuesta.json();

        const { codigo, mensaje, detalle } = data;
        let icon = 'info';
        switch (codigo) {
            case 1:
                icon = 'success';


                const datos = detalle[0];
                console.log(datos)

                const elementosFormulario = formularioLlenarAsimilados.elements;

                for (let i = 0; i < elementosFormulario.length; i++) {
                    elementosFormulario[i].disabled = true;
                }
                formularioLlenarAsimilados.datevaluado_evaluado.value = datos.catalogo
                formularioLlenarAsimilados.gradoEvaluado.value = datos.gradoevaluado
                formularioLlenarAsimilados.datevaluado_grado.value = datos.gradoevaluado
                formularioLlenarAsimilados.nombre.value = datos.nombres
                formularioLlenarAsimilados.dependeciaEvaluado.value = datos.dependencia
                formularioLlenarAsimilados.datevaluado_dependencia.value = datos.dependencia
                formularioLlenarAsimilados.puestoEvaluado.value = datos.puesto
                formularioLlenarAsimilados.datevaluado_puesto.value = datos.puesto
                const numero = datos.tiempo
                formatoTiempo(numero).then((tiempoFormateado) => {
                    formularioLlenarAsimilados.tiempoEvaluado.value = tiempoFormateado;
                })
                formularioLlenarAsimilados.datevaluado_tiempo.value = datos.tiempo
                formularioLlenarAsimilados.datevaluador_evaluador.disabled = true
                formularioLlenarAsimilados.datevaluador_evaluador.value = datos.evaluador
                formularioLlenarAsimilados.gradoEvaluador.value = datos.gradoe
                formularioLlenarAsimilados.nombre_evaluador.value = datos.nombresevaluador
                formularioLlenarAsimilados.datevaluador_dependencia.value = datos.dependenciaevaluador
                formularioLlenarAsimilados.puestoEvaluador.value = datos.puestoevaluador
                formularioLlenarAsimilados.datevaluador_puesto.value = datos.puestoevaluador
                const numero2 = datos.tiempoevaluador
                formatoTiempo(numero).then((tiempoFormateado) => {
                    formularioLlenarAsimilados.tiempoEvaluador.value = tiempoFormateado;
                })
                formularioLlenarAsimilados.asim_periodo.value = datos.periodo
                formularioLlenarAsimilados.asim_perfil.value = datos.perfil
                const perfilBiofisico = formularioLlenarAsimilados.asim_perfil.value;

                let radioBotones = document.querySelectorAll('input[class="checkBiofisico"]');

                let casillaParaHabilitar = Array.from(radioBotones).find(radio => radio.value === perfilBiofisico);
                if (casillaParaHabilitar) {

                    casillaParaHabilitar.checked = true
                }


                formularioLlenarAsimilados.cuadro1.disabled = true;
                formularioLlenarAsimilados.cuadro2.disabled = true
                formularioLlenarAsimilados.cuadro3.disabled = true
                formularioLlenarAsimilados.cuadro4.disabled = true

                formularioLlenarAsimilados.asim_pafe.value = datos.pafe
                const pafe = formularioLlenarAsimilados.asim_pafe.value

                let radioBotonesPafe = document.querySelectorAll('input[class="radioCondicionFisica"]');

                let casillaParaHabilitarPafe = Array.from(radioBotonesPafe).find(radio => radio.value === pafe);
                if (casillaParaHabilitarPafe) {

                    casillaParaHabilitarPafe.checked = true
                }

                formularioLlenarAsimilados.asim_demeritos.value = datos.demeritos
                const demeritos = formularioLlenarAsimilados.asim_demeritos.value
                let radioBotonesDemeritos = document.querySelectorAll('input[class="demeritos"]');

                let casillaParaHabilitarDemeritos = Array.from(radioBotonesDemeritos).find(radio => radio.value === demeritos);
                if (casillaParaHabilitarDemeritos) {

                    casillaParaHabilitarDemeritos.checked = true
                }

                formularioLlenarAsimilados.asim_arrestos.value = datos.arrestos
                const arrestos = formularioLlenarAsimilados.asim_demeritos.value
                let radioBotonesArrestos = document.querySelectorAll('input[class="arrestos"]');

                let casillaParaHabilitArarrestos = Array.from(radioBotonesArrestos).find(radio => radio.value === arrestos);
                if (casillaParaHabilitArarrestos) {
                    casillaParaHabilitArarrestos.checked = true
                }

                if (perfilBiofisico === "undefined") {
                    perfilBiofisico = "0";
                }
                if (pafe === "undefined") {
                    pafe = "0";
                }
                if (demeritos === "undefined") {
                    demeritos = "0";
                }
                if (arrestos === "undefined") {
                    arrestos = "0";
                }
                const llenarSuma = parseFloat(perfilBiofisico) + parseFloat(demeritos) + parseFloat(arrestos) + parseFloat(pafe);
                formularioLlenarAsimilados.asim_total_salud.value = llenarSuma;

                const notas = datos.notas
                notas.forEach((nota, indice) => {
                    formularioLlenarAsimilados['pregunta' + (indice + 1)].value = nota.pre_descripcion;

                    formularioLlenarAsimilados['nota' + (indice + 1)].value = nota.notapsim_cantidad;

                    const notas = formularioLlenarAsimilados['nota' + (indice + 1)].value
               
                    let radioBotonesNotas = document.querySelectorAll('input[class="pregunta' + (indice + 1) + '"]')

                    let casillaParaHabilitarNotas = Array.from(radioBotonesNotas).find(radio => radio.value === notas);
                    if (casillaParaHabilitarNotas) {
                        casillaParaHabilitarNotas.checked = true
                    }
                    formularioLlenarAsimilados.subtotalGeneral1.value = llenarSuma
                    sumaSubtotal()


                });
                formularioLlenarAsimilados.asim_obs.value = datos.observaciones
                formularioLlenarAsimilados.asim_cat_g1.value = datos.g1
                formularioLlenarAsimilados.asim_cat_comte.value = datos.comte
                formularioLlenarAsimilados.btnGuardar.style.display = "none"

 
                modalFillEv.show()    


                break;
            case 0:
                icon = 'error';
                console.log(detalle);
                break;
            default:

                break;
        }

        Toast.fire({
            icon,
            text: mensaje,
        });
    } catch (error) {
        console.log(error);
    }

    cerrarCargando()

}



const guardar = async (evento) => {
    cargando()
    formularioLlenarAsimilados.reset()
 
    evento.preventDefault();
    // if (!validarFormulario(formulario, ['art_id'])) {
    //     Toast.fire({
    //         icon: 'info',
    //         text: 'Debe llenar todos los datos',
    //     });
    //     return;
    // }

    const asim_periodo = formularioLlenarAsimilados.asim_periodo.value;
    const evaluado = formularioLlenarAsimilados.datevaluado_evaluado.value
    // console.log(evaluado)
    const body = new FormData(formularioLlenarAsimilados);
    body.append('datevaluado_evaluado', evaluado);
    body.append('datevaluador_evaluador', formularioLlenarAsimilados.datevaluador_evaluador.value);
    body.append('datevaluador_puesto', formularioLlenarAsimilados.datevaluador_puesto.value);
    body.append('datevaluador_tiempo', formularioLlenarAsimilados.datevaluador_tiempo.value);
    body.append('datevaluador_arma', formularioLlenarAsimilados.datevaluador_arma.value);
    body.append('asim_perfil', formularioLlenarAsimilados.asim_perfil.value);
    body.append('asim_pafe', formularioLlenarAsimilados.asim_pafe.value);
    body.append('asim_demeritos', formularioLlenarAsimilados.asim_demeritos.value);
    body.append('asim_arrestos', formularioLlenarAsimilados.asim_arrestos.value);
    body.append('asim_total_salud', formularioLlenarAsimilados.asim_total_salud.value);
    body.append('asim_total_concep', formularioLlenarAsimilados.asim_total_concep.value);
    body.append('asim_total', formularioLlenarAsimilados.asim_total.value);
    body.append('asim_cat_g1', formularioLlenarAsimilados.asim_cat_g1.value);
    body.append('asim_cat_comte', formularioLlenarAsimilados.asim_cat_comte.value);
    body.append('asim_obs', formularioLlenarAsimilados.asim_obs.value);
    body.append('asim_periodo', asim_periodo);
    for (let i = 1; i <= 10; i++) {
        body.append('pregunta' + i, formularioLlenarAsimilados['nota' + i].name);
    }


    const url = '/app-027/API/evaluados/guardarEvaluado';
    const config = {
        method: 'POST',
        body,
    };

    try {
        const respuesta = await fetch(url, config);
        const data = await respuesta.json();

        const { codigo, mensaje, detalle } = data;
        let icon = 'info';
        switch (codigo) {
            case 1:
                icon = 'success';
                cerrarModalEvaluacion();
                buscar();
                cerrarCargando()
                break;
            case 0:
                icon = 'error';
                console.log(detalle);
                cerrarCargando();
                break;
            default:

                break;
        }

        Toast.fire({
            icon,
            text: mensaje,
        });
    } catch (error) {
        console.log(error);
    }

};

const abrirFormularioBuscar = async (e) => {
    modalFormularioBuscar.show()

}


buscar()
formularioLlenarAsimilados.asim_cat_comte.addEventListener('change', async (e) => { FillCatComte(); });
formularioLlenarAsimilados.asim_cat_g1.addEventListener('change', async (e) => { FillCatG1(); });
formularioLlenarAsimilados.datevaluador_evaluador.addEventListener('change', async (e) => { FillEvaluacionEvaluador(); });
botonFormularioBuscar.addEventListener('click', abrirFormularioBuscar)
datatable.on('click', '.btn-outline-info', buscarModalFillEvaluacion);
datatable2.on('click', '.btn-id', buscarBoletaLlenada)
buttonGuardarEvaluacion.addEventListener('click', guardar)
btnCancelarEvaluacion.addEventListener('click', cerrarModalEvaluacion);
btnCancelarEvaluacion2.addEventListener('click', cerrarModalEvaluacion2);
btnBuscar.addEventListener('click', FillEvaluacionesIngresadas)
