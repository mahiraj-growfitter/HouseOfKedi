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

$society=$_POST['society'];
$lnd=$_POST['lnd'];
$pin=$_POST['pin'];
$add=$_POST['add'];

$sql="insert into delivery_details(Society,Landmark,Pincode,Address) values('$society','$lnd','$pin','$add')";

if($conn->query($sql)==TRUE)
{

header('Location: billexection.php'); 
}
else
{
echo"Error ".$conn->error;
}
$conn->close();
?>