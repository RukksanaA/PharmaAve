<html>
<head>
<title>Bill page</title>
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
  background-color: orange;
  color: white;
  }

   
    body{
    	background-color: gray;
  padding-top: 50px;
  padding-bottom: 50px;
  border: 1px solid gray;
  margin: 5% auto 15% auto; 
  width: 50%;
  height:10px;
 box-shadow: 5px 5px 8px grey, 10px 10px 8px lightgrey, 15px 15px 8px white;
 align="center";  
    }
  

 </style>
</head>
<body style="background-color:rgb(202, 146, 240);">
<?php
$conn = mysqli_connect("localhost","root","","user_details");
$id = $_POST['uid'];
$name = $_POST['name'];
$ayur1 = $_POST['ayur1'];
$ayur2 = $_POST['ayur2'];
$ayur3 = $_POST['ayur3'];
$ayur4 = $_POST['ayur4'];
$pcare1 = $_POST['pcare1'];
$pcare2 = $_POST['pcare2'];
$pcare3 = $_POST['pcare3'];
$pcare4 = $_POST['pcare4'];
$hfood1 = $_POST['hfood1'];
$hfood2 = $_POST['hfood2'];
$hfood3 = $_POST['hfood3'];
$hfood4 = $_POST['hfood4'];
$nutri1 = $_POST['nutri1'];
$nutri2 = $_POST['nutri2'];
$nutri3 = $_POST['nutri3'];
$bill = ($ayur1 * 110) + ($ayur2 * 60) + ($ayur3 * 80) + ($ayur4 * 100) + ($nutri1 * 300) + ($nutri2 * 480) + ($nutri3 * 140) + ($hfood1 * 250) + ($hfood2 * 400) + ($hfood3 * 220) + ($hfood4 * 80) + ($pcare1 * 50) + ($pcare2 * 200) + ($pcare3 * 120) + ($pcare4 * 80);
$d = mysqli_query($conn,"insert into med_order values('$id','$name','$bill')");
echo "Your order has been placed successfully and the final amount is ".$bill;
mysqli_close($conn);
?>
<br>
<br>
<br>
<br>
<br>
<a href="home.html">Logout</a>
</body>
</html>