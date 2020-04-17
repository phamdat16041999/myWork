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
	<?php include 'connect.php' ?>
	<?php 
	if(isset($_GET['username'])&&isset($_GET['password'])&&isset($_GET['idduantrienkhai']))
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
		$idduantrienkhai = $resultSet[0]["idduantrienkhai"];


		if ((count($resultSet)>0))
		{
			$sql="delete from duantrienkhai where idduantrienkhai='".$idduantrienkhai."'";
			$stmt = $pdo->prepare($sql);	
			$stmt->execute();
			if($stmt != null){
				echo "Product has delete successfully!";
				header("Location: ./duantrienkhai.php?username=<?=$username?>&password=<?=$password?>");
			}
			else{
				echo "Try again";}
			}
		}
		else
		{
			echo 'Not found 404';
		}
	}
	?>

</body>
</html>