<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A1</title>
</head>
<body>

<?php

// tutaj wygeneruj kilka linków
// możesz to zrobić np. za pomocą pętli

$config = [
    'min' => 1,
    'max' => 5,
];

function generateRanges($min,$max) {
    $ranges = [];

    foreach(range($min,$max) as $tempMin) {
        foreach(range($tempMin,$max) as $tempMax) {
            $ranges[] = [$tempMin,$tempMax];
        }
    }

    return $ranges;
}

function generateUrls($ranges) {
    $urls = [];

    foreach($ranges as $range) {
        $urls[] = "<a href='/zadanie_A1/numbers.php?min=". $range[0] . "&max=" . $range[1] . "'> From " . $range[0] .  " to " . $range[1] . "<a><br>";
    }

    return $urls;
}

echo implode('',generateUrls(generateRanges(1,5)));

?>


</body>
</html>
