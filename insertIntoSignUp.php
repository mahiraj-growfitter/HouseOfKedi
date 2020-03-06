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

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$email=$_POST['email'];
$user=$_POST['user'];
$pd=($_POST['pd']);
$rpd=$_POST['rpd'];

$sql="insert into sign_up(FirstName,LastName,PhoneNo,Address,EmailID,Username,Password,ReEnterPassword) values('$fname','$lname','$phone','$add','$email','$user','$pd','$rpd')";

if($conn->query($sql)==TRUE)
{
header('Location: Homepage.html');
}
else
{
echo"Error ".$conn->error;
}
$conn->close();
?>