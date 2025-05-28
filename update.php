<?php include 'connection.php'; 
  $id=$_GET['id'];
  $select="SELECT *FROM student where id='$id'";
  $data=mysqli_query($con,$select);
  $row=mysqli_fetch_array ($data);
?>
  <div class="container my-5" >
    <form action="" method="POST">
        <input value="<?php echo $row['firstname'] ?>" type="text" name="firstname" 
        placeholder="firstname" >
     <br><br>  
      <input  type="text" name="lastname" placeholder="lastname" value="<?php echo $row['lastname'] ?>">
         <br><br>
        <input value="<?php echo $row['age'] ?>"  type="number" name="age"autocomplete="off" 
        placeholder="age"> <br><br>

        <input type="submit" name="update_btn"
        value="Update">
        <button><a href="view.php">Back</a></button>

        </form>
</div>
<?php
if(isset($_POST['update_btn'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $Update= "UPDATE student SET firstname='$firstname', lastname='$lastname',age='$age'WHERE id='$id'";
    $data=mysqli_query($con, $Update);
    if($data){
        ?>
        <script type="text/javascript">
            alert("Data Updated successfully");
            window.open("view.php","_self");
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