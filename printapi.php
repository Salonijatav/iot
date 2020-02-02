<?php
require 'include/conn.php';
$id=$_GET['id'];
$sql = "SELECT `lcdprint` FROM `members` WHERE `id`=$id";
$result = $conn->query($sql);
$row_data=$result->fetch_assoc();
echo $row_data['lcdprint'];
?>