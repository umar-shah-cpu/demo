<?php include 'connection.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
  <div class="container my-5" >
    <form action="" method="POST">
        <input type="text" name="firstname" 
    
        placeholder="firstname" autocomplete="off">
     <br><br>

      <input required type="text" name="lastname"  autocomplete="off"
        
        placeholder="lastname"> <br><br>

        <input type="number" name="age"  autocomplete="off"

        placeholder="age"> <br><br>

        <input type="submit" name="save_btn"
        value="save">
        <button><a href="view.php">View records</a></button>

        </form>
  </div>
 <?php 
 if(isset($_POST['save_btn'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $query= "INSERT INTO student(
    firstname,lastname,age) VALUES('$firstname','$lastname','$age')";
    $data=mysqli_query($con,$query);
    if($data){
        ?>
        <script type="text/javascript">
            alert("Data save successfully");
        </script>
        <?php
    }
    else
    {
        ?>
    <script type="text/javascript">
            alert("Please try again");
       <?php 
    }

 } 
 ?>
</body>
</html>