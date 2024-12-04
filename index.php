<?php 
include('database/config.php');

$sql = $conn->prepare("SELECT * FROM student");
$sql->execute();
$getStudent = $sql->fetchAll(PDO::FETCH_ASSOC);
if(count($getStudent)) {
    echo "<a href='add.php'>Add Student</a>";
    echo "<table border='1'>";
    foreach($getStudent as $student) {
      echo "<tr>";
       echo "<td>".$student['id']."</td>",
       "<td>".$student['name']."</td>",
       "<td>".$student['email']."</td>",
       "<td>".$student['age']."</td>",
        "<td><a href='update.php?eid=".$student['id']."'>Update</a></td>",
        "<td><a href='delete.php?id=".$student['id']."'>Delete</a></td>";

      echo "</tr>";
    }
    echo "</table>";
}
?>



<?php



?>
