<?php
require_once("db1.php");
$sql = "DELETE FROM users WHERE userId='" . $_GET["userId"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>
