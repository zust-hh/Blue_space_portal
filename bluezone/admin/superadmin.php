<meta charset="utf-8">
<style>
    .main {
        padding: 25px;
        width: 500px;
        margin: 0 auto;
        border: 1px solid #95999e;
        border-radius: 5px;
        background-color:rgba(35,200,224,0.4);
    }
    a {
        text-decoration: none;
    }
    p {
        font-size: 20px;
        color: ;
        font-family: 微软雅黑;
        text-align: center;
    }
    input {
        font-size: 18px;
        border:0;
        font-family: 微软雅黑;
        border-radius: 5px;
        background-color: white;
        color: #008cd6;
        width: 400px;
        height: 40px;
        margin-left: 50px;
        margin-top: 30px;
        transition: all 0.5s;
    }
    input:hover {
        color: white;
        background-color: #008cd6;
    }
    #back {
        color: white;
        background-color: #008cd6;
        transition: all 0.5s;
    }
    #back:hover {
        background-color: white;
        color: #008cd6;
    }
</style>
<div class="main">
<?php
include("logincheck.php");
if(logincheck()==2)
{
	echo "<p>欢迎来到后台，管理员$_COOKIE[id]</p>";
	echo '<a href="articleadmin.php"><input type="button" value="文章管理系统"></a>';
	echo '<a href="timetable.php"><input type="button" value="日程表管理系统"></a>';
	echo '<a href="focuspic.php"><input type="button" value="焦点图管理系统"></a>';
	echo '<a href="../index.php"><input type="button" value="返回首页" id="back"></a>';
}
else
echo "您没有操作权限！<br /><a href='../index.php'>返回首页</a><br />";
?>
</div>
