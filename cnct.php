<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cofee";
try{
$conn=new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

} catch(Exception $e){
    echo $e->getMessage;
}
?>