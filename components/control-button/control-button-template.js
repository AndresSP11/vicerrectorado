export function agregarControlButton(targetId, idLabel, labelText = 'sin definir', idInput, inputType = 'text') {
    fetch('/components/control-button/control-button-template.html')
        .then(response => response.text())
        .then(data => {
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#control-button-template');
            const clone = template.content.cloneNode(true);

            // Generar sufijo único
            /* const uniqueSuffix = Date.now(); 
            const labelId = `${idLabel}-${uniqueSuffix}`;
            const selectId = `${idSelect}-${uniqueSuffix}`; */

            const labelId = idLabel;
            const inputId = idInput;

            // Personalizar el label dentro del clon
            const labelElement = clone.querySelector(".label-input");
            labelElement.setAttribute('id', labelId);
            labelElement.textContent = labelText;

            // Personalizar el input dentro del clon
            const inputElement = clone.querySelector(".input-comp");
            inputElement.setAttribute('id', inputId);
            inputElement.setAttribute('type', inputType);

            // Insertar el componente en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template del input:', error);
        });
}