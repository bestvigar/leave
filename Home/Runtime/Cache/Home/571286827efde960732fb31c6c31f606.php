<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content-type" content="text/html; charest=utf-8">
		<title>请假记录</title>
		<link rel="stylesheet" type="text/css" href="/leave/Public/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="/leave/Public/Css/Home/first.css" />
		<script type="text/javascript" src="/leave/Public/Js/jquery.js"></script>
	</head>
	<body>
		<div id='wapper'>
			<div id="head1">
		</div>
		<div id='head'>
			<font size="5">学生请假信息
		</div>
		<div id='main1'>
		<table width=96% border="1" align="center">
			<tr>
				<td><font size="4" >&nbsp&nbsp&nbsp&nbsp&nbsp姓名</td>
			 	<td><font size="4" >&nbsp&nbsp&nbsp&nbsp&nbsp班级</td> 
			 	<td><font size="4" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp学号</td>
			 	<td><font size="4" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp起始日期</td>
				<td><font size="4" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp截止日期</td>
				<td><font size="4" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp联系方式</td>
			 	<td>
			 		<a href='/leave/index.php/Home/Delete/delete?id=<?php echo ($vo["id"]); ?>'>增添</a>
					<a href='/leave/index.php/Home/Delete/delete?id=<?php echo ($vo["id"]); ?>'>查询</a>
					<a href='/leave/index.php/Home/Enter/enter'>返回</a>
				</td>
			</tr>
		</div>
		<div id='main2'>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
							<td><?php echo ($vo["usename"]); ?></td>
							<td><?php echo ($vo["useclass"]); ?></td>
							<td><?php echo ($vo["usenum"]); ?></td>
							<td><?php echo ($vo["sdata"]); ?></td>
							<td><?php echo ($vo["edata"]); ?></td>
							<td><?php echo ($vo["usepnum"]); ?></td>
							<td>
								<a href='/leave/index.php/Home/Update/update?id=<?php echo ($vo["id"]); ?>'>修改</a>
								<a href='/leave/index.php/Home/Delete/delete?id=<?php echo ($vo["id"]); ?>'>删除</a>
							</td>
							</tr><?php endforeach; endif; ?>		
						</div>
					</div>
	</body>
</html>