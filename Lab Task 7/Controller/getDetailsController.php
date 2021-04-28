<?php
require_once '../Model/db_connect.php';
$mysqli = new mysqli("localhost", "root", "", "teacherf_db");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT DETAILS  FROM `studentsinfo` WHERE USERNAME = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $details);
$stmt->fetch();
$stmt->close();

echo "$details";
?>
