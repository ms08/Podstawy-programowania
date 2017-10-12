# PHP &ndash; Podstawy PHP
## Tablice

### Zadanie 1 &ndash; zadania do rozwiązania z wykładowcą
Napisz funkcję ```printTable($array)```, która w pętli przeiteruje po wszystkich elementach tablicy i wypisze je na ekranie.

### Zadanie 2 &ndash; zadania do rozwiązania z wykładowcą
Napisz dwie funkcje:
* ```print2DTable($table)```, która wyświetli tablicę dwuwymiarową w postaci macierzy,
* ```getMatrixTrace($array)```, która obliczy ślad macierzy (sumę elementów na głównej przekątnej) przekazanej w parametrze.

Zakładamy, że tablica reprezentuje macierz kwadratową (liczba wierszy równa liczbie kolumn).

### Zadanie 3
Napisz funkcję, która wyświetli największą liczbę spośród liczb znajdujących się w tablicy liczb całkowitych.
Funkcja ma przyjmować jeden parametr &ndash; tablicę.
Spróbuj rozwiązać to zadanie na dwa sposoby.

### Zadanie 4
Napisz funkcję przyjmującą jako argument tablicę z liczbami. Funkcja zwraca tablicę tylko z tymi liczbami, które są mniejsze od średniej arytmetycznej wszystkich liczb w tablicy (przyjętej jako argument).

```
input -> [1,2,3,4,5]
output =>[1,2]
```
### Zadanie 5
Napisz funkcję, która sprawdza, czy zmienna przekazana jako pierwszy parametr występuje w tablicy przekazanej jako drugi parametr.
Jeżeli tak &ndash; funkcja ma zwrócić ```true```, jeżeli nie &ndash; ```false```.

### Zadanie 6
Napisz funkcję ```createMultiTable($n)```, która przyjmuje liczbę całkowitą. Funkcja ta ma zwrócić dwuwymiarową tablicę, która w obu wymiarach ma podaną wielkość. Tablicę możesz wypełnić kolejnymi liczbami całkowitymi.

### Zadania do zrobienia w domu

### Zadanie domowe 1
Przerób funkcję z zadania 5 w taki sposób, żeby przyjmowała jeszcze trzeci argument, który ma być przekazywany przez referencję.
Jeżeli funkcja znajdzie szukany element w tablicy, to powinna zapisać indeks, pod którym wystąpił szukany element w argumencie przekazanym przez referencję.
Zobacz, co się zmieni, jeżeli przekażesz ten argument bez zastosowania referencji. Postaraj się wyjaśnić, dlaczego tak się dzieje.

### Zadanie domowe 2
Zaimplementuj algorytm sortujący tablicę o nazwie [Bubblesort][bubblesort]. Jest to jeden z łatwiejszych algorytmów. Jeżeli chcesz dowiedzieć się więcej o algorytmach sortujących (jest to dobre ćwiczenie z algorytmiki) zajrzyj [tutaj][sorting]

<!-- Links -->
[bubblesort]: http://www.tutorialspoint.com/data_structures_algorithms/bubble_sort_algorithm.htm
[sorting]: http://www.algorytm.org/algorytmy-sortowania/
