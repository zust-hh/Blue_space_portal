<meta charset="utf-8">
<?php
	include("logincheck.php");
	if(logincheck()==true)
		echo "login succeed";
	else if(logincheck()==false)
		echo "no login";
	//很好
?>