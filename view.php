<?php
require_once 'con.php';
header('Content-type: application/json');
$key= $_GET['key'];
$val= $_GET['value'];
$sql = "SELECT * FROM data";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
} 
echo json_encode($arr);
?>