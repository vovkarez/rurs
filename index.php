<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/index.css">
<?php include "header.php" ?>
<body>
   
<div class="al">
    <div class="boy">


        <form method="$_POST" >
            <label for="log" class="b">Выберите страну:</label>
            <select id="selcountry" class="b">

                <option value="россия">Россия</option>

                <option value="америка">Америка</option>

                <option value="китай">Китай</option>

                <option value="франция">Франция</option>

                <option value="индия">Индия</option>

                <option value="казахстан">Казахстан</option>

            </select>
<br>
            <label for="log"class="b">Выберите время приема пищи:</label>
            <select id="selecttime" class="b">

                <option value="завтрак">завтрак</option>

                <option value="обед">обед</option>

                <option value="ужин">ужин</option>

                <option value="перекус">перекус</option>



            </select>

        </form>
        <button class="fi" onclick="sel(event)">поиск</button>
        <div class="order">

        </div>


    </div>




</div>
</body>
<script src="script/que.js"></script>

</html>