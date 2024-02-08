
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "header.php" ?>
    <link rel="stylesheet" href="css/reg.css">

    <div class="act">
        <a href="auth.php">Уже зарегистрированы?</a>
        <form class="ree" id="regis" method="post">
            <label class="for" for="redist">имя</label> <input type="text" id="name" required="name">
            <label class="for" for="redist"> пароль</label><input type="text" id="pass" required="name">
            <label class="for" for="redist">номер телефона </label><input type="text" id="phone" required="name">
            <label class="for" for="redist"> почта</label><input type="text" id="email" required="">
            <button class="sub" onclick="into(event)">зарегистрироваться</button>
            <span class="error"></span>
        </form>
    </div>
</body>
<script src="script/reg.js">
    
</script>


</html>