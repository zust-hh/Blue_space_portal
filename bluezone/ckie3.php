<?php
if($_GET['out'])
{   //用于注销cookies
    setcookie('id',"");
    setcookie('pass',"");
    echo "<script>location.href='ckie3.php'</script>"; //因为cookies不是及时生效的，只有你再次刷新时才生效，所以，注销后让页面自动刷新。
}
if($_POST['name']&&$_POST['password']) //如果变量用户名和密码存在时，在下面设置cookies
{   //用于设置cookies
    setcookie('id',$_POST['name'],time()+30);
    setcookie('pass',$_POST['password'],time()+30);
    echo "<script>location.href='ckie3.php'</script>"; //让cookies及时生效

}
if($_COOKIE['id']&&$_COOKIE['pass'])
{   //cookies设置成功后，用于显示cookies
    echo "登录成功！<br />用户名：".$_COOKIE['id']."<br/>密码：".$_COOKIE['pass'];
    echo "<br />";
    echo "<a href='ckie.php?out=out'>注销cookies</a>";  //双引号内，如果再有引号，需要用单引号。
}
?>
<meta charset="utf-8">
<form action="" method="post">
用户ID：
<input type="text" name="name" /><br/><br/>
密码：
<input type="password" name="password" /><br/><br />
<input type="submit" name="submit">
</form>