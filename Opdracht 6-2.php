<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 6.2</title>
</head>
<body>
    <?php
        //auteur: Jandro Thielman
        //functie: CookieVariabele

        session_start();   

        if (isset($_SESSION["number"]) == false) {
            $_SESSION["number"] = 0;
        } else {
            $_SESSION["number"]++;
        }
            

        if (isset($_COOKIE["visit"])) {
            $totalVisits = $_COOKIE["visit"] + 1;
            setcookie("visit", $totalVisits, time() + (1 * 24 * 60 * 60));
        } else {
            setcookie("visit", 1, time() + (1 * 24 * 60 * 60));
        }
 
        echo "Deze pagina heb je al: " . $_SESSION["number"]. " keer bekeken voordat je de internet browser hebt afgesloten.<br>";
        echo "In totaal heb je deze pagina al: " . $_COOKIE["visit"]. " keer bekeken.";
    ?>
</body>
</html>