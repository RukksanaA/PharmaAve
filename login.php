<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

a{display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
   text-align: center;
}
a:hover, a:active {
  background-color: gray;
  color: white;
  }
body{
background-color: rgb(230, 141, 114);
outline-style: double;
outline-color:solid black;
padding:10px;

}

</style>
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","","user_details");
$id = $_POST['uid'];
$pass = $_POST['pass'];
$d = mysqli_query($conn,"select * from user_details where uid = $id and password = '$pass'");
$n_rows = mysqli_num_rows($d);
if($n_rows != 0)
{
    echo " logged in successfully .."
    ?> <br><br><br><a href="options.html">Click here to find the service you require<?php
}
else
    echo "Invalid login details";
mysqli_close($conn);
?>
<br>
<br>
<a href="home.html">Go to home page</a><br><br>
<div class ="about">
<h2 align="center">ABOUT US </h2><br>
<p align="center"><i> <b>PharmaAve </b>,is a
platform where users can build profiles and browse our collection of pharmaceuticals and ayurvedic goods  to find what they're looking for. After completing their profile, the consumer can browse all of our products or they can categorise our products by specific product categories to find something that is relevant to them. They can also give for lab tests like rtpcr test and know details about both the disease and medicines .Users can add each item to their cart to purchase additional things. There is also way to guide users about various diseases , their symptoms,causes ,treatment and prevention for it . Users can contact us for any enquiry using the below mentioned details .</i></p> <br><br>
<div class="contact" style="max-width:800px" id="contact">
    <h3 >CONTACT US </h3>
    
        <i class="add" style="width:30px"></i> Chennai , India<br>
        <i class="phn" style="width:30px"></i> Phone: 7358-732185 /6301-541439<br>
        <i class="mail" style="width:30px"> </i> Email: pharmaAve@gmail.com<br>
        <p ><i>Fan? Feedback? <br>Drop a note to our mail!</i></p>
        </div>
     
<br>
<br>
<footer >
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a> 
</footer>
</body>
</html>