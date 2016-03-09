<?php
print "Total anual de rendimentos bancarios ";
$tRendiBanc = trim(fgets(STDIN));

print "Total anual de rendimentos de salarios/serviços ";
$tRendiSal = trim(fgets(STDIN));

print "Total de outros rendimentos: ";
$totalRend = trim(fgets(STDIN));

print "Serviços medicos pagos: ";
$ServMed = trim(fgets(STDIN));

print "Serviços educacionais pagos: ";
$ServAdc = trim(fgets(STDIN));

$rend1 = $tRendiBanc*.2;
if($tRendiSal <= 8000){	$tRendiSal1 = 0;
}
elseif(($tRendiSal > 8000) || ($tRendiSal <= 24000) ){
	$tRendiSal1 = $tRendiSal*.15;
}
elseif($tRendiSal < 24000){
	$tRendiSal1 = $tRendiSal*.20;
}
$totalRend1 = $totalRend*.10;
$subtotal = ($rend1 + $totalRend1 + $tRendiSal1);
$max1 = ($subtotal)*.30;
$tot = ($ServAdc+$ServMed);
$total = ($subtotal-$max1);
print "\n   ";
Print "Total de impostos:";
print  "\n$rend1		(Sobre rendimentos bancarios)";
print "\n$tRendiSal1		(Sobre salarios serviços)";
print "\n$totalRend1		(Sobre outros rendimentos)";
print "\n$subtotal		(Total)";

print "\n ";
print "\nMaximo a ser abatido: \n$max1 ";

print "\n ";
print "\nTotal de valores possiveis de abater: ";
print "\n$ServMed		(Serviços medicos)";
print "\n$ServAdc		(Serviços educacionais)";
print "\n$tot		(Total)";

print "\n ";
print "\nImposto total: ";
print "\n$subtotal		(Imposto bruto)";
print "\n$max1		(Abatimento)";
print "\n$total		(Total)";