<?php
if (isset($_POST)) {
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['telefone'];
    $date = $_POST['data'];
    $email = $_POST['email'];
} else {
    echo "Nada aqui";
}
$host = "localhost"; //replace with database hostname 
$username = "root"; //replace with database username 
$password = ""; //replace with database password 
$db_name = "financialproject"; //replace with database name

$con = new mysqli($host, $username, $password, $db_name);
if ($con->connect_errno) {
    echo "Falha na Conexão";
} else {
    $query = "SELECT * FROM cliente";
    $result = $con->query($query);
    while ($valorRegistro = mysqli_fetch_row($result)) {
        $nome = $valorRegistro[1];
        echo "Nome: " . $nome . "<br/>";
        $rg = $valorRegistro[2];
        echo "RG: " . $rg . "<br/>";
        $cpf = $valorRegistro[3];
        echo "CPF: " . $cpf . "<br/>";
        $telefone = $valorRegistro[5];
        echo "Telefone: " . $telefone . "<br/>";
    }
}
