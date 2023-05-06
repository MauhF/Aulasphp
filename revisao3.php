<h1>O cliente de uma loja realizou a compra de um produto e decidiu fazer o
pagamento em 12 parcelas iguais. Para este parcelamento é cobrado juros 
de 1% ao mês. Escreva um código que calcule e exiba o valor total da compra
e o valor das parcelas</h1>

<?php


$valor = 10000;
$juros = $valor*0.12;
$total = $valor + $juros;
$parcela = $total/12;

echo $total."<br>";
echo $parcela;








?>