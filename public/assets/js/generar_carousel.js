async function loadVideos() {
    try {
        const response = await fetch('./data/videos.json');
        if (!response.ok) throw new Error('Error al cargar los videos');

        const data = await response.json();
        console.log(data);  // Verifica la estructura completa del objeto 'data'

        const videos = data.videos;
        if (Array.isArray(videos)) {
            generateCarousel(videos); // Si es un array, genera el carrusel
        } else {
            console.error('La propiedad "videos" no es un array.');
        }
    } catch (error) {
        console.error('Error:', error);
    }
}


function generateCarousel(videos) {
    const carouselContainer = document.querySelector('.carousel'); // Selecciona el contenedor del carrusel

    videos.forEach(video => {
        const carouselItem = `
            <div class="carousel-item">
                <h2 class="project-title">${video.titulo}</h2>
                <img src="/images/videos/${video.imagen}" alt="Imagen del video">
                <iframe src="${video.link}" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p class="project-des">${video.descripcion}</p>
            </div>
        `;

        carouselContainer.insertAdjacentHTML('beforeend', carouselItem); // Añade el item al carrusel
    });

    // Mostrar solo el primer item al cargar
    const carouselItems = document.querySelectorAll('.carousel-item');
    if (carouselItems.length > 0) {
        carouselItems[0].style.display = 'block'; // Muestra solo el primer item
    }

    // Inicializa el carrusel después de agregar los elementos
    moveCarousel(0);
}
  
document.addEventListener('DOMContentLoaded', loadVideos);
