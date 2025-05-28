<?php include 'connection.php';  ?>
<table class="table" border="1px" cellpadding="10px" cellspaceing="0px">
    
<button><a href="index.php">add new</a></button>
<thead class="thead-dark">

    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age </th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
    

    <tbody>




    <?php
    $query="SELECT *FROM student";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    if($result){
        while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><a href="update.php?id=<?php
                 echo $row['id'];?>">Edit</a></td>
                 <td><a onclick="return confirm('Are you sure,you want to delete?')" href="delete.php?id=<?php
                 echo $row['id'];?>">Delete</a></td>

            </tr>
            <?php
        }
    }
    else{
    }
    ?>
 <tr>
 <td>No Record Found</td>
 </tr>
    </php
     
    ?>
     </tbody>
  
</table>