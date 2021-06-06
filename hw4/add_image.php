<?php
/* 2.сделайте простейшую фотогалерею:
1.Скрипт, который выводит в браузер изображения из определенной папки на сервере
2.Форма и скрипт загрузки нового изображения в эту папку
3.Решите задачу загрузки файла от пользователя в заданное место на сервере с тем же именем файла, что он имел на компьютере пользователя.
4.* Решите задачу ограничения загрузки, например - только файлов JPEG и PNG
*/




if (isset($_FILES['new_picture']) && 0 === $_FILES['new_picture']['error']){
    if('image/png' === $_FILES['new_picture']['type'] || 'image/jpg' === $_FILES['new_picture']['type']
    || 'image/jpeg' === $_FILES['new_picture']['type']) {

        $partsOfName = pathinfo($_FILES['new_picture']['name']);
        $newName = $partsOfName['filename'] . uniqid() . '.' . $partsOfName['extension'];
        move_uploaded_file($_FILES['new_picture']['tmp_name'], __DIR__ . '/images/' . $newName);
        header('Location:/hw4/gallery.php');
    }else{
        echo 'Можно загружать картинки формата, только jpg и png...<br>';
        echo '<a href="/hw4/gallery.php">Назад</a>';
    }
}