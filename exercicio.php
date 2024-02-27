<?php
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.
class Veiculo
{
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function exibeMarcaModelo()
    {
        echo "Marca: " . $this->marca, "|   Modelo: " . $this->modelo;
    }
}

class Carro extends Veiculo
{
    public $cavalos;
    public $num;

    public function __construct($marca, $modelo, $cavalos, $num)
    {
        parent::__construct($marca, $modelo);

        $this->cavalos = $cavalos;
        $this->num = $num;
    }

    public function exibeCavalos()
    {
        echo "<br>Cavalos: " . $this->cavalos;
    }

    public function numPortas()
    {
        echo " | Portas: " . $this->num;
    }
}

echo "1) <br> Carro: <br>";

$carro = new Carro("fiat ", "palio ", 150, 4);

$carro->exibeMarcaModelo();

$carro->exibeCavalos();

$carro->numPortas();

class Moto extends Veiculo
{
    public $cilindradas;
    public $corCapacete;

    public function __construct($marca, $modelo, $cilindradas, $corCapacete)
    {
        parent::__construct($marca, $modelo);

        $this->cilindradas = $cilindradas;
        $this->corCapacete = $corCapacete;
    }

    public function exibeCilindradas()
    {
        echo "<br> Cilindradas: " . $this->cilindradas;
    }

    public function exibeCor()
    {
        echo " | Cor do Capacete: " . $this->corCapacete;
    }
}

echo "<br><br>Moto: ";
$moto = new Moto("Honda ", "Cg", 150, "Vermelho");
$moto->exibeMarcaModelo();
$moto->exibeCilindradas();
$moto->exibeCor();
?>


<?php
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

trait Mensagens
{
    public function enviarMensagens($mensagem)
    {
        echo "<br>Mensagem Enviada: $mensagem";
    }
}

class EmailSender
{
    use Mensagens;
    public function enviaEmail()
    {
        $this->enviarMensagens("");
    }
}
echo "<br><br>2)";

$email = new EmailSender;
$email->enviarMensagens("Teste Email");

class SMSSender
{
    use Mensagens;
    public function enviaSMS()
    {
        $this->enviarMensagens("");
    }
}
$SMS = new SMSSender;
$SMS->enviarMensagens("Teste SMS");

?>

