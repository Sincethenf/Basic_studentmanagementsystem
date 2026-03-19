<?php
include './config/connect.php';
if(isset($_POST['submit'])){
   $id = $_GET['updateid'];
   $name = $_POST['name'];
   $age = $_POST['age'];
   $course = $_POST['course'];

   $sql = "UPDATE student SET name='$name', age=$age , course='$course' WHERE id=$id";
   $result = mysqli_query($con, $sql);

   if($result){
      echo "<script>alert('successfuly Updated')</script>";
      echo "<script>window.open('display.php','_self')</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/css/styles.css">
   <title>Form</title>
</head>
<body>
   <div class="container">
      <form method="POST">
         <div class="form-label">
            <label>Name</label>
            <input type="text" name="name" required>
         </div>
         <div class="form-label">
            <label>Age</label>
            <input type="number" name="age" required>
         </div>
         <div class="form-label">
            <label>Course</label>
            <input type="text" name="course" required>
         </div>
         <button type="submit" name="submit">Update</button>
         <button><a href="display.php">Display</a></button>
      </form>
   </div>
</body>
</html>