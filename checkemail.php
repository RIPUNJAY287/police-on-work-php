<?php
$mobile=$_GET['mobile'];
$for = $_GET['for'];
$hostname="localhost:3307";
$dbusername="root";
$dbpassword="";
$dbname="police_on_work";
$count=0;

if($for == "user")
  $mobiledata  = "userdetail";
else 
  $mobiledata =  "policedetail"; 


$conn=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
echo "Connect error";
}
else{
$sql="SELECT * FROM $mobiledata  WHERE mobile='$mobile' ";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
$count++;
}
echo $count;
}
?>