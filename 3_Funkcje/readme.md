# podstawy PHP &ndash; zadania
## Funkcje


### Zadanie 1 &ndash; do rozwiązania z wykładowcą
Napisz funkcję ```rentCost($days)```, która pobiera liczbę dni jako argument, a następnie wylicza koszt wynajmu pokoju według podanego wzoru:
* wynajem trwa jeden dzień, koszt pokoju 200 zł/dzień,
* wynajem trwa od dwóch do trzech dni, koszt pokoju 180 zł/dzień,
* wynajem trwa od czterech do siedmiu dni, koszt pokoju 160 zł/dzień,
* wynajem trwa osiem lub więcej dni, koszt pokoju 150 zł/dzień.

Dodatkowo za każdy pełny tydzień przysługuje 50 zł zniżki.

Przykład:
```
input -> 8
output -> 1150
```
### Zadanie 2 &ndash; do rozwiązania z wykładowcą
Napisz funkcję ```perfectNumber($n)```, która przyjmuje liczbę całkowitą. Funkcja zwraca następujące wartości:
* `true`, gdy liczba jest doskonała,
* `false`, gdy liczba nie jest doskonała.

Liczba doskonała jest równa sumie swoich dzielników. Przykładami takich liczb są:
* 1 = 1,
* 6 = 1+2+3.


### Zadanie 3
Napisz skrypt, który podaną przez użytkownika kwotę rozmieni na jak najmniejszą liczbę monet i banknotów o nominałach 1, 2, 5, 10 zł.
Przykład:
* 188 zł zostanie rozmienione na:
  * 18 banknotów 10 zł,
  * 1 moneta 5 zł,
  * 1 moneta 2 zł,
  * 1 moneta 1 zł.

Funkcja przyjmuje liczby całkowite, czyli podana kwota ma być w pełnych złotych.
W skrypcie należy zdefiniować funkcję, w której kwota oraz liczba poszczególnych monet są parametrami funkcji (użyj referencji). Funkcja powinna ustawiać wartość zmiennych przekazanych jako referencje reprezentujących liczbę monet danego nominału tak, żeby po jej wykonaniu można było wyświetlić wynik.

### Zadanie 4
Napisz funkcję `max2`. Funkcja przyjmuje dwie liczby, a następnie zwraca większą z nich. Następnie napisz funkcję `max3` zwracającą największą spośród trzech podanych liczb. Funkcja `max3` ma do tego celu używać funkcji `max2`.

### Zadanie 5
Napisz funkcję `rockPaperScissors(player1, player2)`, która przyjmuje dwa napisy i na ich podstawie zwraca informacje, kto wygrał. Prawidłowe napisy przyjmowane przez funkcję to: papier, nożyce, kamien.

Funkcja ma zwracać jeden z czterech napisów:
* "Gracz 1 wygrał",
* "Gracz 2 wygrał",
* "Remis",
* "Błędne informacje".

Przykład:
```
input -> "papier", "nozyce"
output -> "Gracz 2 wygrał"
```

### Zadania do zrobienia w domu
Zajrzyj do plików **praca_domowa1.php &ndash; praca_domowa4.php**. Znajdują się tam kawałki kodu i możliwe wyniki zapisane w komentarzach.
Zaznacz prawidłową odpowiedź i ją uzasadnij.

**Postaraj się wybrać odpowiedź zanim uruchomisz plik.**
