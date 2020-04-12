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
	<?php 
	include 'connect.php';
	?>
	
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
					<div class="topnav" id="myTopnav" class="col-lg-12">
						<a href="index.php" class="active">Trang chủ</a>
						<a href="gioithieu.php">Giới Thiệu</a>
						<a href="#contact">Contact</a>
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
					
					<?php 
					$sql = "select * from duantrienkhai";
					$stmt = $pdo->prepare($sql);
					$stmt->setFetchMode(PDO::FETCH_ASSOC);
					$stmt->execute();
					$resultSet = $stmt->fetchAll();
					for($i=0; $i<count($resultSet); $i++)
					{
						?>
						<div class="project" class="col-lg-6">
							<img src="<?=$resultSet[$i]["duongdananh"]?>" alt="Avatar" class="imageProject">
							<div class="overlay">
								<div class="textproject"><?=$resultSet[$i]["tenduan"]?></div>
							</div>
						</div>
						<?php 
					}
					?>

					

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