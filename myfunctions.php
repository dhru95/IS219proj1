<?php
function Rnum($user, $email)
{

	$d="select * from REGISTERED  WHERE user='$user' or email = '$email' "; 

	//echo"<br>sql is $s<br><br>";

	$e   = mysql_query($d) or print mysql_error();;

	//echo "<br>";
	//if ( mysql_error() !="" ) echo  mysql_error() ;

	return mysql_num_rows( $t  );

}

function Gnum($user, $course)
{

	$g="select * from GRADES  WHERE user='$user' and course = '$course' "; 

	//echo"<br>sql is $s<br><br>";

	$h   = mysql_query($g) or print mysql_error();;

	//echo "<br>";
	//if ( mysql_error() !="" ) echo  mysql_error() ;

	return mysql_num_rows( $y  );

}
/*
Error in input results with joe'1 as user:
sql is select * from REGISTERED WHERE user='joe'1' or email = 'www' 

   You have an error in your SQL syntax; check the manual that corresponds 
   to your MySQL server version for the right syntax to use 
   near '1' or email = 'www'' at line 1
   Count is 

There is no PHP error - the input with single quote messes up the SQL.

So be sure to use mysql_real_escape_sting before calling this function.

*/
?>
