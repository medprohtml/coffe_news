<?php
session_start();
include "cnct.php"; 
$id=$_SESSION["id"];
$stmt2 = $conn->prepare("SELECT co.* FROM comand co
INNER JOIN useres us ON co.userid = us.id WHERE co.userid = '$id' ");
$stmt2->execute();
echo $stmt2->rowCount();
?>
