<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content-type" content="text/html; charest=utf-8">
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="/leave/Public/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="/leave/Public/Css/Home/login.css" />
		<script type="text/javascript" src="/leave/Public/Js/jquery.js"></script>
		<script>
		$((function){
				$('img[title="login"]').click(function(){
					
				})
		})
		</script>
		<style>
		
		</style>
	</head>

	<body>
		<div id='head'>
		</div>
		<div id='main'>
		<form action='/leave/index.php/Home/Login/doLogin' method='post'>
			帐号：<input type='text' name='usename'/><br/>
			密码：<input type='password' name='password'/><br/>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="/leave/index.php/Home/Register/register">注册</a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="/leave/index.php/Home/Login/doLogin">登录</a>
			<th></th>
		</form>
	</div>
	</body>
</html>