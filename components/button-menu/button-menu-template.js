export function agregarBotonMenu(targetId, textoSuperior = 'sin definir', ruta) {
    // Cargar el template del botón
    fetch('/components/button-menu/button-menu-template.html')
        .then(response => response.text())
        .then(data => {
            // Crear un nuevo div y agregar el contenido del template al DOM
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#button-menu-template');
            const clone = template.content.cloneNode(true);

            // Personalizar el texto del botón superior
            const buttonSupRed = clone.querySelector('.button-sup_red');
            buttonSupRed.textContent = textoSuperior;
            buttonSupRed.href = ruta;

            // Insertar el contenido en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template del botón:', error);
        });
}
