<?php
    use Database\Database;

    if( isset($_POST['email']) ) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }

    if( isset($_POST['pass']) ) {
        $pass = $_POST['pass'];
    } else {
        $pass = null;
    }

////////////////////////////////////////////////////////

require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->select( 
    "SELECT * FROM usuarios WHERE email = '$email';"
);


if( isset($resultDb[0]) ) {
    $emailDb = $resultDb[0]->email;
    $senhaDb = $resultDb[0]->senha;
} else {
    $emailDb = null;
    $senhaDb = null;
}

//var_dump($resultDb[0]); 

////////////////////////////////////////////////////////

    if($email != null && $pass != null) {
    
        if($email == $emailDb && $pass == $senhaDb) {
            $msg = 'Bem vindo!';
            //$redirect = "<meta http-equiv='refresh' content='3; url=http://qi.edu.br' />";
        } else {
            $msg = 'Acesso negado!';
            $redirect = "<meta http-equiv='refresh' content='3; url=../index.php' />";
        }
    }

require_once "../src/views/header_nav.php";
?>
    <link rel="stylesheet" href="assets/css/style2.css">
    <div class="container mt-3">

        <div class="text-center">
            <h1><?= (isset($msg) ? $msg : "") ?></h1> 
            <?= (isset($redirect) ? $redirect : "<hr>") ?>
        </div>
       
        <form method="get" action="checkbox.php">
            <div class="form-group">
                <div class="form-check form-switch">
</div>
            <div class="text">
                <h2> Bilhete metropolitano </h2> <br> <h4> APLICATIVO CELULAR </h4> <br>

<h8> O novo aplicativo ADVANCED TRANSPORTE VOUCHER RECARGA já está disponível para recarregar o seu cartão e seus creditos de passagem .
Baixe agora para seu celular GOOGLE PLAY ou APP STORE e já comece a usar.</h8> <br>

<br> <h4> SITE ONLINE </h4> <br>

<h8> Você pode comprar seus créditos pelo site e pagar com boleto bancário.
Após a compensação do pagamento, seu crédito será liberado para carregamento no ônibus em até 2 dias. Este serviço não possui nenhum tipo de taxa.
Solicite seu seu login e senha AQUI.</h8> <br>

