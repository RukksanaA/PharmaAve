<html>
<head>
<tite>labtests</title>
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
    	 background-color: white; 
  background-image: linear-gradient(-90deg,rgb(180, 180, 49),rgb(221, 157, 141));

    	
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

<body >
<?php
$conn = mysqli_connect("localhost","root","","user_details");
$id = $_POST['uid'];
$name = $_POST['name'];
$age = $_POST['age'];
$date = $_POST['date'];
$type = $_POST['type'];

$d = mysqli_query($conn,"insert into lab_tests values('$id','$name','$age','$date','$type')");
mysqli_close($conn);
echo "Your request has been added successfully and your test has been booked"
?>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="home.html">Logout</a><br>
</body>
</html>


