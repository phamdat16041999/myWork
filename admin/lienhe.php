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
						<a href="admin.php" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
					</div>
					<div class="col-sm-10" >
						<h2 style="text-align: center; width: 80%; font-weight: 500;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h2>
					</div>
				</div>
			</div>



			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12" style="background-color: #CC681D; width: 100%; height: auto;">
						<div style="width: 100%">
							<?php 
							include 'menuTop.php';
							?>
						</div>
					</div>
					<div style="background-color: #CC681D; width: 100%; height: auto;">
						<table>
							<tr>
								<td>Họ và tên</td>
								<td>Địa chỉ</td>
								<td>Điện thoại</td>
								<td>Gmail</td>
								<td>Mục đích gửi</td>
								<td>Tiêu đề</td>
								<td>Nội dung</td>
								<td>Ngày liên hệ</td>
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
								<tr>
									<td><?=$resultSet[$i]["hoten"]?></td>
									<td><?=$resultSet[$i]["diachi"]?></td>
									<td><?=$resultSet[$i]["dienthoai"]?></td>
									<td><?=$resultSet[$i]["email"]?></td>
									<td><?=$resultSet[$i]["mucdichgui"]?></td>
									<td><?=$resultSet[$i]["tieudegui"]?></td>
									<td><?=$resultSet[$i]["noidung"]?></td>
									<td><?=$resultSet[$i]["ngay"]?></td>
								</tr>
								<?php 
							}
							?>



							<tr>
								
							</tr>
						</table>
					</div>
				</div>
			</div>
			<!-- phan lien he  -->
			<?php 
			include 'enpage.php';
			?>

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