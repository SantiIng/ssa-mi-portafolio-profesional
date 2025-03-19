// Script para cambiar la clase active en el menú
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        document.querySelectorAll('.nav-link').forEach(item => item.classList.remove('active'));
        link.classList.add('active');
    });
});

// Script para avanzar el carrusel cuando el video termine
document.querySelectorAll('.carousel-item video').forEach(video => {
    video.addEventListener('ended', () => {
        let carouselId = video.closest('.carousel').id;
        let carousel = new bootstrap.Carousel(document.getElementById(carouselId));
        carousel.next();
    });
});

document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        document.querySelectorAll('.nav-link').forEach(item => item.classList.remove('active'));
        link.classList.add('active');
    });
});

