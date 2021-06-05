<!-- Составьте функцию вычисления дискриминанта квадратного уравнения.
Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения. -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HW1</title>
</head>
<body>
<?php
require_once __DIR__ . '/../functions.php';

$a = 1; $b = -4; $c = -5;
$d = discriminant($a, $b, $c);
echo 'Введены следующие числа: А = ' . $a . '; B = ' . $b . '; C = ' . $c . '; <br>';

if(0 == $d){
    echo 'Дискриминант равен нулю и имеет два одинаковых корня: <br>';

    $x1 = (-$b + sqrt($d)) / (2 * $a);
    echo 'X1,2 = ' . $x1 . ';';

}elseif ($d > 0){

    echo 'Дискриминант больше нуля и имеет два корня: <br>';

    $x1 = (-$b + sqrt($d)) / (2 * $a);
    $x2 = (-$b - sqrt($d)) / (2 * $a);
    echo 'X1 = ' . $x1 . '; X2 = ' . $x2 . ';';

}else{

    echo 'Дискриминант меньше нуля. Корней нет <br>';
}
?>

<!-- Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени
(null - если угадать не удалось). Вам придется самостоятельно найти нужные вам строковые функции. -->
<?php
echo '<br>';
echo getGuessGender('Александр');
?>

</body>
</html>