<?php
session_start();
if(!isset($_POST['submit'])){
	exit('非法访问!');
}
$username= $_SESSION['username'];
$frontcolor = $_POST['frontcolor'];
$backcolor = $_POST['backcolor'];
$img = $_POST['img'];
$img2= $_POST['img2'];
//注册信息判断
/*if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
	exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(strlen($password) < 6){
	exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)){
	exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
}*/
//包含数据库连接文件
include('conn.php');
//检测用户名是否已经存在
/*$check_query = mysql_query("select uid from user where username='$username' limit 1");
if(mysql_fetch_array($check_query)){
	echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
	exit;
}*/
//写入数据
//$password = MD5($password);
//$regdate = time();
$sql = "UPDATE user set frontcolor=$frontcolor,backcolor=$backcolor,img='$img',img2='$img2' where username='$username'";
if(mysql_query($sql,$conn)){
	exit('用户个人设置成功！点击此处 <a href="my.php">返回用户中心</a>');
} else {
	echo '抱歉！添加数据失败：',mysql_error(),'<br />';
	echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
