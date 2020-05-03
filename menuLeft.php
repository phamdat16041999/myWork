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
	<div class="col-lg-3 col-md-3" id="boderleft">
		<div class="row" style="margin-top: 40px">
			<div class="col-lg-12 col-md-12">
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
			<div class="col-lg-12 col-md-12">
				<div class="sidenav">
					<button class="dropdown-btn" style="text-align: left;">
						<a href="duantrienkhai.php" title=""><h3 class="texttitle">Dự án</h3></a>
						<i class="fa fa-caret-down"></i>
					</button>

				</div>
			</div>
			<script>

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
			<div class="col-lg-12" style="text-align: center;">
				<div>
					<img src="img/hotline.jpg" alt="" style="max-width: 100%; height: 50px;">
				</div>
			</div>
		</div>



	</div>
</body>
</html>