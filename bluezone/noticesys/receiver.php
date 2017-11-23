<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$link_id = mysql_connect("localhost","root","ndjjhdy");
if($link_id==false){echo "连接失败";}
	else 
	echo "连接成功";

$datetime=date('Y-m-d H:i:s',time());
$statu=$_POST['statu'];
if($statu==1)
{
	echo (创建一般性记录);
	if($link_id)
	{
		mysql_select_db("index_notice_system");
		$sql="insert into `index_notice_system`.`index_notice` (title,author,time,iflink,article)values('".$_POST[title]."','".$_POST[author]."','".$datetime."','0','".$_POST[textarea]."');";
		echo($sql);
		$result=mysql_query($sql);
		if($result)
		{
			echo "记录已经成功插入<br><a href='publisher.php'>继续插入</a>";
		}
		else
			echo "执行插入SQL语句失败";
		
		mysql_close($link_id);
	}

	
}
if($statu==2)
{
	echo "mm";
}
?>
</body>
</html>
