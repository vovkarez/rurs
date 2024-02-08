<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progect";



$id = $_POST['id'];
$name=$_SESSION["id_user"];

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$sql= "INSERT INTO saved (user,product) VALUES ('$name','$id')";
  

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true, "message" => "победа");
} else {
    $response = array("success" => false, "message" => "Ошибка при записи данных в базу данных: " . $conn->error);
}

echo json_encode($response);
$conn->close();
?>