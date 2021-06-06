<!--     1.Делаем гостевую книгу. Алгоритм:
        1.Создайте текстовый файл, в котором будут находиться записи гостевой. Одна строка - одна запись. Заполните файл 2-3 записями.
        2.Напишите функцию, которая будет читать этот файл и возвращать массив записей гостевой книги
        3.Сделайте страницу, где гостевая книга будет отображаться. Используйте функцию из пункта 2
        4.В конце страницы сделайте форму для добавления новой записи в гостевую книгу.
        5.Скрипт-обработчик, приняв данные из формы пункта 4, должен получить массив уже имеющихся записей гостевой, добавить к этому массиву новый элемент (текст из формы) и записать полученный массив в тот же файл, разделяя элементы символом переноса строки
        6.* После окончания своей работы скрипт из пункта 5 должен перенаправить клиента на главную страницу гостевой книги
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest book</title>
</head>
<body>
<h3 align="center">Guest Book</h3>
<hr>
<?php

require_once __DIR__ . '/../functions.php';

$records = getListGuestBook(__DIR__ . '/data.txt');

foreach ($records as $record){
    echo $record . '<br>';
}
?>

<hr>
<form action="/hw4/add_guest_record.php" method="get">
    <label for="new_record" >Add new record:</label><br>
    <input type="text" id="new_record" name="new_record" placeholder="Input a new record" required><br>
    <button type="submit">Add record</button>
</form>
</body>
</html>
