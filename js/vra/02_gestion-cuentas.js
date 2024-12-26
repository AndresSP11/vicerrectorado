// Selección de elementos
const modal = document.querySelector('.modal');
const modalActividad = document.querySelector('#modal_usuario');
const overlay = document.getElementById('overlay'); 
const buttons = document.querySelectorAll('.edit-button');
const cancelButton = document.querySelectorAll('.cancelButton');
const acceptButton = document.querySelectorAll('.acceptButton');

const container = document.getElementById('tabla-container');

container.addEventListener('click', (event) => {
    const target = event.target;
    if (target.classList.contains('edit-button')) {
        // Interactuar con el elemento dinámico
        /* alert('Hiciste clic en el botón de editar'); */
        modalActividad.classList.remove('hidden');
        overlay.classList.remove('hidden');
    }
});

// Abrir modal actividad
/* buttons.forEach(openButton => {
    openButton.addEventListener('click', () => {
        modalActividad.classList.remove('hidden');
        overlay.classList.remove('hidden');
    });
}); */

// Cerrar modal con los botones cancelar y aceptar
cancelButton.forEach(closeButton => {
    closeButton.addEventListener('click', () => {
        if (!modalActividad.classList.contains('hidden')) {
            modalActividad.classList.add('hidden');
        } else {
            modalImagen.classList.add('hidden');
        }
        overlay.classList.add('hidden');
    });
});

acceptButton.forEach(closeButton => {
    closeButton.addEventListener('click', () => {
        if (!modalActividad.classList.contains('hidden')) {
            modalActividad.classList.add('hidden');
        } else {
            modalImagen.classList.add('hidden');
        }
        overlay.classList.add('hidden');
    });
});

// Cerrar modal al hacer clic fuera
overlay.addEventListener('click', () => {
    if (!modalActividad.classList.contains('hidden')) {
        modalActividad.classList.add('hidden');
    } else {
        modalImagen.classList.add('hidden');
    }
    overlay.classList.add('hidden');
});