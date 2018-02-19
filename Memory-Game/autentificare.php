<?php
    session_start();

    require "module/modul-functii.php";
    require "module/modul-setari.php";
    
    if(isset($_POST['nume']) && isset($_POST['parola']))
    {     
        $clean = array();
        $clean['parola'] = Parola($_POST['parola']);
        $clean['nume'] = trim($_POST['nume']);
        
        if( $clean['nume'] == 'Andreea' && $clean['parola'] == '326ebca10f7d586cf0cc96fe960636824b717d45')
        {
            $_SESSION['nume'] = $clean['nume'];
            header("Location: ./?pagina=home");
            die();
        }
        else
        {
            $_SESSION['eroare_login'] = "Date incorecte";
            header("Location: ./?pagina=formular");
            die();
        }
    }
    else
    {
        $_SESSION['eroare_login'] = "Completeaza formularul";
        header("Location: ./?pagina=formular");
        die();
    }
    
?>