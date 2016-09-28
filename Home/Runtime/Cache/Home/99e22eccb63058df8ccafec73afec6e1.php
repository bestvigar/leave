<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content-type" content="text/html; charest=utf-8">
		<title>注册</title>
		<link rel="stylesheet" type="text/css" href="/leave/Public/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="/leave/Public/Css/Home/register.css" />
		<script type="text/javascript" src="/leave/Public/Js/jquery.js"></script>
	</head>
	<body>
		<div id='head'>
		</div>
		<div id='main'>
		<form action='/leave/index.php/Home/Register/doesAdd' method='post'>
			帐&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp号：<input type='text' name='name'/><br/>
			密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp码：<input type='password' name='password'/><br/>
			<!-- 确认密码：<input type='password' name='password'/><br/> -->
			<tr>
				<td><input type='submit' value='提交'/></td>
				<td><a href="/leave/index.php/Home/Register/register">重置</a></td>
			</tr>
		</form>
	</div>
	</body>