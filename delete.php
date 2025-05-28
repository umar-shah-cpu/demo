<?php include 'connection.php'; 
$id=$_GET['id'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data){
     ?>
        <script type="text/javascript">
            alert("Data Deleted successfully");
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