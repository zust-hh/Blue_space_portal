<meta charset="utf-8">
<?php
include("logincheck.php");
if(logincheck()==2)
{
	if($_POST[Submit_new])
	{
		echo "Submit_new OK;";
		if($_POST[textfield2])
		{
			echo "title roger;";
			if(!empty($_FILES['file']['tmp_name'])){$havepic=true;echo "pic roger;";}else{$havepic=false;}
			if($_POST[settt]){$settt=1;echo "精华 roger;";}else{$settt=0;}
			if($havepic==true)
			{
				//传图
				$file = $_FILES['file'];
				$name = $file['name'];
				$type = strtolower(substr($name,strrpos($name,'.')+1)); 
				$allow_type = array('jpg','jpeg','gif','png');
				if(!in_array($type, $allow_type)){return ;}
				if(!is_uploaded_file($file['tmp_name'])){return ;}
				$upload_path = "../thumbnail/";
				$date=date('YmdHis');
				$random=rand(10000,99999);
				$picname=$date.$random.".".$type;
				if(move_uploaded_file($file['tmp_name'],$upload_path.$date.$random.".".$type)){
				  echo "Picture Upload Successfully!";
				}else{
				  echo "Picture Upload Failed!";
				}//传图结束
				$date2=date('Y-m-d H:i:s');
				$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
				mysql_query("SET NAMES UTF8"); 
				if($link_id)
				{
					$sqlquery=mysql_query("INSERT INTO `bluezone`.`article` (`title`, `main_type`, `subtype`, `author`, `time`, `rank`, `article`, `thumbnail`, `jinghua`) VALUES ('$_POST[textfield2]', '$_POST[select6]', '$_POST[select4]', '$_COOKIE[id]', '$date2', '$_POST[select5]', '$_POST[editor_1]', '$picname', '$settt');");
					mysql_close($link_id);
					echo "<br>文章发布成功！</br><a href=articleadmin.php?select=$_POST[select6]>继续编辑</a>";
				}
			}
			else
			{
				$date2=date('Y-m-d H:i:s');
				$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
				mysql_query("SET NAMES UTF8"); 
				if($link_id)
				{
					$sqlquery=mysql_query("INSERT INTO `bluezone`.`article` (`title`, `main_type`, `subtype`, `author`, `time`, `rank`, `article`, `jinghua`) VALUES ('$_POST[textfield2]', '$_POST[select6]', '$_POST[select4]', '$_COOKIE[id]', '$date2', '$_POST[select5]', '$_POST[editor_1]', '$settt');");
					mysql_close($link_id);
					echo "<br>文章发布成功！</br><a href=articleadmin.php?select=$_POST[select6]>继续编辑</a>";
				}
			}
		}
		else
		{
			echo "标题不能为空！";
		}
	}
	else if($_POST[Submit_edit])
	{
		echo "Submit_edit roger;";
		if($_POST[textfield2])
		{
			echo "title roger;";
			if(!empty($_FILES['file']['tmp_name'])){$havepic=true;echo "pic roger;";}else{$havepic=false;}
			if($_POST[settt]){$settt=1;echo "精华 roger;";}else{$settt=0;}
			if($havepic==true)
			{
				//传图
				$file = $_FILES['file'];
				$name = $file['name'];
				$type = strtolower(substr($name,strrpos($name,'.')+1)); 
				$allow_type = array('jpg','jpeg','gif','png');
				if(!in_array($type, $allow_type)){return ;}
				if(!is_uploaded_file($file['tmp_name'])){return ;}
				$upload_path = "../thumbnail/";
				$date=date('YmdHis');
				$random=rand(10000,99999);
				$picname=$date.$random.".".$type;
				if(move_uploaded_file($file['tmp_name'],$upload_path.$date.$random.".".$type)){
				  echo "Picture Upload Successfully!";
				}else{
				  echo "Picture Upload Failed!";
				}//传图结束
				$date2=date('Y-m-d H:i:s');
				$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
				mysql_query("SET NAMES UTF8"); 
				if($link_id)
				{
					$sqlquery=mysql_query("UPDATE `bluezone`.`article` SET `title`='$_POST[textfield2]', `main_type`='$_POST[select6]', `subtype`='$_POST[select4]', `author`='$_COOKIE[id]', `time`='$date2', `rank`='$_POST[select5]', `article`='$_POST[editor_1]', `thumbnail`='$picname', `jinghua`='$settt' WHERE `id`='$_POST[article_id]';");
					mysql_close($link_id);
					echo "<br>文章更改成功！</br><a href=articleadmin.php?select=$_POST[select6]>继续编辑</a>";
				}

			}
			else
			{
				$date2=date('Y-m-d H:i:s');
				$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
				mysql_query("SET NAMES UTF8"); 
				if($link_id)
				{
					$sqlquery=mysql_query("UPDATE `bluezone`.`article` SET `title`='$_POST[textfield2]', `main_type`='$_POST[select6]', `subtype`='$_POST[select4]', `author`='$_COOKIE[id]', `time`='$date2', `rank`='$_POST[select5]', `article`='$_POST[editor_1]', `jinghua`='$settt' WHERE `id`='$_POST[article_id]';");
					mysql_close($link_id);
					echo "<br>文章更改成功！</br><a href=articleadmin.php?select=$_POST[select6]>继续编辑</a>";
				}
			}
		}	
	}
}
?>