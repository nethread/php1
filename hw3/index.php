<!--     1. Напишите программу-калькулятор
        1.Форма для ввода двух чисел, выбора знака операции и кнопка "равно"
        2.Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт, который их примет и выведет
		выражение и его результат
        3.* Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP,
		введенные числа останутся в input-ах, а результат появится после кнопки "равно"
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<?php

if(isset($_GET['fNumber']) && isset($_GET['sNumber'])){
    if(is_numeric($_GET['fNumber']) && is_numeric($_GET['sNumber']) && 0 != $_GET['sNumber']){

        $fNumber = $_GET['fNumber'];
        $sNumber = $_GET['sNumber'];
        $sign = $_GET['sign'];

        switch ($sign){
            case '+':
                $result =  $fNumber + $sNumber;
                break;
            case '-':
                $result =  $fNumber - $sNumber;
                break;
            case '*':
                $result =  $fNumber * $sNumber;
                break;
            case '/':
                $result =  $fNumber / $sNumber;
                break;
        }
    }
}

?>
<form action="/hw3/" method="GET">
    <input type="number" name="fNumber" placeholder="First number" required value="<?php echo $_GET['fNumber']; ?>">
    <select name="sign" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="sNumber" placeholder="Second number" required value="<?php echo $_GET['sNumber']; ?>">
    <button type="submit">=</button>
    <?php  if(isset($result)){ echo $result; } ?>
</form>
</body>
</html>