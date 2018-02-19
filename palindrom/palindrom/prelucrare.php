<?php
    $clear = array();
    if(isset($_GET["cuvant"]))
    {
        $clear["cuvant"] = $_GET["cuvant"];
    }
    function Palindrom($cuvant)
    {
        $cuvant1 = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $cuvant));
        //sterg caracterele de care nu am nevoie
        $nr_lit = strlen($cuvant1) - 1;
        for($i = 0, $j = $nr_lit; $i < $j ; $i++, $j--)
            if($cuvant1[$i] != $cuvant1[$j])
                return false;
        return true;
    }
    if(Palindrom($clear["cuvant"]))
        $raspuns = "";
    else
        $raspuns = "nu";
    
?>
<html>
    <head>
        <title>Verificare</title>
        <link rel = "stylesheet" href = "stylesheet.css">
    </head>
    <body>
        <?php if( strlen($clear["cuvant"]) < 2) : ?>
            <h1>Cuvântul trebuie să conţină minim 2 caractere!</h1>
        <?php else : ?>
        
        <h1 class = "align-center">Rezultatul verificării</h1>
        <div id = "container1">
            <?php if($_GET['fel'] == 'cuvant') : ?>
            <p> Cuvântul <br> <strong> <?= $clear["cuvant"] ?> </strong> <br> <?= $raspuns ?> este palindrom</p>
            <?php else :?>
            <p> Propoziţia <br> <strong> <?= $clear["cuvant"] ?> </strong> <br> <?= $raspuns ?> este palindrom</p>
            <?php endif ?>
        </div>
        
        <?php endif?>
         <div  style= "text-align:center" >
        <a href = "form.php">Mai incearcă un cuvant / o propoziţie</a>
        </div>
    </body>
</html>