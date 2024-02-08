
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/auth.css">
<?php include "header.php" ?>

<body>

    <div class="bod">
        <h3>Введите данные</h3>
        <form class="auth" id="auth" method="post">
            <label for="au">имя</label><input type="text" id="nameaut" required placeholder="">
            <label for="au">пароль</label><input type="text" id="passaut" required placeholder="">
           
            <button class="sub" onclick="auto(event)">войти</button>
            <span class="error"></span>
    </div>

</body>
<script src="script/au.js"></script>
</html>