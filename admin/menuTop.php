<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="topnav" id="myTopnav">
			<a href="admin.php?username=<?=$username?>&password=<?=$password?>" class="active">Trang chủ</a>
			<a href="/index.php">Đăng xuất</a>
		</div>


		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>
</body>
</html>