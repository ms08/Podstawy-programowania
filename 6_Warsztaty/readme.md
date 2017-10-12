# PHP &ndash; podstawy
# Warsztaty

## Warsztat 1 &ndash; rozgrzewka
Stwórz statyczną stronę z formularzem, która prosi o imię użytkownika, a po kliknięciu przycisku „wyślij” przekierowuje na podstronę witającą użytkownika słowami `„Cześć, {$imię}!”`.

### Wskazówki:
1. Formularz ma przekierowywać na tę samą stronę.
2. Na samym początku sprawdź, czy strona została wygenerowana przez zapytanie ```GET``` czy ```POST``` (użyj **if** i ```$_SERVER['REQUEST_METHOD']```)
3. Sprawdź, czy w tablicy POST znajduje się prawidłowa zmienna.
4. Jeżeli coś nie działa &ndash; debuguj!

## Warsztat 2 &ndash; symulator Lotto
Napisz prosty symulator Lotto. Symulator ma się składać ze strony z formularzem pozwalającym wybrać sześć liczb z zakresu 1&ndash;49. Po wysłaniu formularza strona ma sama wylosować sześć (różnych) liczb z tego samego zakresu, wyświetlić je i pokazać, ile liczb z wybranych przez użytkownika pokrywa się z wylosowanymi.

### Wskazówki:
1. Wygeneruj formularz pętlą **for** i **checkboksami**.
2. Napisz funkcję generującą sześć losowych liczb z podanego zakresu. Najprostszym sposobem jest stworzenie tablicy z liczbami z tego zakresu, następnie przetasowanie jej i wybranie sześciu pierwszych liczb znajdujących się w tej tablicy. Pomocne funkcje: [array_key_exists][array_key_exists], [shuffle][shuffle], [array_slice][array_slice], [range][range].
3. Jeżeli strona jest wygenerowana z POST &ndash; zobacz, czy przesyłasz sobie wszystkie dane. Możesz to zrobić za pomocą ```var_dump($_POST);```.

## Warsztat 2b &ndash; symulator Lotto (rozszerzony)
Rozszerz symulator z poprzedniego zadania. Ma on przyjmować &ndash; w postaci danych ```GET``` &ndash; informacje na temat rozpiętości liczb (np. ```?start=5&end=30```) i działać dla podanego przedziału.
Dzięki temu możemy losować liczby z podanego przedziału (np. 5&ndash;30).

## Warsztat 3 &ndash; ostatnie odwiedziny
Stwórz stronę, która wita gości i mówi im, kiedy ostatnio byli na naszej stronie. Daj możliwość usunięcia ciasteczka (poprzez guzik).

### Wskazówki:
1. Korzystaj z ciasteczek do zapisania danych na temat czasu wizyty użytkownika.
2. Uzależnij komunikat od istnienia ciasteczka (podczas pierwszych odwiedzin strony wyświetl odpowiedni komunikat).
3. Usuwanie ciasteczka zrób na osobnej stronie.

## Warsztat 4 &ndash; lista zadań
Stwórz aplikację służącą do trzymania prostej listy zadań. Strona ma pokazywać wszystkie zadania do zrobienia i formularz do dodania zadania.

### Wskazówki:
1. Korzystaj z sesji do trzymania zadań.
2. Zadania trzymaj w tabelce.
3. Jeżeli strona jest generowania przez ```POST```, to dodaj zadanie.
4. Do trzymania zadań w ciasteczku użyj funkcji **serialize**, a do wczytania **unserialize**.

<!-- Links -->
[array_key_exists]:https://secure.php.net/manual/en/function.array-key-exists.php
[shuffle]:https://secure.php.net/manual/en/function.shuffle.php
[array_slice]:https://secure.php.net/manual/en/function.array-slice.php
[range]:https://secure.php.net/manual/en/function.range.php
