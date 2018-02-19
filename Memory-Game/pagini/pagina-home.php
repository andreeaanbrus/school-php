<?php
    if(!isset($_SESSION['nume']))
    {
        ?>
        <h2>Trebuie sa te autentifici pentru a te juca</h2>
        <div class="center">
            <button class="buton2" onclick="window.location.href='./?pagina=formular';">Autentifica-te aici!</button>
    <?php
    }
    else
    {?>
        <h2>Intoarce imaginile si gaseste-i fiecarui catel perechea, in cat mai putine miscari!</h2>
        <div class="center">
            <button class="buton2" onclick="window.location.href='./?pagina=joc';">Incepe aici!</button>
        </div>
    <?php
    }
?>