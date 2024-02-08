<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progect";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}


$name = $_POST['login'];
$pass = $_POST['pass'];

$getUserQuery="SELECT* FROM user WHERE name='$name' ";
$getUserResult= $conn->query($getUserQuery);

if ($getUserResult->num_rows > 0) {
    $user = $getUserResult->fetch_assoc();

    // Проверка пароля
  
        // Начало сессии и сохранение информации о пользователе
        session_start();
        $_SESSION['name'] = $user["name"];
        $_SESSION["id_user"] = $user["id_user"];


// echo $_SESSION('name');
        $response = array("success" => true, "message" => "Вход успешен." , "messageId_user" => $_SESSION["id_user"]);
    } 
 else {
    $response = array("success" => false, "message" => "Пользователь не найден.");
}


echo json_encode($response);
