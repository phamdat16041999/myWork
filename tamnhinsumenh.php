<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css" media="screen">
		.imgtamnhinsumenh{
			width: 100%; 
			height: 300px; 
			margin-top: 10px;
			float: left;
		}
		.contenttamnhinsumenh{
			text-indent: 20px; font-weight: 450;
		}
		.titletamninsumenh{
			text-align: center; width: 100%;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<a href="index.php" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
			</div>
			<div class="col-sm-10" >
				<h2 style="text-align: center; width: 80%; font-weight: 500;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h2>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row" style=" border-radius: 30px; border-style: solid;">
			<div class="col-lg-4 col-md-12" style="background-color: #CC681D; border-top-left-radius:20px; padding: 10px; border-bottom-left-radius: 20px; overflow-x: hidden;">
				<div class="row" style="margin-top: 40px">
					<div class="col-lg-12 col-md-6">
						<div class="sidenav" style="line-height: 1.15;">
							<button class="dropdown-btn" style="text-align: center;"><h3>Dịch vụ</h3>
								<i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-container">
								<a href="dichvu.php?nameimg=dichvu/dichvu1.jpg" title="" class="textContent">- Thi công công trình dân dụng, công nghiệp</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu2.jpg" title="" class="textContent">- Thi công công trình giao thông, Thủy Lợi</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu3.jpg" title="" class="textContent">- Thi công công trình hạ tầng kỹ thuật</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu4.jpg" title="" class="textContent">- Tư vấn giám sát công trình dân dụng, công nghiệp</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu5.jpg" title="" class="textContent">- Tư vấn giám sát công trình giao thông, Thủy Lợi</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu6.jpg" title="" class="textContent">- Tư vấn giám sát công trình hạ tầng kỹ thuật</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu7.jpg" title="" class="textContent">- Lập dự án đầu tư xây dựng công trình</a><br>
								<a href="dichvu.php?nameimg=dichvu/dichvu8.jpg" title="" class="textContent">- Quản lý dự án công trình xây dựng</a><br>
							</div>

						</div>
					</div>
					<div class="col-lg-12 col-md-6">
						<div class="sidenav">
							<button class="dropdown-btn" style="text-align: center;"><h3>Dự án triển khai</h3>
								<i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-container">
								<a href="" title="" class="textContent">- Thi công công trình dân dụng, công nghiệp</a><br>
								<a href="" title="" class="textContent">- Thi công công trình giao thông, Thủy Lợi</a><br>
								<a href="" title="" class="textContent">- Thi công công trình hạ tầng kỹ thuật</a><br>
								<a href="" title="" class="textContent">- Tư vấn giám sát công trình dân dụng, công nghiệp</a><br>
								<a href="" title="" class="textContent">- Tư vấn giám sát công trình giao thông, Thủy Lợi</a><br>
								<a href="" title="" class="textContent">- Tư vấn giám sát công trình hạ tầng kỹ thuật</a><br>
								<a href="" title="" class="textContent">- Lập dự án đầu tư xây dựng công trình</a><br>
								<a href="" title="" class="textContent">- Quản lý dự án công trình xây dựng</a><br>
							</div>

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
							<img src="img/hotline.PNG" alt="" style="max-width: 100%; height: 50px;">
							<div style="margin-top: 5px;" >
								<a href="https://www.facebook.com/" target="new"><img src="img/facebook.PNG" class="imgContact"></a>
								<a href="https://mail.google.com/" target="new"><img src="img/mail.PNG" class="imgContact"></a>
								<a href="https://www.skype.com/en/" target="new"><img src="img/skype.PNG" class="imgContact"></a>
								<a href="https://vn.yahoo.com/" target="new"><img src="img/yahoo.jpg" class="imgContact"></a>	
							</div>
						</div>
					</div>
				</div>



			</div>

			<div class="col-lg-8 col-md-12" style="background-color: #CC681D; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="topnav" id="myTopnav">
							<a href="index.php" class="active">Trang chủ</a>
							<a href="vechungtoi.php">Về chúng tôi</a>
							<a href="lienhe.php">Liên hệ</a> 
							<a href="#about">About</a>
							<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
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
					</div>
					<div class="col-lg-12 col-md-12" style="margin-top: 20px; background-color: #F8FAD5; ">
						<div class="row">
							<div class="col-lg-6">
								<img src="img/tamnhin.png" alt="" class="imgtamnhinsumenh">
							</div>
							<div class="col-lg-6">
								<h3 class="titletamninsumenh">Tầm nhìn</h3>
								<div class="contenttamnhinsumenh">
									Trở thành Tập đoàn xây dựng hàng đầu Top 20 Việt nam, Doanh thu 1000 tỷ vào năm 2025.
								</div>
								<div class="contenttamnhinsumenh">
									Trên tất cả, Công ty cổ phần MANAGO đã tạo ra và duy trì hàng chục nghìn việc làm và những cơ hội làm việc chuyên nghiệp khác trên toàn đất nước Việt Nam. Đồng thời thu hút nhân tài và đầu tư quốc tế nhằm đóng góp vào sự phát tiển của đất nước.
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<img src="img/sumenh.png" alt="" class="imgtamnhinsumenh">
							</div>
							<div class="col-lg-6">
								<h3 class="titletamninsumenh">Sứ mệnh</h3>
								<div class="contenttamnhinsumenh">
									HANAGO không ngừng đổi mới, sáng tạo nhằm mang đến giá trị bễn vững cho xã hội, cộng đồng thông qua các hoạt động xây dựng và đầu tư dự án xây dựng trên trường quốc tế.
								</div>
								<div class="contenttamnhinsumenh">
									Cống hiến hết mình cho những giá trị phát triển bền vững với cộng đồng.
								</div>
								<div class="contenttamnhinsumenh">
									Mang tới sản phẩm và dịch vụ giúp nâng tầm tiêu chuẩn sống cho cộng đồng một cách nhất quán và minh bạch.
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<img src="img/giatricotloi.png" alt="" class="imgtamnhinsumenh">
							</div>
							<div class="col-lg-6">
								<h3 class="titletamninsumenh">Giá trị cốt lõi</h3>
								<div class="contenttamnhinsumenh">
									Chất lượng - Tiến độ 
								</div>
								<div class="contenttamnhinsumenh">
									Hiệu quả - Sáng tạo
								</div>
								<div class="contenttamnhinsumenh">
									Trung thực - Chuyên nghiệp
								</div>
								<div class="contenttamnhinsumenh">
									Đam mê - Quyết liệt
								</div>
								<div class="contenttamnhinsumenh">
									Đồng tâm - Nhất trí
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12" style="font-size: 20px; text-align: center;margin-top: 50px;">
								<span style="font-weight: 600">Slogan:</span>“ Đổi mới, sáng tạo là nhiệm vụ hàng đầu”.
							</div>
						</div>
					</div>
				</div>	

			</div>



		</div>
		<!-- phan lien he  -->
	<?php 
	include 'enpage.php';
	?>

		</body>
		</html>