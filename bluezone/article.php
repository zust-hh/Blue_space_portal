<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<?php
if($_GET[id])
{

    $link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
    mysql_query("SET NAMES UTF8"); 
    if($link_id)
    {
        $sqlquery=mysql_query("SELECT * FROM bluezone.article where id='$_GET[id]';");
        $row=mysql_fetch_array($sqlquery);
        echo "$row[title]";
        mysql_close($link_id);
    }
}

?>
-蓝色空间</title>
    <link rel="stylesheet" href="css/cssreset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/pinglun.css">
	<link rel="stylesheet" href="css/pinglunneirong.css">

	


<style type="text/css">


#bg{background-image:url(../images/content/dotted.png);}
.container{width:100%;height:100%;margin:auto;}

/*left*/
.leftsidebar_box{width:300px;height:auto !important;overflow:visible !important/*;height:100% !important*/;background-color:rgb(236,230,234);}
.line{height:2px;width:100%;background-image:url(img/line_bg.png);background-repeat:repeat-x;}
.leftsidebar_box dt{padding-left:40px;padding-right:10px;background-repeat:no-repeat;background-position:10px center;color:#317eb4;font-size:18px;position:relative;line-height:48px;cursor:pointer;}
.leftsidebar_box dd{background-color:#317eb4;padding-left:40px;padding-top:7px;padding-right: 20px;}
.leftsidebar_box dd a{color:#f5f5f5;line-height:20px;font-size: 14px;}
.leftsidebar_box dt img{position:absolute;right:10px;top:20px;}
/*.system_log dt{background-image:url(images/left/system.png)}
.custom dt{background-image:url(images/left/custom.png)}
.channel dt{background-image:url(images/left/channel.png)}
.app dt{background-image:url(images/left/app.png)}
.cloud dt{background-image:url(images/left/cloud.png)}
.syetem_management dt{background-image:url(images/left/syetem_management.png)}
.source dt{background-image:url(images/left/source.png)}
.statistics dt{background-image:url(images/left/statistics.png)}*/
.leftsidebar_box dl dd:last-child{padding-bottom:10px;}
</style>

    
</head>

<body>
<div class="yinying">
<?php
include("universal.php");
?>
    <!--   nav  -->

   <div class="content2-article">
   <div class="content2">
    <div class="container">

    <div class="leftsidebar_box">
<?php
if($_GET[id])
{
    $link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
    mysql_query("SET NAMES UTF8"); 
    if($link_id)
    {
        $main_type=$row[main_type];
        $subtype=$row[subtype];
        $sqlquery=mysql_query("SELECT * FROM bluezone.index_type_name where main_type='$main_type';");
        while($row_subtype=mysql_fetch_array($sqlquery))
        {
            echo "<dl>
            <dt>$row_subtype[subtype]<img src=\"img/select_xl01.png\"></dt>";
            $sqlquery2=mysql_query("SELECT id,title FROM bluezone.article WHERE main_type='$main_type' and subtype='$row_subtype[subtype]';");
            while($row_art_list=mysql_fetch_array($sqlquery2))
            {
                echo "<dd><a href=\"article.php?id=$row_art_list[id]\">$row_art_list[title]</a></dd>
                ";
            }
            echo "</dl>";
        }
        mysql_close($link_id);
    }
}
?>
        
       
    
       
    
       
    </div>

</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(".leftsidebar_box dt").css({"background-color":"rgb(240,214,192);"});
$(".leftsidebar_box dt img").attr("src","img/select_xl01.png");
$(function(){
    $(".leftsidebar_box dd").hide();
    $(".leftsidebar_box dt").click(function(){
        $(".leftsidebar_box dt").css({"background-color":"rgb(240,214,192);"})
        $(this).css({"background-color": "rgb(240,214,192);"});
        $(this).parent().find('dd').removeClass("menu_chioce");
        $(".leftsidebar_box dt img").attr("src","img/select_xl01.png");
        $(this).parent().find('img').attr("src","img/select_xl.png");
        $(".menu_chioce").slideUp(); 
        $(this).parent().find('dd').slideToggle();
        $(this).parent().find('dd').addClass("menu_chioce");
    });
})
</script>
<script type="text/javascript">
var havedone=0;
function zan(art_id){
	if(havedone==0){
		if(window.XMLHttpRequest)
		{// 针对非IE的标准浏览器
    	xmlhttp = new XMLHttpRequest();
    	}
 		else if(window.ActiveXObject)
		{// 针对IE
 			try
			{
			xmlhttp = new ActiveXObject("MSXML2.XMLHTTP");
			}
			catch(e)
			{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
		}
		url="dianzan.php?art_id=" + art_id;
		xmlhttp.open("GET",url,true);
		//xmlhttp.onreadystatechange=OnStatusChange;
		xmlhttp.send(null);	
		havedone=1;
		
		var yuanzan=
		<?php 
		echo "$row[dianzan];"
		?>;
		yuanzan++;
		document.getElementById("mainarticle").innerHTML="已点赞("+yuanzan+")";
	}
}
function pinglunzan(plid){
		if(window.XMLHttpRequest)
		{// 针对非IE的标准浏览器
    	xmlhttp = new XMLHttpRequest();
    	}
 		else if(window.ActiveXObject)
		{// 针对IE
 			try
			{
			xmlhttp = new ActiveXObject("MSXML2.XMLHTTP");
			}
			catch(e)
			{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
		}
		url="pldianzan.php?plid=" + plid;
		xmlhttp.open("GET",url,true);
		//xmlhttp.onreadystatechange=OnStatusChange;
		xmlhttp.send(null);	
		
		var yuanzan=document.getElementById(plid).innerHTML;
		yuanzan++;
		document.getElementById(plid).innerHTML=yuanzan;
		document.getElementById("a"+plid).href="";
		document.getElementById("a"+plid).innerHTML="已点赞";
}
</script>
   </div>
 <div class="article">
     <div class="article-title1">
        <p>
<?php 
if($_GET[id])
echo "$row[title]";
?></p>
     </div>  
     <div class="article-title2">
        <p>
<?php
if($_GET[id])
echo "作者：$row[author]&nbsp;&nbsp;&nbsp;&nbsp;发布时间：$row[time]";
?>
 <hr size="1" color="#999999" /></p>
     </div>
     <div class="article-page">
<?php
if($_GET[id])
echo "$row[article]";
?>
     </div>
<!--评论栏-->
	 <div class="article-bottom">
<?php
echo "<span id=\"mainarticle\" ><a href=\"javascript:zan($row[id]);\" style='color:rgb(253,0,0);'>点赞(".$row[dianzan].")</a></span>";

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论
	 </div>
<!--评论-->
    <!--  pinglun -->
    <form action="article.php?id=
<?php 
    echo "$_GET[id]\"";
    ?> method="post">
        <div class="pinglun">
            <div class="pinglun-z">
                <div id="pinglun-t">
                    <textarea name="pinglun" id=""></textarea>
                </div>
                <div id="pinglun-b">
<?php
if($_POST['pinglun']&&$ydl)
{
	$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
	mysql_query("SET NAMES UTF8"); 
	$pl=$_POST['pinglun'];
	$da=date('Y-m-d H:i:s',time());
	$sqlpl=mysql_query("INSERT INTO `bluezone`.`comment` (`art_id`, `author`, `time`, `article`) VALUES ('$_GET[id]', '$_COOKIE[id]', '$da', '$pl');");
	mysql_close($link_id);
}
if($ydl)
	echo "<input type=\"submit\">";
else
	echo "<input type=\"button\" value=\"提交\" onclick=\"javascript:alert('您还未登录，请先登录！');\">";
?>

                </div>
            </div>
        </div>
    </form>

    <!--  pinglun -->
<?php
$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
mysql_query("SET NAMES UTF8"); 
$sqlplnr=mysql_query("SELECT * FROM bluezone.comment WHERE art_id=$_GET[id] order by id desc;");
while($row_plnr=mysql_fetch_array($sqlplnr))
{
	echo "
        <div class=\"plnr\">
            <div id=\"plnr-user\">
                <a href=\"\">$row_plnr[author]</a>
            </div>
            <div id=\"plnr-art\">
                <p>$row_plnr[article]</p>
            </div>
            <div id=\"plnr-b\">
                <span class=\"plnr-b-l\">$row_plnr[time]</span>
                <span class=\"plnr-b-r\">
                    <a id=\"a$row_plnr[id]\" href=\"javascript:pinglunzan($row_plnr[id]);\">点赞</a>
                    <em id=\"$row_plnr[id]\">$row_plnr[dianzan]</em>
                </span>
            </div>
        </div>
";
}
?>
        <!--  pinglunneirong -->

    <!--  pinglunneirong -->

<!--评论-->
   </div>
 <!--回滚5.3</div>-->


</div>
<?php
include("universal-foot.php");
?>

</body>

</html>