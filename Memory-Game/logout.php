<?php
    session_start();
    require "module/modul-functii.php";
    require "module/modul-setari.php";
    if(Login())
    {
        unset($_SESSION['nume']);
    }
    header("Location: ./?pagina=home");
?>