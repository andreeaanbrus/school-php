<?php
    session_start();
    require "module/modul-functii.php";
    require "module/modul-setari.php";
    
    $nume = "straine";
    if( isset( $_SESSION['nume'] ) )
        $nume = trim( $_SESSION['nume'] );
    
    $pagina = "home";    
    if( isset( $_GET['pagina'] ) )
        $pagina = trim( $_GET['pagina'] );
        
?>

<html>
    <head>
        <title>Memory</title>
        <link rel="stylesheet" href="css/stil.css">
    </head>
    <body>
        <h1>Memory</h1>
        <?php include "module/modul-navigare.php" ?>
        
        <div id="container">
            <h2><?= "Salut, {$nume}!" ?></h2>
            <?php
                include "pagini/pagina-{$pagina}.php";
            ?>
        </div>
    </body>
</html>