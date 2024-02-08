<?php session_start(); ?>
<link rel="stylesheet" href="css/header.css">



<?php if (isset($_SESSION['name'])) : ?>
    <header class="head">
        <img src="logo.jpg">
        <form action="index.php">
            <button type="submit" class="ind" href="index.php">главная</button>
        </form>
        <form action="regis.php">
            <button class="re" type="" href="regis.php">регистрация</button>
        </form>

        <form action="user.php">
            <button class="user" href="user.php">личный кабинет</button>
        </form>



        <form action="script/exit.php" method="POST">
            <button type="submit" value="выйти" href="user.php" class="ex">выйти</button>

        </form>
    </header>
<?php else : ?>

    <header class="head">
    <img src="logo.jpg">
    <form action="index.php">
            <button type="submit" class="ind" href="index.php">главная</button>
        </form>
        <form action="regis.php">
            <button class="re" type="" href="regis.php">регистрация</button>
        </form>
    </header>
<?php endif; ?>
<script src=""></script>