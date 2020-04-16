<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css" media="screen">
		.parent {
			background-image: url('img/backgroundHome.jpg');
			background-size: cover;
			background-position: center;
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		form {
			display: inline-block;
			background: #b4e9fb;
			padding: 30px;
			border-radius: 10px;
			text-align: center;
		}

		form input[type="text"] {
			width: 250px;
			border-radius: 5px;
			outline: 0;
			border: 0;
			height: 35px;
			margin: 10px 3px 20px 3px;
		}

		input[type="submit"] {
			outline: 0;
			border: 0;
			font-weight: 700;
			color: white;
			background: #049bcc;
			padding: 5px 20px;
			border-radius: 10px;
			font-size: 20px;
			width: 100px;
			display: inline-block;
		}
		input[type="submit"]:hover{
			opacity: .8;
			transition: all .4s ease-in-out;
		}
	</style>
</head>
<body>

	<?php include 'connect.php' ?>
	<div class="parent">
		

		<form action="" method="POST">
			<input type="text" name="UserName" value="User name">
			<input type="text" name="PassWord" value="Password">
			<div><input type="submit" value="Login" name="Login"></div>
			<?php 
			if(isset($_POST['UserName'])&&isset($_POST['PassWord']))
			{
				$a=$_POST['UserName'];
				$b=$_POST['PassWord'];
				$query = "SELECT username, password FROM account WHERE username = '" . $a . "' and password = '". $b ."'" ;
				$stmt = $pdo->prepare($query);
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();
				$resultSet = $stmt->fetchAll();

				$username = $resultSet[0]["username"];
				$password = $resultSet[0]["password"];
	

				if ((count($resultSet)>0))
				{

					header("Location: ./admin.php?username=$username&password=$password");
					
				}
				else
				{
					echo 'Vui lòng kiểm tra lại mật khẩu';
				}
			}
			?>

		</form>
	</div>


</body>
</html>