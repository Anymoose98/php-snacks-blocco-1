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
    "squadra_casa" => "Olimpia Milano",
    "squadra_ospite" => "Cantù",
    "punti_casa" => 55,
    "punti_ospite" => 60,
];
var_dump($partite);
// Stampare a schermo le partite

echo $partite['squadra_casa'] . " - " . $partite['squadra_ospite'] . " | " . $partite['punti_casa'] . "-" . $partite['punti_ospite'] . "<br>";

?>

</body>
</html>