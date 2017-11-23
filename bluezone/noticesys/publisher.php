
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script charset="utf-8" src="/editor/kindeditor-comment.js"></script>
<script charset="utf-8" src="/editor/lang/zh_CN.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/JavaScript">
<!--









function tijiao()
{
	var html = editor.html();
	var statu=1;//0为无法执行，1为正常，2为链接模式
	var title=document.getElementById("title_1").value;//获取标题
		if(title=='')
		{alert("标题不能为空！");statu=0;}
	var author=document.getElementById("author").value;
		if(author=='')
		{alert("作者不能为空！");statu=0;}
	var linkkk=document.getElementById("linkkk").value;
		if(linkkk!='')
		statu=2;
	var tempf=document.createElement("form");
	tempf.action="receiver.php";
	tempf.method="post";
	tempf.style.display="none";
	alert(statu);
	if(statu==1)
	{
		var tj_statu=document.createElement("textarea");
		tj_statu.name="statu";
		tj_statu.value="1";
		tempf.appendChild(tj_statu);
		var tj_textarea=document.createElement("textarea");
		tj_textarea.name="textarea";
		tj_textarea.value=html;
		tempf.appendChild(tj_textarea);
		var tj_title=document.createElement("textarea");
		tj_title.name="title";
		tj_title.value=title;
		tempf.appendChild(tj_title);
		var tj_author=document.createElement("textarea");
		tj_author.name="author";
		tj_author.value=author;
		tempf.appendChild(tj_author);
		tempf.submit();
	}
	else if(statu==2)
	{
		var tj_statu=document.createElement("textarea");
		tj_statu.name="statu";
		tj_statu.value="2";
		tempf.appendChild(tj_statu);
		var tj_title=document.createElement("textarea");
		tj_title.name="title";
		tj_title.value=title;
		tempf.appendChild(tj_title);
		var tj_link=document.createElement("textarea");
		tj_link.name="link";
		tj_link.value=linkkk;
		tempf.appendChild(tj_link);
		var tj_author=document.createElement("textarea");
		tj_author.name="author";
		tj_author.value=author;
		tempf.appendChild(tj_author);
		tempf.submit();
	}
	
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}

function MM_initTimelines() { //v4.0
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    var ns4 = (ns && parseInt(navigator.appVersion) == 4);
    var ns5 = (ns && parseInt(navigator.appVersion) > 4);
    var macIE5 = (navigator.platform ? (navigator.platform == "MacPPC") : false) && (navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4);
    document.MM_Time = new Array(2);
    document.MM_Time[0] = new Array(0);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 15;
    document.MM_Time[0].lastFrame = 0;
    document.MM_Time[1] = new Array(0);
    document.MM_Time["Timeline2"] = document.MM_Time[1];
    document.MM_Time[1].MM_Name = "Timeline2";
    document.MM_Time[1].fps = 15;
    document.MM_Time[1].lastFrame = 0;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}

function MM_initTimelines() { //v4.0
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    var ns4 = (ns && parseInt(navigator.appVersion) == 4);
    var ns5 = (ns && parseInt(navigator.appVersion) > 4);
    var macIE5 = (navigator.platform ? (navigator.platform == "MacPPC") : false) && (navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4);
    document.MM_Time = new Array(1);
    document.MM_Time[0] = new Array(0);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 15;
    document.MM_Time[0].lastFrame = 0;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}
