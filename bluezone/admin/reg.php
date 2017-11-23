<head>
<meta charset="utf-8">
<title>用户注册</title>
<link rel="stylesheet" href="../css/register.css" type="text/css">
<link rel="stylesheet" href="../css/cssreset.css" type="text/css">
</head>
<?php
if($_POST['name']&&$_POST['password']&&$_POST['email'])
{
	$name=$_POST['name'];
	$passwd=md5($_POST['password']);
	$email=$_POST['email'];
	$tempsession=rand(10000000,99999999);
	$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
	mysql_query("SET NAMES UTF8"); 
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
			setcookie('id',$name,time()+43200,"/");
		    setcookie('tmpsession',$tempsession,time()+43200,"/");
		    mysql_close($link_id);
		    echo "<script>location.href='login.php'</script>";
		}
		else
		{
			echo "<font color=#ff0000>此用户名已被注册！</font>";
			mysql_close($link_id);
		}
	}
}
?>
<script language="javascript" type="text/javascript">
function submittion(){
	if(check(0)==true)
	{
		document.reg.submit();
	}
}
function check(mode) {
    if (mode==0||mode==1) {
    	if(document.getElementById('name').value == ""){
    		alert("用户名不能为空！");
        	document.getElementById('name').focus();
        	return false;
    	}
    	else
    	{
    		var str_name=document.getElementById('name').value;
    		if(str_name.length<3){
    			alert("用户名太短！");
    			return false;
    		}
    	}

    }
    if (mode==0||mode==2) {
    	if(document.getElementById('password').value == "")
        {
        	alert("密码不能为空！");
            document.getElementById('password').focus();
            return false;
        }
        else
        {
        	var str_code=document.getElementById('password').value;
    		if(str_code.length<6){
    			alert("密码太短！");
    			return false;
    		}
        }
    }
    if (mode==0||mode==3){
    	if(document.getElementById('password2').value == "")
        {
        	alert("请重复输入密码！");
            document.getElementById('password2').focus();
            return false;
        }
        else if(document.getElementById('password2').value != document.getElementById('password').value)
        {
        	alert("两次输入密码不一致！");
            document.getElementById('password2').focus();
            return false;
        }
    }
    if(mode==0)
    {
    	if(document.getElementById('email').value == "")
        {
        	alert("请输入邮箱！");
            document.getElementById('email').focus();
            return false;
        }
        else
        {
        	//此处校验邮箱地址的合理性
        }
    	alert("提交成功");
        return true;
    }
} 
</script>
<body>
<div class="zhuce">
    <a href="../index.php"><div class="logo">
        <h1>蓝色空间</h1>
    </div>
    </a>
<div class="agent"> 
<form name="reg" action="" method="post">


<h1 class="agenthead">
            用户注册
        </h1>
        
            <div class="yhmmm">
                用户名
            </div>
            <input type="text" name="name" id="name" maxlength="50" class="admin">
            <div class="yhmmm">
                密码
            </div>
            <input type="password" name="password" id="password" maxlength="20" style="ime-mode:disabled" onclick="javascript:check(1);" class="admin">
            <div class="yhmmm">
                确认密码
            </div>
            <input type="password" name="password2" id="password2" maxlength="20" style="ime-mode:disabled" onclick="javascript:check(1);" class="admin">
            <div class="yhmmm">
                邮箱
            </div>
            <input type="text" name="email" id="email" maxlength="90" onclick="javascript:check(3);" class="admin">
            
            <div class="yhmmm">
                自我介绍
            </div>
            <textarea rows=5 name="self_introduction" maxlength="200" class="admin2"></textarea>
            <input type="button" value="提交" class="zhucebutton" style="color: black" onclick="javascript:submittion();">
        <p>已有账户？</p>
        <a href="login.php">登录</a>


</form>
</div>
</body>