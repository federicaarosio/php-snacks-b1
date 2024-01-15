<!-- ## Snack 1

// Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:

// Olimpia Milano - Cantù | 55-60 -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 

        $partita = [
            [
                "squadraCasa" => 'Basket Roma',
                "squadraOspite" => 'Basket Milano',
                "pxCasa" => 100,
                "pxOspite" => 40,
            ],
            [
                "squadraCasa" => 'Basket Torino',
                "squadraOspite" => 'Basket Napoli',
                "pxCasa" => 40,
                "pxOspite" => 20,
            ],
            [
                "squadraCasa" => 'Basket Bologna',
                "squadraOspite" => 'Basket Vicenza',
                "pxCasa" => 30,
                "pxOspite" => 70,
            ],
            [
                "squadraCasa" => 'Basket Salerno',
                "squadraOspite" => 'Basket Urbino',
                "pxCasa" => 60,
                "pxOspite" => 60,
            ]
        ];


for ($i = 0; $i < count($partita); $i++) {
    echo $partita[$i]['squadraCasa'] . ' ' . '-' . ' ' . $partita[$i]['squadraOspite'] . ' ' . '|' . ' ' . $partita[$i]['pxCasa'] . '-' . $partita[$i]['pxOspite'] . '<br>' ;;
}

?>


</body>

</html>