<?php
	
	class Lutador{
		//Atributos
		private $nome;
		private $nacionalidade;
		private $idade, $altura, $peso;
		private $categoria, $vitorias, $derrotas, $empates;
		//Métodos Especiais
		function __construct($no, $na,$id,$al,$pe,$vi,$de,$em){
			$this->nome = $no;
			$this->nacionalidade =  $na;
			$this->Idade = $id;
			$this->altura = $al;
			$this->setPeso($pe);
			$this->vitorias = $vi;
			$this->derrotas = $de;
			$this->empates = $em;
		}
		
		function getNome(){ 
			return $this->nome;
		}
		function setNone($nome){
			$this->nome = $nome;
		}
		function getNacionalidade(){
			return $this->nacionalidade;
		}
		function setNacionalidade($nacionalidade){
			$this->nacionalidade =  $nacionalidade;
		}
		function getIdade(){
			return $this->idade;
		}
		function setIdade($idade){
			$this->Idade = $idade;
		}
		function getAltura(){
			return $this->altura;
		}
		function setAltura($altura){
			$this->altura = $altura;
		}
		function getPeso(){
			return $this->peso;
		}
		function setPeso($peso){
			$this->peso = $peso;
			$this->setCategoria();
		}
		function getCategoria(){
			return $this->categoria;
		}
		private function setCategoria(){
			if($this->peso < 52.2){
				return $this->categoria = "Inválido";
			}elseif($this->peso < 70.3){
				return $this->categoria = "Leve";
			}elseif($this->peso < 83.9){
				return $this->categoria = "Médio";
			}elseif($this->peso < 120.2){
				return $this->categoria = "Pesado";
			}else{
				return $this->categoria = "Inválido";
			}
		}
		function getVitorias(){
			return $this->vitorias;
		}
		function setVitorias($vitorias){
			$this->vitorias = $vitorias;
		}
		function getDerrotas(){
			return $this->derrotas;
		}
		function setDerrotas($derrotas){
			$this->derrotas = $derrotas;
		}
		function getEmpates(){
			return $this->empates;
		}
		function setEmpates($empates){
			$this->empates = $empates;
		}
		//Métodos
		function ganharLuta(){
			$this->setVitorias($this->setVitorias + 1);	
		}
		function perderLuta(){
			$this->setPerder($this->setPerder + 1);	
		}
		function empatarLuta(){
			$this->setEmpates($this->setEmpates + 1);	
		}
		function apresentar(){
			echo "<p>-------------------------</p>";
			echo "<p>CHEGOU A HORA! o lutador ".$this->getNome();
			echo "<p>veio diretamente de ".$this->getNacionalidade();
			echo "<p>tem ".$this->getIdade()." anos e pesa ".$this->getPeso." Kg";
			echo "<p>Ele tem ".$this->getVitorias()." vitórias ";
			echo $this->getDerrotas()." derrotas e ".$this->getEmpates()." empates ";

			
		}
		function status(){
			echo "<p>-------------------------</p>";
			echo "<p> ".$this->getNome()." é um peso ".$this->getCategoria;
			echo " e já ganhou ".$this->getVitorias()." vezes ,";
			echo " perdeu ".$this->getDerrotas()." vezes e ";
			echo " empatou ".$this->getEmpates(). " vezes ";
		}
	}
	
?> 