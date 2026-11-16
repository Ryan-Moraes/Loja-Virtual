let slideIndex = 0;
const slides = document.querySelectorAll(".slide");

function mostrarSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? "block" : "none";
    });
}

function mudarSlide(direcao) {
    slideIndex += direcao;

    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    mostrarSlide(slideIndex);
}

mostrarSlide(slideIndex);
setInterval(() => {
        mudarSlide(1);
    }, 8000);