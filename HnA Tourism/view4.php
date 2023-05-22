<?php 

include ('config.php');
session_start();
error_reporting(0);
        $no_tourist = $_POST['no_tourist'];
 
        $res = mysqli_query($conn , "SELECT * FROM booking WHERE no_tourist='$no_tourist'")
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            table ,tr ,th, td{
                border:  1px solid black;
            }
        </style>
        <meta charset="UTF-8">
        <title>HnA_tourism</title>
<link rel="stylesheet" href="check.css">
    </head>
    <body>
	<div class="con">
<form method="post" action="">
   <h2> Search by no_tourist: </h2>
    <input type="text" name="no_tourist" placeholder="Enter no_tourist">
    <input type="submit" name="submit" value="Find">
    
</form><br><br>
    <table width="100%">

        <tr>
            <th>city</th>
            <th>destination</th>
            <th>dates</th>
            <th>no_tourist</th>
            <th>package</th>

        </tr>
<?php
while($row = mysqli_fetch_assoc($res)){
        echo  "<tr>";
        echo  "<td>$row[city]</td>";
        echo  "<td>$row[destination]</td>";
        echo  "<td>$row[dates]</td>";
        echo  "<td>$row[no_tourist]</td>";
        echo  "<td>$row[package]</td>";

        echo  "</tr>";
}
?>





    </table>

</div>
<a href="check.html"><h2 style="color:yellow; text-align:center;">Search Again</h2></a>
</body>
</html>

