<?php session_start();?>
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

 $name=$_SESSION["id_user"];
$content = $_POST['data'];
$sql="INSERT INTO rewiev (content, user) VALUES ('$content','$name') ";

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true, "message" => "победа");
} else {
    $response = array("success" => false, "message" => "Ошибка при записи данных в базу данных: " . $conn->error);
}
echo json_encode($response);
$conn->close();