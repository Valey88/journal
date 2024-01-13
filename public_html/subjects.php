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
<?php include "assets/php_script/script.php"; ?>
<?php include "assets/include/header.php"; ?>
<div class="content">
    <div class="container">
        <div class="content_block">
            <h1>Темы для урока</h1>
            <div class="my_subjects_block">
                <form class="my_subjects" method="GET">
                    <button type="button" onclick="location.href='attendance2.php?subject=Инструктаж по охране труда. Высокий старт.&class=<?=$_GET['class']?>';">Инструктаж по охране труда. Высокий старт.</button>
                    <button type="button" onclick="location.href='attendance2.php?subject= Развитие скоростных способностей. Прыжок с места.&class=<?=$_GET['class']?>';">Развитие скоростных способностей. Прыжок с места.</button>
                    <button type="button" onclick="location.href='attendance2.php?subject= Низкий старт – техника. Кроссовая подготовка.&class=<?=$_GET['class']?>';">Низкий старт – техника. Кроссовая подготовка.</button>
                    <button type="button" onclick="location.href='attendance2.php?subject=Инструктаж по охране труда. Высокий старт.&class=<?=$_GET['class']?>';">Прыжок с места – зачёт. Развитие специальной выносливости</button>
                </form>
                <div class="add_subjects_button">
                    <p>Добавить тему</p>
                    <button type="button" onclick="location.href='add_subject.php?class=<?=$_GET['class']?>';"><img src= "assets/img/plus.png" alt="plus"></button>
                </div>
                <div class="back_buttons" style="padding-top: 25px">
                    <button type="button" onclick="location.href='chage_choice.php';">Назад</button>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>