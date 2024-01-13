<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/media.css">
    <title>reminders</title>
</head>
<body>
<?php include "assets/include/header.php"; ?>
<div class="content">
    <div class="container">
        <div class="content_block">
            <h1>У вас есть заметка</h1>
            <div class="reminders_block">
                <div>
                    <label>
                        <input type="checkbox">
                    </label>
                    <div>Заметка 1</div>
                </div>
                <div class="back_buttons" style="margin-top: 100px">
                    <button type="button" onclick="location.href='home.php';">Подтвердить</button>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>