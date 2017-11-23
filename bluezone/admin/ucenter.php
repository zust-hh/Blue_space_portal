
<meta charset="utf-8">
<style>
    .main {
        padding: 25px;
        width: 600px;
        margin: 0 auto;
        border: 1px solid #95999e;
        border-radius: 5px;
        background-color:#dbe8ff;
    }
    span {
        font-size: 18px;
        font-family: 微软雅黑;
    }
    input {
        margin-top: 20px;
        height: 25px;
        width: 250px;
        border: 1px solid rgb(224,224,224);
        border-radius: 3px;
        margin-left: 40px;
        background-color: #fafafa;
    }
    textarea {
        border: 1px solid rgb(224,224,224);
        border-radius: 5px;
        margin-top: 20px;
        width: 500px;
        resize: none;
        background-color: #fafafa;
    }
    #sub {
        margin-top: 0;
        margin-left: 0;
        width: 60px;
        height: 25px;
        margin-bottom: 40px;
        background: #00A8FF;
        transition: all 0.5s;
        color: white;
    }
    #sub:hover {
        background: #0e87e3;
    }
    #sub:active {
        color: #fcd3a5;
    }
    a {
        text-decoration: none;
    }
    #id {
        margin-left: 40px;
        font-family: 宋体;
    }
    h2 {
        text-align: center;
    }
    #back {
        border-radius: 3px;
        width: 65px;
        height: 30px;
        float:right;
        margin-right:30px;
        margin-top:0;
        color: white;
        background-color: #00A8FF;
        transition: all 0.5s;
    }
    #back:hover {
        background-color: white;
        color: #00A8FF;
    }
</style>
<script language="javascript" type="text/javascript">
    function submittion(){
        if(check(0)==true)
        {
            document.ucupdate.submit();
        }
    }
    function check(){
        if(document.getElementById('password').value == ""){
            alert("密码不能为空！");
            document.getElementById('password').focus();
            return false;
        }
        if(document.getElementById('newpassword').value == "")
        {
            alert("密码不能为空！");
            document.getElementById('newpassword').focus();
            return false;
        }
        else
        {
            var str_code=document.getElementById('newpassword').value;
            if(str_code.length<6){
                alert("密码太短！");
                return false;
            }
        }
        if(document.getElementById('newemail').value == "")
        {
            alert("请输入邮箱！");
            document.getElementById('newemail').focus();
            return false;
        }
        return true;
    }
    function error_out(){
        alert("请先登录！");
        location.href='login.php';
    }
    function error_out2(){
        alert("密码错误！");
        location.href='ucenter.php';
    }
</script>
<?php
include("logincheck.php");
$loginok=false;

if(logincheck()==true)
{
    $loginok=true;
    $cookie_id=$_COOKIE['id'];
    $link_id = mysql_connect("localhost","pig","23333")or die("Connect fault!");
    mysql_query("SET NAMES UTF8"); 
    if($link_id)
    {
        $sqlquery=mysql_query("SELECT * FROM bluezone.user_info where username='$cookie_id';");
        $row=mysql_fetch_array($sqlquery);
        if($_POST['password']&&$_POST['newpassword']&&$_POST['newemail'])//开始更新
        {
            $pswd=md5($_POST['password']);
            $npswd=md5($_POST['newpassword']);
            $nemail=$_POST['newemail'];
            $nselfintro=$_POST['self_introduction'];
            if($pswd==$row[password])
            $sqlupdate=mysql_query("UPDATE bluezone.user_info SET password='$npswd', email='$nemail', self_intro='$nselfintro' WHERE username='$cookie_id';");
            else
            echo "<script>error_out2();</script>";
        }
    }
}
?>

<div class="main">
    <a href="../index.php"><input type="button" value="回到首页" id="back"></a>
    <form name="ucupdate"action="" method="post">
        <span>用户ID</span>
        <span id="id"><?php echo "$row[username]"; ?></span><br/><br/>
        <span>原密码</span>
        <input type="password" name="password" id="password" placeholder="password"/><br/><br />
        <span>新密码</span>
        <input type="password" name="newpassword" id="newpassword" placeholder="New password"/><br/><br />
        <span>新邮箱</span>
        <input type="text" name="newemail" id="newemail" placeholder="e-mail"/><br/><br/>
        <span>自我介绍(200字以内)：</span><br />
        <textarea rows=5 name="self_introduction" id="self_introduction" maxlength="200" placeholder="自我介绍..."><?php echo "$row[self_intro]"; ?></textarea><br/><br/>
        <?php if($loginok==true) echo '<input id="sub" type="submit" name="submit" value="更改" onclick="javascript:submittion();">'; else echo "<script>error_out();</script>";  if($row[ifadmin]==1) echo '<a href="superadmin.php"><br />管理员系统</a>'; ?>
    </form>
</div>
