<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/otz.css">
</head>


<body>
<?php include "header.php" ?>

<div class="bod">

    <form class="ot" method="POST" class="frm">
        <label for="dt" class="dt">напишите что хотите:<br></label>
        <textarea  class="area" id="data"> </textarea><br>
        <button class="cl" value="отправить" onclick="go(event)">отправить отзыв</button>
        <span class="error"></span>
    </form>

    <script src="script/rev.js"></script>
</div>
</body>


</html>