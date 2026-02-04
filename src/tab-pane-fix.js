document.addEventListener("DOMContentLoaded", function () {
    // Prevenir scroll en tabs
    var tabButtons = document.querySelectorAll("#pills-noticias .nav-link");
    tabButtons.forEach(function (button) {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            // Bootstrap manejará el cambio de tab automáticamente
        });
    });
});
