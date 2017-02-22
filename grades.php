<?php
print "HELLO";
print "<br>";
include ("account.php");
include ("myfunctions.php");
$dbh = mysql_connect ( $hostname, $username, $password )
	                    or die ( "Unable to connect to MySQL database" );
print "Connected to MySQL<br>";
mysql_select_db( $project );

$pwd     =  $_GET["pwd"];

if ( $pwd != "admin" ) 
{ 
	die ( "Wrong Password!" ); 
}

$user      =  $_GET["user"];
$course    =  $_GET["course"]; 
$user = mysql_real_escape_string($user);
$course = mysql_real_escape_string($course);
	
if  (Rnum($user, "") == 0){ 
	die ("User Must be registered"); 
}
	
If  (Gnum($user, $course) == 0) {	
	$c="insert into GRADES values ('$user','', '$course', '', '', '', '', '', '', '')";  
	($d = mysql_query ( $c  ) ) or die ( mysql_error() );
	print "$user was added to the GRADES database successfully";
}

if  (Gnum ($user, $course) > 0){
	if ( isset($_GET["A1use"])){
		$A1 = $_GET ["A1"];
		$A1S = $_GET ["A1S"];
		$A1 = mysql_real_escape_string($A1);
		$A1S = mysql_real_escape_string($A1S);  
		$update1 = "update GRADES set A1 = '$A1', A1S = '$A1S' where user = '$user' and course = '$course' ";
		($xupdate1 = mysql_query ($update1)) or die ( mysql_error() );  } 
	
	if ( isset($_GET["A2use"])){
		$A2 = $_GET ["A2"];
		$A2S = $_GET ["A2S"];
		$A2 = mysql_real_escape_string($A2);
		$A2S = mysql_real_escape_string($A2S);
		$update2 = "update GRADES set A1 = '$A2', A1S = '$A2S' where user = '$user' and course = '$course' ";
		($xupdate2 = mysql_query ($update2)) or die ( mysql_error() );	}
	
	$PART = $_GET["PART"];
	$PART = mysql_real_escape_string($PART);

	$update3 = "update GRADES set PART = PART + '$PART', TOTAL = A1 + A2 + PART, PERCENT = (TOTAL/150) * 100 where user= '$user' and course = '$course' ";
	($yupdate3 = mysql_query ($update3 )) or die ( mysql_error() );
	print "$user was updated in the GRADES database <br><br>";
}

$a="select * from GRADES where user = '$user' and course = '$course'";
( $b = mysql_query ( $a ) ) or die ( mysql_error() );

while ( $r = mysql_fetch_array($b) ){
    	$A1 = $r["A1"];
    	$A1S = $r["A1S"];
    	$A2 = $r["A2"];
    	$A2S = $r["A2S"];
    	$PART = $r["PART"];
    	$TOTAL = $r["TOTAL"];
    	$PERCENT = $r["PERCENT"];
}

Print ("Username: $user <br>
		course: $course <br> 
		A1: $A1 <br>
		A1S: $A1S <br>
		A2: $A2 <br>
		A2S: $A2S <br>
		TOTAL: $TOTAL <br>
		PERCENT: $PERCENT <br><br>"); 
		
print "<br><br>That's all !";

?>	
	