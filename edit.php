<?php session_start();
include_once("connection3.php");
if(isset($_SESSION['email']))
{
    $ID = $_GET['id'];
    $result = $conn3->query("select * from `data` where `ID`=$ID;");
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $Name= $row['Name'];
        $Team= $row['Team'];
        $Position= $row['Position'];
        $Height= $row['Height'];
        $Weight= $row['Weight'];
        $Age= $row['Age'];
    }
}
else
{
    header('location:index.php');
}
?>
<html>
    <body>
    <form method="POST" action="update.php">
        ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ID" value="<?php echo $ID?>" ><br><br>
        Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Name" value="<?php echo $Name?>" ><br><br>
        Team<input type="text" name="Team" value="<?php echo $Team?>"><br><br>
        Position<input type="text" name="Position" value="<?php echo $Position?>"><br><br>
        Height<input type="text" name="Height" value="<?php echo $Height?>"><br><br>
        Weight<input type="text" name="Weight" value="<?php echo $Weight?>"><br><br>
        Age<input type="text" name="Age" value="<?php echo $Age?>"><br><br>
        <input type="submit" name="submit" value="submit"><br>
</body>
    </form>
</html>

