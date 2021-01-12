<?php
	interface Controlador{
		public function ligar();
		public function desligar();
		public function abrirMenu();
		public function fecharMenu();
		public function maisVolume();
		public function menosVolume();
		public function ligarMudo();
		public function desligarMudo();
		public function play();
		public function pause();
	}
/*
Não é necessario colocar abstrato spenas por estar em uma interface já está dito que é
public abstract function ligar();
		public abstract function desligar();
		public abstract function abrirMenu();
		public abstract function fecharMenu();
		public abstract function maisVolume();
		public abstract function menosVolume();
		public abstract function ligarMudo();
		public abstract function desligarMudo();
		public abstract function play();
		public abstract function pause();
*/

	
?> 