<?php

// Criação de variáveis (definição e atribuição)
$var1 = "Paulo";
$var2 = "Ricardo";
$var3 = 77.7;
$var4 = 44;
$var5 = true; //booleano (true/false)

// Concatenando variáveis com Strings
echo $var1 ." *** ". $var2 ." --- ". $var3 ." +++ ". $var4;

echo "<hr style='height: 10px; background-color:red'>"; 

// var_dump => utilizado para informar com detalhes o valor de uma variável
var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);
var_dump($var5);

echo "<hr>";

// operadores aritméticos 
// soma             +
//subtração         -
//multiplicação     *
//divisão           /

$result = ($var3 + $var4);
echo $result . "<br>";
$result = ($var3 - $var4);
echo $result . "<br>";
$result = ($var3 * $var4);
echo $result . "<br>";
$result = ($var3 / $var4);
echo $result . "<br>";

$n1 = 5.7;
$n2 = 8.7;
$media = ($n1 + $n2) / 2;
echo "Média: " . $media . "<br>";

// Operador relacionais (de comparação)
// igual        ==
// diferente    !=
// maior        >
// menor        <
// maior igual  >=
// menor igual  <=

echo "<hr>";

var_dump(
    ($var1 == $var2)
);

var_dump(
    ($var3 != $var4)
);

var_dump(
    ($var3 > $var4)
);

// Operadores lógicos 
// AND      &&
// OR       ||
// NOT      !

echo "<hr>";

$email = "paulo.4574@yahoo.com";
$pass = "Açucar";

var_dump(
    ($email == "paulo.4574@yahoo.com") &&
    ($pass == "Açucar")
);

echo "<hr>";
//Listas (array = Vetor)
$cores = [
    "VERDE",
    "AMARELO",
    "VERMELHO"
];
//var_dump($cores);
//echo $cores[2] . "<br>";

// Controle de fluxo (if /elseif /else)
$sinaleira = $cores[random_int(0, 2)];

if($sinaleira == "VERDE") {
    print(
        "<h2 style= 'background-color: green'>Pode ir em frente! </h2>"
    );
} elseif($sinaleira == "AMARELO") {
    print(
        "<h2 style= 'background-color: yellow'>Cuidado aí... </h2>"
    );
} else {
    print(
        "<h2 style= 'background-color: red'>Parô!!! </h2>"
    );
}

echo "<hr>";
//Laços de repetição
//FOR => início; condição; incremento
for($i = 1; $i <= 100; $i+=2 ) {
    echo $i . " * "; 
}

echo "<hr>"; 
//WHITE => condição 
$count = 0;
while($count < 10) {
    echo $count . " / ";
    $count++;
}

//FOREACH => 
$listaNomes = [
    "Romario",
    "Clebio",
    "Irineu",
    "Jurenice",
    "Neymar",
    "Jonas",
    "Albersio"
];

echo "<hr>";
for($i = 0; $i < count($listaNomes); $i++) {
    echo $listaNomes[$i] . " / ";
}

sort($listaNomes);

echo "<hr>"; 
foreach($listaNomes as $nomeDaVez) {
    echo $nomeDaVez . " // ";
}