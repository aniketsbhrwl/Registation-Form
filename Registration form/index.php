<?php
session_start();
if(isset($_POST['submit']))
{

$con = mysqli_connect("localhost","root","","final") or die ("connection failed");
$pid = "pid".rand(1000,10000);
$name =$_POST['name'];
$cn =$_POST['cn'];
$en = array();
$en = $_POST['en'];
$email = $_POST['email'];
 for($i=0;$i<count($en);$i++){
	$sql ="INSERT INTO `kcmt1` (`pid`, `name`,`email`, `cn`, `en`) VALUES ('$pid', '$name', '$email', '$cn', '$en[$i]')";
	$rslt= mysqli_query($con,$sql) or die('query failed');
 }

if($rslt)
{

    $alert= "<script> alert('Record Submitted');</script>";
    echo $alert;
}
else{

    $alt= "<script> alert('Refresh page');</script>";
    echo $alt;  
}

}
?>
<!-- HTML STARTS -->
<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Custom Theme files -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- drop down menu link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1><b>Registration form</b></h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="index.php" method="post">
                    
				    <input class="text " type="email"  placeholder="Email id" required name="email">
					<input class="text email " type="text"  placeholder="Name" required name="name">
					<input class="text w3lpass" type="text"  placeholder="College Name" required name="cn">
					<div class="form-group">
					
					 <select class="js-example-basic-multiple form-control" name="en[]" multiple="multiple">
						<option disabled>Select Event</option>
						<option value="Web Designing (GECKO)">Web Designing (GECKO)</option>
						<option value="Code Breakers">Code Breakers</option>
						<option value="Info Vision (PPT)">Info Vision (PPT)</option>
						<option value="Doodle">Doodle</option>
						<option value="Adiosyncracy (Ad Mad Show)">Adiosyncracy (Ad Mad Show)</option>
						<option value="Brainca">Brainca</option>
						<option value="Ranneeti">Ranneeti</option>
						<option value="Samavesh">Samavesh</option>
					</select>
					</div>
				
					<input type="submit" value="Submit" name="submit">
				</form>
	
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
<script>
	$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>