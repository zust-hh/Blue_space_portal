<meta charset="utf-8">
<script language="javascript" type="text/javascript">
function jump_to_index()
{window.location='../index.php';}
function jump_to_reg()
{window.location='reg.php';}
</script>
<?php
if($_GET['out'])
{   //用于注销cookies
    setcookie('id',"",time()-100,"/");
    setcookie('tmpsession',"",time()-100,"/");
    echo "<script>location.href='login.php'</script>"; //因为cookies不是及时生效的，只有你再次刷新时才生效，所以，注销后让页面自动刷新。
}
else
{
if($_POST['name']&&$_POST['password']) //如果变量用户名和密码存在时，在下面设置cookies
{   
	//进行数据库查询
	$usname=$_POST['name'];
	$pswd=md5($_POST['password']);
	$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
	mysql_query("SET NAMES UTF8"); 
	if($link_id)
	{
		//mysql_select_db("bluezone");//不用也行
		$sqlquery=mysql_query("SELECT * FROM bluezone.user_info where username='$usname' AND password='$pswd';");
		$result=mysql_num_rows($sqlquery);
		
		if($result==0)
		{
			mysql_close($link_id);
			setcookie('id',"",time()-100,"/");
    		setcookie('tmpsession',"",time()-100,"/");
			echo "<script>alert('用户名或密码错误');</script>";
		}
		else
		{
			$tempsession=rand(10000000,99999999);
			$sqlupdate=mysql_query("UPDATE bluezone.user_info SET tempsession='$tempsession' WHERE username='$usname';");
    		setcookie('id',$_POST['name'],time()+43200,"/");
    		setcookie('tmpsession',$tempsession,time()+43200,"/");
    		mysql_close($link_id);
    		echo "<script>location.href='login.php'</script>"; //让cookies及时生效
		}
	}
	//用于设置cookies
}
if($_COOKIE['id']&&$_COOKIE['tmpsession'])
{   
	$cookie_id=$_COOKIE['id'];
	$cookie_tmpsession=$_COOKIE['tmpsession'];
    echo "receive cookie id=$cookie_id $cookie_tmpsession";
	$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
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
			echo "<script>alert('无效的账户，请重新登录');</script>";
			echo '<form action="" method="post">
用户ID：
<input type="text" name="name" /><br/><br/>
密码：
<input type="password" name="password" /><br/><br />
<input type="submit" name="submit">
</form>';
		}
		else
		{
			$row=mysql_fetch_array($sqlquery);
			$lastt=strtotime($row[lasttime]);
			$time_diff=time()-$lastt;
			if($time_diff<43200)
			{
				$tempsession=rand(10000000,99999999);
				$sqlupdate=mysql_query("UPDATE bluezone.user_info SET tempsession='$tempsession' WHERE username='$cookie_id';");
			    setcookie('id',$cookie_id,time()+43200,"/");
			    setcookie('tmpsession',$tempsession,time()+43200,"/");
			    mysql_close($link_id);
			    //cookies设置成功后，用于显示cookies
			    echo "登录成功！<br />用户名：".$_COOKIE['id']."<br/>临时识别码：".$_COOKIE['tmpsession'];
			    echo "<br />";
			    echo "<a href='login.php?out=out'>注销cookies</a>";
			    echo "<script>location.href='../index.php'</script>";  //双引号内，如果再有引号，需要用单引号。
			}
			else
			{
				mysql_close($link_id);
			setcookie('id',"");
    		setcookie('tmpsession',"");
			echo "<script>alert('过期的账户，请重新登录');</script>";
			echo '<html>
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <link rel="stylesheet" href="../css/entry.css" type="text/css">
    <link rel="stylesheet" href="../css/cssreset.css" type="text/css">
</head>
<body>
<div class="denglu">
	<a href="../index.php">
    <div class="logo">
        <h1>蓝色空间</h1>
    </div>
    </a>
    <div class="agent">
            <h1 class="agenthead">
                用户登录
            </h1>
			<form action="" method="post">
            <div class="">
                <div class="yhmmm">
                    用户名
                </div>
                <input type="text" name="name" maxlength="50" class="admin">
                <div class="yhmmm">
                    密码
                    <a href="#" style="float: right; margin-right: 25px;font-weight:normal;">忘记密码</a>
                </div>
                <input type="password" name="password" maxlength="50" class="admin">
            </div>
            <input type="submit" name="submit" value="登录" class="denglubutton" style="color: black">
            </form>
            <div class="zhong">
                <p class="xyh">空间新用户？</p>
            </div>
            <input type="button" value="加入我们" class="zhucebutton" onclick="jump_to_index();" style="color: black">
    </div>
</div>
<div class="foottt">
    <p align="center">蓝色空间 版权所有</p>
</div>
</body>
</html>';
			}
		}
	}
}

else
echo '<html>
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <link rel="stylesheet" href="../css/entry.css" type="text/css">
    <link rel="stylesheet" href="../css/cssreset.css" type="text/css">
</head>
<body>
<div class="denglu">
    <div class="logo">
        <h1>蓝色空间</h1>
    </div>
    <div class="agent">
            <h1 class="agenthead">
                用户登录
            </h1>
			<form action="" method="post">
            <div class="">
                <div class="yhmmm">
                    用户名
                </div>
                <input type="text" name="name" maxlength="50" class="admin">
                <div class="yhmmm">
                    密码
                    <a href="#" style="float: right; margin-right: 25px;font-weight:normal;">忘记密码</a>
                </div>
                <input type="password" name="password" maxlength="50" class="admin">
            </div>
            <input type="submit" name="submit" value="登录" class="denglubutton" style="color: black">
            </form>
            <div class="zhong">
                <p class="xyh">空间新用户？</p>
            </div>
            <input type="button" value="加入我们" class="zhucebutton" onclick="jump_to_reg();" style="color: black">
    </div>
</div>
<div class="foottt">
    <p align="center">蓝色空间 版权所有</p>
</div>
</body>
</html>';
}
?>