//-->
</script>
<style type="text/css">
<!--
.STYLE3 {
	font-family: "微软雅黑";
}
.STYLE4 {
	color: #3366CC;
}
#Layer1 {
	position:absolute;
	width:352px;
	height:27px;
	z-index:1;
	left: 891px;
	top: 107px;
}
.STYLE6 {font-family: "微软雅黑"; color: #666666; }
-->
</style>
</head>

<body onload="MM_preloadImages('../guidebar_icon/indexbutton_click.jpg','../guidebar_icon/goodwork_click.jpg','../guidebar_icon/studyzone_click.jpg','../guidebar_icon/exam_click.jpg','../guidebar_icon/bbs_click.jpg','../guidebar_icon/zoneinfo_click.jpg')">
<div align="center">
  <table width="960" border="0">
    <tr>
      <td width="960" height="54">
        <table height="78" border="0" cellpadding="0" cellspacing="0">
          <tr>
		  	<td><p><img src="../guidebar_icon/lskjtittle.jpg" alt="lskj_icon" width="314" height="81" />
            <td><a href="../index.html" target="_top" onclick="MM_nbGroup('down','group1','index','../guidebar_icon/indexbutton_click.jpg',1)" onmouseover="MM_nbGroup('over','index','../guidebar_icon/indexbutton_click.jpg','../guidebar_icon/indexbutton_click.jpg',1)" onmouseout="MM_nbGroup('out')"> <img src="../guidebar_icon/indexbutton.jpg" alt="" name="index" width="104" height="81" border="0" id="index" onload="" /></a></td>
            <td><a href="../goodwork.html" target="_top" onclick="MM_nbGroup('down','group1','goodwork','../guidebar_icon/goodwork_click.jpg',1)" onmouseover="MM_nbGroup('over','goodwork','../guidebar_icon/goodwork_click.jpg','../guidebar_icon/goodwork_click.jpg',1)" onmouseout="MM_nbGroup('out')"><img src="../guidebar_icon/goodwork.jpg" alt="" name="goodwork" width="104" height="81" border="0" id="goodwork" onload="" /></a></td>
            <td><a href="../studyzone.html" target="_top" onclick="MM_nbGroup('down','group1','studyzone','../guidebar_icon/studyzone_click.jpg',1)" onmouseover="MM_nbGroup('over','studyzone','../guidebar_icon/studyzone_click.jpg','../guidebar_icon/studyzone_click.jpg',1)" onmouseout="MM_nbGroup('out')"><img src="../guidebar_icon/studyzone.jpg" alt="" name="studyzone" width="104" height="81" border="0" id="studyzone" onload="" /></a></td>
            <td><a href="../exam.html" target="_top" onclick="MM_nbGroup('down','group1','exam','../guidebar_icon/exam_click.jpg',1)" onmouseover="MM_nbGroup('over','exam','../guidebar_icon/exam_click.jpg','../guidebar_icon/exam_click.jpg',1)" onmouseout="MM_nbGroup('out')"><img src="../guidebar_icon/exam.jpg" alt="" name="exam" width="104" height="81" border="0" id="exam" onload="" /></a></td>
            <td><a href="../upload/forum.php" target="_top" onclick="MM_nbGroup('down','group1','bbs','../guidebar_icon/bbs_click.jpg',1)" onmouseover="MM_nbGroup('over','bbs','../guidebar_icon/bbs_click.jpg','../guidebar_icon/bbs_click.jpg',1)" onmouseout="MM_nbGroup('out')"><img src="../guidebar_icon/bbs.jpg" alt="" name="bbs" width="104" height="81" border="0" id="bbs" onload="" /></a></td>
            <td><a href="../zoneinfo.html" target="_top" onclick="MM_nbGroup('down','group1','zoneinfo','../guidebar_icon/zoneinfo_click.jpg',1)" onmouseover="MM_nbGroup('over','zoneinfo','../guidebar_icon/zoneinfo_click.jpg','../guidebar_icon/zoneinfo_click.jpg',1)" onmouseout="MM_nbGroup('out')"><img src="../guidebar_icon/zoneinfo.jpg" alt="" name="zoneinfo" width="104" height="81" border="0" id="zoneinfo" onload="" /></a></td>
          </tr>
      </table></td></tr>
    <tr>
      <td valign="bottom"><span class="STYLE3"><img src="../guidebar_icon\smallhouse_icon.jpg" width="24" height="21" align="bottom" />当前位置：<span class="STYLE4">公告栏&gt;通知发布系统</span></span></td>
    </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor=#CCE6FF>
          <td>标题</td>
          <td>作者</td>
          <td>日期</td>
		  <td>链接</td>
		  <td>操作</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>修改&nbsp;&nbsp;删除</td>
        </tr>
		<?php
		
		?>
      </table></td>
      <td width="50%" valign="top">
	  <p>标题：<input id="title_1" type="text" name="textfield_title" /></p>
	  <p>作者：<input id="author" type="text" name="textfield_author" /></p>
	  <p>链接：<input id="linkkk" type="text" name="textfield_link" />(若非必要请留空！)</p>
        <p>
          <textarea id="editor_1" name="content" style="width:100%;height:300px">内容部分</textarea>
        </p>
        <p>
          <input name="tj" type="button" value="提交" onclick="tijiao();"/>
          <script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_1');
        });

          </script>
                </p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
