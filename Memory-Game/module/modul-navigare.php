<div class="menu">
    <ul>
        <li>Meniu</li>
        <li>
            <a href="index.php?pagina=home">
                Prima pagina
            </a>
        </li>
            <?php
                if(Login())
                {
                    ?>
                    <li>
                        <a href="index.php?pagina=joc">Joc</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <?php
                }
                else
                {
                    ?>
                    <li>
                        <a href="index.php?pagina=formular">Login</a>
                    </li>
                    <?php
                }
            ?>
    </ul>
</div>