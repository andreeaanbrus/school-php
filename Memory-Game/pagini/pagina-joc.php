<?php
    $nr = array();
    $nr = Generare();
?>
    <table>
        <tr>
            <td><img onclick="Sch(<?="{$nr[0]}"?>);" src="img/laba.png" id="<?="{$nr[0]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[1]}"?>);" src="img/laba.png" id="<?="{$nr[1]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[2]}"?>);" src="img/laba.png" id="<?="{$nr[2]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[3]}"?>);" src="img/laba.png" id="<?="{$nr[3]}"?>"></td>

        </tr>
        <tr>
            <td><img onclick="Sch(<?="{$nr[4]}"?>);" src="img/laba.png" id="<?="{$nr[4]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[5]}"?>);" src="img/laba.png" id="<?="{$nr[5]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[6]}"?>);" src="img/laba.png" id="<?="{$nr[6]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[7]}"?>);" src="img/laba.png" id="<?="{$nr[7]}"?>"></td>
        </tr>
        <tr>
            <td><img onclick="Sch(<?="{$nr[8]}"?>);" src="img/laba.png" id="<?="{$nr[8]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[9]}"?>);" src="img/laba.png" id="<?="{$nr[9]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[10]}"?>);" src="img/laba.png" id="<?="{$nr[10]}"?>"></td>
            <td><img onclick="Sch(<?="{$nr[11]}"?>);" src="img/laba.png" id="<?="{$nr[11]}"?>"></td>
        </tr>
    </table>
    <script src="js/main.js"></script>

<div id="scoruri">
<h3>Ai rezolvat jocul in:</h3>
<?php
    if( isset($_SESSION['rez']) && is_array($_SESSION['rez']) )
    {
        echo "<ul>";
        
        foreach( $_SESSION['rez'] as $i => $miscari )
        {
        ?>
            <li><?= "{$_SESSION['rez'][$i]} miscari la ".$_SESSION['data'][$i]?></li>
        <?php
        }
        echo "</ul>";
    }
?>
</div>

<div class="clear center">
        <button class="buton" onclick="window.location.href='./?pagina=joc';">Joc nou</button>
</div>