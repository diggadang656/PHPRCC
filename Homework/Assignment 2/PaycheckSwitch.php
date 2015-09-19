<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<!-- Dany Dang
		Paycheck Switch
		9.16.15 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paycheck Calculation</title>
</head>

<body>
<?php
    //Retrieve the form values
	$wage=$_GET["wage"];
	$hours=$_GET["hours"];
	
	//Calculate the Paycheck
	switch($hours<=0){
		case true: 
		echo "<p>Invalid hours entered</p>";
		break;
		case false:
	switch($wage<=0){
		case true: 
		echo "<p>Invalid wage entered</p>";
		break;
		case false:
	switch ($hours<=20){
	   case true: 
	   $paycheck=$hours*$wage;
	   break;
	   case false:
	switch ($hours<40){
		case true: 
		$paycheck=(20*$wage)+(($hours - 20)*($wage*2));
		break;
		case false:
		$paycheck=(20*$wage)+((40-20)*($wage*2))+ (($hours - 40) * ($wage * 3));
}}}}
	//Re-Display the inputs
	echo "<p>Pay Check = $$paycheck</p>";

?>
</body>
</html>