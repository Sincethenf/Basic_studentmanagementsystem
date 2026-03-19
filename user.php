
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>
</head>
<body>
   <div class="container">
      <form method="POST" action="insert.php">
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