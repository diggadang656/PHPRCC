<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<!-- Dany Dang
		Paycheck if else
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
	if($hours<=0)
		echo "<p>Invalid hours entered</p>";
	else if($wage<=0)
		echo "<p>Invalid wage entered</p>";

	else if($hours<=20)
	   $paycheck=$hours*$wage;
	   
	else if($hours>20)
	   $paycheck=(20*$wage)+(($hours - 20)*($wage*2));
	   
	else if($hours>40)
	   $paycheck=(20*$wage)+((40-20)*($wage*2))+ (($hours - 40) * ($wage * 3));
	   
	
	//Re-Display the inputs
	echo "<p>Pay Check = $$paycheck</p>";
?>
</body>
</html>