<html>
<head>
<title>Signup</title>
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

</style>
</head>
<body style="background-color:rgb(160, 211, 102);">
<?php
$conn = mysqli_connect("localhost","root","","user_details");
$id = $_POST['uid'];
$name = $_POST['name'];
$age = $_POST['age'];
$pass = $_POST['pass'];
$city = $_POST['city'];
$d = mysqli_query($conn,"insert into user_details values('$id','$name','$age','$pass','$city')");
mysqli_close($conn);
echo "Account created successfully"
?>
<br>
<br>
<a href="login.html">Login into your account</a><br>
<br>
<br>
<a href="home.html">Click here to go to the home page</a><br>
<br>
</body>
</html>
