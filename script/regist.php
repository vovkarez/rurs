<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progect";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}


$name = $_POST['name'];
$pass = $_POST['pass'];
$tel = $_POST['phone'];
$email = $_POST['email'];


$query = "INSERT INTO user (name, pass, email, phone) VALUES ('$name', '$pass', '$email', '$tel')";

if ($conn->query($query) === TRUE) {
    $res = array("success" => true, "message" => "Регистрация прошла успешно",
     "message_console"=>"Данные успешно записаны в базу данных.");
} else {
    $res = array("success" => false, "message" => "Ошибка при записи данных в базу данных: " . $conn->error);
}
echo json_encode($res);
$conn->close();