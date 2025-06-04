<?php
require __DIR__ . '../../vendor/autoload.php';

echo formatCountedWord(1, 'pão');      // 1 pão
echo formatCountedWord(2, 'pão');      // 2 pães

echo formatCountedWord(1, 'animal');   // 1 animal
echo formatCountedWord(3, 'animal');   // 3 animais

echo formatCountedWord(1, 'flor', false); // flor
echo formatCountedWord(4, 'flor', false); // flores

echo formatCountedWord(2, 'irmão');    // 2 irmãos