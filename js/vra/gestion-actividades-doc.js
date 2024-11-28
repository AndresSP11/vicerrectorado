// Selección de elementos
const modal = document.getElementById('modal');
const overlay = document.getElementById('overlay');
const openButton = document.querySelector('#fechaButton');
const cancelButton = document.querySelector('#cancelButton');
const acceptButton = document.querySelector('#acceptButton');

// Abrir modal
openButton.addEventListener('click', () => {
    modal.classList.remove('hidden');
    overlay.classList.remove('hidden');
});

// Cerrar modal
cancelButton.addEventListener('click', () => {
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
});

acceptButton.addEventListener('click', () => {
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
});

// Cerrar modal al hacer clic fuera
overlay.addEventListener('click', () => {
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
});