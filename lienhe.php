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
			<?php 
			include 'menuLeft.php';
			?>

			<div class="col-lg-8 col-md-12" id="boderright">
				<div>
					<?php 
					include 'menuTop.php';
					?>


				</div>	

				<div style="margin-top: 100px; margin-bottom: 10px;">
					<table style="width:100%; border: 1px solid black; background-color: #F8FAD5;">
						<tr>
							<th colspan="2">
								<h3 style="margin-top: 20px; text-align: center;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h3>
								<div class="textlienhe">
									- Địa chỉ: Ô111, Lô A, KĐT Đại Kim - Định Công, 
									Phường Định Công, Quận Hoàng Mai, TP. Hà Nội
								</div>
								<div class="textlienhe">
									- Tel: 02462.594.592
								</div>
								<div class="textlienhe">
									- Fax: 0243.6413.412
								</div>

							</th>
						</tr>
						<form action="" method="POST" accept-charset="utf-8">
							<tr>
								<td><div class="textlienhe">Họ và tên :</div></td>
								<td><input type="text" name="hoten" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Địa chỉ :</div></td>
								<td><input type="text" name="diachi" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Số điện thoại:</div></td>
								<td><input type="text" name="dienthoai" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Email :</div></td>
								<td><input type="text" name="email" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Mục đích gửi:</div></td>
								<td>									
									<select size="1" style="font-size:14pt" name="mucdichgui" id="cbopurpose">
										<option value="Hỗ trợ khách hàng">Hỗ trợ khách hàng</option>
										<option value="Góp ý">Góp ý</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><div class="textlienhe">Tiêu để gửi :</div></td>
								<td><input type="text" name="tieudegui" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Nội dung gửi :</div></td>
								<td><textarea name="noidung" style="width: 80%; overflow: auto;height: 200px"></textarea></td>
							</tr>
							<tr>
								<td colspan="2" style="text-align: center;"><input type="submit" name="" value="Đồng ý gửi"></td>
							</tr>
						</form>
					</table>
					<?php 
					if(isset($_POST['hoten'])&&isset($_POST['diachi'])&&isset($_POST['dienthoai'])&&isset($_POST['email'])&&isset($_POST['mucdichgui'])&&isset($_POST['tieudegui'])&&isset($_POST['noidung']))
					{
						$hoten=$_POST['hoten'];
						$diachi=$_POST['diachi'];
						$dienthoai=$_POST['dienthoai'];
						$email=$_POST['email'];
						$mucdichgui=$_POST['mucdichgui'];
						$tieudegui=$_POST['tieudegui'];
						$noidung=$_POST['noidung'];
						$date = date("Y-m-d");
						$add= "insert into lienhe (hoten, diachi, dienthoai, email, mucdichgui, tieudegui,noidung, ngay) values('".$hoten."', '".$diachi."', '".$dienthoai."', '" .$email."', '" .$mucdichgui."', '" .$tieudegui."', '" .$noidung."','" .$date."')";
						$stmt = $pdo->prepare($add);	
						$stmt->execute();
						if($stmt!= null){
							header("Location: ./index.php");
							echo "Product has add successfully!";
						}
						else
						{
							echo "Try again";
						}
					}
					?>









				</div>

			</div>



		</div>
		<!-- phan lien he  -->
		<?php 
		include 'enpage.php';
		?>

	</body>
	</html>