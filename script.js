let slideIndex = 0;
const slides = document.querySelectorAll(".slide");

function mostrarSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? "block" : "none";
    });
}

function mudarSlide(direcao) {
    if (slides.length === 0) {
        return;
    }

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
if (slides.length > 1) {
    setInterval(() => {
        mudarSlide(1);
    }, 8000);
}

function verMais(categoria) {
    const lista = document.getElementById(`lista-${categoria}`);

    if (!lista) {
        return;
    }

    const produtos = lista.getElementsByClassName("produto-card");
    let novosProdutos = "";

    for (let i = 0; i < produtos.length && i < 6; i++) {
        novosProdutos += produtos[i].outerHTML;
    }

    lista.innerHTML += novosProdutos;
}

const formCadastro = document.getElementById("form-cadastro");
const formLogin = document.getElementById("form-login");

function mostrarForm(form) {
    if (!formCadastro || !formLogin) {
        return;
    }

    formCadastro.style.display = "none";
    formLogin.style.display = "none";

    if (form === "cadastro") {
        formCadastro.style.display = "block";
    }

    if (form === "login") {
        formLogin.style.display = "block";
    }
}

if (formCadastro && formLogin) {
    mostrarForm("login");
}