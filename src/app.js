// Libraries
window.bootstrap = require("bootstrap/dist/js/bootstrap.bundle.js");

// Local Scripts
import "../src/tab-pane-fix";
import "../src/theme-toggle";
import "../src/smooth-scrolling";
import "../src/form-ajax";
import "../src/aos";
import "../src/mvv-stack";
import "../src/scrolling-indicator";

// Header
document.addEventListener("DOMContentLoaded", function () {
    var header = document.getElementById("navbar");
    var topBar = document.getElementById("top-bar");
    var lastScrollTop = 0;
    var scrollThreshold = 1;

    function updateScroll() {
        var scroll = window.pageYOffset || document.documentElement.scrollTop;

        // Agregar/quitar clase navbar-scroll
        if (scroll >= scrollThreshold) {
            header.classList.add("navbar-scroll");
        } else {
            header.classList.remove("navbar-scroll");
        }

        // Detectar dirección del scroll
        if (scroll > lastScrollTop && scroll > scrollThreshold) {
            // Scroll down - ocultar top-bar
            topBar.classList.add("hidden");
        } else if (scroll < lastScrollTop) {
            // Scroll up - mostrar top-bar
            topBar.classList.remove("hidden");
        }

        lastScrollTop = scroll <= 0 ? 0 : scroll;
    }

    window.addEventListener("scroll", updateScroll);
    updateScroll();
});

// Function that closes menu
function cerrarMenu() {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    if (menu) {
        menu.classList.remove("menu-abierto");
    }
    if (navbar) {
        navbar.classList.remove("opacity-0");
    }
    if (backdrop) {
        backdrop.classList.remove("backdrop-opacity-1");
    }
}

// Navigation menu
document.getElementById("mburger").addEventListener("click", function (e) {
    e.stopPropagation();
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.toggle("menu-abierto");
    navbar.classList.toggle("opacity-0");
    backdrop.classList.toggle("backdrop-opacity-1");
});

document.querySelector(".menu").addEventListener("click", function (e) {
    e.stopPropagation();
});

document.body.addEventListener("click", function (e) {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.remove("menu-abierto");
    navbar.classList.remove("opacity-0");
    backdrop.classList.remove("backdrop-opacity-1");
});

const btnCerrarMenu = document.getElementById("cerrar-menu");

if (btnCerrarMenu) {
    btnCerrarMenu.addEventListener("click", cerrarMenu, false);
}

const btnLogo = document.getElementById("cerrar-menu");

if (btnLogo) {
    btnLogo.addEventListener("click", cerrarMenu, false);
}

// Get the ul element by its ID
var ulElement = document.getElementById("navmenu");

// Get all li elements within the ul element
var liElements = ulElement.getElementsByTagName("li");

// Loop through each li element
for (var i = 0; i < liElements.length; i++) {
    // Do stuff with each li element
    var currentLi = liElements[i];
    currentLi.addEventListener("click", function () {
        var menu = document.querySelector(".menu");
        var navbar = document.getElementById("navbar");
        var backdrop = document.getElementById("backdrop");

        menu.classList.remove("menu-abierto");
        navbar.classList.remove("opacity-0");
        backdrop.classList.remove("backdrop-opacity-1");
    });
}

const btnContacto = document.getElementById("btn-contacto");

if (btnContacto) {
    btnContacto.addEventListener("click", cerrarMenu, false);
}

// Cerrar menú con Esc
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        cerrarMenu();
    }
});

// Efectos parallax
import ParallaxEffect from "./parallax";

// Configuración de los elementos parallax
const parallaxConfig = [
    {
        selector: "#cuchara",
        range: 200, // Rango de movimiento en px
        speed: 0.3, // Velocidad del efecto
        direction: 1, // -1 = hacia arriba, 1 = hacia abajo
    },
    // Añadir más elementos aquí
];

// Inicializar cuando el DOM esté listo
document.addEventListener("DOMContentLoaded", () => {
    const parallax = new ParallaxEffect(parallaxConfig);
});
