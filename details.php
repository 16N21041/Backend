<?php session_start();
  include_once("connection3.php");
  if(!isset($_SESSION['email'])){
      header("location:index.php");
  }
?>
<?php
if(isset($_SESSION['email']))
{
 $sql = "select * from `data`;";
 $result = $conn3->query($sql);
 ?>
 <table border="1px" style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Team</th>
        <th>Position</th>
        <th>Height</th>
        <th>Weight</th>
        <th>Age</th>
    </tr>
<?php
   if($result->num_rows > 0)
   {
       $row = mysqli_fetch_assoc($result);
       while($row)
       {?>
            <tr>
                <td><?php echo $row['ID']?></td>
                <td><?php echo $row['Name']?></td>
                <td><?php echo $row['Team']?></td>
                <td><?php echo $row['Position']?></td>
                <td><?php echo $row['Height']?></td>
                <td><?php echo $row['Weight']?></td> 
                <td><?php echo $row['Age']?></td>
                <td><input type="button" onclick="editRecord(this.id)" value="Edit" id="<?php echo $row['ID'];?>"</td>   
            </tr>
        <?php $row = mysqli_fetch_assoc($result);
       }
    }
}?>
</table>
</form>
    <script>
        function editRecord(id)
        {
            if(confirm("Are you sure, you want to edit the record?"))
            {
                window.location.href = "edit.php?id="+id;   
            }
        }
    </script>
<h3 style="font-weight: bold; top: 1%; right: 5%; position: absolute;"><a href="logout1.php">Logout</a></h3>