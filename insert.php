<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("location:index.php");
    }
    require_once "connection3.php";
    if (($h = fopen("players.csv", "r")) !== FALSE) 
    {
        $i=0;
        while (($data = fgetcsv($h, 50000, ",")) !== FALSE) 
        {		
            $result[$i] = implode(',', $data);
            $i++;
        }
        for($i=1;$i<1035;$i++)
        {
            $z[$i]=explode(',',$result[$i]);
            
        }
        for($i=1;$i<1035 ;$i++)
        {
            $Name=$z[$i][0];
            $Team=$z[$i][1];
            $Position=$z[$i][2];
            $Height=$z[$i][3];
            $Weight=$z[$i][4];
            $Age=$z[$i][5];
            echo $Name;echo $Team;echo $Position;echo $Height;echo $Weight;echo $Age;echo "<br>";
            $sql = "insert into `data`(`Name`,`Team`,`Position`,`Height`,`Weight`,`Age`) values ('$Name','$Team','$Position','$Height','$Weight','$Age');";
            if($conn3->query($sql)!=true)
            {
                echo "Error";
            }
        }
        fclose($h);
    }
?>