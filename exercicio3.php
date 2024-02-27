<?php

namespace Loja;


class Cliente
{
    private $nome;


    public function __construct($nome)
    {
        $this->nome = $nome;
    }


    public function getNome()
    {
        return $this->nome;
    }
}


class Pedido
{
    private $numero;


    public function __construct($numero)
    {
        $this->numero = $numero;
    }


    public function getNumero()
    {
        return $this->numero;
    }
}


namespace Financeiro;


class Pagamento
{
    private $valor;


    public function __construct($valor)
    {
        $this->valor = $valor;
    }


    public function getValor()
    {
        return $this->valor;
    }
}


echo "3)<br>";
$cliente = new \Loja\Cliente("João");
echo "Cliente: " . $cliente->getNome() . "<br>";


$pedido = new \Loja\Pedido(123);
echo "Pedido: " . $pedido->getNumero() . "<br>";


$pagamento = new \Financeiro\Pagamento(100.00);
echo "Pagamento: R$" . $pagamento->getValor() . "<br>";

?>
<?php
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Animal
{
    public function emitirSom()
    {
        echo "som";
    }
}

class Cachorro extends Animal
{
    public function emitirSom()
    {
        echo "<br>AUAU";
    }
}

class Gato extends Animal
{
    public function emitirSom()
    {
        echo "<br>Miau";
    }
}
echo "<br>4)";
$cachorro = new Cachorro();
$cachorro->emitirSom();

$gato = new Gato();
$gato->emitirSom();

?>
<?php
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.

trait LogErro
{
    public function registrarLog($log)
    {
        echo "<br>Erro: " . $log;
    }
}
trait LogInfo
{
    public function registrarLog($log)
    {
        echo "<br>informação: " . $log;
    }
}
class Registro
{
    use LogErro, LogInfo {
        LogErro::registrarLog insteadof LogInfo; 
        LogInfo::registrarLog as registrarLogInfo; 
    }
}
echo "<br>5)";

$registro = new Registro();
$registro->registrarLog("Isso é um erro!"); 
$registro->registrarLogInfo("Isso é uma informação."); 
?>