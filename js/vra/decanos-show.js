var seleccionador = document.querySelector("#seleccion_tipo"); /* check */
var datoInput = document.querySelector("#dato_texto"); /* check */
const tablero = document.querySelector("#tabla");
const tablaContainer= document.querySelector("#tabla-container");

document.addEventListener("DOMContentLoaded", porDefecto);
function porDefecto() {
  mostrarTodosDecanos();
}

seleccionador.addEventListener("change", function (e) {
    console.log(e.target.value)
  if (seleccionador.value.trim() === "") {
    mostrarTodosDecanos();
  } else {
    /* AQUI POR NOMBRE DE MEDICAMENTO , EN ESET CASO LA RESPUESTA QUE SE VA OBENER SERÁ POR EL 
        HTML  */
    if (seleccionador.value == "nombre") {
      /* Llamador por nombre */
      tablero.innerHTML =
        "<tr><th>NÚMERO DE <br> RECETA</th><th>CÓDIGO <br> ALUMNO</th><th>PERÍODO <br> ACADEMICO</th><th>ESPECIALISTA <br> MÉDICO</th><th>ESPECIALIDAD</th><th>FECHA DE REGISTRO</th></tr>";
      datoInput.addEventListener("keyup", function () {
        tablero.innerHTML = "";
        soloConNombre(datoInput.value);
      });
    }
    if (seleccionador.value == "codigo") {
      tablero.innerHTML =
        "<tr><th>NÚMERO DE <br> RECETA</th><th>CÓDIGO <br> ALUMNO</th><th>PERÍODO <br> ACADEMICO</th><th>ESPECIALISTA <br> MÉDICO</th><th>ESPECIALIDAD</th><th>FECHA DE REGISTRO</th></tr>";
      datoInput.addEventListener("keyup", function () {
        tablero.innerHTML = "";
        codigoInterno(datoInput.value);
      });
    }
  }
});

async function mostrarTodosDecanos() {
    /* Vaciando data */
  
  const tablaContainer= document.querySelector("#tabla-container");
  tablero.innerHTML = "";
  const data = new FormData();
  data.append("post", "todo");
  try {
    const url = "../../apis/vra/mostrar-decanos.php";
    const resultado = await fetch(url, {
      method: "POST",
      body: data,
    });
    /* Obtención de los valroes correspondientes */
    const respuesta = await resultado.json();
    /* Respuesta de Data */
    tablaContainer.innerHTML=`${respuesta}`
    
  } catch (error) {
    console.log(error);
  }
}

async function soloConNombre(valor) {
  const data = new FormData();
  data.append("post", valor);
  try {
    const url = "../../apis/vra/mostrar-nombre.php";

    const resultado = await fetch(url, {
      method: "POST",
      body: data,
    });
    /* Data se borra, recordar que con InnerHtml se borra */
    const respuesta = await resultado.json();
    tablaContainer.innerHTML = respuesta;
  } catch (error) {
    console.log(error);
  }
}



async function codigoInterno(valor) {
    const data = new FormData();
    data.append("post", valor);
    try {
      const url = "../../apis/vra/mostrar-codigo.php";
      const resultado = await fetch(url, {
        method: "POST",
        body: data,
      });
  
      const respuesta = await resultado.json();
      tablaContainer.innerHTML = respuesta;
    } catch (error) {
      console.log(error);
    }
}




/* denomin_comun_internac_o_principio_activo */

/* 
<----Tabla medicamentos---->
id_medicamento (pk)
cantidad
precio_unitaario
fecha_vencimiento
codigo_siga (fk)
*/

/* 

Lo que se pide 
<------petitorio-----xd>
id_medicamento (PK)
codigo_siga
denomin_comun_internac_o_principio_activo


*/
