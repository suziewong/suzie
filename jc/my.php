<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户中心</title>
<body>
<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
	header("Location:login.html");
	exit();
}

//包含数据库连接文件
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
#$company = $_SESSION['company'];
#$telephone = $_SESSION['telephone'];
#$phone = $_SESSION['phone'];
#$QQ = $_SESSION['QQ'];
#$remark = $_SESSION['remark']; 
$user_query = mysql_query("select * from user where uid=$userid limit 1");
$row = mysql_fetch_array($user_query);
echo '用户信息：<br />';
echo '用户ID：',$userid,'<br />';
echo '用户名：',$username,'<br />';
echo '邮箱：',$row['email'],'<br />';
echo '注册日期：',date("Y-m-d", $row['regdate']),'<br />';
echo '公司：', $row['company'],'<br />';
echo '联系电话：', $row['telephone'],'<br />';
echo '手机：', $row['phone'],'<br />';
echo 'QQ: ', $row['QQ'],'<br />';
echo '备注：', $row['remark'],'<br />';
echo '前景色：', $row['frontcolor'],'<br />';
echo '背景色：', $row['backcolor'],'<br />';
echo '标定：', $row['img'],'<br />';
echo '样色：', $row['img2'],'<br />';
echo '<a href="login.php?action=logout">注销</a>登录<br />';
echo '<a href="reg2.html"> 继续输入您的系统配置</a><br />';
echo '<a href="upload.html">上传图片</a><br />'
?>

</body>
</html>
