 <?php
 include("database/config.php");

 if(isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);
   $sql = $conn->prepare("INSERT INTO student(name,email,age) VALUE(?,?,?)");
   if($sql->execute(array($name,$email,$age))) {
     header("Location:index.php");
   }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
<h1>Add Student</h1>
<hr/><br>
<form action="" method="POST">
 <input type="text" name="name" placeholder="Please Enter Your Name"> <br><br>
 <input type="text" name="email" placeholder="Please Enter Your Email"> <br><br>
 <input type="text" name="age" placeholder="Please Enter Your Age"> <br><br>
  <button type="submit" name="submit" value="submit">Submit</button>

</form>


    
</body>
</html>
