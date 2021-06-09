<?php
$rate=$_GET['rate'];
$mobile=$_GET['mobile'];
$hostname="localhost:3307";
$dbusername="root";
$dbpassword="";
$dbname="police_on_work";
$conn=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
die('Connect Error');
}
else{
$sql="INSERT INTO policeratting (policesn,rate)
values('$mobile','$rate')
";
if($conn->query($sql))
{
echo"Ratting Given.";
}
else{
echo "Ratting not given.";
}
}


?>