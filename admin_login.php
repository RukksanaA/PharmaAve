<html>
<head>
<title>admin page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

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
$id = $_POST['id'];
$pass = $_POST['pass'];
$d = mysqli_query($conn,"select * from admin_login where id=$id and pass='$pass' ");
$n_rows = mysqli_num_rows($d);
if($n_rows != 0)
{
    echo " logged in successfully .."
    ?> <br><br><br><a href="options_admin.html">Click here to find the service you require<?php
}
else
    echo "Invalid login details";
mysqli_close($conn);
?>
<br>
<br>
<a href="home.html">Click here to go to the home page</a><br>
<br>
<div class ="about">
<h2 align="center">ABOUT US </h2><br>
<p align="center"><i> <b>PharmaAve </b>,is a
platform where users can build profiles and browse our collection of pharmaceuticals and ayurvedic goods  to find what they're looking for. After completing their profile, the consumer can browse all of our products or they can categorise our products by specific product categories to find something that is relevant to them. They can also give for lab tests like rtpcr test and know details about both the disease and medicines .Users can add each item to their cart to purchase additional things. There is also way to guide users about various diseases , their symptoms,causes ,treatment and prevention for it . Users can contact us for any enquiry using the below mentioned details .</i></p> <br><br>


</body>
</html>

