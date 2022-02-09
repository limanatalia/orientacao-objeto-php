<?php

namespace Alura\Banco\Modelo;

    class Pessoa
    {
        protected $nome;
        private $cpf;

        public function __construct(string $nome, CPF $cpf)
        {
            $this -> validaNomeTitular($nome);
            $this -> nome = $nome;
            $this -> cpf = $cpf;            
        }

        public function recuperarNome(): string
        {
            return $this -> nome;
        }

        public function recuperarCpf(): string
        {
            return $this -> cpf -> recuperaNumero();
        }

        public function validaNomeTitular(string $nomeTitular)
        {
            if (strlen($nomeTitular)< 5){
                echo "Nome precisa ter pelo menos 5 caracteres";
                exit();
            }
        }
    }