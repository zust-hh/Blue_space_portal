
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>热烈祝贺学长获奖-蓝色空间</title>
    <link rel="stylesheet" href="css/cssreset.css">
    <link rel="stylesheet" href="css/index.css">
	


<style type="text/css">


#bg{background-image:url(../images/content/dotted.png);}
.container{width:100%;height:100%;margin:auto;}

/*left*/
.leftsidebar_box{width:300px;height:auto !important;overflow:visible !important;height:100% !important;background-color:rgb(236,230,234);}
.line{height:2px;width:100%;background-image:url(img/line_bg.png);background-repeat:repeat-x;}
.leftsidebar_box dt{padding-left:40px;padding-right:10px;background-repeat:no-repeat;background-position:10px center;color:#f5f5f5;font-size:14px;position:relative;line-height:48px;cursor:pointer;}
.leftsidebar_box dd{background-color:#317eb4;padding-left:40px;}
.leftsidebar_box dd a{color:#f5f5f5;line-height:20px;}
.leftsidebar_box dt img{position:absolute;right:10px;top:20px;}
.system_log dt{background-image:url(images/left/system.png)}
.custom dt{background-image:url(images/left/custom.png)}
.channel dt{background-image:url(images/left/channel.png)}
.app dt{background-image:url(images/left/app.png)}
.cloud dt{background-image:url(images/left/cloud.png)}
.syetem_management dt{background-image:url(images/left/syetem_management.png)}
.source dt{background-image:url(images/left/source.png)}
.statistics dt{background-image:url(images/left/statistics.png)}
.leftsidebar_box dl dd:last-child{padding-bottom:10px;}
</style>

    
</head>
<body >
<?php
include("universal.php");
?>

   <div class="content2-article">
   <div class="content2">
    <div class="container">

    <div class="leftsidebar_box">
        <div class="line"></div>
        <dl class="system_log">
            <dt onClick="changeImage()" style="color:rgb(49,126,180);">列表-蓝色动态<img src="img/select_xl01.png"></dt>
            <dd id="abcd" class="first_dd"><a href="#">热烈祝贺学长获奖</a></dd>
            <dd><a href="#">文章2</a></dd>
            <dd><a href="#">文章3</a></dd>
            <dd><a href="#">文章4</a></dd>
        </dl>
    
       
    
       
    
       
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
   </div>
 <div class="article">
     <div class="article-title1">
        <p>热烈祝贺学长获奖</p>
     </div>  
     <div class="article-title2">
        <p>作者:Lin 时间：2016年4月28日 <hr size="1" color="#999999" /></p>
     </div>
     <div class="article-page">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,</p>
        <script type="text/javascript">
        var target=document.getElementById("abcd");
        function aaa(){target.click();}
        target.click();
        </script>
        <a href="javascript:aaa();">aa</a>
        <br><p>&nbsp;&nbsp;&nbsp;&nbsp;热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,热烈祝贺学长获奖,</p><br>
        <p><img width="400" height="300" src="img/IMG_20150808_152839_副本.jpg"/></p>
        <p><img  width="400" height="300" src="img/2016042819144785401.jpg"/></p>
     </div>
     </div>
   </div>
   </div>
 <div class="footer">
<div class="footer-top">
    <div class="footer-top-1">
        <p>友情链接</p>
    </div>
    <div class="footer-top-2">
       <p>先别管</p> 
    </div>
</div>
<div class="footer-bottom">
    <p>Copyright ©2016 蓝色空间  Powered By PHP Version 1.0.0</p>
    <p>&nbsp;</p>
    <p>浙江科技学院（安吉校区）劲竹书院 2#229</p>
</div>
    </div>





</body>
</html>