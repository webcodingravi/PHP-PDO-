<?php
 include("database/config.php");
 $id = $_GET['eid'];

$sql = $conn->prepare("SELECT * FROM student WHERE id = ?");
 $sql->execute(array($id));
$signleStudent = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach($signleStudent as $student) {
    $name = $student['name'];
    $email = $student['email'];
    $age = $student['age'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
 <h1>Update Student</h1>
 <hr>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo $id ?>"> <br><br>
 <input type="text" name="name" value="<?php echo $name ?>"> <br><br>
 <input type="text" name="email" value="<?php echo $email ?>"> <br><br>
 <input type="text" name="age" value="<?php echo $age ?>"> <br><br>
  <button type="submit" name="update">Update</button>

</form>

    
</body>
</html>




<?php
if(isset($_POST['update'])) {
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);

   $sql = $conn->prepare("UPDATE student SET name = ?, email = ?, age = ? WHERE id = ?");
   if($sql->execute(array($name,$email,$age,$id))) {
     header("Location:index.php");
   }else{
    echo "Student Not Updated";
   }

}

?>