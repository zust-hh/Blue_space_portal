<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script charset="utf-8" src="/editor/kindeditor-comment.js"></script>
<script charset="utf-8" src="/editor/lang/zh_CN.js"></script>
	  <script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_1');
        });
</script>
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">
	<form id="form1" name="form1" method="get" action="articleadmin.php">
	  <p>选择主类型<select name="select">
        <option <?php if($_GET[select]=="优秀作品")echo 'selected="selected"';?>>优秀作品</option>
        <option <?php if($_GET[select]=="学习园地")echo 'selected="selected"';?>>学习园地</option>
        <option <?php if($_GET[select]=="蓝色动态")echo 'selected="selected"';?>>蓝色动态</option>
        <option <?php if($_GET[select]=="学科竞赛")echo 'selected="selected"';?>>学科竞赛</option>
        <option <?php if($_GET[select]=="公告")echo 'selected="selected"';?>>公告</option>
            </select>
	      <input type="submit" name="choose_main_type" value="选择" />
        </p>
	  </form>    </td>
    <td width="50%">
	<form id="form2" name="form2" method="POST" action="articleadmin.php">
	    <p>新建子类型：在
	      <select name="select2">
        <option <?php if($_GET[select]=="优秀作品")echo 'selected="selected"';?>>优秀作品</option>
        <option <?php if($_GET[select]=="学习园地")echo 'selected="selected"';?>>学习园地</option>
        <option <?php if($_GET[select]=="蓝色动态")echo 'selected="selected"';?>>蓝色动态</option>
        <option <?php if($_GET[select]=="学科竞赛")echo 'selected="selected"';?>>学科竞赛</option>
        <option <?php if($_GET[select]=="公告")echo 'selected="selected"';?>>公告</option>
          </select>
	      中添加子类型
	      <input type="text" name="addtype" />      
          <input type="submit" name="configadd" value="确认添加" />
         &nbsp;&nbsp;&nbsp;执行完这两项操作后请重新选择主类型</p>
	</form>
	<form id="form3" name="form3" method="POST" action="articleadmin.php">
	    <p>删除子类型：在
	      <select name="select3">
        <option <?php if($_GET[select]=="优秀作品")echo 'selected="selected"';?>>优秀作品</option>
        <option <?php if($_GET[select]=="学习园地")echo 'selected="selected"';?>>学习园地</option>
        <option <?php if($_GET[select]=="蓝色动态")echo 'selected="selected"';?>>蓝色动态</option>
        <option <?php if($_GET[select]=="学科竞赛")echo 'selected="selected"';?>>学科竞赛</option>
        <option <?php if($_GET[select]=="公告")echo 'selected="selected"';?>>公告</option>
          </select>
	      中删除子类型
	      <input type="text" name="deltype" />      
          <input type="submit" name="configdel" value="确认删除" />
        (请谨慎操作！)</p>
	</form>
	</td>
  </tr>
  <tr>
  <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1">
    <tr>
      <td>文章id</td>
      <td>标题</td>
	  <td>精华</td>
      <td>缩略图</td>
      <td>子类型</td>
      <td>作者</td>
      <td>修改日期</td>
      <td>访问权</td>
      <td>操作</td>
    </tr>
	
	<?php
	include("logincheck.php");
	$time=1;
	if(logincheck()==2)
	{
		$ifadmin=ture;
		echo '
		<script language="javascript">
		function del(srcurl,art_id){
			if(window.confirm("真的要删除吗？"))
			location.href=("?select="+srcurl+"&delete="+art_id);
		}
		var xmlhttp;
		function OnStatusChange()
		{
			if(xmlhttp.readyState==4)
			{
				if(xmlhttp.status==200)
				{
					editor.html(xmlhttp.responseText);
				}
			}
		}
		function ajax_load_article(art_id,art_title,jh,art_subtype,art_rank){
		editor.html("获取中……");
		//框中内容加载
		document.getElementById("textfield2").value=art_title;
		document.getElementById("article_id").value=art_id;
		document.getElementById("Submit_edit").style.display="inline";
		if(jh==1)
		document.getElementById("settt").checked=true;
		else if(jh==0)
		document.getElementById("settt").checked=false;
		
		var selected = document.getElementById("select4");
		for (var i=0; i<selected.options.length; i++) {
    	if( selected.options[i].value ==art_subtype){
        	selected.options[i].selected = true;
        	break;
    		}
		}
		selected = document.getElementById("select5");
		
		for (var i=0; i<selected.options.length; i++) {
    	if( selected.options[i].value ==art_rank){
        	selected.options[i].selected = true;
        	break;
    		}
		}
		
		//框中内容加载完毕
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
		url="echo_article.php?art_id=" + art_id;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange=OnStatusChange;
		xmlhttp.send(null);
		}
		</script>';
		if($_POST[select2]&&$_POST[addtype])
		{
			$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
			mysql_query("SET NAMES UTF8"); 
			$sqlquery=mysql_query("INSERT INTO bluezone.index_type_name (`main_type`, `subtype`) VALUES ('$_POST[select2]', '$_POST[addtype]');");
			mysql_close($link_id);
		}
		if($_POST[select3]&&$_POST[deltype])
		{
			$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
			mysql_query("SET NAMES UTF8"); 
			$sqlquery=mysql_query("DELETE FROM bluezone.index_type_name where main_type='$_POST[select3]' AND subtype='$_POST[deltype]';");
			mysql_close($link_id);
		}
		if($_GET[delete])
		{
			$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
			mysql_query("SET NAMES UTF8"); 
			$sqlquery=mysql_query("DELETE FROM bluezone.article where id='$_GET[delete]';");
			mysql_close($link_id);
		}
		if($_GET[select])
		{
			
			$link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
			mysql_query("SET NAMES UTF8"); 
			$sqlquery=mysql_query("SELECT id,title,main_type,subtype,author,time,rank,thumbnail,jinghua FROM bluezone.article where main_type='$_GET[select]';");
			while($row=mysql_fetch_array($sqlquery))
			{
			if($row[jinghua]=="1")
			{$jinghua="是";}
			else
			{$jinghua="否";}
			if($time%2==1)
				$bgc="bgcolor=#F2F9FF";
			else
				$bgc="bgcolor=#CCE6FF";
			echo
			"<tr ".$bgc.">
				<td>".$row[id]."</td>
				<td>".$row[title]."</td>
				<td>".$jinghua."</td><td>";
				
			if($row[thumbnail]!="")
			echo"
				<a href='../thumbnail/".$row[thumbnail]."'>查看</a>";
				
			echo"	
				</td><td>".$row[subtype]."</td>
				<td>".$row[author]."</td>
				<td>".$row[time]."</td>
				<td>".$row[rank]."</td>
				<td><a href=\"javascript:ajax_load_article(".$row[id].",'".$row[title]."',".$row[jinghua].",'".$row[subtype]."','".$row[rank]."')\">编辑</a>|<a href=\"javascript:del('".$_GET[select]."',".$row[id].")\">删除</a></td>
			</tr>";
			$time++;
			}
			mysql_close($link_id);
		}
	}
	else
	{echo "<script>alert ('您未登录，请重新登录！');</script>";}
	?>
	
    
  </table></td>
  <td><form id="form4" name="form4" method="post" action="article_publish.php" enctype="multipart/form-data">
    <p>标题
      <input type="text" id="textfield2" name="textfield2" />
      </p>
    <p>选择主类型
      <select name="select6">
        <option <?php if($_GET[select]=="优秀作品")echo 'selected="selected"';?>>优秀作品</option>
        <option <?php if($_GET[select]=="学习园地")echo 'selected="selected"';?>>学习园地</option>
        <option <?php if($_GET[select]=="蓝色动态")echo 'selected="selected"';?>>蓝色动态</option>
        <option <?php if($_GET[select]=="学科竞赛")echo 'selected="selected"';?>>学科竞赛</option>
        <option <?php if($_GET[select]=="公告")echo 'selected="selected"';?>>公告</option>
      </select>
      选择子类型
      <select id="select4" name="select4">
      <?php
	  if($ifadmin==ture)
	  {
		  $link_id = mysql_connect("localhost","pig","23333")or die("连接错误");
		  mysql_query("SET NAMES UTF8"); 
		  $sqlquery=mysql_query("SELECT subtype FROM bluezone.index_type_name where main_type='$_GET[select]';");
		  while($row=mysql_fetch_array($sqlquery))
		  {
			  echo
			  "<option>".$row[subtype]."</option>";
			  
		  }
		  mysql_close($link_id);
	  }
	  ?>
      </select>
      访问权
      <select id="select5" name="select5">
        <option selected="selected">0</option>
        <option>1</option>
      </select>
      0-任何人可见；1-高级用户可见
       &nbsp;&nbsp;&nbsp;<input name="settt" id="settt" type="checkbox" value="1" />
       设为头条（精华）
      </p>
      <hr />
    
      <p>
        <input type="text" name="article_id" id="article_id" style="display:none" />
 
        缩略图上传
        <input type="file" name="file" />
      （头条最好上传缩略图）</p>
      <hr />
	  
	    <p>
	      <textarea id="editor_1" name="editor_1" style="width:98%; height:600px;"></textarea>
        </p>
	    <p>
	      <input type="submit" id="Submit_edit" name="Submit_edit" value="提交修改" style="display:none"/>
          <input type="submit" name="Submit_new" value="作为新文章发布" onclick="javascript:document.getElementById('editor_1').value=editor.html();"/>
          <input type="reset" name="button" id="button" value="清空" onclick="javascript:document.getElementById('Submit_edit').style.display='none'"/>
        </p>
  </form>
  </td>
  </tr>
</table>
</body>
</html>
