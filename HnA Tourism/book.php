<?php
include 'config.php';
    session_start();
    error_reporting(0);
    if(isset($_POST['submit'])){
        $city = $_POST['city'];
        $destination = $_POST['destination'];
        $dates = $_POST['dates'];
        $no_tourist = $_POST['no_tourist'];
        $package = $_POST['package'];        

        $result = mysqli_query($conn , "INSERT INTO booking ( city ,destination,dates,no_tourist,package) VALUES ('$city','$destination' , '$dates' , '$no_tourist','$package')")
            or die("data Not Inserted");
            if(!empty($result)){
                header('Location: welcome.html');
            }

    }

    else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
html,body{height:100%;
width:100%
}

body{
  background-image: url("green1.jpeg");
 background-size: 100%;
  background-position: center; 
background-repeat: no-repeat;
 
  }
.container
{
	
	
	margin-left: 10%; 
	 margin-right: 10%;
	 
	text-align:center;
	 margin-top: -30px;
	height:520px;
	border-radius:20%;
	 background-color:	#E4F78F;
	 
}

nav a{
    text-decoration: none;
    color: rgb(255, 255, 255);
    padding: 2%;
    text-align: center;
    float: left;
}

nav{
    background-color: rgb(0, 100, 0);
    overflow: hidden;
    width: 100%;
}

nav a:hover{
    color: rgb(187, 187, 187) ;
}




footer {
    background-color: #333;
    overflow: hidden;
	margin-top:45px;
	width:700px;
	margin-left:130px;
	margin-right: -170px;
}


footer a {
    text-decoration: none;
    padding: 20px;
    text-align: center;
    float: left;
    color: white;
	
	
}

#form{
    margin-left: 300px; 
	 margin-right: 300px; 
	
   margin-top: 0px;
    border-radius: 15%;
    padding-top: 0px;
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HnA Tourism | Bookings</title>
	   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head>
 

<body>

<div class="row">
    <div class="col-md-12">
        <nav>
  <a href="Home.php"><b style="font-family: Cursive;">HNA Tourism</b></a>
        <a href="Home.php">Home</a>
        <a href="ContactUs.php">Contact</a>
        <a href="About.html">About</a>		
       <a href="book.php">Book Tour </a>
       <a href="check.html">Search Bookings</a>
        <a href="index.php">Login</a>  
        <a href="logout.php">Logout</a>
        
    </nav>
    <div class="hom">
        </div>
        </div>
        </div>
	<br><br>
	        <div class="row">
            <div class="col-md-6" id= "form">
<div class="container">
   <form action="" method="post">
        <br>
        <h2 style="text-decoration: text-align: left;">Book your Tour</h2><br>

            <label for= "city"><h4 style="width:200px"> Enter your city     </h4></label>
            <input list="origins" name="city" placeholder="From" style="width: 120px; height: 30px;" required>
                <datalist id="origins">
                    <option value="Lahore">
                </datalist><br>
            <label for= "destination"><h4 style="width:200px">Enter the Destination</h4></label>
              <input list="destinations" name="destination" placeholder="To" style="width: 120px; height: 30px;" required>
                <datalist id="destinations">
                    <option value="Murree">
                    <option value="Naran">
                    <option value="Kaghan">
                    <option value="Swat">
                    <option value="Skardu">
                </datalist>
        <br>
            <label for ="dates"><h4 style="width:200px">Select the Date</h4></label>
            <input type="date" name="dates"; style="width: 120px";><br>
            <label for = "no_tourist"><h4 style="width:200px">Select total no of tourists</h4></label>
            <input type="number" name="no_tourist" placeholder="Eg. 5" style="width: 120px; height:30px;" required><br>
        
            <label for= "package"><h4 style="width:200px">Select your Package</h4></label>
                <select name="package" style="width: 120px;height: 30px;">
                  <option value="economy">Economy</option>
                  <option value="business">Business</option>
                </select><br><br>
       <input type="submit" name="submit" value="Book Your Tour" style="margin-left: 50px; height: 30px; width: 180px; border-radius: 75px; background-image: linear-gradient(to right,yellow, green); color: white;">

      </form>
   </div>
     
	    <footer style="width:1000px; float:right">
        
        <a href="ContactUs.php">Contact Us</a>
        <a href="#">&copy; 2022 |  HnA</a> 
        <a href="#">  HnA Tourism website is Designed in 2022
        </a>
    </footer>

</body>
</html>
<?php } ?>
	
	