export function agregarBotonInferior(targetId, buttonConfigs) {
    // Cargar el template
    fetch('/components/button-lower/button-lower-template.html')
        .then(response => response.text())
        .then(data => {
            // Crear un nuevo div y agregar el contenido del template al DOM
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#button-lower-template');
            const clone = template.content.cloneNode(true);

            // Configurar botones
            buttonConfigs.forEach((config, index) => {
                const button = clone.querySelector(`#button-${index + 1}`);
                if (config.visible) {
                    button.textContent = config.label;
                    button.addEventListener('click', config.action);
                } else {
                    button.classList.add('hidden');
                }
            });

            // Agregar al contenedor
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => console.error('Error cargando el template:', error));
}

/* document.addEventListener('DOMContentLoaded', () => {
    
    
}); */