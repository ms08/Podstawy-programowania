<?php

// tutaj umieść kod który będzie przeliczał waluty

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B4</title>
</head>
<body>

<?php

// Tutaj umieść kod który będzie wyświetlał przeliczoną walutę

?>

<form action="#" method="POST">
    <label>
        Kwota:
        <input type="number" min="0.00" step="0.01" name="cashAmount">
    </label>
    <label>
        Konwersja:
        <input type="radio" name="conversionType" value="EURtoUSD" checked> EUR → USD <br>
        <input type="radio" name="conversionType" value="USDtoEUR" > USD → EUR <br>
        <input type="radio" name="conversionType" value="EURtoPLN" > EUR → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoEUR" > PLN → USD <br>
        <input type="radio" name="conversionType" value="USDtoPLN" > USD → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoUSD" > PLN → USD <br>
    </label>
    <input type="submit">
</form>

</body>
</html>
