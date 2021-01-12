<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 02 - POO</title>
	</head> 
	<body> 
		<?php
			require_once 'caneta.php';
			
			
			$c1 = new caneta;
			
			$c1->cor = "Azul";
			$c1->ponta = 0.5;
			$c1->tampada = false;
			
			$c1->destampar();
			
			$c1->rabiscar();
			
			//var_dump($c1);
			//print_r($c1);
			
			$c2 = new caneta;
			
			$c2->cor = "Verde";
			$c2->ponta = 50;
			$c2->tampa();
			//print_r($c2);
		?>
	</body> 
</html>