<?php 

include ('config.php');
session_start();
error_reporting(0);
        $city = $_POST['city'];
 
        $res = mysqli_query($conn , "SELECT * FROM booking WHERE city='$city'")
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
  <h2>  Search by city: </h2>
    <input type="text" name="city" placeholder="Enter Name of City">
    <input type="submit" name="submit" value="Find">
    
</form>

<br>
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

