<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit" charset="UTF-8">
    <title>蓝色空间首页</title>
    <link rel="stylesheet" href="css/cssreset.css">
    <link rel="stylesheet" href="css/index.css">
	<link href="css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.slideBox.js" type="text/javascript"></script>
<script>
jQuery(function($){
    $('#demo3').slideBox({
        duration : 0.5,//滚动持续时间，单位：秒
        easing : 'linear',//swing,linear//滚动特效
        delay : 5,//滚动延迟时间，单位：秒
        hideClickBar : false,//不自动隐藏点选按键
        clickBarRadius : 10
    });
});
var numOfKuang=6;
var widthOfKuang=283;
var posi=0;
function move(shifting){
    if(posi+shifting>0||posi+shifting<-1*(numOfKuang-3)*widthOfKuang)
        return 0;
    posi+=shifting;
    document.getElementById('vector').style.marginLeft=posi+"px";
    return 1;
}
</script>
</head>
<body>
<div class="yinying">
    <!--   header  -->
<?php
include("universal.php");
?>
    <!--   nav  -->

    <!--  content -->
    <div class="content">
        <div class="section-lar">
        <!-- section-a -->
        <div class="section-a">
            <div class="section-a-l">
					<div id="demo3" class="slideBox">
  <ul class="items">
<?php
$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
mysql_query("SET NAMES UTF8"); 
$sqlquery=mysql_query("SELECT * FROM bluezone.focuspic;");
mysql_close($link_id);
while ($row=mysql_fetch_array($sqlquery)) {
	echo "<li><a href=\"$row[link]\" title=\"$row[title]\"><img width=847 height=460 src=\"img/$row[pic]\"></a></li>
";
}
?>
    
  </ul>
</div>
            </div>
            <div class="section-a-r">
                <h3>日程表</h3>
                <ul class="richengbiao">
                <?php
				$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
				mysql_query("SET NAMES UTF8"); 
				if($link_id)
				{
					$sqlquery=mysql_query("SELECT * FROM bluezone.timetable where begintime>now() order by begintime asc limit 0,4;");
					mysql_close($link_id);
					while($row=mysql_fetch_array($sqlquery))
					{
						$unixtime=strtotime($row[begintime]);
						$month=date('m',$unixtime);
						$d=date('d',$unixtime);
						$temptime=explode(" ",$row[begintime]);
						$begintime=substr($temptime[1],0,5);
						$endtime=substr($row[duration],0,5);
						switch($month)
						{
							case 1:$m="Jan";break;
							case 2:$m="Feb";break;
							case 3:$m="Mar";break;
							case 4:$m="Apr";break;
							case 5:$m="May";break;
							case 6:$m="Jun";break;
							case 7:$m="July";break;
							case 8:$m="Aug";break;
							case 9:$m="Sept";break;
							case 10:$m="Oct";break;
							case 11:$m="Nov";break;
							case 12:$m="Dec";break;
						}
						echo '<li>
                        <div class="event-l">
                            <div class="event-l-t"><p>';
						echo "$d";
						echo '</p></div>
                            <div class="event-l-b"><p>';
						echo "$m";
						echo "</p></div>
                        </div>
                        <div class=\"event-r\">
                            <div class=\"event-r-t\"><a href='' title=\"$row[info]\">";
						echo "$row[title]";
						echo '</a></div>
                            <div class="event-r-b"><p>&nbsp;&nbsp;&nbsp;&nbsp;';
						echo "$begintime - $endtime<br>&nbsp;&nbsp;&nbsp;&nbsp;$row[place]</p></div>
                        </div>
                    	</li>";
					}
				}
				?>
                    <!--<li>
                        <div class="event-l">
                            <div class="event-l-t"><p>25</p></div>
                            <div class="event-l-b"><p>Dec</p></div>
                        </div>
                        <div class="event-r">
                            <div class="event-r-t"><a href="">交流会</a></div>

                            <div class="event-r-b"><p>&nbsp;&nbsp;&nbsp;&nbsp;4:00 pm - 6:00<br>&nbsp;&nbsp;&nbsp;&nbsp;蓝色空间</p></div>
                        </div>
                    </li>-->
                </ul>
                <div class="more-events">欢迎各位同学参与</div>
            </div>
        </div>
        <!-- section-a -->
        </div>

        <!-- section-b -->
        <div class="section-b">
            <div class="section-b-1">
                    <h2>蓝色动态</h2>
