<?php
    if(isset($_SESSION['eroare_login']))
    {
        AfiseazaMesaj($_SESSION['eroare_login'], "eroare");
        unset($_SESSION['eroare_login']);
    }
?>
<form method = "POST" action = "autentificare.php">
    <table align="center">
        <tr>
            <td align="right">Utilizator</td>
            <td align="left"><input type="text" name="nume" id="nume"></td>
        </tr>
        <tr>
            <td align="right">Parola</td>
            <td align="left"><input type="password" name="parola"></td>
        </tr>
        <tr>
            <td align="right"></td>
            <td align="left"><input type="submit" value="Trimite"></td>
        </tr>
    </table>
</form>