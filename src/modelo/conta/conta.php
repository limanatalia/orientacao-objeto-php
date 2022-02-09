<?php

namespace Alura\Banco\Modelo\conta;
   class Conta
   {
       private $titular;
       private $saldo;
       private static $numeroDeContas = 0;

       public function __construct(Titular $titular)
       {
           $this -> titular = $titular;
           $this -> saldo = 0;

           self:: $numeroDeContas++;
       }

       public function __destruct()
       {
           self:: $numeroDeContas--;
       }
   
       public function sacar(float $valorASacar): void
       {
            $tarifaSaque = $valorASacar * 0.05;
            $valorSaque = $valorASacar + $tarifaSaque;
            if ($valorSaque > $this->saldo) {
                echo "Saldo indisposed";
                return;
            }
        
        $this->saldo -= $valorSaque;
    }
   
       public function depositar(float $valorADepositar): void
       {
           if ($valorADepositar < 0) {
               echo "Valor precisa ser positivo";
               return;
           }
   
           $this->saldo += $valorADepositar;
       }
   
       public function transferir(float $valorATransferir, Conta $contaDestino): void
       {
           if ($valorATransferir > $this->saldo) {
               echo "Saldo indisponível";
               return;
           }
   
           $this->sacar($valorATransferir);
           $contaDestino->depositar($valorATransferir);
       }

       public function recuperarSaldo(): float
       {
           return $this -> saldo;
       }

       public function recuperarNomeTitular(): string
       {
           return $this -> titular -> recuperarNome();
       }

       public function recuperarCpfTitular(): string
       {
           return $this -> recuperarCpfTitular();
       }

       public static function recuperarNumeroDeContas(): int
       {
           return self:: $numeroDeContas;
       }
   }
