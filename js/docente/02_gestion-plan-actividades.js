const selectorValue = document.getElementById('seleccion_tipo');
const registerButton = document.getElementById('reg-act-lec');

// Evento para detectar el cambio en el select y obtener el valor seleccionado
selectorValue.addEventListener('change', () => {
    const selectedOption = selectorValue.options[selectorValue.selectedIndex].value;
    console.log('Opción seleccionada:', selectedOption);
});

// Evento del botón de registro
registerButton.addEventListener('click', (e) => {
    e.preventDefault(); // Evita el comportamiento por defecto del botón

    const selectedOption = selectorValue.options[selectorValue.selectedIndex].value;

    if (selectedOption) {
        // Construye la URL dinámica
        const url = `http://localhost:3000/pages/docente/03_registro-act-no-lec.php?cycle=${selectedOption}`;
        
        // Redirige al usuario a la URL
        window.location.href = url;
    } else {
        // Si no se selecciona una opción, muestra un mensaje
        console.log('Por favor, selecciona un ciclo antes de continuar.');
        alert('Por favor, selecciona un ciclo antes de continuar.');
    }
});