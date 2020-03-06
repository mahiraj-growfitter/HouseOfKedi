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

$qty=$_POST['qty'];
$size=$_POST['size'];
$price=100;
$str="Oceans Blossom Relaxed fit";
$total= $qty*$price;



$sql="insert into cart(ProductName,Size, Quantity,Price,Total) values('$str','$size','$qty','$price','$total')";

if($conn->query($sql)==TRUE)
{

header('Location: imgdetails.html'); 


}
else
{
echo"Error ".$conn->error;
}
$conn->close();
?>