<h3>Escreva um código que receba um valor inteiro, converta-o em anos,
exiba a idade e informe se ele é maior ou menor de idade.</h3>

<?php
$valor = 10000;
$idade = $valor/365;
echo number_format($idade);

if($idade >= 18){
echo " Maior idade ";
}
else{ echo " Menor idade ";
}



?>