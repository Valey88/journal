<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/media.css">
    <title>index</title>
</head>
<body>
<?php include "assets/include/header.php"; ?>
<div class="content">
    <div class="container">
        <div class="content_block">
            <h1>Мои предметы</h1>
            <div class="my_objects_block">
                <div class="my_objects">
                    <button type="button" onclick="location.href='chage_choice.php';">Физкультура</button>
                </div>
                <div class="add_object_button">
                    <p>Добавить предмет</p>
                    <button type="button" onclick="location.href='add_object.php';"><img src= "assets/img/plus.png" alt="plus"></button>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>