<?php
$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
mysql_query("SET NAMES UTF8"); 
if($link_id)
{
    $sqlquery=mysql_query("SELECT * FROM bluezone.article WHERE main_type='蓝色动态' order by id desc limit 0,1;");
    mysql_close($link_id);
    $row_dt=mysql_fetch_array($sqlquery);
    echo "<a href=article.php?id=$row_dt[id]><img src=\"/thumbnail/$row_dt[thumbnail]\"></a>
    <div class=\"bluedoingfontzhong\">
    <a href=article.php?id=$row_dt[id]><div class=\"bluedoingfont\">$row_dt[title]</div></a>
    <div class=\"bluedoingfont1\"><p>$row_dt[time]</p></div>
    ";
    $tempstr=strip_tags($row_dt[article]);
    $tempstr=mb_substr($tempstr,0,200,'utf-8')."...";
    echo "<div class=\"bluedoingfont2\"><p>$tempstr</p></div>";
    echo "<a href=article.php?id=$row_dt[id]><div class=\"bluedoingbutton\">READ MORE</div></a></div></div>";
}
?>
                    <!--a href=""><img src="/img/IMG_20150808_152839_副本.jpg" alt="bluedoing"></a>
                <div class="bluedoingfontzhong">
                    <a href=""><div class="bluedoingfont">学长又获大奖啦!</div></a>
                    <div class="bluedoingfont1"><p>October 01, 2013 11:28AM</p></div>
                    <div class="bluedoingfont2"><p>热烈祝贺我校同学在第8届中国大学生计算机设计大赛中获奖!</p></div>
                    <a href="article1.php"><div class="bluedoingbutton">READ MORE</div></a>
                </div>
            </div-->
            <div class="section-b-3">
                <h2>公告栏</h2>
<?php
$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
mysql_query("SET NAMES UTF8"); 
if($link_id)
{
    $sqlquery=mysql_query("SELECT * FROM bluezone.article WHERE main_type='公告' order by id desc limit 0,5;");
    while($row=mysql_fetch_array($sqlquery))
    {
        $t=substr($row[time],0,10);
        echo "<a href=article.php?id=$row[id]>$row[title]</a><div class='section-b-3-date'>$t</div>
        ";
    }
    mysql_close($link_id);
}
?>
                
                
            </div>
            <div class="section-b-2">
                <div class="section-b-2-t">
                    <h2>成果展示</h2>
                    <a href="javascript:move(-283);"><div class="yjt"><div class="yjt1"></div></div></a>
                    <a href="javascript:move(283);"><div class="zjt"><div class="zjt1"></div></div></a>
                </div>
                <div class="section-b-2-in" id="vector">
<?php
$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
mysql_query("SET NAMES UTF8"); 
if($link_id)
{
    $kuang=0;
    $sqlquery=mysql_query("SELECT * FROM bluezone.article WHERE main_type='优秀作品' AND jinghua='1';");
    while($row=mysql_fetch_array($sqlquery))
    {
        $kuang++;
        $tempstr=strip_tags($row[article]);
        $tempstr=mb_substr($tempstr,0,120,'utf-8')."...";
        echo "<div class=\"section-b-2-k\">
                        <a href=article.php?id=$row[id]><img src=\"/thumbnail/$row[thumbnail]\"></a>
                        <a href=article.php?id=$row[id]>$row[title]</a>
                        <div class=\"section-time\">$row[time]</div>
                        <p>$tempstr</p>
                    </div>";

    }
    echo "<script>numOfKuang=$kuang;</script>";
    mysql_close($link_id);
}
?>
                    
                </div>
            </div>

            
        </div>
        <!-- section-b -->

    <!--  content -->

    <!-- footer -->
<?php
include("universal-foot.php");
?>
        <!-- footer -->
    </div>

</body>
</html>