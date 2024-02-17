<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$sueldo = $_POST['txtSueldo'];
$categoria = $_POST['rbCategoria'];
$año = $_POST['txtAño'];

if($categoria == 'A'){
   if($año >=1 && $año <= 3){
    $aumento = $sueldo*.10;
   }elseif($año >=4 && $año <= 6) {
    $aumento = $sueldo*.15;
   }elseif($año > 6){
    $aumento = $sueldo*.20;
   }
   
}elseif($categoria == 'B'){
    if($año >=2 && $año <= 5){
        $aumento = $sueldo*.15;
    }elseif($año >=6 && $año <= 8) {
        $aumento = $sueldo*.20;
    }elseif($año > 8){
        $aumento = $sueldo*.25;
    }
}elseif($categoria == 'C'){
    if($año >=3 && $año <= 8){
        $aumento = $sueldo*.12;
    }elseif($año >=9 && $año <= 12) {
        $aumento = $sueldo*.18;
    }elseif($año > 12){
        $aumento = $sueldo*.30;
    }
}
$total = $sueldo + $aumento;
echo "CATEGORIA: $categoria <br><br> SALARIO: $total";
?>
</body>
</html>
