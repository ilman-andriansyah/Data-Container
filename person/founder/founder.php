<!DOCTYPE html>
<html>
<head>
	<title>The Founder</title>
	<link rel="stylesheet" type="text/css" href="../../style/view.css">
	<style type="text/css">
		 * {
			padding:0;
			margin:0;
			-webkit-box-sizing:border-box;
			-moz-box-sizing:border-box;
			-box-sizing:border-box;
		}
		img {
			max-width: 100%;
			height: auto;
			border-radius:150px;
		}
		ul,ol {
			list-style-type: none;
		}

		body {
			background-color: #0273c7;
			font-family: 'cambria', sans-serif;
		}

		@media (min-width:768px){
			.container {
				width:900px;
			}

		}
		.container {
			margin:10px auto;
			position: relative;
			overflow: hidden;
		}
		.page-title {
			margin:17px auto;
			text-align: center;
			color:#fff;
			font-size: 17px;
		}
		.page-title h1 {
			font-size:40px;
			line-height: 1;
		}
		.page-title a{
			color:#ff7777;
			text-decoration: none;
		}
		.page-title a:hover{
			text-decoration: underline;
			color: #ff3333;
		}

		.circle-menu-box {
			width:450px;
			height: 450px;
			position: relative;
			margin: 10px auto;
		}
			.circle-menu-box a.menu-item {
				display: block;
				text-decoration: none;
				border-radius: 100%;
				margin:20px;
				text-align: center;
				width:100px;
				height:100px;
				background-color:#fff;
				color:#777;
				padding:27px;
				position: absolute;
				font-size: 27px;

				transition:all 0.5s;
				-moz-transition:all 0.5s;
				-webkit-transition:all 0.5s;
				-o-transition:all 0.5s;
			}

			.circle-menu-box a.menu-item:hover {
				transform:scale(1.5);
				-webkit-transform:scale(1.5);
				-moz-transform:scale(1.5);
				-o-transform:scale(1.5);
				color:#fff;
				background: #ff3333;
			}
		</style>

</head>
<body>
<div class="container">
	<div class="page-title">
		<h1>The Founder</h1>
	</div>
	<div class="menu-container">
		<div class="circle-menu-box">
			<a href="#" class="menu-item"><img src="img/Ferry.png"></a>
			<a href="#" class="menu-item"><img src="img/Muhammad Rio Zulham Arifin Zega.png"></a>
			<a href="#" class="menu-item"><img src="img/Muhammad Rizki Fauzi.png"></a>
			<a href="#" class="menu-item"><img src="img/Ilman  Mochamad Andriansyah.png"></a>
			<a href="#" class="menu-item"><img src="img/Zacky Anwar Makarim.png"></a>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	var items = document.querySelectorAll('.circle-menu-box a.menu-item');

	for(var i = 0, l = items.length; i < l; i++) {
	  items[i].style.left = (40 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
	  
	  items[i].style.top = (40 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
	}

</script>
</body>
</html>