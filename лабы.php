<?php
session_start();
include "db.class.php";
DB::getInstance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content ="witdh=device-width">
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="scripts/scripts.js"></script>
</head>
<div class = "conatainer">
<body>
<div class="panelnav">
        <a href="menu.php" class="double-border-button"><font size=4>Меню</font></a></td>
        <a href="index.php" class="double-border-button"><font size=4>Главная</font></a></td>
        <a href="лабы.php" class="double-border-button"><font size=4>Лабы по дискретке</font></a></td>
        <a href="obomne.php" class="double-border-button"><font size=4>О себе</font></a></td>
        <a href="game.php" class="double-border-button"><font size=4>Моя любимая игра</font></a></td>
        <a href="mydog.php" class="double-border-button"><font size=4>Моя собака</font></a></td>
        <a href="gallery.php" class="double-border-button"><font size=4>Галерея</font></a></td>
        <div class="avtorisator">
        <?php
    if (isset($_SESSION['auth'])) { ?>
        <div class="double-border-button1"><font size=4></font><a href="usaf.php"><?echo "Пользователь: "?></a></div>
        <div class="double-border-button1"><font size=4></font><a href="usaf.php"><?echo "".$_SESSION['name'];?></a></div>
        <div class="double-border-button1"><font size=4></font><a href="exit.php">Выход</a></div>

    <?php } else {?>
        <div class="double-border-button1"><font size=4></font><a href="registr.php">Регистрация</a></div>
        <div class="double-border-button1"><font size=4></font><a href="login.php">Вход</a></div>
    <?php } ?>
        </div>
</div>
<h1 class=mylabs> Мои лабораторнаые работы </h1>
<div class=labs>
    <a href="mldmlab1.php">Первая лабораторная работа по МЛидМ</a> <br>
    <a href="mldmlab2.php">Вторая лабораторная работа по МЛидМ</a> <br>
    <a href="mldmlab3.php">Третья лабораторная работа по МЛидМ</a> <br>
    <a href="lab4-5.php">Четвертая и пятая лабораторная работа по МЛидМ</a> <br>
</div>
<?php
    if (isset($_SESSION['auth'])) {
        $query = "SELECT * FROM `users` WHERE id=".$_SESSION['id']; ////////////вывод аватарки
        $res = DB::query($query);
        $item = DB::fetch_array($res) ?>
        <td><img src="<?=$item['avatar_name']?>" class="profilePhoto"></td>
 <?php } ?>
</body>
</html>
</div>
</div>
