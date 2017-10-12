# Podstawy PHP &ndash; zadania
## Kontrola przepływu programu

## Zadania do zrobienia z wykładowcą

### Zadanie 1 &ndash; rozwiązywane z wykładowcą
Napisz skrypt, który wyświetli nazwę miesiąca na podstawie zmiennej zawierającej numer miesiąca. Skorzystaj z instrukcji **switch**.

### Zadanie 2
Program dnia pewnego seminarium wygląda następująco:
* 8&ndash;11 wykłady,
* 12&ndash;13 dyskusje,
* 14 obiad,
* 15&ndash;18 prelekcje,
* 19 kolacja.
Napisz skrypt, który na podstawie wskazanej pory dnia (zmienna ```$godzina```) wyświetli informacje o wszystkich zaplanowanych punktach dnia (w odstępach godzinnych) które wydarzą się po tej godzienie. Użyj instrukcji **switch**.
Podajemy tylko pełne godziny.

Przykład:

```
$godzina = 13 ==> 13 dyskusje, 14 obiad, 15 prelekcje, 16 prelekcje, 17 prelekcje, 18 prelekcje, 19 kolacja

$godzina = 18 ==> 18 prelekcje, 19 kolacja
```
### Zadanie 3
Napisz skrypt spełniający następujące założenia:
* skrypt przyjmuje liczbę (`$liczba`) całkowitą dodatnią,
* skrypt sumuje wszystkie nieparzyste liczby całkowite dodatnie, które są mniejsze bądź równe wskazanej liczbie.

Przykład:
```
$liczba = 4  ==> 4 //1+3```
$liczba = 5  ==> 9 //1+3+5```
