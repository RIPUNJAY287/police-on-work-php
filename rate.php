<?php
$rate=$_GET['rate'];
$mobile=$_GET['mobile'];
 $hostname="localhost";
 $dbusername="id16113095_ripunjay";
 $dbpassword="U&OfH]l?hdH09MV9";
 $dbname="id16113095_police_on_work";
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