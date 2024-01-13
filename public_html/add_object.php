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
            <h1>Добавить предмет</h1>
            <div class="add_objects_block">
                <div>
                    <div>Английский язык</div>
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
                <div>
                    <div>Русский язык</div>
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
                <div>
                    <div>Химия</div>
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
            </div>
            <div class="add_object_block_buttons">
                <button type="button" onclick="location.href='home.php';">Назад</button>
                <button>Добавить</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>