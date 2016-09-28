<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content=type" content="textml;charset=utf-8">
		<title>我要请假</title>
		<link rel="stylesheet" type="text/css" href="/leave/Public/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="/leave/Public/Css/Home/add.css" />
		<script type="text/javascript" src="/leave/Public/Js/jquery.js"></script>
	</head>
	<body>
		<div id='wapper'>
		<div id='head'>
		</div>
			<div id='title'>
				<font size='5'>请填写以下信息
			</div>
		<div id='main'>
			<form action='/leave/index.php/Home/Add/doAdd' method='post'>
			<table align="center" height="50px">
				<tr><td><strong>姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp名</td> <td><input type='text' name='usename'/></td></tr>
				<tr><td><strong>班&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp级</td> <td><input type='text' name='useclass'/></td></tr>
				<tr><td><strong>学&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp号</td> <td><input type='text' name='usenum'/></td></tr>
				<tr><td><strong>起始日期</td> <td><input type='text' name='sdata'/></td></tr>
				<tr><td><strong>截至日期</td> <td><input type='text' name='edata'/></td></tr>
				<tr><td><strong>联系方式</td> <td><input type='text' name='usepnum'/></td></tr>
			</table>
			<table align='center' height='55px'>
				<tr><td><input type='submit' value='提交'/></td></tr>
			</table>
			</form>
		</div>
		</div>
	</body>
</html>