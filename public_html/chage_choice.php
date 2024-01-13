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
<div class="add_object">
    <div class="container">
        <div class="content_object_block">
            <h1>Выбор урока</h1>
            <div class="add_objects_block">
                <?php
                    $array = ['', '3Б', '', '7В', '', '9А'];
                    for ($i = 0; $i < count($array); $i++) {
                ?>
                <div>
                    <div style="max-width: 60px" class="number_lesson"><?=$i+1; ?></div>
                    <button style="width: 80%;" type="button" <?php if ($array[$i] != '') {echo("onclick=\"location.href='subjects.php?class=$array[$i]'\"");} ?>;"><?=$array[$i] ?></button>
                </div>
                <?php } ?>
            </div>
            <div class="back_buttons">
                <button>Добавить урок</button>
                <button type="button" onclick="location.href='home.php';">Назад</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>