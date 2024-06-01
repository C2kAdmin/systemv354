<!-- mod_menu_parte1.php -->
<link rel="stylesheet" href="mod_menu/styles_menu.css?<?php echo filemtime('styles_menu.css'); ?>">

<div class="menu-buttons">
    <div class="desktop-menu">
        <!-- Botones de menú para PC -->
        <button class="menu-button desktop-menu-item" data-modulo="mod1/mod1.php">Módulo 1</button>
        <button class="menu-button desktop-menu-item" data-modulo="mod2/mod2.php">Módulo 2</button>
        <button class="menu-button desktop-menu-item" data-modulo="mod3/mod3.php">Módulo 3</button>
        <button class="menu-button desktop-menu-item" data-modulo="mod4/mod4.php">Módulo 4</button>
        <button class="menu-button desktop-menu-item" data-modulo="mod5/mod5.php">Módulo 5</button>
        <button class="menu-button desktop-menu-item" data-modulo="mod6/mod6.php">Módulo 6</button>
        <button class="menu-button desktop-menu-item" data-modulo="mod7/mod7.php">Módulo 7</button>
        <button class="menu-button desktop-menu-item" data-modulo="mod8/mod8.php">Módulo 8</button>
        <button class="menu-button desktop-menu-item" id="boton_desplazar">Desplazar</button>
    </div>
    <!-- Botón de menú para dispositivos móviles -->
    <div class="mobile-menu">
        <button class="menu-button" id="menu-icon">☰</button>
        <div class="mobile-menu-content" id="mobile-menu-content">
            <button class="menu-button mobile-menu-item" data-modulo="mod1/mod1.php">Módulo 1</button>
            <button class="menu-button mobile-menu-item" data-modulo="mod2/mod2.php">Módulo 2</button>
            <button class="menu-button mobile-menu-item" data-modulo="mod3/mod3.php">Módulo 3</button>
            <button class="menu-button mobile-menu-item" data-modulo="mod4/mod4.php">Módulo 4</button>
            <button class="menu-button mobile-menu-item" data-modulo="mod5/mod5.php">Módulo 5</button>
            <button class="menu-button mobile-menu-item" data-modulo="mod6/mod6.php">Módulo 6</button>
            <button class="menu-button mobile-menu-item" data-modulo="mod7/mod7.php">Módulo 7</button>
            <button class="menu-button mobile-menu-item" data-modulo="mod8/mod8.php">Módulo 8</button>
            <button class="menu-button mobile-menu-item" id="boton_desplazar_movil">Desplazar</button>
        </div>
    </div>
</div>

<script>
    // JavaScript para desplazar hasta la sección específica
    document.getElementById("boton_desplazar").addEventListener("click", function() {
        document.querySelector(".section-footer").scrollIntoView({ behavior: 'smooth' });
    });

    document.getElementById("boton_desplazar_movil").addEventListener("click", function() {
        document.querySelector(".section-footer").scrollIntoView({ behavior: 'smooth' });
        document.getElementById("mobile-menu-content").classList.remove("show");
    });

    // JavaScript para mostrar/ocultar el menú móvil
    document.getElementById("menu-icon").addEventListener("click", function() {
        var mobileMenu = document.getElementById("mobile-menu-content");
        mobileMenu.classList.toggle("show");
    });

    // JavaScript para cargar módulos dinámicamente
    document.querySelectorAll(".menu-button").forEach(function(button) {
        button.addEventListener("click", function() {
            // Eliminar la clase de todos los botones
            document.querySelectorAll(".menu-button").forEach(function(btn) {
                btn.classList.remove("active");
            });

            // Agregar la clase al botón clickeado
            this.classList.add("active");

            var modulo = this.getAttribute("data-modulo");
            cargarModulo(modulo);
            if (this.classList.contains("mobile-menu-item")) {
                document.getElementById("mobile-menu-content").classList.remove("show");
            }
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
</script>
