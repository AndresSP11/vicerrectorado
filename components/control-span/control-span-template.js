export function agregarControlInput(targetId, idLabel, labelText, idSpanP, spanTextP, idSpanS, spanTextS) {
    fetch('/components/control-span/control-span-template.html')
        .then(response => response.text())
        .then(data => {
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#control-span-template');
            const clone = template.content.cloneNode(true);

            // Generar sufijo único
            /* const uniqueSuffix = Date.now(); 
            const labelId = `${idLabel}-${uniqueSuffix}`;
            const selectId = `${idSelect}-${uniqueSuffix}`; */

            /* const labelId = idLabel;
            const inputId = idInput; */

            // Personalizar el label dentro del clon
            const labelElement = clone.querySelector(".label-span");
            labelElement.setAttribute('id', idLabel);
            labelElement.textContent = labelText;

            // Personalizar el span principal dentro del clon
            const spanElementP = clone.querySelector(".span-prin");
            spanElementP.setAttribute('id', idSpanP);
            spanElementP.textContent = spanTextP;

            // Personalizar el span seecundario dentro del clon
            const spanSecElementS = clone.querySelector(".span-sec");
            spanSecElementS.setAttribute('id', idSpanS);
            spanSecElementS.textContent = spanTextS;

            // Insertar el componente en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template del input:', error);
        });
}
