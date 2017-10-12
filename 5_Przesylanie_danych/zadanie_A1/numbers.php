<?php

// tutaj wczytaj zmienne z GET-a i przygotuj funkcję która wyświetli liczby

$min = isset($_GET['min'])? $_GET['min'] : null;
$max = isset($_GET['max'])? $_GET['max'] : null;

function display($min,$max){
    return implode(',',range($min,$max));
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A1</title>
</head>
<body>

<?php

// tutaj użyj wcześniej przygotowanej funkcji

echo display($min,$max);

?>


</body>
</html>
