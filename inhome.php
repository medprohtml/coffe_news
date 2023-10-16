<?php
include "cnct.php";

if(isset($_GET["id"])){
$id=$_GET["id"];
$stmt= $conn->prepare("UPDATE comand SET homee='yes' WHERE id=$id");
$stmt->execute();
header("location:admin.php");
}

?>