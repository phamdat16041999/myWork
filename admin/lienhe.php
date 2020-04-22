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
	<style>
		td{
			width: 7%;
			height: auto;
		}
		.tablelienhe{
			border: 1px solid black;
			border-collapse: collapse;
		}
		.trlienhe{
			border: 1px solid black;
			border-collapse: collapse;
		}
		.tdlienhe{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<?php include 'connect.php' ?>
	<?php 
	if(isset($_GET['username'])&&isset($_GET['password']))
	{
		$a=$_GET['username'];
		$b=$_GET['password'];
		$query = "SELECT username, password FROM account WHERE username = '" . $a . "' and password = '". $b ."'" ;
		$stmt = $pdo->prepare($query);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();

		$username = $resultSet[0]["username"];
		$password = $resultSet[0]["password"];


		if ((count($resultSet)>0))
		{
			?>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<a href="admin.php?username=<?=$username?>&password=<?=$password?>" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
					</div>
					<div class="col-sm-10" >
						<h2 style="text-align: center; width: 80%; font-weight: 500;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h2>
					</div>
				</div>
			</div>



			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9" style="background-color: #CC681D; width: 100%; height: auto;">
						<div style="width: 100%">
							<?php 
							include 'menuTop.php';
							?>
						</div>
					</div>
					<div style="background-color: #F8FAD5; width: 100%; height: auto;">
						<form action="searchlienhe.php/username=<?=$username?>/password=<?=$password?>/" accept-charset="utf-8">
							Nhập ngày cần tìm: <input type="text" name="searchlienhe" placeholder="yyyy/mm/dd">
							<input type="submit" name="" value="Tìm kiếm">
						</form>
					</div>
					<div style="background-color: #F8FAD5; width: 100%; height: auto;">
						<table class="tablelienhe">
							<tr class="trlienhe">
								<td class="tdlienhe">Họ và tên</td>
								<td class="tdlienhe">Địa chỉ</td>
								<td class="tdlienhe">Điện thoại</td>
								<td class="tdlienhe">Gmail</td>
								<td class="tdlienhe">Mục đích gửi</td>
								<td class="tdlienhe">Tiêu đề</td>
								<td class="tdlienhe">Nội dung</td>
								<td class="tdlienhe">Ngày liên hệ</td>
							</tr>
							<?php 
							$sql = "select * from lienhe";
							$stmt = $pdo->prepare($sql);
							$stmt->setFetchMode(PDO::FETCH_ASSOC);
							$stmt->execute();
							$resultSet = $stmt->fetchAll();
							for($i=0; $i<count($resultSet); $i++)
							{
								?>
								<tr class="trlienhe">
									<td class="tdlienhe"><?=$resultSet[$i]["hoten"]?></td>
									<td class="tdlienhe"><?=$resultSet[$i]["diachi"]?></td>
									<td class="tdlienhe"><?=$resultSet[$i]["dienthoai"]?></td>
									<td class="tdlienhe"><?=$resultSet[$i]["email"]?></td>
									<td class="tdlienhe"><?=$resultSet[$i]["mucdichgui"]?></td>
									<td class="tdlienhe"><?=$resultSet[$i]["tieudegui"]?></td>
									<td class="tdlienhe"><?=$resultSet[$i]["noidung"]?></td>
									<td class="tdlienhe"><?=$resultSet[$i]["ngay"]?></td>
								</tr>
								<?php 
							}
							?>

						</table>
					</div>
					<?php 
					include 'enpage.php';
					?>
				</div>
			</div>
			<!-- phan lien he  -->

			<?php
		}
		else
		{
			echo 'Not found 404';
		}
	}
	?>

</body>
</html>