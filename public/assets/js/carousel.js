document.addEventListener('DOMContentLoaded', function () {
    const carouselContainer = document.querySelector('.carousel-container');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    
    let currentSlide = 0;

    // Inicializa el carrusel con el primer slide visible
    function initializeCarousel() {
        const carouselItems = document.querySelectorAll('.carousel-item'); // Todos los items del carrusel
        moveCarousel(currentSlide, carouselItems); // Muestra solo el primer item
    }

    // Función para mover el carrusel
    function moveCarousel(slideIndex, carouselItems) {
        // Asegurarse de que el índice esté dentro de los límites
        if (slideIndex < 0) {
            currentSlide = carouselItems.length - 1; // Si está en el primer slide, vuelve al último
        } else if (slideIndex >= carouselItems.length) {
            currentSlide = 0; // Si está en el último slide, vuelve al primero
        } else {
            currentSlide = slideIndex;
        }

        // Muestra solo el slide actual
        carouselItems.forEach((item, index) => {
            item.style.display = (index === currentSlide) ? 'block' : 'none';
        });
    }

    // Evento para el botón "prev"
    prevButton.addEventListener('click', function () {
        const carouselItems = document.querySelectorAll('.carousel-item');
        moveCarousel(currentSlide - 1, carouselItems);
    });

    // Evento para el botón "next"
    nextButton.addEventListener('click', function () {
        const carouselItems = document.querySelectorAll('.carousel-item');
        moveCarousel(currentSlide + 1, carouselItems);
    });

    // Inicialización
    initializeCarousel();
});
