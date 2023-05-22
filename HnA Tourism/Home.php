
<?php 

include 'config.php';

session_start();

error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>

.hom{
    background-image: url("green.jpeg");
  background-position: center; 
  background-repeat: no-repeat;
  background-size: cover;

  height:600px;
  

}
</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HnA Tourism | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css">


<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

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

  
	<div class="hom">

			<div style="margin-top:0px; margin-left: 0px;width: 20%; background-color: transparent; float: left;">
        <form>
		
            <label style="margin-left: 20px; color: white;color:yellow;"><b>Search For Our Links (Live Search Using Ajax)</b></label><br>
<input type="text" size="22" onkeyup="showResult(this.value)">

<div id="livesearch"></div>

</form>
</div>
</div>
     



 <div class="side">

        <br><br><h1 class="he">Get to Know Us</h1> 
       <h4>
	   “Travel is the main thing you purchase that makes you more extravagant”. We, at HnA Tourism' , swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly. We have been moving excellent encounters for a considerable length of time through our cutting-edge planned occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life, brimming with extraordinary travel encounters.
	   </h4>
  <div class="row">
    <div class="col-md-12">
        <img src="login.jpg" alt=""  width="600" height="350"">
        <img src="pic3.jpg" alt=""  width="600" height="350"">
    </div>
  </div>
       <br><br>
 </div>

    <br><br>
    
        <h1 class="he">Our latest Tour Pics </h1><br>
        
    
    <div class="row">
    <div class="col-md-12">
        <img src="bali.jpg" alt="" width="550" height="350" >
        <img src="lake.jpg" alt="" width="550" height="350" ><br><br>
        <img src="pic1.jpg" alt="" width="550" height="350">
	<img src="pic11.jpg" alt="" width="550" height="350">
    </div>
 </div>
    <div>
        <h1 class="he" style="padding: 5% 3% 0% 3%;">Enjoy your tour with us</h1>
        <h5 style="padding: 0% 5% 0% 3%;">As one of the largest and most experienced Tourism company, we warmly welcome you to our family where we will discover the the most beautiful and mesmerizing sights of nature.
		</h5></div>
 <div class="row">
    <div class="col-md-12">
        <img src="4.jpg" alt=""  width="550" height="350">
        <img src="5.jpg" alt=""  width="550" height="350">
 </div>
 </div>
    </div>
    <br><br><hr>
 
    
        <br><br>
    <footer>
        
        <a href="ContactUs.html">Contact Us</a>
        <a href="#">&copy; 2022 |  HnA</a> 
        <a href="#">  HnA Tourism website is Designed in 2022 <b></b>
        </a>
    </footer>
</body>
</html>