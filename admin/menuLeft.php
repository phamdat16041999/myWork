<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-lg-3 col-md-3" id="boderleft">
		<div class="row" style="margin-top: 40px">
			<div class="col-lg-12 col-md-12">
				<div class="sidenav">
					<button class="dropdown-btn">
						<a href="duantrienkhai.php?username=<?=$username?>&password=<?=$password?>" title=""><h3 class="texttitle">Quản lý dự án triển khai</h3></a>
						<i class="fa fa-caret-down"></i>
					</button>
					<button class="dropdown-btn">
						<a href="lienhe.php?username=<?=$username?>&password=<?=$password?>" title=""><h3 class="texttitle">Quản lý liên hệ</h3></a>
						<i class="fa fa-caret-down"></i>
					</button>
					<button class="dropdown-btn">
						<a href="selectaccount.php?username=<?=$username?>&password=<?=$password?>" title=""><h3 class="texttitle">Quản lý tài khoản</h3></a>
						<i class="fa fa-caret-down"></i>
					</button>

				</div>
			</div>
			<script>
				/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
				var dropdown = document.getElementsByClassName("dropdown-btn");
				var i;

				for (i = 0; i < dropdown.length; i++) {
					dropdown[i].addEventListener("click", function() {
						this.classList.toggle("active");
						var dropdownContent = this.nextElementSibling;
						if (dropdownContent.style.display === "block") {
							dropdownContent.style.display = "none";
						} else {
							dropdownContent.style.display = "block";
						}
					});
				}
			</script>
			<div class="col-lg-12" style="text-align: center;">
				<div>
					<img src="img/hotline.jpg" alt="" style="max-width: 100%; height: 50px;">
					<div style="margin-top: 5px;" >
						<a href="https://www.facebook.com/" target="new"><img src="img/facebook.png" class="imgContact"></a>
						<a href="https://mail.google.com/" target="new"><img src="img/mail.png" class="imgContact"></a>
						<a href="https://www.skype.com/en/" target="new"><img src="img/skype.png" class="imgContact"></a>
						<a href="https://vn.yahoo.com/" target="new"><img src="img/yahoo.jpg" class="imgContact"></a>	
					</div>
				</div>
			</div>
		</div>



	</div>
</body>
</html>