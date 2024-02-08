<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progect";



$country = $_POST['selcountry'];
$time = $_POST['selecttime'];
$name = $_SESSION["id_user"];

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
$sq = "SELECT * FROM user WHERE id_user=$name ";
$result = $conn->query($sq);
if ($result->num_rows > 0) {
    while($ro = $result->fetch_assoc()) {
      $v = $ro["veget"];
      $d=$ro["diabet"];
      $a=$ro["alrg"];
   
    }
  } else {
    echo "0 results";
  }

$sql = "SELECT * FROM product WHERE culture = '$country' AND dinnertime='$time' AND veget='$v' AND diabet='$d' AND alrg='$a'";
$result1 = $conn->query($sql);

$orders = array();

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $orders[] = $row;
    }
}

echo json_encode($orders);

$conn->close();
