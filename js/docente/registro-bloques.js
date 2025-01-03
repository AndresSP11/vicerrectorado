let prep_evaluacion = document.getElementById('prep-eva');
let capa_cont = document.getElementById('capa-cont');
let mate_form = document.getElementById('mate-form');
let inve = document.getElementById('inve');
let inve_mone = document.getElementById('inve-mone');
let resp_soci = document.getElementById('resp-soci');
let tuto = document.getElementById('tuto');
let ases_acad = document.getElementById('ases-acad');
let ases_tes = document.getElementById('ases-tes');
let ases_estu = document.getElementById('ases-estu');
let gest_univ = document.getElementById('gest-univ');
let acti_admi = document.getElementById('acti-admi');

let total_horas = document.getElementById('total-horas');

let buttonSendApi= document.getElementById('registrar-btn');


let objectTotal = [
    {
        name: 'Preparación de evaluación',
        horas: prep_evaluacion.value,
    },
    {
        name: 'Capacitación continua',
        horas: capa_cont.value,
    },
    {
        name: 'Materiales formativos',
        horas: mate_form.value,
    },
    {
        name: 'Investigacion',
        horas: inve.value,
    },
    {
        name: 'Investigacion no monetaria',
        horas: inve_mone.value,
    },
    {
        name: 'Responsabilidad Social y Extension Universitaria',
        horas: resp_soci.value,
    },
    {
        name: 'Tutoría (*)',
        horas: tuto.value,
    },
    {
        name: 'Asesoría Académica (Retroalimentación)',
        horas: ases_acad.value,
    },
    {
        name: 'Asesoría de tesis',
        horas: ases_tes.value,
    },
    {
        name: 'Asesoría de estudiantes en proyectos de inv.',
        horas: ases_estu.value,
    },
    {
        name: 'Gestion Universitaria',
        horas: gest_univ.value,
    },
    {
        name: 'Actividades administrativas comp.',
        horas: acti_admi.value,
    },
]

console.log(objectTotal);

// Obtener la URL actual
const urlParams = new URLSearchParams(window.location.search);

// Obtener el valor del parámetro "cycle"
const cycle = urlParams.get('cycle');

// Verificar si existe el parámetro "cycle"
if (cycle) {
    console.log('Ciclo seleccionado:', cycle);
} else {
    console.log('No se recibió el parámetro "cycle".');
}
// Lista de todos los inputs
let inputs = [
    prep_evaluacion,
    capa_cont,
    mate_form,
    inve,
    inve_mone,
    resp_soci,
    tuto,
    ases_acad,
    ases_tes,
    ases_estu,
    gest_univ,
    acti_admi
];
function updateObjectTotal() {
    inputs.forEach((input, index) => {
        // Actualiza el valor de 'horas' en el objeto correspondiente
        objectTotal[index].horas = input.value || null;
        /* En este caso al data  */
    });
    console.log(objectTotal); // Verifica que se actualicen correctamente
}
// Función para calcular y actualizar el total
function updateTotal() {
    let total = 0;
    inputs.forEach(input => {
        // Convierte el valor del input a número o usa 0 si está vacío
        total += parseInt(input.value) || 0;
    });
    // Actualiza el contenido de total_horas
    total_horas.innerHTML = total;
    updateObjectTotal()
}
// Agregar el evento `keyup` a todos los inputs
inputs.forEach(input => {
    /* Iva generar  */
    input.addEventListener('keyup', updateTotal);
});

buttonSendApi.addEventListener('click', sendObject);

async function sendObject() {
    /* Vaciando data */
  
  const data = new FormData();
  data.append("data", JSON.stringify(objectTotal));
  data.append("cycle", cycle);
  try {
    const url = "../../apis/docente/bloques-insertar.php";
    const resultado = await fetch(url, {
      method: "POST",
      body: data,
    });
    
    /* Obtención de los valroes correspondientes */
    const respuesta = await resultado.json();
    /* Respuesta de Data */
    
    console.log(respuesta);
    /* const dataArreglo=JSON.parse(respuesta);
    
    dataArreglo.map((data)=>{
        console.log(data);
    }) */
    
  } catch (error) {
    console.log(data);
    console.log(error);
  }
}

document.addEventListener('DOMContentLoaded', updateTotal);

