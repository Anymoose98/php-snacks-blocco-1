<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
<?php
// Creazione dell'array con le partite
$partite = [
    [
        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60,
    ],
    [
        "squadra_casa" => "Stella Rossa",
        "squadra_ospite" => "Olimpia Milano",
        "punti_casa" => 71,
        "punti_ospite" => 93,
    ],
    [
        "squadra_casa" => "Venezia",
        "squadra_ospite" => "Dinamo Sassari",
        "punti_casa" => 83,
        "punti_ospite" => 89,
    ],
    [
        "squadra_casa" => "Trento",
        "squadra_ospite" => "Cremona",
        "punti_casa" => 69,
        "punti_ospite" => 93,
    ],
];

// Stampare a schermo le partite
foreach($partite as $partite)
echo $partite['squadra_casa'] . " - " . $partite['squadra_ospite'] . " | " . $partite['punti_casa'] . "-" . $partite['punti_ospite'] . "<br>";

?>

</body>
</html>