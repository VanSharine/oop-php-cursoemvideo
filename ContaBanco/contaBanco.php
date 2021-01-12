<?php

	class ContaBanco{
		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo; 
		private $status;
		
		//métodos especiais
		public function __construct(){
			//$this->saldo = 0;
			//$this->status = falso;	
			$this->setSaldo(0);
			$this->setSaldo(false);
			echo "Conta aberta com sucesso";
		}
		public function getNumConta(){
			return $this->numConta();	
		}
		public function setNumConta($n){
			$this->numConta = $n;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($t){
			$this->tipo = $t;
		}
		public function getDono(){
			return $this->dono;
		}
		public function setDono($d){
			$this->dono = $d;
		}
		public function getSaldo(){
			return $this->saldo;
		}
		public function setSaldo($s){
			$this->saldo = $s;
		}
		public function getStatus(){
			return $this->status;
		}
		public function setStatus($s){
			$this->status=$s;
		}
		//métodos especiais
		
		
		public function abrirConta($t){
			$this->setTipo($t);
			$this->setStatus(true);
			if($t == "CC"){
				//$this->saldo = 50;
				$this->setSaldo(50);
			}elseif($t == "CP"){
				$this->setSaldo(150);
			}
		}
		
		public function fecharConta(){
			//if($this->saldo > 0){	
			if($this->getSaldo() > 0){	
				echo "Conta com dinheiro";
			}elseif($this->getSaldo() < 0){
				echo "Conta com débito";
			}else{
				$this->setStatus(false);
			}
		}
		
		public function depositar($v){
			//if($this->status =true){	
			if($this->getStatus()){	
				$this->setSaldo($this->getSaldo() + $v);
			}else{
				echo "Impossível depositar";
			}
		}
		
		public function sacar($v){
			if($this->getStatus()){	
				//if($this->saldo > $v){	
				if($this->getSaldo() > $v){	
					$this->setSaldo($this->getSaldo() - $v);
				}else{
					echo "Saldo insuficiente";
				}		
			}else{
				echo "Impossível sacar";
			}
		}
		
		public function pagarMensal(){
			//if($this->tipo == "CC"){
			if($this->getTipo() == "CC"){
				$v = 12;
			}elseif($this->getTipo() == "CP"){
				$v = 20;
			}
			
			if($this->getStatus()){	
				$this->setSaldo($this->getSaldo() - $v);
			}else{
				echo "Impossível pagar";
			}
		
		}
		
	}
	
	
	/*class Caneta {
		public $modelo;
		private $cor;
		private $ponta;
		private $tampada;
		
		public function __construct($m,$c,$p){
		//public function Caneta(){
			$this->modelo = $m;
			$this->cor = $c;
			$this->ponta = $p;
			$this->tampar();
		}
		
		public function tampar(){
			$this->tampada = true;
		}	
		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($m){
			$this->modelo = $m;
		}
		public function getPonta(){
			return $this->ponta;
		}
		public function setPonta($p){
			$this->ponta = $p;
		}
		
		
		
	}*/
?> 