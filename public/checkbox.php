<?php

use Database\Database;
use Model\Pedido;

    require_once '../vendor/autoload.php';

    $ped = new Pedido(); //Criação do objeto...

    if( isset($_GET['ingredientes']) ) {
        $ped->itens = $_GET['ingredientes']; //Prenchido o atributo 'itens'
    } else {
        $ped->itens = null;
    }

    if( isset($_GET['qtde']) ) {
        $ped->qtde = $_GET['qtde']; //prenchido o objeto qtde
    } else {
        $ped->qtde = null;
    }

    if( isset($_GET['pgto']) ) {
        $ped->pgto = $_GET['pgto']; //prenchido o objeto pgto
    } else {
        $ped->pgto = null;
    }

    if( isset($_GET['entrega']) ) {
        $ped->entrega = $_GET['entrega']; //prenchido o objeto entrega
    } else {
        $ped->entrega = null;
    }

    $listaItens = null;   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de dados</title>
</head>
<body>
    <h3 >
        <?= $ped->darDesconto(); ?>
    </h3>

    <?php if($ped->itens != null) :?>
        <?php foreach($ped->itens as $i) : ?>
        <!-- Nossa estrutura de html que se repetirá -->
            <h3 style="font-family: courier;">
                <?php 
                    echo $i;
                    $listaItens .= $i . ', ';    
                ?> 
            </h3><hr>
        <?php endforeach ?>
    <?php else : ?>
        <h3 style='text-align: center;'> Sem ingredientes. </h3><hr>
    <?php endif; ?>

    <h3 style="font-family: courier; color: red;">
        <?= $ped->qtde ?>
    </h3><hr>

    <h3 style="font-family: courier; color: green ;">
        <?= $ped->pgto ?>
    </h3><hr>

    <h3 style="font-family: courier; color: black;">
        <?= $ped->entrega ?>
    </h3><hr>

<?php
//////////////////////////////////////////////////////////////////
require_once "../src/model/Database.php";
$db = new Database ();

$db->insert(
    "INSERT INTO pedidos(data_hora, itens, qtde, pgto, entrega)
    VALUES('$ped->dataHora' , '$listaItens' , '$ped->qtde' , '$ped->pgto' , '$ped->entrega'); "
);
//////////////////////////////////////////////////////////////////
?>

</body>
</html>