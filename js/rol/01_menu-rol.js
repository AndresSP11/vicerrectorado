/**
 * Actualiza el atributo href de una etiqueta <a> basado en el valor seleccionado de un <select>.
 * 
 * @param {string} selectId - El ID del elemento <select>.
 * @param {string} anchorId - El ID de la etiqueta <a>.
 * @param {Object} routes - Objeto que relaciona valores del <select> con rutas.
 */
export function actualizarHref(selectId, anchorId, routes) {
    const selectElement = document.getElementById(selectId);
    const anchorElement = document.getElementById(anchorId);
  
    if (!selectElement) {
      console.error(`No se encontró el <select> con ID: ${selectId}`);
      return;
    }
  
    if (!anchorElement) {
      console.error(`No se encontró la etiqueta <a> con ID: ${anchorId}`);
      return;
    }
  
    // Escuchar cambios en el <select>
    selectElement.addEventListener('change', () => {
      const selectedValue = selectElement.value;
      const newHref = routes[selectedValue] || '#'; // Ruta por defecto si no coincide
  
      // Actualizar el href del <a>
      anchorElement.setAttribute('href', newHref);
    });
  }