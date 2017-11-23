<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
    <title>空间介绍</title>
    <link rel="stylesheet" href="css/cssreset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/kjjs.css">
    <script src="js/jquery.1.9.1.js"></script>
    <script src="js/layer.js"></script>
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

        <!-- section-a -->
        <div class="introduce_row1">
        	<div class="introduce_row1_jieshao">&nbsp;It's time to join us!</div>
        	<a href="admin/reg.php"><div class="introduce_row1_button">加入我们</div></a>
            
        </div>
        <!-- section-a -->

        <!-- section-b -->
        <div class="introduce_row2">
        <div class="introduce_row2_wz">
          <p style="text-indent:2em;">蓝色空间是浙江科技学院安吉校区劲竹书院旗下的创新基地，位于劲竹书院229室，拥有浓厚的学习氛围，一流的硬件设备，雄厚的师资力量，是科技创新，技术交流的不二场所。</p></div>
        </div>
        <!-- section-b -->
        <div class="introduce_row3">
        高端的配置，舒适的环境
        </div>
        <!-- section-c -->
        <div class="introduce_row4">
            <img src="img/2/lqy.jpg" alt="picture1" class="pic picture1" id="chengyuan1">
            <img src="img/2/cw.jpg" alt="picture2" class="pic picture2" id="chengyuan2">
            <img src="img/2/cjn.jpg" alt="picture3" class="pic picture3" id="chengyuan3">
            <img src="img/2/dwf.jpg" alt="picture4" class="pic picture4" id="chengyuan4">
            <img src="img/2/sq.jpg" alt="picture5" class="pic picture5" id="chengyuan5">
            <script>
            $('#chengyuan1').on('click', function(){
                    layer.open({
                        type: 2,
                        title: '成员介绍',
                        maxmin: true,
                        shadeClose: true, //点击遮罩关闭层
                        area : ['750px' , '500px'],
                        content: 'lqy.html'
                    });
                });
                $('#chengyuan2').on('click', function(){
                    layer.open({
                        type: 2,
                        title: '成员介绍',
                        maxmin: true,
                        shadeClose: true, //点击遮罩关闭层
                        area : ['750px' , '500px'],
                        content: 'cw.html'
                    });
                });
                $('#chengyuan3').on('click', function(){
                    layer.open({
                        type: 2,
                        title: '成员介绍',
                        maxmin: true,
                        shadeClose: true, //点击遮罩关闭层
                        area : ['750px' , '500px'],
                        content: 'cjn.html'
                    });
                });
                $('#chengyuan4').on('click', function(){
                    layer.open({
                        type: 2,
                        title: '成员介绍',
                        maxmin: true,
                        shadeClose: true, //点击遮罩关闭层
                        area : ['750px' , '500px'],
                        content: 'dwf.html'
                    });
                });
                $('#chengyuan5').on('click', function(){
                    layer.open({
                        type: 2,
                        title: '成员介绍',
                        maxmin: true,
                        shadeClose: true, //点击遮罩关闭层
                        area : ['750px' , '500px'],
                        content: 'sq.html'
                    });
                });
            </script>

        </div>
        <!-- section-c -->
    </div>
    <!--  content -->

    <!-- footer -->
<?php
include("universal-foot.php");
?>
        <!-- footer -->
    </div>
</div>
</body>
</html>