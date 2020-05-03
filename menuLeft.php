<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#nav1{
			position: relative;
			margin-bottom: 30px;
			margin: 0;
		}
		#nav1 li.list {
			display: block;
			float: none;
		}
		#nav1 li.list .heading{
			background: #CC681D;
			font-size: 22px;
			padding: 8px 0 8px 15px;

		}

		#nav1 li.list a {
			display: block;
			float: none;
			text-decoration: none;
			color: white;
			font-size: 20px;
			font-weight: bold;
			padding-left: 20px;
			background: #C0C0C0;
			letter-spacing: 4px;
		}

		#nav1 li.list ul.head {
			display: block;
			position: relative;
			margin: 0;
			background: #2c632c;
		}

		#nav1 li.list ul.head li a{
			padding: 10px;
			margin: 0;
		}
		#nav1 li.list ul.head li a:hover {
			background: #2c8493;
		}

		.head li {
			display: block;
			float: none;
		}
		#nav1 li.list ul.head{
			display: none;

		}
	</style>
</head>
<body>
	<div class="col-lg-3 col-md-3" style="background-color: #CC681D; border-top-left-radius:20px; padding: 10px; border-bottom-left-radius: 20px; overflow-x: hidden;">
		<div class="row" style="margin-top: 40px">
			<div class="col-lg-12 col-md-6">
				<ul id="nav1">
					<li class="list" id="btnService"><a href="#" class="heading">Menu Heading 1</a>
						<ul class="head">
							<li><a href="#">Stage1</a></li>
							<li><a href="#">Stage2</a></li>
							<li><a href="#">Stage3</a></li>
							<li><a href="#">Stage4</a></li>
						</ul>
					</li>
					<li class="list" id="btnService"><a href="#" class="heading">Menu Heading 2</a>
						<ul class="head">
							<li><a href="#">Stage1</a></li>
							<li><a href="#">Stage2</a></li>
							<li><a href="#">Stage3</a></li>
							<li><a href="#">Stage4</a></li>
						</ul>
					</li>
					<li class="list" id="btnService"><a href="#" class="heading">Menu Heading 3</a>
						<ul class="head">
							<li><a href="#">Stage1</a></li>
							<li><a href="#">Stage2</a></li>
							<li><a href="#">Stage3</a></li>
							<li><a href="#">Stage4</a></li>
						</ul>
					</li>
				</ul>
			</div>
					<!-- <div class="col-lg-12 col-md-6">
						<div class="sidenav" style="line-height: 1.15;">
							<button class="dropdown-btn" id="btnService">
								<div style="width: 100%; margin-left: 5%;">
									<h3>Dịch vụ</h3>
								</div>
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
					</div> -->
					<!-- <div class="col-lg-12 col-md-6">
						<div class="sidenav">
							<button class="dropdown-btn">
								<a href="duantrienkhai.php" title=""><h3>Dự án triển khai</h3></a>
								<i class="fa fa-caret-down"></i>
							</button>

						</div>
					</div> -->
					<!-- <script>

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
					</script> -->
					<!--  -->

					



					<!--  -->
					<div class="col-lg-12" style="text-align: center;margin-bottom: 50px;">
						<div>
							<img src="img/hotline.PNG" alt="" style="max-width: 100%; height: 75px;">
						</div>
					</div>
				</div>
			</div>
			<script >
				$(document).ready(function () {

					$('#btnService').on('mouseover', function () {
						console.log('btn-service')
						$("#copyright").toggle()
						$(".demo20").toggleClass("toggle")
					});
					$('#btnService').on('mouseout', function () {
						console.log('btn-service')
						$("#copyright").toggle()
						$(".demo20").toggleClass("toggle")
					});

				});

			</script>
			<script>
				$(document).ready(function() {
					$("#nav1 .list").hover(
						function() {
							
							$(this).find('.head').slideDown();
						},
						function() {
							$(this).find('.head').slideUp();
						});
				});
			</script>
		</body>
		</html>