<?php
function logincheck()
{
	if($_COOKIE['id']&&$_COOKIE['tmpsession'])
	{   
	$cookie_id=$_COOKIE['id'];
	$cookie_tmpsession=$_COOKIE['tmpsession'];
	$link_id = mysql_connect("localhost","pig","23333")or die("Connect fault!");
	mysql_query("SET NAMES UTF8"); 
	if($link_id)
	{
		$sqlquery=mysql_query("SELECT * FROM bluezone.user_info where username='$cookie_id' AND tempsession='$cookie_tmpsession';");
		$result=mysql_num_rows($sqlquery);
		if($result==0)
		{
			mysql_close($link_id);
			setcookie('id',"",time()-100,"/");
    		setcookie('tmpsession',"",time()-100,"/");
			return 0;
		}
		else
		{
			$row=mysql_fetch_array($sqlquery);
			$lastt=strtotime($row[lasttime]);
			$time_diff=time()-$lastt;
			//验证管理员

			if($time_diff<43200)
			{
				$tempsession=rand(10000000,99999999);
				$sqlupdate=mysql_query("UPDATE bluezone.user_info SET tempsession='$tempsession' WHERE username='$cookie_id';");
			    setcookie('id',$cookie_id,time()+43200,"/");
			    setcookie('tmpsession',$tempsession,time()+43200,"/");
			    mysql_close($link_id);
			    if($row[ifadmin]==1)
				{
					return 2;
				}
			    return 1;
			}
			else
			{
				mysql_close($link_id);
				setcookie('id',"",time()-100,"/");
    			setcookie('tmpsession',"",time()-100,"/");
				return 0;
			}
		}
	}
	return 0;
	}
	return 0;
}
?>