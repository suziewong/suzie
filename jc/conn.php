<?php
/*****************************
*数据库连接
*****************************/
$conn = @mysql_connect("localhost","root","027267");
if (!$conn){
	die("数据库连接失败" . mysql_error());
}
mysql_select_db("test", $conn);
//字符转换，读库
mysql_query("set character set 'gbk'");
//写库
mysql_query("set names 'gbk'");
?>
