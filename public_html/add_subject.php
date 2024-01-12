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
</head>
<body>
<?php include "assets/include/header.php"; ?>
<div class="add_object">
    <div class="container">
        <div class="content_object_block">
            <h1>Добавить Тему</h1>
            <div class="add_objects_block">
                <div>
                    <input class="add_subject_input">
                </div>

                </div>
            </div>
            <div class="add_object_block_buttons">
                <button type="button" onclick="location.href='subjects.php?class=<?=$_GET['class']?>';">Назад</button>
                <button type="button" onclick="location.href='subjects.php?class=<?=$_GET['class']?>';">Добавить</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
