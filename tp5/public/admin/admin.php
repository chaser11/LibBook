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
</head>
<body >

	<div id="top">
		<div class="logo">
			管理中心
		</div>
		<div class="login_info">
			<a href="#" style="color:#fff;">网站首页</a>&nbsp;|&nbsp;
			管理员： admin <a  href="login.php"><button onclick=removevalues()>[注销]</button></a>
		</div>
	</div>
	<div id="sidebar" ">
		<ul>
			<li>
				<div class="small_title">系统</div>
				<ul class="child">
					<li><a  href="index.php">系统信息</a></li>
					<li><a class="current" href="admin.php">管理员</a></li>
					<li><a href="adminadd.php">添加管理员</a></li>
					
				</ul>
			</li>
			<li><!--  class="current" -->
				<div class="small_title">用户管理</div>
				<ul class="child">
					<li><a   href="users.php">用户列表</a></li>
					<li><a   href="useradd.php">添加用户</a></li>
					<li><a href="userdelete.php">删除用户</a></li>
					<li><a href="usercheck.php">查询用户</a></li>
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
	<div id="main"  style="height:1000px;">
		<div class="title">管理员信息</div>
		<div class="explain">
		</div>
		<p style="font-size:20px" >        该功能暂未开放 ！</p>
		<table id = "userlist" class="list">
                </table>
		

		</div>
</body>

<script src="inc/public_foot.js"></script>
</html>