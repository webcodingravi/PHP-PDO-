<?php
include("database/config.php");
$id = $_GET['id'];

$sql = $conn->prepare("DELETE FROM student WHERE id = '$id'");

if($sql->execute()) {
    header("Location:index.php");
}



?>  