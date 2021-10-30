<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Multiplication</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="mult-text">
	<h1>Multiplication Table:</h1>
</div>
	<div class="main-div">
		<div class="mult-1">
			<h2 class="mult-num">
				<?php
					$a =2;
					for($i =0; $i <=10; $i++){
					echo $i."x".$a."=".$i*$a."<br>"; 
					}
				?>
			</h2>
		</div>
		
		<div class="mult-2">
			<h2 class="mult-num">
				<?php
					$a =3;
					for($i =0; $i <=10; $i++){
					echo $i."x".$a."=".$i*$a."<br>"; 
					}
				?>
			</h2>
		</div>	
			
		<div class="mult-3">
			<h2 class="mult-num">
				<?php
					$a =4;
					for($i =0; $i <=10; $i++){
					echo $i."x".$a."=".$i*$a."<br>"; 
					}
				?>
			</h2>
		</div>	
			
		<div class="mult-4">
			<h2 class="mult-num">	
				<?php
					$a =5;
					for($i =0; $i <=10; $i++){
					echo $i."x".$a."=".$i*$a."<br>";
					}
				?>
			</h2>
		</div>
	</div>	



		
</body>
</html>