<meta charset="utf-8">
<table width="60%" border="1" align="center">
  <tr>
    <td><table width="100%" border="1">
      <tr>
        <td>次序</td>
        <td>标题</td>
        <td>图片</td>
        <td>链接</td>
        <td> 操作</td>
      </tr>
<?php
include("logincheck.php");
if(logincheck()==2)
{
	$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
	mysql_query("SET NAMES UTF8"); 
	if($_GET[change1]&&$_GET[change2])
	{
		mysql_query("UPDATE `bluezone`.`focuspic` SET `id`='0' WHERE `id`='$_GET[change1]';");
		mysql_query("UPDATE `bluezone`.`focuspic` SET `id`='$_GET[change1]' WHERE `id`='$_GET[change2]';");
		mysql_query("UPDATE `bluezone`.`focuspic` SET `id`='$_GET[change2]' WHERE `id`='0';");
	}
	if($_GET[del])
	{
		mysql_query("DELETE FROM `bluezone`.`focuspic` WHERE `id`='$_GET[del]';");
	}
	if($_POST[title])
	{
		$linkok=0;
		if(!empty($_FILES['file']['tmp_name']))
		{
			if($_POST[link1])
			{
				$linkok=1;
				$prefixlink="article.php?id=";
				$link=$prefixlink.$_POST[link1];
				echo "文章编号连接方式$link <br />";
			}
			else if($_POST[link2])
			{
				$linkok=2;
				$link=$_POST[link2];
			}
			if($linkok!=0)
			{
				$file = $_FILES['file'];
$name = $file['name'];
$type = strtolower(substr($name,strrpos($name,'.')+1));
$allow_type = array('jpg','jpeg','gif','png'); 
if(!in_array($type, $allow_type)){
  return ;
}
if(!is_uploaded_file($file['tmp_name'])){
  return ;
}
$upload_path = "../img/";
$date=date('YmdHis');
$random=rand(10000,99999);
$picname=$date.$random.".".$type;
echo "$picname";
if(move_uploaded_file($file['tmp_name'],$upload_path.$date.$random.".".$type)){
  echo "图片上传成功!";
  $sqlinsert=mysql_query("INSERT INTO `bluezone`.`focuspic` (`title`, `link`, `pic`) VALUES ('$_POST[title]', '$link', '$picname');");
	if($sqlinsert)
	echo "数据库插入操作成功！";
}else{
  echo "图片上传失败!";
}
				
			}
		}
		else{echo'请选择文件';}
	}
	$sqlquery=mysql_query("SELECT * FROM bluezone.focuspic;");
	$num_rows=0;
	$rows=array();
	while($row=mysql_fetch_array($sqlquery))
	{
		$rows[]=$row;
		$num_rows++;
	}
	for($i=0;$i<$num_rows;$i++)
	{
		if(($i+1)%2==1)
		$bgc="bgcolor=#F2F9FF";
		else
		$bgc="bgcolor=#CCE6FF";
		$xh=$i+1;
		echo
		"<tr $bgc>
		<td>".$xh."</td>
		<td>".$rows[$i][title]."</td>
		<td><a href=../img/".$rows[$i][pic].">查看</a></td>
		<td><a href=".$rows[$i][link].">".$rows[$i][link]."</a></td>
		<td>
		";
		if($i!=0)//上移
		{
			echo "<a href=?change1=".$rows[$i][id]."&change2=".$rows[($i-1)][id].">上移</a>|";
		}
		else echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		if($i!=$num_rows-1)//下移
		{
			echo "<a href=?change1=".$rows[$i][id]."&change2=".$rows[($i+1)][id].">下移</a>|";
		}
		else echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<a href=?del=".$rows[$i][id].">删除</a></td></tr>";
	}
	mysql_close($link_id);
}
?>
    </table></td>
  </tr>
  <tr>
    <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <p>标题
        <input type="text" name="title" />
      </p>
        <p>链接至文章编号<input type="text" name="link1" /></p>
        <p>链接至网址<input type="text" name="link2" />
        （要使用时“链接至文章编号”请留空,记得加http://）</p>
        <p><input type="file" name="file" i/></p>
      
      <p>
        <input type="submit" name="button" id="button" value="提交" />
      </p>
    </form></td>
  </tr>
</table>
