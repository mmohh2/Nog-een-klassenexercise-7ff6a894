<?php

echo "Wie zit er in de klas?" . PHP_EOL;
$klas = readline(">");

$studenten = explode(' ', $klas);


echo "De studenten in de klas zijn:" . PHP_EOL;


foreach ($studenten as $value) {
    echo $value . PHP_EOL;
}
