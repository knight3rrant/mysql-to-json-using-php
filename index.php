<?php
require_once 'con.php';

$key= $_GET['key'];
$val= $_GET['value'];
$stmt = $conn->prepare("INSERT INTO data (mkey, value) VALUES (?, ?)");
$stmt->bind_param("ss", $key, $val);
$stmt->execute();
?>