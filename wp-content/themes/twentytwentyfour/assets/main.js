document.addEventListener('DOMContentLoaded', () => {
    // Seleccionamos la lista generada por el PHP del plugin core (.edu-press-api-widget ul)
    const listaEstudiantes = document.querySelector('.edu-press-api-widget ul');
    if (!listaEstudiantes) return; // Si la lista no existe, no hace nada (prevención de errores)

    const estudianteItems = listaEstudiantes.querySelectorAll('li');

    estudianteItems.forEach(item => {
        // Event Listener para el mouse over (Resaltar y mover)
        item.addEventListener('mouseover', () => {
            item.style.backgroundColor = '#f0fff5'; 
            item.style.transform = 'translateX(5px)'; 
            item.style.transition = '0.3s'; // Transición suave
        });

        // Event Listener para el mouse out (Volver a la normalidad)
        item.addEventListener('mouseout', () => {
            item.style.backgroundColor = 'transparent';
            item.style.transform = 'translateX(0)';
        });
    });

    console.log('EduPress Pro Scripts Loaded: JS interaction enabled.'); // Mensaje de prueba en consola
});