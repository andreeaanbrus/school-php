<?php
    require "module/modul-functii.php";
    require "module/modul-setari.php";
    
    $clean=array();
    $clean['pagina'] = "home";
    
    //$clean['pagina'] = trim( $_POST['pagina'] );
    
    if( isset( $_POST['nume'] ) )
        $clean['nume'] = $_POST['nume'];
    
    setcookie("nume", $clean['nume'], time()+100);
    header("Location: ./?pagina={$clean['pagina']}");
?>