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

$id = $_SESSION['id_user'];

$sql = "SELECT product FROM saved WHERE user = $id";
$result1 = $conn->query($sql);

$order = array();

if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
        $order[] = $row['product'];
    }
}

$sv = array();
foreach ($order as $productId) {
    $sq = "SELECT * FROM product WHERE id_product = $productId";
    $res = $conn->query($sq);

    if ($res->num_rows > 0) {
        while($r = $res->fetch_assoc()) {
            $sv[] = $r;
        }
    }
}

echo json_encode($sv);

$conn->close();
?>
