<meta charset="utf-8">
<?php
if($_POST['name']&&$_POST['password']&&$_POST['email'])
{
	$name=$_POST['name'];
	$passwd=md5($_POST['password']);
	$email=$_POST['email'];
	$tempsession=rand(10000000,99999999);
	$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
	//此处上方本应查验是否合法

	if($link_id)
	{
		//查验用户名是否重复
		$sqlquery=mysql_query("SELECT * FROM bluezone.user_info where username='$name';");
		$result=mysql_num_rows($sqlquery);
		if($result==0)
		{
			if($_POST['self_introduction'])
			{
				$selfintro=$_POST['self_introduction'];
				$sql=mysql_query("INSERT INTO bluezone.user_info (`username`, `password`, `tempsession`, `email`, `self_intro`) VALUES ('$name', '$passwd', '$tempsession', '$email', '$selfintro');");
			}
			else
			{
				$sql=mysql_query("INSERT INTO bluezone.user_info (`username`, `password`, `tempsession`, `email`) VALUES ('$name', '$passwd', '$tempsession', '$email');");
			}
			setcookie('id',$name,time()+43200);
		    setcookie('tmpsession',$tempsession,time()+43200);
		    mysql_close($link_id);
		    echo "<script>location.href='login.php'</script>";
		}
		else
		{
			echo "此用户名已被注册！";
			mysql_close($link_id);
		}
	}
}
?>
<form name="reg" action="" method="post">
用户ID：<br />
<input type="text" name="name" /><br/><br/>
密码：<br />
<input type="password" name="password" /><br/><br />
确认密码：<br />
<input type="password" name="password2" /><br/><br />
邮箱:<br />
<input type="text" name="email" /><br/><br/>
自我介绍(200字以内)：<br />
<textarea rows=5 name="self_introduction"></textarea><br/><br/>
<input type="submit" name="submit">
</form>
<script language="javascript" type="text/javascript">
function check() {
    if (document.getElementById('name').value == "") {
        alert("用户名不能为空！");
        document.getElementById('name').focus();
        return false;
    }
    if (document.getElementById('password').value == "") {
        alert("密码不能为空！");
        document.getElementById('password').focus();
        return false;
    } else {
        alert("提交成功");
        return true;
    }
} 
</script>