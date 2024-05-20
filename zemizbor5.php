<?php
// Отворете го CSV фајлот
$file = fopen("recnik5.csv", "r");

// Генерирајте случаен број
$randomNumber = rand(1, 7248);

// Прочитајте ги линиите до случајниот број
for ($i = 0; $i < $randomNumber; $i++) {
    $line = fgetcsv($file);
}

// Затворете го фајлот
fclose($file);

// Земете го зборот од случајната линија
$word = $line[1];

// Печатете го зборот во формат што може да го користи JavaScript
echo json_encode($word);
?>
