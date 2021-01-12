<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 05 - POO</title>
	</head> 
	<body> 
		<pre>
			<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 'On');
	
				require_once 'contaBanco.php';
						
				$p1 = new ContaBanco();
				$p1->abrirConta("CC");	
				$p1->setNumConta(1111);	
				$p1->setDono("Jubileu");	
				
				$p2 = new ContaBanco();
				$p2->abrirConta("CP");	
				$p2->setNumConta(2222);	
				$p2->setDono("Creuza");	
				
				$p1->depositar(300);	
				$p2->depositar(500);	
				
				//$p2->sacar(100);	
				
				$p1->sacar(338);	
				$p2->sacar(630);	
				
				
				$p1->pagarMensal();	
				$p2->pagarMensal();	
				
				$p1->fecharConta();	
				$p2->fecharConta ();	
				
				
				print_r($p1);
				print_r($p2);
				
			
				//var_dump($c1);
			
						
			?>
		</pre>
	</body> 
</html>