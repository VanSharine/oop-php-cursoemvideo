<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 07b - POO</title>
	</head> 
	<body> 
		<pre>
			<h1>Projeto Controle Remoto<h1>
			<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 'On');
	
				require_once 'lutador.php';
						
				$lu1 = new lutador("Pretty Boy","França",31,1.75,68.9,11,2,1);
				$lu1->status();
				//$c ->Ligar();
				//$c->maisVolume();
				///$c ->AbrirMenu();
				
				
				//$c1->setModelo("BIC");
				//$c1->setPonta("0.5");
				//print_r($c1);
				print_r($lu1);
				//print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
				//var_dump($c1);
		
			?>
		</pre>
	</body> 
</html>