<?php
include 'config.php';
    session_start();
    error_reporting(0);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
             

        $result = mysqli_query($conn , "INSERT INTO contactus ( name, email, subject, msg) VALUES ('$name','$email' , '$subject' , '$msg')")
            or die("data Not Inserted");
            if(!empty($result)){
                header('Location: welcome1.html');
            }

    }

    else{

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HnA Tourism | Contact</title>
    <link rel="stylesheet" type="text/css" href="Contactus.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body{
	background-image:url("green3.jpeg");
	background-size:cover;
	}
	.container
{
	margin-top:30px;
	margin-left:40px;
	height: 480px;
	width: 500px;
padding-right: 120px;
padding-left: 110px;
	background-color:#4682B4;
	
		border-radius:25%;
		text-align:center;
}

</style>
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
</div>
</div>
<div id="con" class="row">
            <div class="col-md-3"></div>
   <div class="col-md-5" id= "form">
 <div class="container">  
<form action=""  method="post">
        
        <h2>We Want to Hear from You !</h2>
        <input type="text" name="name" style="width:200px"placeholder="Write Your name" required> <br>
        <input type="email" name="email" style="width:200px"id="email" placeholder="Enter email address" required><br>
        <input type="text" name="subject"style="width:200px" placeholder="Subject" required> <br>
        <textarea name="msg" id="msg" cols="50" rows="2" placeholder="Type your message here...." style="width:250px" style="height:150px" ></textarea><br>
        <input type="submit" name="submit" value="Submit" style="width:100px; text-align:center; margin-right:60px;" required>
    </form> 
	</div>
</div>
</div>
<br><br>
    <footer>
        
        <a href="Home.html">Home</a>
        <a href="#">&copy;  2022 |  HnA</a> 
         <a href="#">  HnA Tourism website is Designed in 2022 <b></b>
        </a>
    </footer>
</body>
</html>

<?php } ?>