<?php
require 'include/conn.php';
$sensor =$_GET['sensor'];
$sql = "INSERT INTO graph (sensorvalue)
VALUES($sensor)";
$result = $conn->query($sql);
$delete='DELETE FROM graph WHERE id IN (SELECT id FROM (SELECT id from graph order by id DESC LIMIT 25,1000)x)';
$result = $conn->query($sql);
?>


