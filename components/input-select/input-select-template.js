export function agregarInputSelect(targetId, idLabel, labelText = 'sin definir', idSelect, options = []) {
    // Cargar el template del botón
    fetch('/components/input-select/input-select-template.html')
        .then(response => response.text())
        .then(data => {
            // Crear un nuevo div y agregar el contenido del template al DOM
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#input-select-template');
            const clone = template.content.cloneNode(true);

            // Insertar el contenido en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);

            // Agregar id al elemento label
            const label = document.querySelector(".label-cont"); 
            label.setAttribute('id', idLabel);

            // Personalizar el texto del label
            const labelElement = clone.querySelector(idLabel);
            labelElement.textContent = labelText;

            // Agregar id al elemento select
            const select = document.querySelector(".select-cont"); 
            select.setAttribute('id', idSelect);

            // Referencia al elemento select
            const selectElement = document.getElementById(idSelect);

            // Añadir las opciones
            options.forEach(option => {
                const opt = document.createElement("option"); // Crear un elemento <option>
                opt.value = option.value; // Establecer el atributo 'value'
                opt.textContent = option.text; // Establecer el texto visible
                selectElement.appendChild(opt); // Añadir la opción al <select>
              });
        })
        .catch(error => {
            console.error('Error al cargar el template del botón:', error);
        });
}