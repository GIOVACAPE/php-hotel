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

$parking = $_GET['parking'] ?? null;
$vote = $_GET['vote'] ?? null;

?>
<!-- <?php ?> da copia-incollare -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Hotel di GC</title>

</head>
<body class="bg-dark">
    <div class="container pt-3">
        <h1 class="text-white">Hotel di GC ☆☆☆☆☆</h1>
        <hr class="text-secondary">
        <!-- FORM -->
        <form action="" method="GET">
            <div class="form-group text-white">
                <!-- PARKING -->
                <label for="parking">SELEZIONA</label>
                <select name="parking" id="parking" class="form-select w-25 mt-1 mb-2">
                    <option value="">Tutti gli hotel</option>
                    <option value="true" <?= $parking == 'true' ? 'selected' : '' ?>>Con parcheggio</option>
                    <option value="false" <?= $parking == 'false' ? 'selected' : '' ?>>Senza parcheggio</option>
                </select>
                <!-- VOTO -->
                <label for="vote">VOTO</label>
                <select name="vote" id="vote" class="form-select w-25 mt-1 mb-4">
                    <option value="0">Tutti gli Hotel</option>
                    <option value="1" <?= $vote == '1' ? 'selected' : '' ?>>1 stella</option>
                    <option value="2" <?= $vote == '2' ? 'selected' : '' ?>>2 stelle</option>
                    <option value="3" <?= $vote == '3' ? 'selected' : '' ?>>3 stelle</option>
                    <option value="4" <?= $vote == '4' ? 'selected' : '' ?>>4 stelle</option>
                    <option value="5" <?= $vote == '5' ? 'selected' : '' ?>>5 stelle</option>
                </select>
                <!-- BOTTONE -->
                <input class="btn btn-primary" type="submit" value="Cerca">
                <a href="http://localhost/php-hotel" class="btn btn-danger">Reset</a>
            </div>
        </form>
        <hr>
        <!-- TABLE -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <?php foreach($hotels[0] as $key => $hotel) : ?>
                        <th scope="col"><?= ucfirst($key) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <!-- VOTO -->
                <?php foreach($hotels as $hotel) : ?>
                    <!-- PARCHEGGIO -->
                    <?php if ((!$parking || $hotel['parking'] == ($parking == 'true')) && (!$vote || $hotel['vote'] >= $vote )) : ?>
                        <tr>
                            <td> <?= $hotel['name'] ?></td>
                            <td> <?= $hotel['description'] ?></td>
                            <td> <?= ($hotel['parking']) ? '&#10003;' : '&#10007;' ?></td>
                            <td> <?= $hotel['vote'] ?></td>
                            <td> <?= $hotel['distance_to_center'] ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>    
    </div>
</body>
</html>





<!-- $voteHotel = $_GET['vote_hotel'] ?? 1;
$filterList = array();
$filterListBoll = false;
$resetButton = false;

if (isset($_GET['parking_hotel'])) {
    $parkingHotel = $_GET['parking_hotel'];
    if ($parkingHotel =='true') {
        $parkingHotel = true;
    } elseif ($parkingHotel == 'false') {
        $parkingHotel = false;
    }
} else {
    $parkingHotel = '';
}

if (($parkingHotel !== '')) {
    $filterList = array();

    $filterListBoll = true;
    foreach ($hotels as $hotelsKey => $hotel) {
    
        if ($hotel['vote'] >= $voteHotel && $hotel ['parking'] == $parkingHotel) {
            $filterList[] = $hotel;
        }
    }
    
} elseif ($voteHotel > 1) {
    $filterListBoll = true;
    $filterList = array();
    foreach ($hotels as $hotelKey => $hotel) {
        if ($hotel['vote'] >= $voteHotel) {
            $filterList[] = $hotel;
        }
    }
} else {
    $filterListBoll = false;
    $filterList = array();
}

if ($resetButton) {
    $filterList = [];
    $filterListBoll= false;
    $nameHotel = '';
    $voteHotel = 0;
    $parkingHotel = 'null';
    $resetButton = false;
}
$hotelKeys = null;
if (count($hotels)>0){
    $hotelKey = array_keys($hotels[0]);   
} -->