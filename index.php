<!-- PHP -->
<!-- array -->
<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    /* var_dump($hotels);  */

    /* Traccia: Stampare in pagina i dati dell'hotel sottoforma di tabella. */
?>


<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP HOTELS</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gabriele Di Emmanuele" />
    <meta name="description" content="php-hotel" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <!-- Per ogni hotel in hotels (hotels as hotel) stampa il suo name, description, parking, vote, distance_to_center. -->
<div class="container mt-5 ">
    <div class="card text-center">
    <div class="card-header bg-light">
        🏨<b>Lista Hotel</b>🏨
    </div>
    <div class="card-body">
        <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance(to center)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel):?>
            <tr>
            <td colspan="1">
            <?= $hotel['name'];?>
            </td>
            <td colspan="1">
            <?= $hotel['description'];?>
            </td>
            <td colspan="1">
            <?= $hotel['parking'];?>
                </td>
                <td colspan="1">
                <?= $hotel['vote'];?>
                </td>
                <td colspan="1">
                <?= $hotel['distance_to_center'];?>
                </td>
            </tr>
            <?php endforeach; ?> 
    </tbody>
    </table>
    </div>
    </div>
</div>
</body>
</html>
