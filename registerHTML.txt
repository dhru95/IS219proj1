<html>
<script>
	function confirm(){
		if(document.getElementById('pwd').value != document.getElementById('pwd2').value){
			document.getElementById('pwd2').value = "";
			document.getElementById('pwd').focus();
			document.getElementById('warn').innerHTML = "Passwords Don't Match!";
		}
		else{
			document.getElementById('warn').innerHTML = "";
		}
	}
</script>
<script>
	function checkAddress()
	{
	var result = true;
	var values= /^[0-9A-Za-z\-\,\.\s]+$/ ;
	document.getElementById("addressWarning").innerHTML = "";
	var address=document.getElementById("addresss").value;
	if (address.search(values)==-1){
		document.getElementById("addressWarning").innerHTML="<br>Enter a valid street address<br>";
			result=false
	}
	return result
}
</script>
<script>
	function checkZipcode()
	{
	var status = true;
	s = document.getElementById("zipcode").value;
	document.getElementById("zipWarning").innerHTML =   "";
	var p = /([0-9]{5})/
	if ( s.search(p) == -1)
	{
		document.getElementById("zipWarning").innerHTML = "<br>"Enter a valid zipcode <br>";
		status = false;
	}
	return status
	}
</script>
<style>
fieldset { margin:auto; width:80%; }
label    { background:yellow; float:left; width:10em;}
</style>
<form   action = "register.php"  >

<fieldset><legend>WELCOME to the REGISTRATION form.</legend>

<label for="user"> User name: </label>
<input type=text   name="user" id="user"
       autofocus="on" placeholder="This is your User Name"
	   autocomplete="off"
	   <br><br>
	 
<label for="pwd"> Password: </label>
<input type=password name="pwd"  id="pwd"
       autofocus="on" placeholder="This is your Password"
	   autocomplete="off"   
	   <br><br>
	   
<label for="pwd2"> Confirm Password: </label>
<input type=password name="pwd2"  id="pwd2"
       autofocus="on" placeholder="Enter password again"
	   autocomplete=off  required onblur="confirm()">    
	   <br><br>	

<span id="warn" style="color:red"> </span>     
	<br>	   
	   
<label for "email">Email:</label>
<input type=text name="email"   id="email"
	autocomplete=off    
	<br>
	
<input type=checkbox name= "emailrequest" id="emailrequest"> Email Request 
	<br><br>	
	
<label for "fullname">Full Name:</label>
<input type=text name="fullname"   id="fullname"
	autocomplete=off    
	<br><br>	

<label for "cell">Cell:</label>
<input type=text name="cell"   id="cell""
	autocomplete=off    
	<br><br>
	
<label for "major" >Major:</label>
<input type=text name="major"   id="major"
	autocomplete=off    
	<br><br><br>	
	
<label for  = "addresss"> Address </label> 		
<textarea name = "addresss" id = "addresss" rows="4" cols="40" onblur = "checkAddress()"> </textarea><br>
<span id="addressWarning" style="color:red"> </span>	
<br><br>	
	
<label for ="city"> City: </label>
<select name="city">
<?php
include ( "account.php" ) ;
( $dbh = mysql_connect ( $hostname, $username, $password ) )
	        or die ( "Unable to connect to MySQL database" );
//print "Connected to MySQL<br>";
mysql_select_db( $project );
$sql = mysql_query("Select * from city");
while ($r = mysql_fetch_array($sql)){
	$city = $r['name'];
echo "<option value=\"$city\">  $city  </option>";

}
?>
</select>
<br>

<label for ="state"> States: </label>
<select name="state">
<?php
include ( "account.php" ) ;
( $dbh = mysql_connect ( $hostname, $username, $password ) )
	        or die ( "Unable to connect to MySQL database" );
print "Connected to MySQL<br>";
mysql_select_db( $project );
$sql = mysql_query("Select * from states");
while ($r = mysql_fetch_array($sql)){
	$state = $r['abbrev'];
echo "<option value=\"$state\"> $state </option>";
}
?>
</select>
<br>

<label for ="zipcode"> Zipcode </label>
<input type=text name="zipcode" id="zip" onkeyup=" checkZipcode()"><br>
<span id="zipWarning" style="color:red" > </span>
<br>


<br>
<input type=submit>	
</fieldset>
</form>

<br><br>
<p><a href="registerHTML.txt">RegisterHTML</a></p>
<p><a href="registerPHP.txt">RegisterPHP</a></p>
<p><a href="myfunctionsPHP.txt">myfunctionsPHP</a></p>

<br>
<p><a href="statement.txt">Assignment 2 Statement</a></p>

</html>
