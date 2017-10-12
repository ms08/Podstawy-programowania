<?php

function swings(&$park) {
    $park++;
    $park = roundabout($park);
}

function roundabout($park) {
    $park *= 2;
}

$park = 17;
echo(swings($park));

/*
Co zostanie wyświetlone przez funkcję?
a. 19,
b. 37,
c. 36,
d. 74,
e. nic nie wyświetli.


Prawidłowa odpowiedź:
Uzasadnienie:

 */
