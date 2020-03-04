<?php


$data = date("d/m/Y");
$Vvenda = 0.0;
$Vprod1 = 68.0;
$Vprod2 = 350.0;
$Vprod3 = 80.0;
$Vprod4 = 40.0;
$Vprod5 = 42.0;
$Vprod6 = 100.0;
$Vprod7 = 51.0;
$Vprod8 = 400.0;


$prod1 = (isset($_POST['prod1']) ? $_POST['prod1'] : "NONE");
$prod2 = (isset($_POST['prod2']) ? $_POST['prod2'] : "NONE");
$prod3 = (isset($_POST['prod3']) ? $_POST['prod3'] : "NONE");
$prod4 = (isset($_POST['prod4']) ? $_POST['prod4'] : "NONE");
$prod5 = (isset($_POST['prod5']) ? $_POST['prod5'] : "NONE");
$prod6 = (isset($_POST['prod6']) ? $_POST['prod6'] : "NONE");
$prod7 = (isset($_POST['prod7']) ? $_POST['prod7'] : "NONE");
$prod8 = (isset($_POST['prod8']) ? $_POST['prod8'] : "NONE");
$localdate = (isset($_POST['localdate']) ? $_POST['localdate'] : "NONE");
$localdate2 = (isset($_POST['localdate2']) ? $_POST['localdate2'] : "NONE");
$pagamento = $_POST['pagamento'];


//quebrando a linha
$quebra = "\r\n";

//pegando o nome do usuario
$nome = $_POST['nome'];

//armazenando o arquivo txt em uma variavel
$nome_arquivo = "Recibo.txt";

//abrindo o arquivo em modo de escrita
$arquivo = fopen($nome_arquivo, 'w+');

//escrevendo no arquivo o nome do usuario
fwrite($arquivo,$nome.$quebra);


//produtos selecionados / Capacete
if ($prod1 != "NONE"){
    fwrite($arquivo,$prod1." - ".'R$' . number_format($Vprod1, 2, ',', '.').$quebra);
    $Vvenda += 80*0.85;
}
if ($prod2 != "NONE"){
    fwrite($arquivo,$prod2." - ".'R$' . number_format($Vprod2, 2, ',', '.').$quebra);
    $Vvenda += 1750*0.2;
}
if ($prod3 != "NONE"){
    fwrite($arquivo,$prod3." - ".'R$' . number_format($Vprod3, 2, ',', '.').$quebra);
    $Vvenda += 80;
}
if ($prod4 != "NONE"){
    fwrite($arquivo,$prod4." - ".'R$' . number_format($Vprod4, 2, ',', '.').$quebra);
    $Vvenda += 40;
}
if ($prod5 != "NONE"){
    fwrite($arquivo,$prod5." - ".'R$' . number_format($Vprod5, 2, ',', '.').$quebra);
    $Vvenda += 60*0.7;
}
if ($prod6 != "NONE"){
    fwrite($arquivo,$prod6." - ".'R$' . number_format($Vprod6, 2, ',', '.').$quebra);
    $Vvenda += 100;
}
if ($prod7 != "NONE"){
    fwrite($arquivo,$prod7." - ".'R$' . number_format($Vprod7, 2, ',', '.').$quebra);
    $Vvenda += 60*0.85;
}
if ($prod8 != "NONE"){
    fwrite($arquivo,$prod8." - ".'R$' . number_format($Vprod8, 2, ',', '.').$quebra);
    $Vvenda += 400;
}
if ($localdate != "NONE"){
    fwrite($arquivo,$localdate.$quebra);
}


fwrite($arquivo,"valor da venda: ".'R$'.number_format($Vvenda, 2, ',', '.').$quebra);
fwrite($arquivo,"Forma de Pagamento: ".$pagamento.$quebra);
fwrite($arquivo,"Este orçamento será valido até o dia: ".$localdate2);

fclose($arquivo);

header("location:http://localhost/trabPHP/index.html")
    
?>
