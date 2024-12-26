export function agregarControlInput(targetId, idLabel, labelText = 'sin definir', idInput, inputType = 'text') {
    fetch('/components/control-input/control-input-template.html')
        .then(response => response.text())
        .then(data => {
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#control-input-template');
            const clone = template.content.cloneNode(true);

            const uniqueSuffix = Date.now(); // Generar sufijo único
            const labelId = `${idLabel}-${uniqueSuffix}`;
            const inputId = `${idInput}-${uniqueSuffix}`;

            // Personalizar el label dentro del clon
            const labelElement = clone.querySelector(".label-cont");
            labelElement.setAttribute('id', labelId);
            labelElement.textContent = labelText;

            // Personalizar el input dentro del clon
            const inputElement = clone.querySelector(".input-cont");
            inputElement.setAttribute('id', inputId);
            inputElement.setAttribute('type', inputType);

            /* // Botón para alternar entre 'text' y 'date'
            const toggleButton = clone.querySelector(".toggle-btn");
            toggleButton.addEventListener('click', () => {
                const currentType = inputElement.getAttribute('type');
                const newType = currentType === 'text' ? 'date' : 'text';
                inputElement.setAttribute('type', newType);
            }); */

            // Insertar el componente en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template del input:', error);
        });
}
