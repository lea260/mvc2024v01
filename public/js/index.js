document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('miFormulario');
    const editarBtn = document.getElementById('editarBtn');
    const enviarBtn = document.getElementById('borrarBtn');

    editarBtn.addEventListener('click', (event) => {
        console.log("editar");
        event.preventDefault(); // Prevenir el comportamiento por defecto
        event.stopPropagation(); // Prevenir la propagación del evento
        editarFormulario();
    });

    enviarBtn.addEventListener('click', (event) => {
        console.log("enviar");
        event.preventDefault(); // Prevenir el comportamiento por defecto
        event.stopPropagation(); // Prevenir la propagación del evento
        enviarFormulario(); // Llamada a la función asíncrona sin await
    });

    function borrarFormulario() {
        // Aquí colocas la lógica de edición
        console.log('Formulario en modo borrado...');
    }

    async function editarFormulario() {
        try {
            const formData = new FormData(form);
            let url = "http://localhost/mvc2024v01/index.php?r=autos/modificar";
            // Aquí realizamos la petición asíncrona usando fetch
            const response = await fetch(url, { // Reemplaza 'https://example.com/api' con la URL de tu API
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error('Error en la solicitud, código de estado: ' + response.status);
            }

            // Obtener la respuesta como HTML (texto)
            const result = await response.text();
            console.log('Formulario enviado con éxito, respuesta HTML:', result);

            // Aquí puedes manipular el HTML resultante, por ejemplo, insertarlo en el DOM
            //document.getElementById('resultado').innerHTML = result;

        } catch (error) {
            console.error('Error al enviar el formulario:', error);
        }
    }
});
