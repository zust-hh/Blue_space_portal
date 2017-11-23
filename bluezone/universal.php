

    <div class="header">
        <div class="logo">
            <img src="img/bzlogo.png" alt="Logo">
        </div>
        <div class="logo-right-wz">
“让每个人都能自由、<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;自主地学习！”
        </div>
        <?php
        include("admin/logincheck.php");
        if(logincheck()==0)
        {
            $ydl=0;
            echo '<div class="dlzc">
            <div class="dlzcmain">
                <form id="login" action="admin/login.php" method="POST">
                    <div class="dlzcword"><h2><strong>登录</strong> 您的账户</h2></div>
                    <div class="dlzc1">
                        <div class="dlzc-username">
                            <input type="text" name="name" placeholder="Username" style="width: 150px; height: 35px;background-color: #f3f4f6;border-radius: 3px;">
                        </div>

                        <div class="dlzc-password">
                            <input type="password" name="password" placeholder="Password" style="width: 80px; height: 35px;background-color: #f3f4f6;font-size: 12px;border-radius: 3px;">
                        </div>

                        <div>
                            <input type="submit" value="" name="button" class="dlzc-submit">
                        </div>
                    </div>
            </div>
        </div>';
        }
        else
        {
            $ydl=1;
            echo "
            <div class='ydl'>
            欢迎! <a href='admin/ucenter.php'style='color:rgb(255,255,255);'>$_COOKIE[id]</a> &nbsp;&nbsp;<a href='admin/login.php?out=out'style='color:rgb(232,232,232);'>[登出]</a>
            </div>
            ";
        }
        ?>
        
    </div>

    <!--   nav  -->
        <div class="nav">
            <div class="nav1">
                <a href="index.php"><div class="navhome"></div></a>
            <ul>
                <li>
                    <a href="catalog.php?maintype=优秀作品">优秀作品</a>
                    <ul>
<?php
$uni_link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
mysql_query("SET NAMES UTF8"); 
$uni_sqlquery=mysql_query("SELECT * FROM bluezone.index_type_name WHERE main_type='优秀作品';");
while($uni_row=mysql_fetch_array($uni_sqlquery))
{
	$uni_sqlquery2=mysql_query("SELECT * FROM bluezone.article WHERE main_type='优秀作品' AND subtype='$uni_row[subtype]' order by id desc limit 0,1;");
	$uni_row2=mysql_fetch_array($uni_sqlquery2);
	echo "<li><a href=\"article.php?id=$uni_row2[id]\">$uni_row2[subtype]</a></li>";
}
?>
                        
                    </ul>
                </li>
                <li>
                    <a href="catalog.php?maintype=学习园地">学习园地</a>
                    <ul>
<?php
$uni_sqlquery=mysql_query("SELECT * FROM bluezone.index_type_name WHERE main_type='学习园地';");
while($uni_row=mysql_fetch_array($uni_sqlquery))
{
	$uni_sqlquery2=mysql_query("SELECT * FROM bluezone.article WHERE main_type='学习园地' AND subtype='$uni_row[subtype]' order by id desc limit 0,1;");
	$uni_row2=mysql_fetch_array($uni_sqlquery2);
	echo "<li><a href=\"article.php?id=$uni_row2[id]\">$uni_row2[subtype]</a></li>";
}
mysql_close($uni_link_id);
?>

                    </ul>
                </li>
                <li>
                    <a href="activity.php">活动</a>
                    <ul>
                    	<li><a href="activity.php">空间活动</a></li>
                        <li>
                            <a href="">学科竞赛实践</a>
                            <ul>
                                <li><a href="http://dmtds.zjnu.edu.cn/">浙江省大学生多媒体设计作品竞赛</a></li>
                                <li><a href="">浙江省大学生“互联网+”</a></li>
                                <li><a href="http://zjsoiac.hdu.edu.cn/">浙江省大学生服务外包竞赛</a></li>
                                <li><a href="http://zjec.zjgsu.edu.cn/">浙江省大学生电子商务设计竞赛</a></li>
                                <li><a href="http://www.jsjds.org/">全国大学生计算机设计大赛</a></li>
                                <li><a href="http://www.tiaozhanbei.net/">浙江省大学生挑战杯创业设计大赛（小挑）</a></li>
                                <li><a href="http://www.tiaozhanbei.net/">浙江省大学生挑战杯创新设计大赛（大挑）</a></li>
                            </ul>
                        </li>
                        
                        <!--li>
                            <a href="">校级项目</a>
                        </li>

                        <li>
                            <a href="">省级项目</a>
                        </li>

                        <li>
                            <a href="">国创项目</a>
                        </li-->
                    </ul>
                </li>
                <li>
                    <a href="upload/forum.php">论坛</a>
                </li>
                <li>
                    <a href="introduce.php"><p>基地介绍</p></a>
                    <ul>
                        <li><a href="introduce.php">简介</a></li>
                        <li><a href="introduce.php">团队成员</a></li>
                        <li><a href="introduce.php">师资力量</a></li>
                        <li><a href="introduce.php">硬件设施</a></li>
                    </ul>
                </li>
                <li class="navlast">
                    <a href="admin/reg.php" style="color:white">加入我们</a>
                </li>
            </ul>
            </div>
        </div>