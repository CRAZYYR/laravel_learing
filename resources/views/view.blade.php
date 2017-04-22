<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<style type="text/css">
.header{
	height: 100px;
	background-color: #797979;
}
.middle{
	height: 400px;
	background-color: #565656;
}
.footer{
	height: 100px;
	background-color: #464646;
}




	</style>
</head>
<body>

<!-- 公用的部分演示
 -->
@include('common/header',['page'=>'==首页=='])
		
		<div class="middle">middle</div>
@include('common.footer')	
</body>
</html>