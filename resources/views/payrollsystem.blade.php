
<?php   echo "uuuuuuuuuuuuuuuuu";
?>





<!DOCTYPE html>
<html>
<head>                        <title>  SIMPLE PAYROLL SYSTEM</title>
	
	<style type="text/css"> input{font-size: 20px; padding-left: 15px; margin-left: 20px; border:2px double black;}</style>

	<script type="text/javascript">
	function dis(){
	var bb=Number(document.getElementById("b").value);
	var cc= Number(document.getElementById("c").value);
	var dd=Number(document.getElementById("d").value);
	var salary=(bb*cc*dd);  var gst=(salary*0.18); var rent=(salary*0.05);  var deduction=(gst+rent);  var net=(salary-deduction);

	document.getElementById("e").value=gst;
	document.getElementById("f").value=rent;
	document.getElementById("g").value=salary;
	document.getElementById("h").value=deduction;
	document.getElementById("i").value=net;}
</script>
	
</head>
<body> <br><fieldset   style="background-color:   #f2f2f2; border:2px double black;">
	<center><h style="color: #ff0000; font-size: 30px; "> Simple Payroll System</h></center><br>
	<center><h style="color: #cc00cc; font-size: 20px;"> Deduction of Salary</h></center>
	<big>Enter Emp Name</big> <input type="text" name="name" id="a"> <br><br><br>
	<big>Rate per hour</big> <input type="text" name="name" id="b"> <br><br><br>
	<big>Hour per day</big> <input type="text" name="name" id="c">
	<center> <big>GST 18% tax</big>	<input type="text" name="name" id="e" > </center><br><br>
	<big>No. of day worked</big> <input type="text" name="name" id="d"> 
	<center><big>Apartment Rent 5%</big><input type="text" name="name" id="f"> </center><br><br> 

	<big>Gross Salary</big> <input type="text" name="name"  id="g"> &nbsp;  &nbsp;  &nbsp;  &nbsp;
	<big>Total Deduction</big> <input type="text" name="name" id="h"> &nbsp;  &nbsp;  &nbsp;  &nbsp;
	<big>Net Salary </big><input type="text" name="name"  id="i"> <br><br>&nbsp;  &nbsp;  &nbsp;  &nbsp;
	<center><button type="button" onclick="dis();" style="background-color:  	#40ff00; font-size: 45px; border:2px double brown; cursor: pointer;"> compute</button></center>
</fieldset>
</body>
</html>
