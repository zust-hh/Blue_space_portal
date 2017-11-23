<?php
include("logincheck.php");
if(logincheck()==2)
{
	$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
	mysql_query("SET NAMES UTF8"); 
	if($link_id)
	{
		$sqlquery=mysql_query("SELECT article FROM bluezone.article where id='$_GET[art_id]';");
		$row=mysql_fetch_array($sqlquery);
		echo "$row[article]";
		mysql_close($link_id);
	}
}
?>