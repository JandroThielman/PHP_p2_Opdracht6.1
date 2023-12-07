<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 6.1</title>
</head>
<body>
    <?php
        //auteur: Jandro Thielman
        //functie: SessieVariabele

        session_start();

        if (isset($_SESSION["number"]) == false) {
            $_SESSION["number"] = 0;
        } else {
            $_SESSION["number"]++;
        }

        echo "Deze pagina heb je al: " . $_SESSION["number"]. " keer bekeken <br> voordat je de internet browser hebt afgesloten.";
        
    ?>
</body>
</html>