export function agregarControlSelect(targetId, idLabel, labelText = 'sin definir', idSelect, options = []) {
    fetch('/components/control-select/control-select-template.html')
        .then(response => response.text())
        .then(data => {
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#control-select-template');
            const clone = template.content.cloneNode(true);

            // Generar sufijo único
            /* const uniqueSuffix = Date.now(); 
            const labelId = `${idLabel}-${uniqueSuffix}`;
            const selectId = `${idSelect}-${uniqueSuffix}`; */

            const labelId = idLabel;
            const selectId = idSelect;

            // Personalizar el label dentro del clon
            const labelElement = clone.querySelector(".label-cont");
            labelElement.setAttribute('id', labelId);
            labelElement.textContent = labelText;

            // Personalizar el select dentro del clon
            const selectElement = clone.querySelector(".select-cont");
            selectElement.setAttribute('id', selectId);

            // Añadir opciones al select
            options.forEach(option => {
                const opt = document.createElement("option");
                opt.value = option.value;
                opt.textContent = option.text;
                selectElement.appendChild(opt);
            });

            // Insertar el componente en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template del botón:', error);
        });
}