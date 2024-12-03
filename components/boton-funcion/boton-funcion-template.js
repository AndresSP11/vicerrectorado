export function agregarBoton(targetId, textoSuperior = 'sin definir') {
    // Cargar el template del botón
    fetch('/components/boton-funcion/boton-funcion-template.html')
        .then(response => response.text())
        .then(data => {
            // Crear un nuevo div y agregar el contenido del template al DOM
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#boton-funcion-template');
            const clone = template.content.cloneNode(true);

            // Personalizar el texto del botón superior
            const buttonSupRed = clone.querySelector('.button-sup_red');
            buttonSupRed.textContent = textoSuperior;

            // Insertar el contenido en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template del botón:', error);
        });
}
