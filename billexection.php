<!DOCTYPE html>
<html>
<head>
<title> bill execution </title>
</head>

<link rel="stylesheet" type="text/css" href="ext.css">
<style>

div.abc
{
height:400px;
border: solid black;
width:300px;
font-family:Bank Gothic Lt BT;
transform:scale(2px,2px);
}

div.abc.hover
{
transition-duration:0.5s;
}
div.gallery
{
margin:3px;
}

</style>


<body>

<div class="two">
<div class="head">
<img src="houseofkedi.jpg" height="70px" width="70px">
<ul class="one">
<li><h1>HOUSE OF KEDI</h1></li>
<div class="nav">
<li ><a href="Login.html">Login</a></li>
<li><a href="Help.html">Help</a></li>
<li><a href="Contact.html">Contact</a></li>
<li><a href="about.html">About us</a></li>
<li><a href="Homepage.html">Home</a></li>
</div>
</ul>
</div>
</div>

<br><br><br><br><br>

<h2> Cart Details:- </h2>

<br><br>

<table border="1">
	<tr>

<th><h3> Product Name </h3></th>
<th><h3> Size </h3></th>
<th><h3> Quantity </h3></th>
<th><h3> Price </h3></th>
<th><h3> Total </h3></th>
	
	</tr>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="houseofkedi";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}

$sql = "SELECT ProductName, Size, Quantity, Price, Total from cart";
$result = $conn-> query($sql);

if($result-> num_rows > 0)
{
while($row = $result-> fetch_assoc())
{
echo "<tr><td>". $row["ProductName"] . "</td><td>" . $row["Size"] . "</td><td>". $row["Quantity"] . "</td><td>" . $row["Price"] . "</td><td>" . $row["Total"] . "</td></tr>";
}
}

?>

</table>

 
<button class="one">
<a href="transaction.html">
Mode Of Payment
</a>
</button>


</body>
</html>