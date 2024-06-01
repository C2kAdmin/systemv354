<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con columnas</title>
    <link rel="stylesheet" href="styles.css?<?php echo filemtime('styles.css'); ?>">

</head>
<body>
    <div class="header">
        <?php //include 'mod_menu/mod_menu.php'; ?>
        <?php include 'mod_menufluid/mod_menufluid.php'; ?>
    </div>
    <div class="container">
        <div class="left-column">
            <?php include 'mod1_izq.php'; ?>
            <?php include 'mod2_izq.php'; ?>
        </div>
        
        <div class="center-column">
        <div id="contenido_dinamico">
			<?php include 'mod1/mod1.php'; ?></div>
        <div>
			<?php include 'mod_ytube/mod_ytube.php'; ?>
        </div>
            
        </div>
        
        <div class="right-column">
            <?php include 'mod1_der.php'; ?>
            <?php include 'mod2_der.php'; ?>
        </div>
    </div>
    <div class="section_ppal1">
    	<?php include 'mod_gmaps/mod_gmaps.php'; ?>
        <?php include 'mod_antefooter.php'; ?>
    </div>
    <div class="section_ppal2">
        <?php include 'mod_antefooter2.php'; ?>
    </div>
    <div class="section-footer">
        <?php include 'mod_footer/mod_footer.php'; ?>
    </div>

</body>
</html>