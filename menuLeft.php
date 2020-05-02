<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<div class="col-lg-3 col-md-3" id="boderleft">
				<div class="row" style="margin-top: 40px">
					<div class="col-lg-12 col-md-12">
						<div class="sidenav" style="line-height: 1.15;">
							<button class="dropdown-btn" id="btnService" style="text-align: left;">
								<div>
									<h3 class="texttitle">Dịch vụ</h3>
								</div>
								<i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-container">
								<a href="dichvu.php?nameimg=dichvu/dichvu1.png" title="" class="textContent">- Thi công công trình dân dụng, công nghiệp</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu2.png" title="" class="textContent">- Thi công công trình giao thông, Thủy Lợi</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu3.png" title="" class="textContent">- Thi công công trình hạ tầng kỹ thuật</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu4.png" title="" class="textContent">- Tư vấn giám sát công trình dân dụng, công nghiệp</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu5.png" title="" class="textContent">- Tư vấn giám sát công trình giao thông, Thủy Lợi</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu6.png" title="" class="textContent">- Tư vấn giám sát công trình hạ tầng kỹ thuật</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu7.png" title="" class="textContent">- Lập dự án đầu tư xây dựng công trình</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu8.png" title="" class="textContent">- Quản lý dự án công trình xây dựng</a><br>
							</div>

						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="sidenav">
							<button class="dropdown-btn" style="text-align: left;">
								<a href="duantrienkhai.php" title=""><h3 class="texttitle">Dự án</h3></a>
								<i class="fa fa-caret-down"></i>
							</button>

						</div>
					</div>
					<script>

						var dropdown = document.getElementsByClassName("dropdown-btn");
						var i;

						for (i = 0; i < dropdown.length; i++) {
							dropdown[i].addEventListener("mouseover", function() {
								this.classList.toggle("active");
								var dropdownContent = this.nextElementSibling;
								if (dropdownContent.style.display === "block") {
									dropdownContent.style.display = "none";
								} else {
									dropdownContent.style.display = "block";
								}

							});
							dropdown[i].addEventListener("mouseout", function() {
								this.classList.toggle("active");
								var dropdownContent = this.nextElementSibling;
								if (dropdownContent.style.display === "none") {
									dropdownContent.style.display = "block";
								} else {
									dropdownContent.style.display = "none";
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