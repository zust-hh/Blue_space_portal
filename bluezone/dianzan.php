<?php
$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
$sqlquery=mysql_query("UPDATE `bluezone`.`article` SET `dianzan`=dianzan+1 WHERE `id`='$_GET[art_id]';");
mysql_close($link_id);
?>