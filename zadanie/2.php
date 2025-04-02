<?php
// 1. Создайте строку с HTML-кодом
$html = '<div>Пример <b>жирного</b> текста</div>';

// 2. Найдите все HTML-теги
$pattern = "/<[^>]+>/";
$tags = [];
preg_match_all($pattern, $html, $tags);
print('Найдены HTML-теги: ' . implode(', ', $tags[0]) . '<br>');
?>
