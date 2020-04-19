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
			<?php 
			include 'menuLeft.php';
			?>

			<div class="col-lg-9 col-md-9" id="boderright">
				<?php 
				include 'menuTop.php';
				?>


				<div style="margin-top: 100px; margin-bottom: 10px;">
					<div class="slideshow-container">

						<div class="mySlides fade">
							<div class="numbertext">1 / 3</div>
							<img src="img/2.jpg" class="imghome">
							<div class="text">Caption Text</div>
						</div>

						<div class="mySlides fade">
							<div class="numbertext">2 / 3</div>
							<img src="img/3.jpg" class="imghome">
							<div class="text">Caption Two</div>
						</div>

						<div class="mySlides fade">
							<div class="numbertext">3 / 3</div>
							<img src="img/4.jpg" class="imghome">
							<div class="text">Caption Three</div>
						</div>

					</div>
					<br>

					<div style="text-align:center">
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span> 
					</div>

					<script>
						var slideIndex = 0;
						showSlides();

						function showSlides() {
							var i;
							var slides = document.getElementsByClassName("mySlides");
							var dots = document.getElementsByClassName("dot");
							for (i = 0; i < slides.length; i++) {
								slides[i].style.display = "none";  
							}
							slideIndex++;
							if (slideIndex > slides.length) {slideIndex = 1}    
								for (i = 0; i < dots.length; i++) {
									dots[i].className = dots[i].className.replace(" active", "");
								}
								slides[slideIndex-1].style.display = "block";  
								dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>

</div>



</div>
<!-- phan lien he  -->
<?php 
include 'enpage.php';
?>

</body>
</html>