
//Actualiza el nombre de la bienvenida
export function actualizarBienvenida(nombre) {
    const elemento = document.getElementById('user-welcome');
    if (elemento) {
        elemento.textContent = `Bienvenido, ${nombre}`;
    }
}