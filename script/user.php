<?php session_start()?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progect";





$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$ip=$_SESSION['id_user'];
$sql = "SELECT * FROM rewiev WHERE user=$ip";
$result1 = $conn->query($sql);


$ord = array();

if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
        
        $ord[] = $row;
      

    }
}


echo json_encode($ord);

$conn->close();
?>
