<!-- 2.сделайте простейшую фотогалерею:
1.Скрипт, который выводит в браузер изображения из определенной папки на сервере
2.Форма и скрипт загрузки нового изображения в эту папку
3.Решите задачу загрузки файла от пользователя в заданное место на сервере с тем же именем файла, что он имел на компьютере пользователя.
4.* Решите задачу ограничения загрузки, например - только файлов JPEG и PNG
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
</head>
<body>
<?php
    $images = array_diff(scandir(__DIR__ . '/images'), ['.', '..']);

    foreach ($images as $image){

        echo '<img src="/hw4/images/' .  $image . '" alt="" width="200" height="200">';

    }
?>
<hr>
<form action="/hw4/add_image.php" method="post" enctype="multipart/form-data">
    <input type="file" name="new_picture"><br>
    <button type="submit">Downalod</button>
</form>
</body>
</html>