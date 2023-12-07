<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 6.4</title>
</head>
<body>
    <?php
        //auteur: Jandro Thielman
        //functie: Pi

        $straal = 10;
        $omtrek = 2 * 3.14159 * $straal;
        
        $truestraal = $straal * $straal;
        $oppervlakte = 3.14159 * $truestraal;

       echo "De Omtrek van een cirkel met straal $straal is: ";
       echo number_format($omtrek, 1);
       echo "<br>";

       echo "De Oppervlakte van een cirkel met straal $straal is: ";
       echo number_format($oppervlakte, 1);
       echo "<br>";
    ?>
</body>
</html>