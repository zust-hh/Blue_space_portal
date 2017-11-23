<meta charset="utf-8" />
<?php

echo "========";
//判断pic文件框是否已经选择文件
if(!empty($_FILES['file']['tmp_name'])){
echo'已选择文件';
}else{
echo'请选择文件';
}
echo "========";
$file = $_FILES['file'];//得到传输的数据
//得到文件名称
$name = $file['name'];
$type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
$allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
//判断文件类型是否被允许上传
if(!in_array($type, $allow_type)){
  //如果不被允许，则直接停止程序运行
  return ;
}
//判断是否是通过HTTP POST上传的
if(!is_uploaded_file($file['tmp_name'])){
  //如果不是通过HTTP POST上传的
  return ;
}
$upload_path = "../thumbnail/"; //上传文件的存放路径
$date=date('YmdHis');
$random=rand(10000,99999);
//开始移动文件到相应的文件夹
$picname=$date.$random.".".$type;
echo "$picname";
if(move_uploaded_file($file['tmp_name'],$upload_path.$date.$random.".".$type)){
  echo "Picture Upload Successfully!";
}else{
  echo "Picture Upload Failed!";
}
?>