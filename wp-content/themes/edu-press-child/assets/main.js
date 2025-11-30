document.addEventListener('DOMContentLoaded', () => {
    // Seleccionamos la lista generada por el PHP del plugin core, usando la clase CSS
    const listaEstudiantes = document.querySelector('.edu-press-api-widget ul');
    
    // Si la lista no existe en la página, el script se detiene (Good Practice)
    if (!listaEstudiantes) return; 

    // Seleccionamos todos los ítems de la lista
    const estudianteItems = listaEstudiantes.querySelectorAll('li');
    
    // Recorremos cada ítem para añadir la interacción
    estudianteItems.forEach(item => {
        
        // 1. Event Listener para cuando el mouse ENTRA al elemento
        item.addEventListener('mouseover', () => {
            item.style.backgroundColor = '#f0fff5'; // Color suave para resaltar
            item.style.transform = 'translateX(5px)'; // Efecto sutil para demostrar manipulación del DOM
            item.style.transition = '0.3s'; // Transición suave
        });
        
        // 2. Event Listener para cuando el mouse SALE del elemento
        item.addEventListener('mouseout', () => {
            item.style.backgroundColor = 'transparent';
            item.style.transform = 'translateX(0)';
        });
    });
    
    console.log('EduPress Pro Scripts Loaded: JS interaction enabled.'); // Mensaje de prueba en consola
});