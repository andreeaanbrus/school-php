<html>
    <head>
        <title>Palindrom</title>
          <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h1>Este cuvântul palindrom?</h1>
        <form method= "get" action= "prelucrare.php">
        <div id = "container">
            <p class = "align-center">Introduceţi un cuvânt sau o propoziţie şi verificaţi dacă este palindrom!</p>
        
        <div class= "align-center" >
            <label for = "cuvant">
            <input type = "text" id = "cuvant" name="cuvant" maxlength="100">
            </label>
        </div>
        <div class="align-center">
            <input type = "radio"  name = "fel" value= "cuvant" checked>
                Cuvânt
            <input type = "radio"  name = "fel" value= "propozitie">
                Propoziţie
            <input type = "submit" value  = "Verifică">
        </div>
        <div class = "align-center">
            <input type = "reset" value   = "Resetează">
            <input type = "button" value  = "Ajutor" onclick = "window.alert('Palindromul este un grup de cuvinte sau cuvânt care poate fi citit de la stânga la dreapta și de la dreapta la stânga fără să-și piardă sensul ');">
        </div>
        </form>
        </div>
    </body>
</html>