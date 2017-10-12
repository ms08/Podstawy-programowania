<?php

// IN CONSOLE:
// php -S localhost:8000
// CTRL+SHIFT+N
// firefox localhost:8000 &

$dirs = array_diff(scandir(".",1),[".","..","index.php","readme.md"]);

sort($dirs);

foreach($dirs as $dir) {
    echo "<a href='" . $dir . "'>" . $dir . "<a><br>";
}