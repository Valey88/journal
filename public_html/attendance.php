<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/media.css">
    <link rel="stylesheet" href="assets/styles/attendance.css">
    <title>index</title>
</head>
<body>
<?php include "assets/include/header.php"; ?>
<div class="content-attendance">
    <div class="container">


        <?php for ($i = 0; $i < 3; $i++) {?>
            <div class="table_heading table date_<?=$i+1;?> <?php if($i+1 != 1){echo('hide');} ?>">
                <h1>Дата <?php echo($i+3);echo('.10.23');?></h1>
                <h1>Класс: <?=$_GET['class'] ?></h1>
                <h1 style="font-size: 18px;"><?=$_GET["subject"];?></h1>
            </div>
        <?php }?>
        <div class="dropdown_filter_block">
            <button class="dropbtn" type="button" onclick="location.href='subjects.php?class=<?=$_GET['class']?> ';">Назад</button>
            <div class="dropdown dropdown_filter">
                <button class="dropbtn" onclick="filterContentClose()">Дата</button>
                <div class="dropdown-content filter">
                    <button onclick="filterContentClose()" class="filter_button" data-filter="date_1">03.10.23</button>
                    <button onclick="filterContentClose()" class="filter_button" data-filter="date_2">04.10.23</button>
                    <button onclick="filterContentClose()" class="filter_button" data-filter="date_3">05.10.23</button>
                </div>
            </div>
            <button class="dropbtn">Принять пересдачу</button>
        </div>
        <div class="tables_block">
            <?php for ($i = 0; $i < 3; $i++) {?>
                <table class="table date_<?=$i+1;?> <?php if($i+1 != 1){echo('hide');} ?>">
                    <thead>

                    <tr>
                        <th style="width: 30px">id</th>
                        <th style="width: 300px">ФИО ученика</th>
                        <th>Критерии Оценивания</th>
                        <th>Оценки</th>
                    </tr>
                    </thead>


                    <tbody>
                    <?php for ($ii = 0; $ii < 10; $ii++){ ?>
                        <tr>
                            <td><?php echo($ii+1) ?></td>
                            <td>ФИО</td>
                            <td>
                                <div class="dropdown">

                                    <select id="selectValue">
                                        <option value="Подача мяча">Подача мяча</option>
                                        <option value="Прием мяча">Прием мяча</option>
                                        <option value="Подтягивания">Подтягивания</option>
                                        <option value="Приседания">Приседания</option>
                                        <option value="Отжимания">Отжимания</option>
                                        <option value="Пресс">Пресс</option>
                                        <option value="Бег">Бег</option>
                                        <option value="Кросс">Кросс</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">

                                        <select id="selectValue">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>

                </table>
            <?php } ?>
        </div>
        <div style="display:flex; justify-content:center; margin-top: 40px">
            <button class="dropbtn" type="button" onclick="location.href='reminders_clon.php';">Завершить урок</button>
        </div>
    </div>

</div>

<script src="assets/js/attendance.js"></script>
</body>
</html>
