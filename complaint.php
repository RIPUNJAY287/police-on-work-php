<?php
session_start();
$mobile=$_SESSION['mobile'];

?>

<?php
$complainer_name="";
$complainer_num="";
$complainer_email="";
$complainer_address="";
$complainer_city="";
$complainer_state="";
$complainer_country="";
$complainer_aga_name="";
$complainer_aga_num="";
$complainer_aga_address="";
$complainer_aga_city="";
$complainer_aga_state="";
$complainer_aga_country="";
$complaint="";
;


if(  !empty($_POST) && $_SERVER['REQUEST_METHOD']=="POST"){

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}	
	
$complainer_name=$_POST['complainer_name'];
$complainer_num=$_POST['complainer_num'];
$complainer_email=$_POST['complainer_email'];
$complainer_address=$_POST['complainer_address'];
$complainer_city=$_POST['complainer_city'];
$complainer_state=$_POST['complainer_state'];
$complainer_country=$_POST['complainer_country'];
$complainer_aga_name=$_POST['complainer_aga_name'];
$complainer_aga_num=$_POST['complainer_aga_num'];
$complainer_aga_address=$_POST['complainer_aga_address'];
$complainer_aga_city=$_POST['complainer_aga_city'];
$complainer_aga_state=$_POST['complainer_aga_state'];
$complainer_aga_country=$_POST['complainer_aga_country'];
$complaint=$_POST['complaint'];
$thana=$_POST['thana'];


 $hostname="localhost";
 $dbusername="id16113095_ripunjay";
 $dbpassword="U&OfH]l?hdH09MV9";
 $dbname="id16113095_police_on_work";
$conn=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
die('connect Error('.mysqli_connect_error().')'
   .mysqli_connect_error());
}
else
{  
 	 
   $id = rand(10000000,99999999);
   $sqll = "INSERT INTO user_complain (Complain_Id) values('$id')";
   if($conn->query($sqll))
	{

    {  
		$name = test_input($complainer_name);
		$sq = "UPDATE user_complain SET Name_of_Complainer = '$name'  where Complain_Id = '$id'";
		if($conn->query($sq)){	
		}
	}
  

  {  $number = test_input($complainer_num);
		$sq = "UPDATE user_complain
            SET Mobile = '$number'
			where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
  }
  


  {    $email = test_input($complainer_email);
	$sq = "UPDATE user_complain
            SET email = '$email'
			where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
		}
			


			{ $adress = test_input($complainer_address);
    // check if name only contains letters and whitespace
		$sq = "UPDATE user_complain
            SET Address = '$adress'
            where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
   } 
  
  {    $city = test_input($complainer_city);
		$sq = "UPDATE user_complain
            SET City = '$city'
			where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
     }


	 {    $state = test_input($complainer_state);
		$sq = "UPDATE user_complain
            SET State = '$state'
			where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
	}
  

  {$country= test_input($complainer_country);
		$sq = "UPDATE user_complain
            SET Country = '$country'
            where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
     }
   

   {  $name_aga = test_input($complainer_aga_name);
		$sq = "UPDATE user_complain
            SET Name_of_person_against = '$name_aga'
			where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
        }
    


	{    $num_aga = test_input($complainer_aga_num);
		$sq = "UPDATE user_complain
            SET Mobile_against = '$num_aga'
			where Complain_Id = '$id'";
			if($conn->query($sq)){		
						}
	}
  
     { $adress_aga= test_input($complainer_aga_address);
		$sq = "UPDATE user_complain
            SET Address_against = '$adress_aga'
            where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
     }
   
 
     {  $city_aga = test_input($complainer_city);
		$sq = "UPDATE user_complain
            SET City_against = '$city_aga'
			where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
         }
  
  
    { $state_aga = test_input($complainer_aga_state);
		$sq = "UPDATE user_complain
            SET State_against = '$state_aga'
            where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
     }
  

  {  $country_aga = test_input($complainer_aga_country);
 		$sq = "UPDATE user_complain
            SET Country_against= '$country_aga'
			where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
   }
  


    {   $comp = test_input($complaint);
		$sq = "UPDATE user_complain
            SET Details_of_complaint = '$comp'
            where Complain_Id = '$id'";
			if($conn->query($sq)){		
			}
    }
    {
      $than= test_input($thana);
    $sq = "UPDATE user_complain
            SET policesn = '$than'
			where Complain_Id = '$id'";
      if($conn->query($sq)){    
      
      }
    }   


      $complainer_name="";
      $complainer_num="";
      $complainer_email="";
      $complainer_address="";
      $complainer_city="";
      $complainer_state="";
      $complainer_country="";
      $complainer_aga_name="";
      $complainer_aga_num="";
      $complainer_aga_address="";
      $complainer_aga_city="";
      $complainer_aga_state="";
      $complainer_aga_country="";
      $complaint="";
  
      echo " <script> window.location.href = 'cases.php' </script> ";
   }
}



}


