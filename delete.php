<?php
include './config/connect.php';
if(isset($_GET['deleteid'])){
   $id=$_GET['deleteid'];

   $sql = "DELETE FROM student WHERE id=$id";
   $result = mysqli_query($con, $sql);
   if($result){
      echo "<script>alert('Deleted successfuly!')</script>";
      echo "<script>window.open('display.php','_self')</script>"; 
   } else {
      die("Attempt Failed: " . mysqli_error($con));
   }
}

?>