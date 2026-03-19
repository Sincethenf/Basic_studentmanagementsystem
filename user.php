<?php
include './config/connect.php';
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $age = $_POST['age'];
   $course = $_POST['course'];

   $sql = "INSERT INTO student(name, age, course) VALUES ('$name','$age','$course')";
   $result = mysqli_query($con, $sql);

   if($result){
      echo "<script>alert('successfuly inputed')</script>";
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
            <input type="text" name="name">
         </div>
         <div class="form-label">
            <label>Age</label>
            <input type="number" name="age">
         </div>
         <div class="form-label">
            <label>Course</label>
            <input type="text" name="course">
         </div>
         <input type="submit" name="submit">
      </form>
   </div>
</body>
</html>