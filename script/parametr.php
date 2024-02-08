<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progect";

$veg=$_POST["veget"];
$diab=$_POST["diabet"];
$gue=$_POST["que"];
$aler=$_POST["alerg"];

$name=$_SESSION["id_user"];





// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
$sq="SELECT * FROM user WHERE id_user='$name' ";
$firs = $conn->query($sq);
$object =0;
// var_dump($firs->fetch_all());

if ($firs->num_rows > 0) {
    while($row = $firs->fetch_assoc()) {
        $object = $row['id_user'];
    }
}
    if($name===$object){
        $sql= "UPDATE user SET  veget='$veg', diabet='$diab', alrg='$aler' WHERE id_user='$name'";
        if ($conn->query($sql) === TRUE) {
    
         
            $response = array("success" => true, "message" => "победа",);
        } else {
            $response = array("success" => false, "message" => "Ошибка при записи данных в базу данных: " . $conn->error);
        }
    }else{
        $sql= "INSERT INTO user (veget,diabet,alrg) VALUES ('$veg','$diab','$aler')";
        if ($conn->query($sql) === TRUE) {
            $response = array("success" => true, "message" => "победа");
        } else {
            $response = array("success" => false, "message" => "Ошибка при записи данных в базу данных: " . $conn->error);
        }
    }
echo json_encode($response);
$conn->close();
?>