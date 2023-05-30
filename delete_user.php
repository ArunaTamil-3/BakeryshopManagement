<?php
require_once("db.php");
$sql = "DELETE FROM user WHERE userId='" . $_GET["userId"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>
