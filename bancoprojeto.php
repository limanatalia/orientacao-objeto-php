<?php
    require_once 'src/modelo/conta/conta.php';
    require_once 'src/modelo/endereco.php';
    require_once 'src/modelo/conta/titular.php';
    require_once 'src/modelo/cpf.php';

    use Alura\Banco\Modelo\conta\titular;
    use Alura\Banco\Modelo\Endereco;
    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Modelo\conta\Conta;
    
    $endereco = new Endereco('São Paulo', 'Um Bairro', 'Minha Rua', '67B');
    $vinicius = new titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
    $primeiraConta = new conta($vinicius);
    $primeiraConta -> depositar (500);
    $primeiraConta -> sacar (300);

    echo $primeiraConta -> recuperarNomeTitular() . PHP_EOL;
    echo $primeiraConta -> recuperarCpfTitular() . PHP_EOL;
    echo $primeiraConta -> recuperarSaldo();

    $patricia = new titular(new CPF('698.456.324-67'), 'Patricia', $endereco);
    $segundaConta = new Conta($patricia);
    var_dump($segundaConta);

    $outroEndereco = new Endereco('A', 'B', 'C', 'D1');
    $outra = new Conta (new titular(new CPF('123.453.345-98'), 'abcdefg', $outroEndereco));
    unset ($segundaConta);
    echo Conta::recuperarNumeroDeContas();
