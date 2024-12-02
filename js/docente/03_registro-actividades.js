// Selección de elementos
const modal = document.querySelector('.modal');
const modalImagen = document.querySelector('#modal_imagen');
const modalActividad = document.querySelector('#modal_actividad');
const overlay = document.getElementById('overlay');
const buttons = document.querySelectorAll('.evi_button');
const agregarButton = document.querySelector('#agregarButton');
const cancelButton = document.querySelectorAll('.cancelButton');
const acceptButton = document.querySelectorAll('.acceptButton');


// Abrir modal imagen
buttons.forEach(openButton => {
    openButton.addEventListener('click', () => {
        modalImagen.classList.remove('hidden');
        overlay.classList.remove('hidden');
    });
});

// Abrir modal actividad
agregarButton.addEventListener('click', () => {
    modalActividad.classList.remove('hidden');
    overlay.classList.remove('hidden');
});

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