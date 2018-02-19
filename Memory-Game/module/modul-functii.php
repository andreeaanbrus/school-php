<?php
    
    function Parola($parola)
    {
        return sha1($parola);
    }
    function Login()
    {
        if(isset($_SESSION['nume']) )
            return $_SESSION['nume'];
        return false;
    }
    function AfiseazaMesaj($mesaj, $tip_mesaj)
    {
        // $mesaj = mesajul pe care il afiseaza functia
        // $tip_mesaj = eroare, succes, avertisment, notificare
        ?>
        <div class="<?=$tip_mesaj?>">
            <?=$mesaj?>
        </div>
        <?php
    }
    function Generare()
    {
        $numere = array(1,2,3,4,5,6,7,8,9,10,11,12);
        shuffle($numere);
        return array_slice( $numere, 0 );
    }
    
?>