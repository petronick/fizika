<?php


			require "model1.php";
			
			?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<meta charset="UTF-8">
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">    
	/* javascript za prikaz dugmeta - povratak na vrh - u donjem desnom uglu */
	$(document).ready(function() {
		$(window).on("scroll", function() {
			var odVrha = $(window).scrollTop();
			$("#topLink").toggleClass("down", (odVrha > 300));
		});
	});
		
	</script>
</head>
<body>

<div id="wrapper">
	<div id="fix">
	<div id="header">
	<p>	RADIOAKTIVNO
		ZAGAĐIVANJE I ZAŠTITA</p>
	</div><!--end header -->
	<div id="nav" class="negativ">
			<a href="index.php" class="dugme" class="negativ">Pojam i izvori</a>	
			<a href="zastita.html" class="dugme">Zaštita</a>
	</div><!--end nav -->
	</div><!--end fix -->
	<h1>Pojam i izvori zagađivanja</h1>
	<div id="side">
		<?php
			
			foreach($meni as $id=>$stavka){
					
						echo "<a href='?pid=".$stavka."'>".$id."</a><br><hr>";
					
					
					};
				?>
	</div>
	<div id="main">
		<?php
			if (!isset($_GET['pid'])){
					include "pojam.php";
				}
				else {
					include $_GET['pid'];
				}
				
			?>
	</div><!--end main -->
	</div> <!--end wrapper -->
	<a href="#header" id="topLink">Na vrh stranice</a>
</body>
</html>