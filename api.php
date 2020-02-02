<?php
require 'include/conn.php';
$id=$_GET['id'];
$sensor =$_GET['sensor'];
$sql = "UPDATE members SET sensor=$sensor WHERE id=$id";
$result = $conn->query($sql);
$sql = "SELECT `sw1`, `sw2`, `sw3` FROM `members` WHERE `id`=$id";
$result = $conn->query($sql);
$row_data=$result->fetch_assoc();
echo $row_data['sw1'].$row_data['sw2'].$row_data['sw3'] ;
?>