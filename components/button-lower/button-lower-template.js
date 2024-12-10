const botones = [
    {
        type: "exit",
        text: "Salir",
        class: "exit-btn",
        action: () => alert('Saliendo...')
    },
    {
        type: "manual",
        text: "Descargar Manual de Usuario",
        class: "manual-btn",
        action: () => alert('Descargando manual...')
    },
    {
        type: "back",
        text: "Regresar",
        class: "back-btn",
        action: () => alert('Regresando...')
    },
    {
        type: "register",
        text: "Registrar",
        class: "register-btn",
        action: () => alert('Regsitrando...')
    },
    {
        type: "cancel",
        text: "Cancelar",
        class: "cancel-btn",
        action: () => alert('Cancelando...')
    },
    {
        type: "accept",
        text: "Aceptar",
        class: "accept-btn",
        action: () => alert('Aceptando...')
    },
    {
        type: "delete",
        text: "Eliminar",
        class: "delete-btn",
        action: () => alert('Eliminando...')
    }
];

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
                if (config.type) {
                    const btn = botones.find(boton => boton.type === config.type);
                    button.classList.add(btn.class)
                    button.textContent = btn.text;
                    button.addEventListener('click', btn.action);
                } else {
                    button.classList.add('hidden');
                }

                if (config.type && config.modal) {
                    button.classList.add('modal')
                }
            });

            /* buttonConfigs.forEach((config, index) => {
                const button = clone.querySelector(`#button-${index + 1}`);
                if (config.visible) {
                    button.textContent = config.label;
                    button.addEventListener('click', config.action);
                } else {
                    button.classList.add('hidden');
                }
            }); */

            // Agregar al contenedor
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => console.error('Error cargando el template:', error));
}
