<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/fot.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "header.php" ?>
    <div class="db">
        <div class="container">

            <div class="nam">ваше имя:<br> <?php echo $_SESSION['name'] ?></div>

<form action="otz.php" class="up">
            <button class="up" href="otz.php">написать отзыв<br></button>
</form>
            <div class="part">
                <div class="t">Укажите ваши параметры</div><br>
                <form action="" class="par" method="$_POST">
                    <label for="parm">Вы вегетарианец?</label>
                    <select id="veget">

                        <option value="да">да</option>
                        <option value="нет">нет</option>

                    </select>
                    <br>
                    <label for="parm">Вы диабетик?</label>
                    <select id="diabet">

                        <option value="да">да</option>
                        <option value="нет">нет</option>

                    </select><br>
                    <label for="alrg">Есть ли у вас алергия?<br></label>
                    <select id="query">

                        <option value="да">да</option>
                        <option value="нет">нет</option>

                    </select>
                    <input type="text" id="alerg"><br>
                    <button class="b" onclick="prm(event)">отправить</button>

                </form>
            </div>
                <script src="script/param.js"></script>

                <div class="or">
                    <script src='script/sv.js'></script>
                </div>


                <div class="order">
                    
                    <script src='script/user.js'> </script>
                </div>
            </div>

        </div>


       
    </div>
</body>

</html>