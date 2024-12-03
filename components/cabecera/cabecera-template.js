export function agregarCabecera(targetId, rol = 'sin definir', nombre = 'sin definir') {
    // Cargar el template desde el archivo HTML externo
    fetch('/components/cabecera/cabecera-template.html')
        .then(response => response.text())
        .then(data => {
            // Crear un nuevo div y agregar el contenido del template al DOM
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#cabecera-template');
            const clone = template.content.cloneNode(true);

            // Modificar el rol y nombre en el template clonado
            const userRole = clone.querySelector('#user-role');
            const userName = clone.querySelector('#user-name');
            userRole.textContent = `Rol: ${rol}`;
            userName.textContent = nombre;

            // Insertar el contenido en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template:', error);
        });
}
