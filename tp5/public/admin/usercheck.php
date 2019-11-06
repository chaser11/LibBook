﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>后台界面</title>
<meta name="keywords" content="后台界面" />
<meta name="description" content="后台界面" />
<link rel="stylesheet" type="text/css" href="style/public.css" />
<script src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="inc/checkadmin.js"></script>
<script src="inc/checkuser.js"></script>
</head>
<body>

	<div id="top">
		<div class="logo">
			管理中心
		</div>
		<div class="login_info">
			<a href="#" style="color:#fff;">网站首页</a>&nbsp;|&nbsp;
			管理员： admin <a  href="login.php"><button onclick=removevalues()>[注销]</button></a>
		</div>
	</div>
	<div id="sidebar">
		<ul>
			<li>
				<div class="small_title">系统</div>
				<ul class="child">
					<li><a class="current" href="index.php">系统信息</a></li>
					<li><a href="admin.php">管理员</a></li>
					<li><a href="adminadd.php">添加管理员</a></li>
					
				</ul>
			</li>
			<li><!--  class="current" -->
				<div class="small_title">用户管理</div>
				<ul class="child">
					<li><a  href="users.php">用户列表</a></li>
					<li><a   href="useradd.php">添加用户</a></li>
					<li><a href="userdelete.php">删除用户</a></li>
					<li><a class="current" href="usercheck.php">查询用户</a></li>
				</ul>
			</li>
			<li>
				<div class="small_title">座位管理</div>
				<ul class="child">
					<li><a href="seats.php">座位列表</a></li>
					<li><a href="seatadd.php">添加座位</a></li>
					<li><a href="seatdelete.php">删除座位</a></li>
					<li><a href="seatcheck.php">查询座位</a></li>
					<li><a href="seatclear.php">清空座位</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="main" style="height:1000px;">
		<div class="title">系统信息</div>
		<div class="explain">
			<ul>
			<li>- 您好，admin
<li>|- 所属角色：超级管理员</li>
<li>|- 管理员(1) 用户(<text id="usersnumber"> </text>) 位置(<text id="seatsnumber"> </text>) <li>
<li>|- 服务器操作系统：CentOS</li>
<li>|- 服务器软件：Apache/2.4.23 (Win32) PHP/7.0.10<li>
<li>|- MySQL 版本：5.7.14</li>
<li>|- 内存限制：128M</li>
			</ul>
		</div>
		<table class="list">
			<tr>
				 	 	
				<th>姓名</th>
			</tr>
			<tr>
				
				<td><input class="sort" type="text" name="sort" id = "name"/></td>
			</tr>
		</table>		
		<input class="btn" onclick=getname() type="submit" name="submit" value="查询" />
		<table class="list">
			<tr>
				 	 	
				<th>学号</th>
			</tr>
			<tr>
				
				<td><input class="sort" type="text" name="sort" id = "num"/></td>
			</tr>
		</table>		
		<input class="btn" onclick=getnum() type="submit" name="submit" value="查询" />

	</div>
</body>


<script src="inc/public_foot.js"></script></script>

</html>