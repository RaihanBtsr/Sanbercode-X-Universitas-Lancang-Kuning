<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($nama) {
    echo "Halo $nama, Selamat Datang di Sanbercode! <br>";
}

greetings("Bagas");
greetings("Wahyu");
greetings("nama peserta");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($kata) {
    $panjangKata = strlen($kata);
    $reverse = "";
    for ($i = $panjangKata - 1; $i >= 0; $i--) {
        $reverse .= $kata[$i];
    }
    echo $reverse . "<br>";
}

reverseString("abdul");

// Hapus komentar di bawah ini untuk jalankan Code
reverseString("Raihan Batsar Adani");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";

function balik($kata) {
    $panjangKata = strlen($kata);
    $reverse = "";
    for ($i = $panjangKata - 1; $i >= 0; $i--) {
        $reverse .= $kata[$i];
    }
    return $reverse;
}

// Code function di sini
function palindrome($word) {
    $reverseWord = balik($word);
    if ($reverseWord == $word) {
        echo "$word : true <br>";
    } else {
        echo "$word : false <br>";
        }   
    }

// Hapus komentar di bawah ini untuk jalankan code
palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        echo "$nilai => Sangat baik <br>";
    } else if ($nilai >=70 && $nilai <85) {
      echo "$nilai => Baik <br>";
    } else if ($nilai >=60 && $nilai <70) {
        echo "$nilai => Cukup <br>";
    } else {
        echo "$nilai +> Kurang <br>";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang


?>

</body>

</html>