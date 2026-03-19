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
      echo "<script>window.open(_self)</script>";
   }
}
?>