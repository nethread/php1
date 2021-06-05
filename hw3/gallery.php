<!--
    2.Создайте примитивную фотогалерею из двух страниц
        1.Пусть на главной странице галереи выводятся 3-4 изображения
        2.Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер изображения
        3.На странице image.php вы по номеру понимаете, какое изображение вывести в браузер и выводите его.
		Я ожидаю, что для этого пункта программы вы создатите массив вида [1 => 'cat.jpg', 2=>'dog.jpg', ... ],
		однако вы можете предложить и другое решение.
		Кстати, этот же массив вы используете и в пункте 1 - для вывода изображений!
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

    require_once __DIR__ . '/../functions.php';

        foreach (getGallery() as $num => $image){
    ?>
            <a href="/hw3/image.php?id=<?php echo $num?>">
                <img src="/hw3/images/<?php echo $image; ?>" alt="" width="200" height="200">
            </a>
    <?php
        }
    ?>
</body>
</html>
