<?php

namespace Alura\Banco\Modelo;
 
    // funcionario é uma pessoa
    class Funcionario extends Pessoa
    {
        private $cargo;

        public function __construct(string $nome, CPF    $cpf, string $cargo)
        {
            parent:: __construct($nome, $cpf);
            $this -> validaNomeTitular($nome);
            $this -> nome = $nome;
            $this -> cpf = $cpf;
            $this -> cargo = $cargo;
        }

        public function recuperarCargo(): string
        {
            return $this -> cargo;
        }

        public function alterarNome(string $nome): void
        {
            $this -> validaNomeTitular($nome);
            $this -> nome = $nome;
        }
    }