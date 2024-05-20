<?php
// Прочитајте го речникот
$dictionary = array_map('str_getcsv', file('recnik.csv'));

// Конвертирајте го во асоцијативен низ за полесна проверка
$dictionary = array_column($dictionary, 1);

// Земете ги POST податоците како JSON
$json = file_get_contents('php://input');

// Декодирајте ги JSON податоците во PHP објект
$data = json_decode($json);

// Земете го зборот од POST параметрите
$word = $data->word;

// Проверете дали зборот е валиден
if (in_array($word, $dictionary)) {
    echo json_encode(['validity' => 'valid']);
} else {
    echo json_encode(['validity' => 'invalid']);
}
?>
