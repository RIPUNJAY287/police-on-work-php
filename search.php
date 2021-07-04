<?php
$id=$_GET['find'];
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
$sql="SELECT * from user_complain where Complain_Id = '$id' ";
$result=$conn->query($sql);
$rows = mysqli_fetch_array($result);
//echo $rows;
if($rows     != null)
{ 
  echo "Yes";

}
else{
    echo "No";
};
}
?>