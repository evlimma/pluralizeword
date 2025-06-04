<?php

use evlimma\PluralizeWord\PluralizeWord;

require __DIR__ . '../../vendor/autoload.php';

echo PluralizeWord::format(1, 'pão') . "<br>";           // 1 pão

$plural = new PluralizeWord();
echo $plural->format(2, 'pão') . "<br>";                 // 2 pães
echo $plural->format(1, 'animal') . "<br>";              // 1 animal
echo $plural->format(3, 'animal') . "<br>";              // 3 animais
echo $plural->format(1, 'flor', false) . "<br>";         // flor
echo $plural->format(4, 'flor', false) . "<br>";         // flores
echo $plural->format(2, 'irmão') . "<br>";               // 2 irmãos