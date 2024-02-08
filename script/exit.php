<?php
	session_start();
	$_SESSION['name'] = null;

?>
<script>
	window.localStorage.clear();
	location.href = "../index.php"
</script>
<?php
	exit();
?>

