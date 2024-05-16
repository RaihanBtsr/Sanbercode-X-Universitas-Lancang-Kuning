<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php
    echo "<h4>Soal 1 Looping I Love PHP</h4>";
    
    echo "<h5>Looping Pertama</h5>";

    $start_number = 2;
    while ($start_number <= 21) {
        echo $start_number . " - I Love PHP <br>";
        $start_number += 2;
    }

    echo "<h5>Looping Kedua</h5>";

    $start_number = 20;
    while ($start_number >= 2) {
        echo $start_number . " - I Love PHP <br>";
        $start_number -= 2;
    }

    echo "<h4>Soal 2 Looping Array Modulo</h4>";

    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers : ";
    print_r($numbers);
    
    // Lakukan Looping di sini
    $rest = [];
    foreach ($numbers as $number) {
        $rest[] = $number % 5;
    }
    echo "<br>";
    echo "Array sisa baginya adalah : ";
    print_r($rest);
    echo "<br>";

    echo "<h4>Soal 3 Looping Asociative Array</h4>";

    $items = [
        ["001", "Keyboard Logitek", "60000", "Keyboard yang mantap untuk kantoran", "logitek.jpeg"],
        ["001", "Keyboard MSI", "300000", "Keyboard gaming MSI mekanik", "msi.jpeg"],
        ["001", "Mouse Genius", "50000", "Mouse Genius biar lebih pinter", "genius.jpeg"],
        ["001", "Mouse Jerry", "30000", "Mouse yang disukai kucing", "jerry.jpeg"],
    ];

    foreach ($items as $value) {
        $data = [
            "id" => $value[0],
            "name" => $value[1],
            "price" => $value[2],
            "description" => $value[3],
            "source" => $value[4],
        ];

        print_r($data);
        echo "<br>";
    };

    echo "<h4>Soal 4 Asterix</h4>";

    echo "Asterix: ";
    echo "<br>"; 

    for ($i=1; $i <=5 ; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
    echo "<br>";
    }
    ?>
</body>
</html>