?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initil-scale=1">
	<title>details</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<script>
$(document).ready(function(){
var i = (Math.floor(Math.random()*1000000));	
document.getElementById("code").innerHTML= i;
});	
</script>
<script>
function checknumber1(){
$(document).ready(function(){
var m = document.getElementById("number1").value;
if(m.length!=10)
{
alert("Number is Wrong");
document.getElementById("number1").value="";
}
});
}
function checknumber2(){
$(document).ready(function(){
var n = document.getElementById("number2").value;
if(n.length!=10)
{
alert("Number is Wrong");
document.getElementById("number2").value="";
}
});
}

</script>	
<style>
#code{background-image:linear-gradient(red,lightblue);}

#complainant_details{
	width:45%;
	font-size:20px;
  
height:250px;

float:left;

}
#complaint_against{
width:45%;
font-size:20px;
height:250px;
margin-left:50%;

}
#cmd,#cd,#ca{
border:1px #700808;
background :#0086b3;

	font-size: 25px;
	color:white;
	font-family: arial;
	font-weight: 600;

}
td{
	width:50%;
}
input{
	width:250px;
	box-shadow:0 0 0.6px;
	font-size: 20px;
}
#complaint_details{

margin-top:50px;
width: 650px;

}
@media (max-width: 780px){
	#complaint_against{
		float:none;
		width:100%;
		margin-top: 110px;
		margin-left:0px;

	}
	#complainant_details{
		width:100%;	
		float:none;
	}
	#complaint_details{
		width:100%;
	}
}
@media (max-width: 450px){
input{
width:100%;
}

}


</style>
</head>
<body>

	<div style="font-size: 39px; font-family: arial; text-align:center;">MP POLICE</div><br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">

	<div  style="width:100%;">
		<div id="complainant_details"><div id="cd">Complainant Details</div>
		 
		 
		 <table>
         <tr><td> Name of complainant *</td><td> <input type="text" name="complainer_name"  required></td></tr>
         <tr><td> Mobile/Phone *</td><td> <input type="text" onfocusout="checknumber1();"		 id = "number1" name="complainer_num" required></td></tr>
          <tr><td>E-mail Address * </td><td><input type="email" name="complainer_email"  required></td></tr>
         <tr><td> Address * </td><td><input type="text" name="complainer_address" required></td></tr>
         <tr><td> City</td><td> <input type="text" name = "complainer_city"  required></td></tr>
           <tr><td> State</td><td> <input type="text" name="complainer_state"  required></td></tr>
         <tr><td> Country</td><td><input type="text" name = "complainer_country"  required></td></tr>
        </table>
            <br><br>


		</div>
		<div id="complaint_against"><div id="ca">Complaint Against</div>
	<table>
         <tr><td> Name of person</td><td> <input type="text" name="complainer_aga_name" required></td></tr>
         <tr><td> Mobile/Phone</td><td> <input type="text" id = "number2" onfocusout="checknumber2();" name="complainer_aga_num"  required></td></tr>
          <tr><td> Address </td><td><input type="text" name="complainer_aga_address"  required></td></tr>
         <tr><td> City</td><td><input type="text" name = "complainer_aga_city"  required></td></tr>
         <tr><td> State</td><td> <input type="text" name="complainer_aga_state" required></td></tr>
         <tr><td> Country</td><td><input type="text" name="complainer_aga_country" required></td></tr>
        </table>
            <br><br>

		
	</div>
		
	</div>
	
	
<div id="complaint_details">
	<div id="cmd">Complaint Details</div><br>
<span style="font-size:20px;">Police Station Name
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="thana"  style="font-size:20px;">
<option >Bhopal </option>
<option>Chhatarpur</option>
<option>Satna</option>
<option>Katni</option>
</select>


	<table>
<tr><td style="font-size: 20px;">Details of Complaint *</td><td > </td></tr><br>
<tr><td><textarea rows="5" style="width:220%;" name="complaint"  required></textarea></td></tr>
<tr><td></td><td><span style="font-weight:700;font-size:18px;">Enter The Code</span></td></tr><br>
<tr><td style="font-size: 20px;">Security Code * <span id = "code"> </span></td><td><input  name = "verifyCode" require  type="text" style="float:left; font-size:18px;width:40%; font-weight:700; "> &nbsp; </td></tr>
<tr><td></td><td><input type="Submit" style="outline:none;border:2px solid teal;padding-top:3px;padding-bottom:3px;padding-left:10px;padding-right:10px;margin-top:10px;border-radius:5px;background-color:teal;color:white;width:auto;" ></td></tr>
</table>

</div>
</form>
</body>
</html>