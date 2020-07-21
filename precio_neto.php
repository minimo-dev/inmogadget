<?php
$final_price = $_GET['final_price'];
$percent_comission = $_GET['percent_comission_neto'];
$includes_vat = $_GET['includes_vat_neto'];

if($includes_vat==='vat_excluded_neto'){
    $comission = $final_price * $percent_comission / 100;
    $comission_vat = $comission*0.21;
    $client_net_price = $final_price - $comission - $comission_vat;

} else{
    $comission_with_vat = $final_price * $percent_comission / 100;
    $comission = $comission_with_vat  / 1.21;
    $comission_vat = $comission_with_vat - $comission;
    $client_net_price = $final_price - $comission_with_vat;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JCalculator Precio Final</title>
</head>
<h1>Calculadora de Precio Final</h1>
<p>El precio final es <?=number_format($final_price , 0, ",", ".");?>, la comisión es del <?=$percent_comission?> %
    <?php
    if($includes_vat==='vat_excluded_neto'){
        echo "+ IVA.";
    } else {
        echo "incluyendo el IVA.";
    }
    ?>
<p>El NETO del cliente es <?=number_format($client_net_price, 0, ",", ".");?>
<p>La comision neta de la agencia es <?=number_format( $comission , 0, ",", ".");?>
<p>El IVA de la operación es <?=number_format( $comission_vat , 0, ",", ".");?>
<p>La comision de la agencia + IVA es <?=number_format( $comission + $comission_vat, 0, ",", ".");?>


