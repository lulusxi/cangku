﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>添加数据</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<center>
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
    	<td  height="106" background="images/banner.jpg">&nbsp;</td>
    </tr>
	<tr>
		<td>
		<table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="images/link.jpg">
			<tr>
				<td width="243" align="center" valign="middle"><b>
				<?php
					echo date("Y-m-d")." ";
				?>
				</b></td>
				<td width="90" align="center" valign="middle"><a href="select.php" class="a">浏览目录</a></td>
				<td width="94" align="center" valign="middle"><a href="index.php" class="a">添加图书</a></td>
				<td width="94" align="center" valign="middle"><a href="select.php" class="a">回到首页</a></td>
				<td width="91" align="center" valign="middle"><a href="chaxvn.php" class="a">高级查询</a></td>
				<td width="94" align="center" valign="middle"><a href="indexdel.php" class="a">批量管理</a></td>
				<td width="93" align="center" valign="middle"><a href="login.php" class="a">退出系统</a></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<?php
include_once("conn/conn.php");
if (!($_POST['bookname'] and $_POST['price'] and $_POST['f_time'] and $_POST['type'])){
	echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a> 返回";
}else{
	$sqlstr1 = "insert into tb_demo02 values('','".$_POST['bookname']."','".$_POST['price']."','".$_POST['f_time']."','".$_POST['type']."')";
	$result = mysqli_query($conn,$sqlstr1);
	if ($result){
		echo "添加成功,点击<a href='select.php'>这里</a>查看";
	}else{
		echo "<script>alert('添加失败');history.go(-1);</script>";
	}
}
?>
<table width="797" height="48" border="0" cellpadding="0" cellspacing="0" background="images/bottom.jpg">
	<tr><td>&nbsp;</td></tr>
</table>
</center>
</body>
</html>