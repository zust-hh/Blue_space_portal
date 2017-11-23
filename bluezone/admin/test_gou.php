<meta charset="utf-8" />
<form id="form1" name="form1" method="post" action="">
  <input type="checkbox" name="fxk" id="fxk" value="hah"/>
  <input type="text" name="textfieldnm" />
  <input type="submit" name="button" id="button" value="提交" />
  <input type="submit" name="button2" id="button2" value="提2交" />
</form>
<?php
if($_POST['textfieldnm'])
echo "aaa";
?>
<input type="submit" name="button3" id="button3" value="钩" onclick="javascript:document.getElementById('fxk').checked=true"; />
