<?php

namespace Alura\Banco\Modelo\conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

    // titular é uma pessoa
    class titular extends Pessoa
    {
        private $endereco;

        public function __construct(CPF $cpf, string $nome, Endereco $endereco)
        {
            parent:: __construct($nome, $cpf);
            $this -> endereco = $endereco;
        }

        public function recuperaEndereco(): Endereco
        {
            return $this -> endereco;
        }
    }