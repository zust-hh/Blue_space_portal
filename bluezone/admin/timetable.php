<meta charset="utf-8" />
<table width="100%" border="1">
  <tr>
    <td valign="top" width="50%"><table width="100%" border="1">
      <tr>
        <td>id</td>
        <td>标题</td>
        <td>开始时间</td>
        <td>持续时间（分钟）</td>
        <td>地点</td>
        <td>附加信息</td>
        <td>操作</td>
      </tr>
      
      <?php
		include("logincheck.php");
		if(logincheck()==2)
		{
			$time=1;
			$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
			mysql_query("SET NAMES UTF8");
			if($_GET[del])
			{
				$sqldel=mysql_query("DELETE FROM bluezone.timetable where id='$_GET[del]';");
			}
			if($_GET[edit])
			{
				$sqlfet=mysql_query("SELECT * FROM bluezone.timetable where id='$_GET[edit]';");
				$edit=mysql_fetch_array($sqlfet);
			}
			if($_POST[id]&&$_POST[title]&&$_POST[begintime]&&$_POST[duration]&&$_POST[place])
			{
				if(!empty($_FILES['file']['tmp_name'])){$havepic=true;;}else{$havepic=false;}
				if($havepic==true)
				{//传图
				$file = $_FILES['file'];
				$name = $file['name'];
				$type = strtolower(substr($name,strrpos($name,'.')+1)); 
				$allow_type = array('jpg','jpeg','gif','png');
				if(!in_array($type, $allow_type)){return ;}
				if(!is_uploaded_file($file['tmp_name'])){return ;}
				$upload_path = "../img/";
				$date=date('YmdHis');
				$random=rand(10000,99999);
				$picname="act".$date.$random.".".$type;
				if(move_uploaded_file($file['tmp_name'],$upload_path.$picname)){
				  echo "Picture Upload Successfully!";
					}else{
				  echo "Picture Upload Failed!";
					}//传图结束
					mysql_query("UPDATE `bluezone`.`timetable` SET `id`='$_POST[id]', `title`='$_POST[title]', `begintime`='$_POST[begintime]', `duration`='$_POST[duration]', `place`='$_POST[place]', `info`='$_POST[info]', `image`='$picname' WHERE `id`='$_POST[id]';");
				}
				else
				mysql_query("UPDATE `bluezone`.`timetable` SET `id`='$_POST[id]', `title`='$_POST[title]', `begintime`='$_POST[begintime]', `duration`='$_POST[duration]', `place`='$_POST[place]', `info`='$_POST[info]' WHERE `id`='$_POST[id]';");

			}
			else if($_POST[title]&&$_POST[begintime]&&$_POST[duration]&&$_POST[place]&&$_POST[info])
			{
				$sqlins=mysql_query("INSERT INTO bluezone.timetable (`title`, `begintime`, `duration`, `place`, `info`) VALUES ('$_POST[title]', '$_POST[begintime]', '$_POST[duration]', '$_POST[place]', '$_POST[info]');");
			}
			else if($_POST[title]&&$_POST[begintime]&&$_POST[duration]&&$_POST[place])
			{
				$sqlins=mysql_query("INSERT INTO bluezone.timetable (`title`, `begintime`, `duration`, `place`) VALUES ('$_POST[title]', '$_POST[begintime]', '$_POST[duration]', '$_POST[place]');");
			}
			$sqlquery=mysql_query("SELECT * FROM bluezone.timetable;");
			while($row=mysql_fetch_array($sqlquery))
			{
				if($time%2==1)
				$bgc="bgcolor=#F2F9FF";
				else
				$bgc="bgcolor=#CCE6FF";
				echo
				"<tr ".$bgc.">
				<td>".$row[id]."</td>
				<td>".$row[title]."</td>
				<td>".$row[begintime]."</td>
				<td>".$row[duration]."</td>
				<td>".$row[place]."</td>
				<td>".$row[info]."</td>
				<td><a href='timetable.php?del=".$row[id]."'>删除</a>|<a href=\"timetable.php?edit=$row[id]\">编辑</a></td>
				</tr>";
				$time++;
			}
			mysql_close($link_id);
		}
		?>
        
    </table></td>
    <td valign="top" width="30%"><form id="form1" name="form1" method="post" action="timetable.php" enctype="multipart/form-data">
    	<input type="text" name="id" id="id" value="<?php if($_GET[edit]){echo "$edit[id]";} ?>" style="display:none"/>
      <p>标题
        <input type="text" name="title" id="textfield" value="<?php if($_GET[edit]){echo "$edit[title]";} ?>" />
      </p>
      <p>开始时间
        <input type="text" name="begintime" id="textfield2"  value="<?php if($_GET[edit]){echo "$edit[begintime]";} ?>" />
      （范例格式：2016-01-01 14:00:00）</p>
      <p>结束时间
        <input type="text" name="duration" id="textfield3"  value="<?php if($_GET[edit]){echo "$edit[duration]";} ?>" />
      （范例格式：16:30:00）</p>
      <p>地点
        <input type="text" name="place" id="textfield4" value="<?php if($_GET[edit]){echo "$edit[place]";} ?>" />
      </p>
      <p>附加信息
        <textarea name="info" id="info" cols="45" rows="5"><?php if($_GET[edit]){echo "$edit[info]";} ?></textarea>
      </p>
      <p><input type="file" name="file" />请在编辑状态下加图</p>
      <p>
        <input type="submit" name="button" id="button" value="确定" /><input type="button" name="button2" id="button2" onclick="javascript:location.href='timetable.php';" value="重置" />
      </p>
    </form></td>
    <td valign="top" width="20%"><?php if($edit[image]&&$edit[image]!=""){echo "<img src=\"../img/$edit[image]\" />";} ?></td>
  </tr>
</table>
