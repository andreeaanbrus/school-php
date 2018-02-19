<?php
    session_start();
    require "module/modul-functii.php";
    require "module/modul-setari.php";
    
    $clean = array();
    if(!isset($_SESSION['rez']))
    {
        $_SESSION['rez'] = array();
    }
    
    if( !isset( $_SESSION['data']) )
    {
        $_SESSION['data'] = array();
    }
    
    if(isset($_GET['rez']))
    {
        $clean['rez'] = trim($_GET['rez']);
        if(Count($_SESSION['rez']) > 5)
        {
            array_pop($_SESSION['rez']);
        }
        if(Count($_SESSION['data']) > 5)
        {
            array_pop($_SESSION['data']);
        }
        $data = date("H:i:s");
        array_unshift($_SESSION['rez'], intval($clean['rez']));
        array_unshift($_SESSION['data'], $data);
        //print_r($_SESSION['data']);  
        header("Location: ../?pagina=joc");    
        die();
    } 
?>