<?php
$from=$_GET['from'];
$to=$_GET['to'];
$msg=$_GET['msg'];
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
$sql="INSERT INTO chatmsg (fromuser,touser,msg)
values('$from','$to','$msg')
";
if($conn->query($sql))
{

}
}
?>