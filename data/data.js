// Generar dinámicamente datos diferentes
export const datos = [
    { codigo: "2022107E", nombre: "James Torres", rol: "Académico", contrato: "Tipo A" },
    { codigo: "2022107F", nombre: "Maria López", rol: "Administrativo", contrato: "Tipo B" },
    { codigo: "2022108A", nombre: "Carlos Perez", rol: "Académico", contrato: "Tipo C" },
    { codigo: "2022110B", nombre: "Ana García", rol: "Académico", contrato: "Tipo A" },
    { codigo: "2022109C", nombre: "Juan Vega", rol: "Administrativo", contrato: "Tipo B" },
    { codigo: "2022111D", nombre: "Luis Ortega", rol: "Académico", contrato: "Tipo C" },
    { codigo: "2022112E", nombre: "Paula Ramos", rol: "Administrativo", contrato: "Tipo A" },
  ];
  
  // Guardar los datos en el localStorage
  localStorage.setItem('datosTabla', JSON.stringify(datos));
  console.log("Datos guardados en localStorage: ", datos);