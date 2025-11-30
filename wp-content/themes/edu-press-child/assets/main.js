// --- Lógica del Formulario ---
const form = document.getElementById('registro-estudiante-form');
const mensaje = document.getElementById('mensaje-validacion');

if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Detiene el envío normal del formulario

        const nombre = document.getElementById('nombre').value.trim();
        const email = document.getElementById('email').value.trim();

        // Validación
        if (nombre === '' || email === '') {
            mensaje.textContent = 'Por favor, completa todos los campos.';
            mensaje.style.backgroundColor = '#ffdddd'; // Fondo rojo claro para error
            mensaje.classList.remove('mensaje-oculto');
            return;
        }

        // Validación de correo electrónico (simple)
        if (!email.includes('@') || !email.includes('.')) {
            mensaje.textContent = 'El correo electrónico no es válido.';
            mensaje.style.backgroundColor = '#ffdddd';
            mensaje.classList.remove('mensaje-oculto');
            return;
        }

        // SIMULACIÓN de Envío (Clave para la demo Full Stack)
        mensaje.textContent = `¡Registro exitoso! ${nombre} ha sido agregado al sistema.`;
        mensaje.style.backgroundColor = '#ddffdd'; // Fondo verde claro para éxito
        mensaje.classList.remove('mensaje-oculto');

        // Limpiar el formulario
        form.reset();

        // Ocultar el mensaje después de 3 segundos
        setTimeout(() => {
            mensaje.classList.add('mensaje-oculto');
        }, 3000);
    });
}