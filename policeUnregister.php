<?php
$mobile=$_GET['mobilenum'];
//$mobile = "8787878787";
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
//$sql="DELETE  from otpchecker where mono='$mobile'";
$sql = "DELETE from policedetail where  mobile = '$mobile' ";
//$result=$conn->query($sql);

if($conn->query($sql)){
    echo "Sign Up Again";
 }

}



?>