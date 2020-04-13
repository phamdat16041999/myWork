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
						<div>
							<h3 style="text-align: center; width: 100%">Thư ngỏ</h3>
							<div style="text-indent: 20px"><em style="font-weight: 600">Kính gửi: </em>Quý Doanh nghiệp</div>
							<div style="text-indent: 20px">
								Thay mặt Ban Lãnh đạo cùng toàn thể đội ngũ Cán bộ, nhân viên <span style="font-weight: 600">Công ty Cổ phần HANAGO,</span> xin gửi tới Quý Doanh nghiệp lời chào trân trọng và thịnh vượng. Chúc cho sự hợp tác đôi bên bền vững, thành công.								
							</div>
							<br>
							<div style="text-indent: 20px">
								<span style="font-weight: 600">Công ty Cổ phần HANAGO</span> ra đời với sứ mệnh cung cấp các giải pháp tổng thể hỗ trợ và đồng hành cùng doanh nghiệp góp phần xây dựng, phát triển nển kinh tế trong giai đoạn Việt nam hội nhập kinh tế quốc tế. Đặc biệt là kể từ năm 2016, Nhà nước đưa việc phát triển và nâng tầm doanh nghiệp Việt trở thành một trong những mục tiêu trọng điểm, từ đó mở ra hành lang pháp lý và cơ hội cho các doanh nghiệp.

							</div>
							<br>
							<div style="text-indent: 20px">
								Với tầm nhìn dài hạn và quan điểm phát triển bền vững, <span style="font-weight: 600">TESA</span> Hướng tới trở thành đơn vị dẫn đầu thị trường về dịch vụ tư vấn tổng thể doanh nghiệp và trực tiếp triển khai những dịch vụ tư vấn tổng thể doanh nghiệp và trực tiếp triển khai những dịch vụ đã tư vấn sao cho phù hợp với tình hình phát triển của doanh nghiệp

							</div>
							<br>
							<div style="text-indent: 20px">
								Với tôn chỉ <span style="font-weight: 600">“Chuyên nghiệp – Trách nhiệm – Sáng tạo”</span> cùng Ban Lãnh đạo và đội ngũ chuyên gia có nhiều năm kinh nghiệm tư vấn, quản lý, điều hành, chúng tôi luôn sẵn sàng đáp ứng tối đa mọi yêu cầu nhằm đưa ra những giải pháp tổng thể giúp tối ưu hóa hoạt động của Quý Doanh nghiệp

							</div>
							<br>
							<div style="text-indent: 20px">
								Đồng hành cùng sự thành công của Quý Doanh nghiệp là niềm tự hào của chúng tôi. Với khát vọng <span style="font-weight: 600">“Nâng tầm doanh nghiệp Việt”</span>, TESA rất hy vọng có cơ hội hợp tác và góp phần vào sự phát triển thịnh vượng của quý doanh nghiệp trong xu thế hội nhập toàn cầu

							</div>
							<br>
							<div>
								Trân trọng!
							</div>
							<br>
							<div style="float: left; width: 60%; height: 200px;">

							</div>
							<div style="float: left; width: 40%; text-align: center;">
								<H5>Tổng giám đốc</H5>
								<br>
								<br>
								<br>
								<br>
								<h5>Nguyễn Văn Hưng</h5>
							</div>
						</div>
					</div>
				</div>	

			</div>



		</div>
		<!-- phan lien he  -->
		<div id="footer" style="margin-top: 10%">
			<div class="endpage">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td align="left" valign="top">
								<p style="font-size:12px">
									<strong>Copyright © 2011: </strong><strong>Công Ty TNHH Phát Triển Dự Án Song Nam </strong>- Hotline : <strong>0769 861 168</strong><br>
									<strong>Trụ sở chính: </strong>98 Trần Quang Khải, P. Tân Định, Quận 1, TP HCM - Tel: + (84.28) 3848 4995 - Fax: + (84.28) 35 265 269<br>
									<strong>Bình Dương: </strong>401/36 Lê Hồng Phong, P. Phú Hòa, TP. Thủ Dầu Một, Bình Dương - Tel / Fax: + (84 650) 385 6689<br>
									<strong>Song Nam USA Corporation:</strong> 26521 Lilac Hill Dr, Escondido, CA 92026, United States<br>
								</p>
							</td>
						</tr>
					</tbody></table>

				</div>

			</div>

		</body>
		</html>