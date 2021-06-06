<?php

require_once __DIR__ . '/../functions.php';

$newRecord = trim($_GET['new_record']);


if(!empty( $newRecord )){

    $lines = getListGuestBook(__DIR__ . '/data.txt');
    $lines[] = $newRecord . "\n";
    $test = file_put_contents(__DIR__ . '/data.txt', $lines);
    header('Location:/hw4/');
}else{
    echo 'Введите данные...<br>';
    echo '<a href="/hw4/">Назад</a>';
}