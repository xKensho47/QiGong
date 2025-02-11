document.addEventListener('DOMContentLoaded', function () {
    // Manejar el formulario de agregar clase
    document.getElementById('formAgregarClase').addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'agregar');

        // Transformar el enlace de YouTube en un iframe
        const youtubeLink = document.getElementById('link').value;
        const link = transformYoutubeLink(youtubeLink);
        formData.set('link', link);

        fetch('/QiGong/controllers/claseController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('mensaje').innerText = data;
            location.reload();
        })
        .catch(error => console.error('Error:', error));
    });

    // Manejar el formulario de editar clase
    document.getElementById('formEditarClase').addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'editar');

        // Transformar el enlace de YouTube en un iframe
        const youtubeLink = document.getElementById('editar_link').value;
        const link = transformYoutubeLink(youtubeLink);
        formData.set('link', link);

        fetch('/QiGong/controllers/claseController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('mensaje').innerText = data;
            location.reload();
        })
        .catch(error => console.error('Error:', error));
    });

    // Manejar el formulario de eliminar clase
    document.getElementById('formEliminarClase').addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'eliminar');

        fetch('/QiGong/controllers/claseController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('mensaje').innerText = data;
            location.reload();
        })
        .catch(error => console.error('Error:', error));
    });
});

function agregarClase() {
    var modal = new bootstrap.Modal(document.getElementById('agregarClaseModal'));
    modal.show();
}

function editarClase(id) {
    // Obtener los datos de la clase desde el servidor
    fetch(`/QiGong/controllers/getClase.php?id=${id}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Llenar el formulario de edición con los datos de la clase
            document.getElementById('editar_id_class').value = data.id_class;
            document.getElementById('editar_titulo').value = data.title;
            document.getElementById('editar_descripcion').value = data.description;
            document.getElementById('editar_path_img').value = data.path_img;
            document.getElementById('editar_link').value = data.link;

            var modal = new bootstrap.Modal(document.getElementById('editarClaseModal'));
            modal.show();
        })
        .catch(error => console.error('Error:', error));
}

function eliminarClase(id) {
    document.getElementById('eliminar_id_class').value = id;
    var modal = new bootstrap.Modal(document.getElementById('eliminarClaseModal'));
    modal.show();
}

function transformYoutubeLink(link) {
    // Reemplazar "shorts" por "embed"
    if (link.includes("shorts/")) {
        return link.replace("shorts/", "embed/");
    }

    // Reemplazar "watch?v=" por "embed/"
    const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
    const match = link.match(regex);
    if (match && match[1]) {
        return `https://www.youtube.com/embed/${match[1]}`;
    }
    return link;
}