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
		<div class="header">header</div>
	<!-- 	@yield('content') -->
		@section('content')

		<p>我是</p>

		@show


		<div class="footer">footer</div>	
</body>
</html>