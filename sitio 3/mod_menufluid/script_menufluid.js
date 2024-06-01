// script_menufluid.js
document.getElementById("boton_desplazar").addEventListener("click", function() {
    document.querySelector(".section-footer").scrollIntoView({ behavior: 'smooth' });
});

// JavaScript para cargar módulos dinámicamente
document.querySelectorAll(".nav li a").forEach(function(link) {
    link.addEventListener("click", function(e) {
        e.preventDefault();
        
        // Eliminar la clase de todos los botones
        document.querySelectorAll(".nav li").forEach(function(li) {
            li.classList.remove("active");
        });

        // Agregar la clase al botón clickeado
        this.parentElement.classList.add("active");

        var modulo = this.getAttribute("data-modulo");
        cargarModulo(modulo);
    });
});

function cargarModulo(modulo) {
    var contenidoDinamico = document.getElementById("contenido_dinamico");

    // Paso 1: Desvanecer el contenido actual
    contenidoDinamico.style.opacity = 0;

    // Paso 2: Esperar a que la transición se complete antes de cargar el nuevo contenido
    setTimeout(function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Paso 3: Reemplazar el contenido una vez que el contenido actual está completamente desvanecido
                contenidoDinamico.innerHTML = this.responseText;

                // Paso 4: Hacer visible el nuevo contenido con una transición
                contenidoDinamico.style.opacity = 1;

                // Desplazar hasta la sección después de cargar el módulo con un pequeño offset
                var headerHeight = document.querySelector(".header").offsetHeight;
                var centerColumnTop = contenidoDinamico.offsetTop;
                var offset = headerHeight + centerColumnTop - 200; // Ajustar el offset a tu preferencia
                window.scrollTo({ top: offset, behavior: 'smooth' });
            }
        };
        xhttp.open("GET", modulo, true);
        xhttp.send();
    }, 500); // Este valor debe coincidir con la duración de la transición de opacidad
}
