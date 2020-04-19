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
			<?php 
			include 'menuLeft.php';
			?>

			<div class="col-lg-9 col-md-9" style="background-color: #CC681D; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<?php 
						include 'menuTop.php';
						?>
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