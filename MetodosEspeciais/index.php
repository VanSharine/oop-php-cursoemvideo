<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 04 - POO</title>
	</head> 
	<body> 
		<pre>
			<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 'On');
	
				require_once 'caneta.php';
						
				$c1 = new Caneta("BIC","Azul",0.5);
				$c2 = new Caneta("BBB","Verde",1.0);
				//$c1->setModelo("BIC");
				//$c1->setPonta("0.5");
				print_r($c1);
				print_r($c2);
				//print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
				
				//$c1->modelo = "Bic cristal";
				//$c1->cor = "Azul";
				//$c1->ponta = 0.5;
			
				//var_dump($c1);
			
			//$c1->rabiscar();
			//$c1->tampar();
			
			?>
		</pre>
	</body> 
</html>