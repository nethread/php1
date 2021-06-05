<?php

require_once __DIR__ . '/../functions.php';

$images = getGallery();

if (isset($_GET['id']) && isset($images[$_GET['id']])){
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image</title>
</head>
<body>
<img src="/hw3/images/<?php echo $images[$_GET['id']]; ?>" alt="">
</body>
</html>
<?php
}else{
    echo 'Picture not found';
}
?>