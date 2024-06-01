// JavaScript para cargar módulos dinámicamente y desplazamiento suave
document.getElementById("boton_modulo1").addEventListener("click", function() {
    cargarModulo('mod1/mod1.php');
});

document.getElementById("boton_modulo2").addEventListener("click", function() {
    cargarModulo('mod2/mod2.php');
});

document.getElementById("boton_modulo3").addEventListener("click", function() {
    cargarModulo('mod3/mod3.php');
});

document.getElementById("boton_modulo4").addEventListener("click", function() {
    cargarModulo('mod4/mod4.php');
});

document.getElementById("boton_modulo5").addEventListener("click", function() {
    cargarModulo('mod5/mod5.php');
});

document.getElementById("boton_modulo6").addEventListener("click", function() {
    cargarModulo('mod6/mod6.php');
});

document.getElementById("boton_modulo7").addEventListener("click", function() {
    cargarModulo('mod7/mod7.php');
});

document.getElementById("boton_modulo8").addEventListener("click", function() {
    cargarModulo('mod8/mod8.php');
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
                var offset = headerHeight + centerColumnTop - 300; // Ajustar el offset a tu preferencia
                window.scrollTo({ top: offset, behavior: 'smooth' });
            }
        };
        xhttp.open("GET", modulo, true);
        xhttp.send();
    }, 500); // Este valor debe coincidir con la duración de la transición de opacidad
}
