<?php
$id=$_GET['find'];
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