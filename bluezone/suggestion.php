<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit" charset="UTF-8">
    <title>意见反馈</title>
    <link rel="stylesheet" href="css/cssreset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/suggestion.css">
</head>

<body>
<div class="yinying">
    <!--   header  -->
<?php
include("universal.php");
?>

    <!--   nav  -->
        <!-- yjfk -->
<?php
if($_POST[contact]&&$_POST[yjfk])
{
$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
mysql_query("SET NAMES UTF8"); 
$sqlquery=mysql_query("INSERT INTO `bluezone`.`suggestion` (`email`, `article`) VALUES ('$_POST[contact]', '$_POST[yjfk]');");
mysql_close($link_id);
echo '<script>alert("提交成功！");</script>';

}

?>
<form action="" method="post">
        <div class="yjfk">
            <div class="suggestion">
                <div id="suggestion-t">
                    <p>联系方式</p>
                    <input type="text" name="contact" placeholder="e-mail" style="width: 400px; height: 30px;font-size: 18px;border-radius: 3px;">
                </div>
                <div id="suggestion-b">
                    <p>意见反馈</p>
                    <textarea name="yjfk" id="" cols="30" rows="20" placeholder="意见反馈" style="width: 400px;font-size: 18px;border-radius: 3px;"></textarea>
                </div>
                <div id="suggestion-sub">
                    <input type="submit" value="提交">
                </div>
            </div>
        </div>
        </form>
        <!-- yjfk -->
        <!-- footer -->
        <?php
include("universal-foot.php");
?>
       <!-- footer -->
    </div>


</body>
</html>