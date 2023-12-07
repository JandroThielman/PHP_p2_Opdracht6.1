<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 6.3</title>
</head>
<body>
    <?php
        //auteur: Jandro Thielman
        //functie: Generator

        $n=2;
        
        function letter($n) {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
 
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
 
        return $randomString;
        }

        echo rand(1000, 9999), "\n";
        echo letter($n);
    ?>
</body>
</html>