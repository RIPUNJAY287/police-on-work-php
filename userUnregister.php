<?php
$mobile=$_GET['mobilenum'];

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
//$sql="DELETE  from otpchecker where mono='$mobile'";
$sql = "DELETE from userdetail where  mobile = '$mobile' ";
//$result=$conn->query($sql);

 if($conn->query($sql)){
         echo "Sign Up Again";
 }

}



?>