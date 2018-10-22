<?php
	include("conexao.php");

	class Cliente{

		private $cpf;
	 	private $nome;
		private $sobrenome;
		private $dataNascimento;
		private $email;
		private $telefone;
		private $senha;
		private $validacao;
		
        function incluir(){

			include("conexao.php");
			
        	$sql = "INSERT INTO  cliente VALUES (?,?,?,?,?,?,?)";
        	$query = $con->prepare($sql);
           	$query->bindParam(1,$this->cpf);
        	$query->bindParam(2,$this->nome);
        	$query->bindParam(3,$this->sobrenome);
        	$query->bindParam(4,$this->dataNascimento);
        	$query->bindParam(5,$this->email);
        	$query->bindParam(6,$this->telefone);
        	$query->bindParam(7,$this->senha);
        	
        	if($query->execute()){
    			 $this->setValidacao(1);
			}
			else{
		   	 	 $this->setValidacao(0);
		   		 print_r($query->errorInfo());
			}
        	
        }

		function setAll($cpf, $nome, $sobrenome, $data, $email, $senha){
			$this->cpf = $cpf;
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
			$this->dataNascimento = $data;
			$this->email = $email;
			$this->senha = $senha;
			$this->telefone = $telefone;
		}

		function authLogin($email, $senha){
			$sql = "select * from cliente where email = '$email' and senha='$senha'";
			$query = $con->query($sql);
			$user = $query->fetch();

			if($user->rowCount() == 0)
				return false;
			else
				return true;
		}
        
		function getInstance($cpf){
			$sql = "INSERT INTO  cliente VALUES ('$cpf','$nome','$data','$email','$senha','$telefone')";
        	$query = $con->prepare($sql);
        	$query->execute();
		}
        
		function getCpf(){
			return $this->cpf;
		}
		function getNome(){
			return $this->nome;
		}
		function getSobrenome(){
			return $this->sobrenome;
		}
		function getDataNascimento(){
			return $this->dataNascimento;
		}
		function getEmail(){
			return $this->email;
		}
		function getTelefone(){
			return $this->telefone;
		}

		function getSenha(){
			return $this->senha;
		}
		function getValidacao(){
			return $this->validacao;
		}

		function setCpf($cpf){
			$this->cpf = $cpf;
		}
		function setNome($nome){
			$this->nome = $nome;
		}
		function setSobrenome($sob){
			$this->sobrenome = $sob;
		}
		function setDataNascimento($data){
			$this->dataNascimento = $data;
		}
		function setEmail($email){
			$this->email = $email;
		}
		function setTelefone($tel){
			$this->telefone = $tel;
		}
		function setSenha($senha){
			$this->senha = $senha;
		}
		function setValidacao($validacao){
			$this->validacao = $validacao;
		}
	}




?>