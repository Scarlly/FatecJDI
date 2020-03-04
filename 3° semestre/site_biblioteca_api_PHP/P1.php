
<?php

// para fazer teste na url: localhost/P1.php?n1=3&n2=3&n3=1

$op = null;

if(isset($_GET['n1'])){
    $n1 = $_GET['n1'];
}
if(isset($_GET['n2'])){
    $n2 = $_GET['n2'];
}
if(isset($_GET['n3'])){
    $n3 = $_GET['n3'];
    $op = "Mul";
}

if($op=="Mul"){
    $Res = $n3*$n2*$n1;
}
else if(isset($_GET['n1']) && isset($_GET['n2'])){
    $Res = $n1/$n2;
}else{
    echo "Erro: Faltam valores.";
}

if($Res % 2==0){
	echo "<FONT COLOR=RED>digite seu nome</FONT>";
	echo "<br>";
}
else{
	echo "<FONT COLOR=BLUE>digite seu nome</FONT>";
	echo "<br>";
}   

echo $Res;

?>