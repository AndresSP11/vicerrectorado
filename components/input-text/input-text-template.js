export function agregarInputText(targetId, idLabel, labelText = 'sin definir') {
    // Cargar el template del botón
    fetch('/components/input-text/input-text-template.html')
        .then(response => response.text())
        .then(data => {
            // Crear un nuevo div y agregar el contenido del template al DOM
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#input-text-template');
            const clone = template.content.cloneNode(true);

            // Agregar id al elemento label
            const label = document.querySelector(".label-cont");
            console.log(label);
            label.setAttribute('id', idLabel);

            // Personalizar el texto del label
            const labelElement = clone.querySelector(idLabel);
            labelElement.textContent = labelText;

            // Insertar el contenido en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template del botón:', error);
        });
}