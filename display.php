<?php
include './config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/css/styles.css">
   <title>Display</title>
</head>
<body>
   <table>
      <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Age</th>
         <th>Course</th>
         <th>Operation</th>
      </tr>
      <?php

$sql = "SELECT * FROM student";
$result = mysqli_query($con, $sql);
if($result){
   while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $name = $row['name'];
      $age = $row['age'];
      $course = $row['course'];

      echo '<tr>
         <td>'.$id.'</td>
         <td>'.$name.'</td>
         <td>'.$age.'</td>
         <td>'.$course.'</td>
         <td>
            <button><a href="update.php?updateid='.$id.'">update</a></button>
            <button><a href="delete.php?deleteid='.$id.'">delete</a></button>
         </td>
      </tr>';
   }
}

?>
   </table>
</body>
</html>