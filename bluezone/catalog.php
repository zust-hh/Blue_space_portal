<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>目录-蓝色空间</title>
<link rel="stylesheet" href="css/cssreset.css">
<link rel="stylesheet" href="css/index.css">

</head>
<body>
<div class="yinying">
    <!--   header  -->
<?php
include("universal.php");
?>
    <!--   nav  -->
<div class="dakuang">
<?php
if($_GET[maintype])
{
    $link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
    mysql_query("SET NAMES UTF8"); 
    $sqlquery=mysql_query("SELECT * FROM bluezone.index_type_name WHERE main_type='$_GET[maintype]';");
    while($row=mysql_fetch_array($sqlquery))
    {
        $sqlgetjh=mysql_query("SELECT * FROM bluezone.article WHERE main_type='$_GET[maintype]' AND subtype='$row[subtype]' AND jinghua=1 order by id desc limit 0,1;");
        $rowjh=mysql_fetch_array($sqlgetjh);
        echo "<div class=\"zhengti\">
        <div class=\"head\">
            <a href=\"article.php?id=$rowjh[id]\">$row[subtype]</a>
        </div>
        <div class=\"neirong\">
            <div class=\"picture\">
                <img width=\"370\" height=\"200\" src=\"thumbnail/$rowjh[thumbnail]\">
                <p class=\"pictureword\"><a href=\"article.php?id=$rowjh[id]\">$rowjh[title]</a></p>
            </div>
            <ul>
        ";
        if($rowjh)
        $sqlgetline=mysql_query("SELECT * FROM bluezone.article WHERE main_type='$_GET[maintype]' AND subtype='$row[subtype]' AND id <> $rowjh[id] order by id desc limit 0,4;");
        else
        $sqlgetline=mysql_query("SELECT * FROM bluezone.article WHERE main_type='$_GET[maintype]' AND subtype='$row[subtype]' order by id desc limit 0,4;");
        
        while($rowline=mysql_fetch_array($sqlgetline))
        {
            echo "<li><a href=\"article.php?id=$rowline[id]\">$rowline[title]</a></li>";
        }
        echo "</ul>
        </div>
    </div>

";
    }
    mysql_close($link_id);
    echo "</div>";
}
else{echo "错误的打开方式";}
?>


<!--foot-->
<?php
include("universal-foot.php");
?>

</div>
</body>
</html>