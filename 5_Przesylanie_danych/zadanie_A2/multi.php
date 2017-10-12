<?php

// tutaj wczytaj zmienne z GET-a i przygotuj funkcję która wyświetli tabelkę

$width = isset($_GET['width'])? $_GET['width'] : null;
$height = isset($_GET['height'])? $_GET['height'] : null;

function generateTable($width,$height) {
    $table = [];

    foreach(range(1,$height) as $row) {
        foreach(range(1,$width) as $col) {
            $table[$row][$col] = $row*$col;
        }
    }

    return $table;
}

function displayTable($table) {
    $html = "<table><tbody>";

    foreach($table as $row) {
        $html .= "<tr><td>" . implode("</td><td>",$row) . "</td></tr>";
    }

    return $html . "</tbody></table>";
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A2</title>
</head>
<body>

<?php

// tutaj użyj wcześniej przygotowanej funkcji

echo displayTable(generateTable($width,$height));

?>


</body>
</html>
