<?php
 $connect_server = "mysql:host=localhost;dbname=school_practice;";
 $userName = "root";
 $password = "";

 $conn = new PDO($connect_server,$userName,$password);
 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>