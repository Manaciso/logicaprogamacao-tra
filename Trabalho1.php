<?php
print "Qual sexo do cliente)? ";
$sexo = trim(fgets(STDIN));
if ($sexo == "m" || $sexo == "M"){
	$sexo = 10;
}
else{
	$sexo = 8;
}

print "Quantidade de cervejas consumidas? ";
$cerva = trim(fgets(STDIN));
print "Quantidade de refrigerantes consumidos? ";
$refri = trim(fgets(STDIN));
print "Quantidade de espetinhos consumidos? ";

$espeto = trim(fgets(STDIN));
$total1 = $cerva*2.50;
$total2 = $refri*2;
$total3 = $espeto*4;
$resultado = ($total1+$total2+$total3);

print "Valor da conta: ";
print "\n$sexo		(valor básico)";
print "\n$resultado		(comida e bebida)";

if($resultado <= 15 ){
	$cantor = 3;
	print "\n$cantor		(cantores)";}
	else{ $cantor = 0;}

	$subtotal = $sexo+$resultado+$cantor;
	print "\n$subtotal		(subtotal sem 10%)";
	$total = $subtotal*.10+$subtotal;