<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/allimages.css"></link>
</head>
<body>
    <a href="index">Домашняя страница контроллера Image</a>
    <h1>Здесь будет список изображений</h1>
    <?php
    foreach($images as $image) {
        echo '<a href="one/' . $image->id_ . '"><img SRC="' . '../' . $image->directory . '" height="200" width="150" class="image"></a>';
    }
    ?>    
</body>
</html>