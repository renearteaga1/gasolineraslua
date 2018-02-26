<?php 
session_start();

date_default_timezone_set('America/Bogota');
$error = "";
$ErrorUser = "";
$ErrorPassword = "";
$stockMartes = "";
$diasMartes = "";
 
//echo $_SESSION['id'];
if (date('w') == 1){
$date = date('M d, Y', strtotime("today"));
$martes_f = date('M d, Y', strtotime("next tuesday"));
$miercoles_f = date('M d, Y', strtotime("next wednesday"));
$jueves_f = date('M d, Y', strtotime("next thursday"));
$viernes_f = date('M d, Y', strtotime("next friday"));
$sabado_f = date('M d, Y', strtotime("next saturday"));
$domingo_f = date('M d, Y', strtotime("next sunday"));
$lunes_f = date('M d, Y', strtotime("next monday"));
} elseif (date('w')<1){
$date = date('M d, Y', strtotime("next monday"));
$martes_f = date('M d, Y', strtotime("next tuesday"));
$miercoles_f = date('M d, Y', strtotime("next wednesday"));
$jueves_f = date('M d, Y', strtotime("next thursday"));
$viernes_f = date('M d, Y', strtotime("next friday"));
$sabado_f = date('M d, Y', strtotime("next saturday"));
$domingo_f = date('M d, Y', strtotime("next sunday"));
$lunes_f = date('M d, Y', strtotime("Monday + 1 week"));
} elseif (date('w')>1){
$date = date('M d, Y', strtotime("previous monday"));
$martes_f = date('M d, Y', strtotime("previous monday"));
$miercoles_f = date('M d, Y', strtotime("previous monday"));
$jueves_f = date('M d, Y', strtotime("previous monday"));
$viernes_f = date('M d, Y', strtotime("previous monday"));
$sabado_f = date('M d, Y', strtotime("previous monday"));
$domingo_f = date('M d, Y', strtotime("previous monday"));
$lunes_f = date('M d, Y', strtotime("Monday - 1 week"));    
}

if (array_key_exists("id", $_SESSION)){
    
    $compra=1;
    
}else {
    
    header("Location: compras.php");
    
}

$link = mysqli_connect("localhost", "luagasco_diario", "4muLnD74g)*{", "luagasco_pedidos");
    
    if (mysqli_connect_error()) {
        
    die ("DB Connection error");

    }   
   // $query = "INSERT INTO `calculo` (`stockd`, `dia_semana`, `id_semana`,`anio`, `fecha_pedido`, `fecha_despacho`) VALUES ('0', 'Martes','".date('W')."','".date('Y')."'), ('0', 'Miercoles', '".date('W')."','".date('Y')."'), ('0', 'Jueves', '".date('W')."','".date('Y')."'), ('0', 'Viernes', '".date('W')."','".date('Y')."'), ('0', 'Sabado', '".date('W')."','".date('Y')."'), ('0', 'Domingo', '".date('W')."','".date('Y')."'), ('0', 'Lunes', '".date('W')."','".date('Y')."')";                
    $query = "INSERT INTO `calculo` (`stockd`, `dia_semana`, `id_semana`,`anio`) VALUES ('0', 'Martes','".date('W')."','".date('Y')."'), ('0', 'Miercoles', '".date('W')."','".date('Y')."'), ('0', 'Jueves', '".date('W')."','".date('Y')."'), ('0', 'Viernes', '".date('W')."','".date('Y')."'), ('0', 'Sabado', '".date('W')."','".date('Y')."'), ('0', 'Domingo', '".date('W')."','".date('Y')."'), ('0', 'Lunes', '".date('W')."','".date('Y')."')";                
    //$query = "UPDATE `calculo` SET `stockd` = '1', `stocke` = '1' ORDER BY `id` DESC LIMIT 1";                
    mysqli_query($link, $query);
  
    
    $query2 = "INSERT INTO `calculo_anturios` (`stockd`, `dia_semana`, `id_semana`,`anio`) VALUES ('0', 'Martes','".date('W')."','".date('Y')."'), ('0', 'Miercoles', '".date('W')."','".date('Y')."'), ('0', 'Jueves', '".date('W')."','".date('Y')."'), ('0', 'Viernes', '".date('W')."','".date('Y')."'), ('0', 'Sabado', '".date('W')."','".date('Y')."'), ('0', 'Domingo', '".date('W')."','".date('Y')."'), ('0', 'Lunes', '".date('W')."','".date('Y')."')";                
    //$query = "UPDATE `calculo` SET `stockd` = '1', `stocke` = '1' ORDER BY `id` DESC LIMIT 1";                
    mysqli_query($link, $query2);

    $query3 = "INSERT INTO `calculo_valgas` (`stockd`, `dia_semana`, `id_semana`,`anio`) VALUES ('0', 'Martes','".date('W')."','".date('Y')."'), ('0', 'Miercoles', '".date('W')."','".date('Y')."'), ('0', 'Jueves', '".date('W')."','".date('Y')."'), ('0', 'Viernes', '".date('W')."','".date('Y')."'), ('0', 'Sabado', '".date('W')."','".date('Y')."'), ('0', 'Domingo', '".date('W')."','".date('Y')."'), ('0', 'Lunes', '".date('W')."','".date('Y')."')";                
    //$query = "UPDATE `calculo` SET `stockd` = '1', `stocke` = '1' ORDER BY `id` DESC LIMIT 1";                
    mysqli_query($link, $query3);
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    <style type='text/css'>
    
     html {
        
        zoom: 0.8;
        
    }
    
    input {
        
        font-weight: bold;
     
    }
    
    .no-border{
         border: none;
    }
    
    .linea{
        text-decoration:underline;
        
    }
    
    .table td{
        font-weight:600;
    }
    
    .table td, .table th{
        
        vertical-align: middle;
        text-align: center;
        border:0.5px solid #d3d3d3;
        
    }
    
    .table td.inputData {
                
        padding:0;
  
        background-color:none;
    }
    
    .table tr td {
                
        padding:0;
  
        
    }
    

   
   
    .table th[rowspan] {
        
        text-align:center;
        vertical-align: middle;
        -webkit-transform-: rotate(-45deg);
        transform: rotate(-45deg);
    }
    
    .celeste{
        background-color:#f7f8f9;
        
    }
    
    .clave{
        background-color:#e9f1ec;
        display: none;
        
    }
    
    .clavesmall{
        font-size: small;
        font-weight:400;
        
    }
    
    .pato{
        background-color:#fcf6e0;
        
    }
    
    .red{
        background-color:#f9efef;
        
    }
    
    #super {
        
        background-color:#e51d1d;
        font-weight:600;
        color:white;
        
    }
    
    #extra {
        
        background-color: #3017d3;
        font-weight:600;
        color:white;
        
    }
    
    #diesel {
        
        background-color: #f7d354;
        font-weight:700;
        color:black;
        
    }
    
    .displayIni {
        
        display:none;
        
    }   
    
    @media(max-width:576px){
        .modal-dialog{
            max-width:25em;
        }
    }
    
    #dialog{
    


background-color: white;
display: none;
    }

    
    </style>
  
  
  </head>
  <body>
    
    
    <div class='container-fluid' id="calendario">
    <h1>Compras Sugeridas</h1>
   
    <form class='form-group' id='calculo1' method="post">
   <table class="table table-bordered">
  
  <thead>
    <tr>
      <th colspan='5'><?php echo $date; ?></th>
      
      <th id='lunes2'>Lunes</th>
      <th colspan='3' id='martes'>Martes</th>
      <th colspan='3' id='miercoles'>Miercoles</th>
      <th colspan='3' id='jueves'>Jueves</th>
      <th colspan='3' id='viernes'>Viernes</th>
      <th colspan='3' id='sabado'>Sabado</th>
      <th colspan='3' id='domingo'>Domingo</th>
      <th colspan='3' id='lunes'>Lunes</th>
      <th colspan='2' class=' ' id='martes2'>Martes</th>
    </tr>
  </thead>
  
  <thead>
    <tr>
      <th>E/S</th>
      <th class=' '>Capacidad Total</th>
       <th class="  stockLunes2Titulo under">Stock</th>
      <th class='  ventaMediaTitulo under'>Venta Media</th>
      <th></th>
      <th>Compra</th>
      <th class="stockMartesTitulo  under">Stock </th>
      <th class='diasMartesTitulo under'>Dias</th>
      <th>Compras</th>
      <th class="clave">ClavesEP</th>
      <th class='stockMiercolesTitulo under'>Stock </th>
      <th class='diasMiercolesTitulo under'>Dias</th>
      <th>Compras</th>
      <th class="clave">ClavesEP</th>
      <th class='stockJuevesTitulo under'>Stock </th>
      <th class='diasJuevesTitulo under'>Dias</th>
      <th>Compras</th>
      <th class="clave">ClavesEP</th>
      <th class='stockViernesTitulo under'>Stock </th>
      <th class='diasViernesTitulo under'>Dias</th>
      <th>Compras</th>
      <th class="clave">ClavesEP</th>
      <th class='stockSabadoTitulo under'>Stock </th>
      <th class='diasSabadoTitulo under'>Dias</th>
      <th>Compras</th>
      <th class="clave">ClavesEP</th>
      <th class='stockDomingoTitulo under'>Stock </th>
      <th class='diasDomingoTitulo under'>Dias</th>
      <th>Compras</th>
      <th class="clave">ClavesEP</th>
      <th class='stockLunesTitulo under'>Stock </th>
      <th class='diasLunesTitulo under'>Dias</th>
      <th>Compras</th>
      <th class="clave">ClavesEP</th>
      <th class='stockLunesTitulo under'>Stock </th>
      <th class='diasLunesTitulo under'>Dias</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th class='estacion'  rowspan="3">Anturios I</th>
      <td class=' '>10 000</td>
    <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal101 red no-border' type="text"  id="stockDieselAnt1"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal101 no-border pato" type="text"  id="ventadieselAnt1"  >
 </td>  
    <td id='diesel'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Diesel
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal101 celeste no-border' type="text" placeholder=" " id="compradieselAnt1Lunes"  >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesAnt1'></td>
    <td class='diasMartesTitulo pato' id='diasMartesAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compradieselAnt1Martes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesAnt1'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Miercoles"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesAnt1'></td>
    <td class='diasJuevesTitulo pato' id='diasJuevesAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Jueves"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesAnt1'></td>
    <td class='diasViernesTitulo pato' id='diasViernesAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Viernes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoAnt1'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Sabado"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoAnt1'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Domingo"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2Ant1'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2Ant1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Lunes2"  >
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2Ant1'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2Ant1'></td>
    
    </tr>
      <tr>
      <td class=' '>10 000</td>
    <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal101 no-border red' type="text"id="stockExtraAnt1"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal101 no-border pato" type="text" id="ventaExtraAnt1"  >
 </td>  
    <td id='extra'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Extra
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal101 no-border celeste' type="text"  id="compraExtraAnt1Lunes"  >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesEAnt1'></td>
    <td class='diasMartesTitulo pato' id='diasMartesEAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compraExtraAnt1Martes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesEAnt1'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesEAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compraExtraAnt1Miercoles"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 clavesmall no-border clave" type="text"  id="claveExtraAnt1Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesEAnt1'></td>
    <td class='diasJuevesTitulo pato' id='diasJuevesEAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compraExtraAnt1Jueves"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesEAnt1'></td>
    <td class='diasViernesTitulo pato' id='diasViernesEAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraExtraAnt1Viernes">
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoEAnt1'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoEAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compraExtraAnt1Sabado"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoEAnt1'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoEAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compraExtraAnt1Domingo"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2EAnt1'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2EAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compraExtraAnt1Lunes2"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2EAnt1'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2EAnt1'></td>
    
    </tr>
   
   <tr>
      <td class=' '>10 000</td>
     <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal101 no-border red' type="text" id="stockSuperAnt1"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal101 no-border pato" type="text" id="ventaSuperAnt1" >
 </td> 
    <td id='super'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Super
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal101 no-border celeste' type="text" placeholder=" " id="compraSuperAnt1Lunes" >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesSAnt1'></td>
    <td class='diasMartesTitulo pato' id='diasMartesSAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Martes" >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesSAnt1'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesSAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Miercoles" >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesSAnt1'></td>
    <td class='diasJuevesTitulo pato'id='diasJuevesSAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Jueves" >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesSAnt1'></td>
    <td class='diasViernesTitulo pato' id='diasViernesSAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Viernes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoSAnt1'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoSAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Sabado"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoSAnt1'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoSAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Domingo"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2SAnt1'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2SAnt1'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Lunes2"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2SAnt1'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2SAnt1'></td>
    
    </tr>
   
  </tbody>
  
  </table>
  
  </form>
  

</div>

<!-- ANTURIOS II -->

<div class='container-fluid' id="calendario">
   
    <form class='form-group' id='calculo1' method="post">
   <table class="table table-bordered">
  
  
  
  <thead>
    <tr>
      <th>E/S</th>
      <th class=' '>Capacidad Total</th>
       <th class="  stockLunes2Titulo under red">Stock</th>
      <th class='  ventaMediaTitulo under pato'>Venta Media</th>
      <th></th>
      <th class="celeste">Compra</th>
      <th class="stockMartesTitulo  under red">Stock </th>
      <th class='diasMartesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockMiercolesTitulo under red'>Stock </th>
      <th class='diasMiercolesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockJuevesTitulo under red'>Stock </th>
      <th class='diasJuevesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockViernesTitulo under red'>Stock </th>
      <th class='diasViernesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockSabadoTitulo under red'>Stock </th>
      <th class='diasSabadoTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockDomingoTitulo under red'>Stock </th>
      <th class='diasDomingoTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockLunesTitulo under red'>Stock </th>
      <th class='diasLunesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockLunesTitulo under red'>Stock </th>
      <th class='diasLunesTitulo under pato'>Dias</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th class='estacion'  rowspan="3">Anturios II</th>
      <td class=' '>20 000</td>
    <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal102 red no-border' type="text"  id="stockDieselAnt2"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal102 no-border pato" type="text"  id="ventadieselAnt2"  >
 </td>  
    <td id='diesel'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Diesel
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal102 celeste no-border' type="text" placeholder=" " id="compradieselAnt2Lunes"  >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesAnt2'></td>
    <td class='diasMartesTitulo pato' id='diasMartesAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text"  id="compradieselAnt2Martes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="clavedieselAnt2Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesAnt2'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" id="compradieselAnt2Miercoles"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="clavedieselAnt2Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesAnt2'></td>
    <td class='diasJuevesTitulo pato' id='diasJuevesAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" id="compradieselAnt2Jueves"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="clavedieselAnt2Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesAnt2'></td>
    <td class='diasViernesTitulo pato' id='diasViernesAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" id="compradieselAnt2Viernes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="clavedieselAnt2Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoAnt2'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" id="compradieselAnt2Sabado"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="clavedieselAnt2Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoAnt2'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" id="compradieselAnt2Domingo"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="clavedieselAnt2Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2Ant2'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2Ant2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" id="compradieselAnt2Lunes2"  >
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="clavedieselAnt2Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2Ant2'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2Ant2'></td>
    
    </tr>
      <tr>
      <td class=' '>16 000</td>
    <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal102 no-border red' type="text"id="stockExtraAnt2"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal102 no-border pato" type="text" id="ventaExtraAnt2"  >
 </td>  
    <td id='extra'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Extra
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal102 no-border celeste' type="text"  id="compraExtraAnt2Lunes"  >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesEAnt2'></td>
    <td class='diasMartesTitulo pato' id='diasMartesEAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text"  id="compraExtraAnt2Martes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveExtraAnt2Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesEAnt2'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesEAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" id="compraExtraAnt2Miercoles"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal102 clavesmall no-border clave" type="text"  id="claveExtraAnt2Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesEAnt2'></td>
    <td class='diasJuevesTitulo pato' id='diasJuevesEAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text"  id="compraExtraAnt2Jueves"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveExtraAnt2Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesEAnt2'></td>
    <td class='diasViernesTitulo pato' id='diasViernesEAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" placeholder=" " id="compraExtraAnt2Viernes">
    </td>
     <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveExtraAnt2Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoEAnt2'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoEAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" id="compraExtraAnt2Sabado"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveExtraAnt2Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoEAnt2'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoEAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text"  id="compraExtraAnt2Domingo"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveExtraAnt2Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2EAnt2'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2EAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text"  id="compraExtraAnt2Lunes2"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveExtraAnt2Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2EAnt2'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2EAnt2'></td>
    
    </tr>
   
   <tr>
      <td class=' '>10 000</td>
     <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal102 no-border red' type="text" id="stockSuperAnt2"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal102 no-border pato" type="text" id="ventaSuperAnt2" >
 </td> 
    <td id='super'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Super
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal102 no-border celeste' type="text" placeholder=" " id="compraSuperAnt2Lunes" >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesSAnt2'></td>
    <td class='diasMartesTitulo pato' id='diasMartesSAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" placeholder=" " id="compraSuperAnt2Martes" >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveSuperAnt2Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesSAnt2'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesSAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" placeholder=" " id="compraSuperAnt2Miercoles" >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveSuperAnt2Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesSAnt2'></td>
    <td class='diasJuevesTitulo pato'id='diasJuevesSAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" placeholder=" " id="compraSuperAnt2Jueves" >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveSuperAnt2Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesSAnt2'></td>
    <td class='diasViernesTitulo pato' id='diasViernesSAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" placeholder=" " id="compraSuperAnt2Viernes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveSuperAnt2Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoSAnt2'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoSAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" placeholder=" " id="compraSuperAnt2Sabado"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveSuperAnt2Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoSAnt2'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoSAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" placeholder=" " id="compraSuperAnt2Domingo"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveSuperAnt2Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2SAnt2'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2SAnt2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal102 no-border celeste" type="text" placeholder=" " id="compraSuperAnt2Lunes2"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal102 no-border clavesmall clave" type="text"  id="claveSuperAnt2Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2SAnt2'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2SAnt2'></td>
    
    </tr>
   
  </tbody>
  
  </table>
  
  </form>
  

</div>

<!-- E/S VALGAS -->

<div class='container-fluid' id="calendario">
   
    <form class='form-group' id='calculo1' method="post">
   <table class="table table-bordered">
  
  <thead>
    <tr>
      <th>E/S</th>
      <th class=' '>Capacidad Total</th>
       <th class="  stockLunes2Titulo under red">Stock</th>
      <th class='  ventaMediaTitulo under pato'>Venta Media</th>
      <th></th>
      <th class="celeste">Compra</th>
      <th class="stockMartesTitulo  under red">Stock </th>
      <th class='diasMartesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockMiercolesTitulo under red'>Stock </th>
      <th class='diasMiercolesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockJuevesTitulo under red'>Stock </th>
      <th class='diasJuevesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockViernesTitulo under red'>Stock </th>
      <th class='diasViernesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockSabadoTitulo under red'>Stock </th>
      <th class='diasSabadoTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockDomingoTitulo under red'>Stock </th>
      <th class='diasDomingoTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockLunesTitulo under red'>Stock </th>
      <th class='diasLunesTitulo under pato'>Dias</th>
      <th class="celeste">Compras</th>
      <th class='clave'>ClavesEP</th>
      <th class='stockLunesTitulo under red'>Stock </th>
      <th class='diasLunesTitulo under pato'>Dias</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th class='estacion'  rowspan="3">E/S Valgas</th>
      <td class=' '>16 000</td>
    <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal103 red no-border' type="text"  id="stockDieselValgas"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal103 no-border pato" type="text"  id="ventadieselValgas"  >
 </td>  
    <td id='diesel'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Diesel
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal103 celeste no-border' type="text" placeholder=" " id="compradieselValgasLunes"  >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesValgas'></td>
    <td class='diasMartesTitulo pato' id='diasMartesValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text"  id="compradieselValgasMartes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="clavedieselValgasMartes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesValgas'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" id="compradieselValgasMiercoles"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="clavedieselValgasMiercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesValgas'></td>
    <td class='diasJuevesTitulo pato' id='diasJuevesValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" id="compradieselValgasJueves"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="clavedieselValgasJueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesValgas'></td>
    <td class='diasViernesTitulo pato' id='diasViernesValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" id="compradieselValgasViernes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="clavedieselValgasViernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoValgas'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" id="compradieselValgasSabado"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="clavedieselValgasSabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoValgas'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" id="compradieselValgasDomingo"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="clavedieselValgasDomingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2Valgas'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2Valgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" id="compradieselValgasLunes2"  >
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="clavedieselValgasLunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2Valgas'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2Valgas'></td>
    
    </tr>
      <tr>
      <td class=' '>16 000</td>
    <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal103 no-border red' type="text"id="stockExtraValgas"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal103 no-border pato" type="text" id="ventaExtraValgas"  >
 </td>  
    <td id='extra'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Extra
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal103 no-border celeste' type="text"  id="compraExtraValgasLunes"  >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesEValgas'></td>
    <td class='diasMartesTitulo pato' id='diasMartesEValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text"  id="compraExtraValgasMartes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveExtraValgasMartes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesEValgas'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesEValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" id="compraExtraValgasMiercoles"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal103 clavesmall no-border clave" type="text"  id="claveExtraValgasMiercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesEValgas'></td>
    <td class='diasJuevesTitulo pato' id='diasJuevesEValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text"  id="compraExtraValgasJueves"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveExtraValgasJueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesEValgas'></td>
    <td class='diasViernesTitulo pato' id='diasViernesEValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" placeholder=" " id="compraExtraValgasViernes">
    </td>
     <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveExtraValgasViernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoEValgas'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoEValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" id="compraExtraValgasSabado"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveExtraValgasSabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoEValgas'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoEValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text"  id="compraExtraValgasDomingo"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveExtraValgasDomingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2EValgas'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2EValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text"  id="compraExtraValgasLunes2"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveExtraValgasLunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2EValgas'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2EValgas'></td>
    
    </tr>
   
   <tr>
      <td class=' '>10 000</td>
     <td class='inputData   stockLunes2Titulo red'>
    <input class='form-control cal103 no-border red' type="text" id="stockSuperValgas"  >
 </td>
      <td class='inputData   ventaMediaTitulo pato'>
    <input class="form-control cal103 no-border pato" type="text" id="ventaSuperValgas" >
 </td> 
    <td id='super'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Super
    </div>
    </td>
    
    <td class='inputData celeste'>
    <input class='form-control cal103 no-border celeste' type="text" placeholder=" " id="compraSuperValgasLunes" >
    </td>
    <td class='stockMartesTitulo red' id='stockMartesSValgas'></td>
    <td class='diasMartesTitulo pato' id='diasMartesSValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" placeholder=" " id="compraSuperValgasMartes" >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveSuperValgasMartes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesSValgas'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesSValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" placeholder=" " id="compraSuperValgasMiercoles" >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveSuperValgasMiercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesSValgas'></td>
    <td class='diasJuevesTitulo pato'id='diasJuevesSValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" placeholder=" " id="compraSuperValgasJueves" >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveSuperValgasJueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesSValgas'></td>
    <td class='diasViernesTitulo pato' id='diasViernesSValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" placeholder=" " id="compraSuperValgasViernes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveSuperValgasViernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoSValgas'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoSValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" placeholder=" " id="compraSuperValgasSabado"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveSuperValgasSabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoSValgas'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoSValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" placeholder=" " id="compraSuperValgasDomingo"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveSuperValgasDomingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2SValgas'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2SValgas'></td>
    <td class='inputData celeste'>
    <input class="form-control cal103 no-border celeste" type="text" placeholder=" " id="compraSuperValgasLunes2"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal103 no-border clavesmall clave" type="text"  id="claveSuperValgasLunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2SValgas'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2SValgas'></td>
    
    </tr>
   
  </tbody>
  
  </table>
  
  </form>
  

</div>

<div><?php echo $error; ?></div>

<div class="container" id="edit-btn">
<a href="compras.php?save=1"><button type="submit" class="guardar btn btn-outline-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>Guardar</button></a>
<a href="edit2.php"><button type="submit" class="guardar btn btn-outline-success">Nuevo Calendario</button></a>
</div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
  <script type='text/javascript'>
  
  
    $(document).ready(function() {
        
   /*     $.ajax({
                //method:"GET",
                url:"read.php",
                type: "GET",
                
                dataType: "json",                                            
                success: function(data){
                    //info = data[i].id;
                    //console.log(data[0].id);
                   
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);                   
                   $(('#stockDieselAnt1')).val(data[0].stockd);
                   $(('#ventadieselAnt1')).val(data[0].ventad_media);
                   $(('#compradieselAnt1Lunes')).val(data[0].comprad_lunes);                  
                   $('#stockMartes').html(data[0].stockd_martes);
                   $(('#diasMartes')).html(data[0].diasd_martes);
                   $(('#diasMartes')).val(data[0].diasd_martes);
                   $(('#compradieselAnt1Martes')).val(data[0].comprad_martes);
                   $('#stockMiercoles').html(data[0].stockd_miercoles);
                   $(('#diasMiercoles')).html(data[0].diasd_miercoles);
                   $(('#diasMiercoles')).val(data[0].diasd_miercoles);
                   $(('#compradieselAnt1Miercoles')).val(data[0].comprad_miercoles);
                   $('#stockJueves').html(data[0].stockd_jueves);
                   $(('#diasJueves')).html(data[0].diasd_jueves);
                   $(('#diasJueves')).val(data[0].diasd_jueves);
                   $(('#compradieselAnt1Jueves')).val(data[0].comprad_jueves);
                   $('#stockViernes').html(data[0].stockd_viernes);
                   $(('#diasViernes')).html(data[0].diasd_viernes);
                   $(('#diasViernes')).val(data[0].diasd_viernes);
                   $(('#compradieselAnt1Viernes')).val(data[0].comprad_viernes);
                   $('#stockSabado').html(data[0].stockd_sabado);
                   $(('#diasSabado')).html(data[0].diasd_sabado);
                   $(('#diasSabado')).val(data[0].diasd_sabado);
                   $(('#compradieselAnt1Sabado')).val(data[0].comprad_sabado);
                   $('#stockDomingo').html(data[0].stockd_domingo);
                   $(('#diasDomingo')).html(data[0].diasd_domingo);
                   $(('#diasDomingo')).val(data[0].diasd_domingo);
                   $(('#compradieselAnt1Domingo')).val(data[0].comprad_domingo);
                   $('#stockLunes2').html(data[0].stockd_lunes2);
                   $(('#diasLunes2')).html(data[0].diasd_lunes2);
                   $(('#diasLunes2')).val(data[0].diasd_lunes2);
                   $(('#compradieselAnt1Lunes2')).val(data[0].comprad_lunes2);
                   $('#stockMartes2').html(data[0].stockd_martes2);
                   $(('#diasMartes2')).html(data[0].diasd_martes2);
                   $(('#diasMartes2')).val(data[0].diasd_martes2);
                   
                   //EXTRA 
                   $(('#stockExtraAnt1')).val(data[0].stocke);
                   $(('#ventaExtraAnt1')).val(data[0].ventad_media);
                   $(('#compraExtraAnt1Lunes')).val(data[0].comprae_lunes);                  
                   $('#stockMartesE').html(data[0].stocke_martes);
                   $(('#diasMartesE')).html(data[0].diase_martes);
                   $(('#diasMartesE')).val(data[0].diase_martes);
                   $(('#compraExtraAnt1Martes')).val(data[0].comprae_martes);
                   $('#stockMiercolesE').html(data[0].stocke_miercoles);
                   $(('#diasMiercolesE')).html(data[0].diase_miercoles);
                   $(('#diasMiercolesE')).val(data[0].diase_miercoles);
                   $(('#compraExtraAnt1Miercoles')).val(data[0].comprae_miercoles);
                   $('#stockJuevesE').html(data[0].stocke_jueves);
                   $(('#diasJuevesE')).html(data[0].diase_jueves);
                   $(('#diasJuevesE')).val(data[0].diase_jueves);
                   $(('#compraExtraAnt1Jueves')).val(data[0].comprae_jueves);
                   $('#stockViernesE').html(data[0].stocke_viernes);
                   $(('#diasViernesE')).html(data[0].diase_viernes);
                   $(('#diasViernesE')).val(data[0].diase_viernes);
                   $(('#compraExtraAnt1Viernes')).val(data[0].comprae_viernes);
                   $('#stockSabadoE').html(data[0].stocke_sabado);
                   $(('#diasSabadoE')).html(data[0].diase_sabado);
                   $(('#diasSabadoE')).val(data[0].diase_sabado);
                   $(('#compraExtraAnt1Sabado')).val(data[0].comprae_sabado);
                   $('#stockDomingoE').html(data[0].stocke_domingo);
                   $(('#diasDomingoE')).html(data[0].diase_domingo);
                   $(('#diasDomingoE')).val(data[0].diase_domingo);
                   $(('#compraExtraAnt1Domingo')).val(data[0].comprae_domingo);
                   $('#stockLunes2E').html(data[0].stocke_lunes2);
                   $(('#diasLunes2E')).html(data[0].diase_lunes2);
                   $(('#diasLunes2E')).val(data[0].diase_lunes2);
                   $(('#compraExtraAnt1Lunes2')).val(data[0].comprae_lunes2);
                   $('#stockMartes2E').html(data[0].stocke_martes2);
                   $(('#diasMartes2E')).html(data[0].diase_martes2);
                   $(('#diasMartes2E')).val(data[0].diase_martes2);
                   
                   //SUPER
                   $(('#stockSuperAnt1')).val(data[0].stocks);
                   $(('#ventaSuperAnt1')).val(data[0].ventad_media);
                   $(('#compraSuperAnt1Lunes')).val(data[0].compras_lunes);                  
                   $('#stockMartesS').html(data[0].stocks_martes);
                   $(('#diasMartesS')).html(data[0].diass_martes);
                   $(('#diasMartesS')).val(data[0].diass_martes);
                   $(('#compraSuperAnt1Martes')).val(data[0].compras_martes);
                   $('#stockMiercolesS').html(data[0].stocks_miercoles);
                   $(('#diasMiercolesS')).html(data[0].diass_miercoles);
                   $(('#diasMiercolesS')).val(data[0].diass_miercoles);
                   $(('#compraSuperAnt1Miercoles')).val(data[0].compras_miercoles);
                   $('#stockJuevesS').html(data[0].stocks_jueves);
                   $(('#diasJuevesS')).html(data[0].diass_jueves);
                   $(('#diasJuevesS')).val(data[0].diass_jueves);
                   $(('#compraSuperAnt1Jueves')).val(data[0].compras_jueves);
                   $('#stockViernesS').html(data[0].stocks_viernes);
                   $(('#diasViernesS')).html(data[0].diass_viernes);
                   $(('#diasViernesS')).val(data[0].diass_viernes);
                   $(('#compraSuperAnt1Viernes')).val(data[0].compras_viernes);
                   $('#stockSabadoS').html(data[0].stocks_sabado);
                   $(('#diasSabadoS')).html(data[0].diass_sabado);
                   $(('#diasSabadoS')).val(data[0].diass_sabado);
                   $(('#compraSuperAnt1Sabado')).val(data[0].compras_sabado);
                   $('#stockDomingoS').html(data[0].stocks_domingo);
                   $(('#diasDomingoS')).html(data[0].diass_domingo);
                   $(('#diasDomingoS')).val(data[0].diass_domingo);
                   $(('#compraSuperAnt1Domingo')).val(data[0].compras_domingo);
                   $('#stockLunes2S').html(data[0].stocks_lunes2);
                   $(('#diasLunes2S')).html(data[0].diass_lunes2);
                   $(('#diasLunes2S')).val(data[0].diass_lunes2);
                   $(('#compraSuperAnt1Lunes2')).val(data[0].compras_lunes2);
                   $('#stockMartes2S').html(data[0].stocks_martes2);
                   $(('#diasMartes2S')).html(data[0].diass_martes2);
                   $(('#diasMartes2S')).val(data[0].diass_martes2);
                }
        });*/
         $.ajax({
                //method:"GET",
                url:"read.php",
                type: "GET",
                
                dataType: "json",                                            
                success: function(data){
                   //info = data[i].id;
                    //console.log(data[0].id);
                    
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselAnt1')).val(data[13].stockd);
                   $(('#ventadieselAnt1')).val(data[13].ventad_media);
                   $(('#compradieselAnt1Lunes')).val(data[7].comprad);
                  
                   //EXTRA 
                   $(('#stockExtraAnt1')).val(data[13].stocke);
                   $(('#ventaExtraAnt1')).val(data[13].ventae_media);
                   $(('#compraExtraAnt1Lunes')).val(data[7].comprae);                  
                  
                   //SUPER
                   $(('#stockSuperAnt1')).val(data[13].stocks);
                   $(('#ventaSuperAnt1')).val(data[13].ventas_media);
                   $(('#compraSuperAnt1Lunes')).val(data[7].compras);                  
                   
                }
        });
        
        <!-- ANTURIOS II READ2-->
         $.ajax({
                //method:"GET",
                url:"read2.php",
                type: "GET",
                
                dataType: "json",                                            
                success: function(data){
                   //info = data[i].id;
                    //console.log(data[0].id);
                    
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselAnt2')).val(data[13].stockd);
                   $(('#ventadieselAnt2')).val(data[13].ventad_media);
                   $(('#compradieselAnt2Lunes')).val(data[7].comprad);
                  
                   //EXTRA 
                   $(('#stockExtraAnt2')).val(data[13].stocke);
                   $(('#ventaExtraAnt2')).val(data[13].ventae_media);
                   $(('#compraExtraAnt2Lunes')).val(data[7].comprae);                  
                  
                   //SUPER
                   $(('#stockSuperAnt2')).val(data[13].stocks);
                   $(('#ventaSuperAnt2')).val(data[13].ventas_media);
                   $(('#compraSuperAnt2Lunes')).val(data[7].compras);                  
                   
                }
        });


        <!-- VALGAS READ2-->
         $.ajax({
                //method:"GET",
                url:"read3.php",
                type: "GET",
                
                dataType: "json",                                            
                success: function(data){
                   //info = data[i].id;
                    //console.log(data[0].id);
                    
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselValgas')).val(data[13].stockd);
                   $(('#ventadieselValgas')).val(data[13].ventad_media);
                   $(('#compradieselValgasLunes')).val(data[7].comprad);
                  
                   //EXTRA 
                   $(('#stockExtraValgas')).val(data[13].stocke);
                   $(('#ventaExtraValgas')).val(data[13].ventae_media);
                   $(('#compraExtraValgasLunes')).val(data[7].comprae);                  
                  
                   //SUPER
                   $(('#stockSuperValgas')).val(data[13].stocks);
                   $(('#ventaSuperValgas')).val(data[13].ventas_media);
                   $(('#compraSuperValgasLunes')).val(data[7].compras);                  
                   
                }
        });
  
        $("#martes").click(function(){
           if ($(".stockMartesTitulo").css('display') !== 'none'){
           $('.stockMartesTitulo').hide();
           $(".diasMartesTitulo").hide();
           $('#martes').attr('colspan', 1);
           
           } else {
                $('.stockMartesTitulo').show();
                $(".diasMartesTitulo").show();
               $('#martes').attr('colspan', 3);           
           };
        });

        $("#miercoles").click(function(){
           if ($(".stockMiercolesTitulo").css('display') !== 'none'){
           $('.stockMiercolesTitulo').hide();
           $(".diasMiercolesTitulo").hide();
           $('#miercoles').attr('colspan', 1);
           
           } else {
                $('.stockMiercolesTitulo').show();
                $(".diasMiercolesTitulo").show();
               $('#miercoles').attr('colspan', 3);           
           };
        });
        
        $("#jueves").click(function(){
           if ($(".stockJuevesTitulo").css('display') !== 'none'){
           $('.stockJuevesTitulo').hide();
           $(".diasJuevesTitulo").hide();
           $('#jueves').attr('colspan', 1);
           
           } else {
                $('.stockJuevesTitulo').show();
                $(".diasJuevesTitulo").show();
               $('#jueves').attr('colspan', 3);           
           };
        });
        
        $("#viernes").click(function(){
           if ($(".stockViernesTitulo").css('display') !== 'none'){
           $('.stockViernesTitulo').hide();
           $(".diasViernesTitulo").hide();
           $('#viernes').attr('colspan', 1);
           
           } else {
                $('.stockViernesTitulo').show();
                $(".diasViernesTitulo").show();
               $('#viernes').attr('colspan', 3);           
           };
        });
        
        $("#sabado").click(function(){
           if ($(".stockSabadoTitulo").css('display') !== 'none'){
           $('.stockSabadoTitulo').hide();
           $(".diasSabadoTitulo").hide();
           $('#sabado').attr('colspan', 1);
           
           } else {
                $('.stockSabadoTitulo').show();
                $(".diasSabadoTitulo").show();
               $('#sabado').attr('colspan', 3);           
           };
        });
        
        $("#domingo").click(function(){
           if ($(".stockDomingoTitulo").css('display') !== 'none'){
           $('.stockDomingoTitulo').hide();
           $(".diasDomingoTitulo").hide();
           $('#domingo').attr('colspan', 1);
           
           } else {
                $('.stockDomingoTitulo').show();
                $(".diasDomingoTitulo").show();
               $('#domingo').attr('colspan', 3);           
           };
        });
        
        $("#lunes").click(function(){
           if ($(".stockLunesTitulo").css('display') !== 'none'){
           $('.stockLunesTitulo').hide();
           $(".diasLunesTitulo").hide();
           $('#lunes').attr('colspan', 1);
           
           } else {
                $('.stockLunesTitulo').show();
                $(".diasLunesTitulo").show();
               $('#lunes').attr('colspan', 3);           
           };
        });
                                        
        $("#martes2").click(function(){
           if ($(".stockMartes2Titulo").css('display') !== 'none'){
           $('.stockMartes2Titulo').hide();
           $(".diasMartes2Titulo").hide();
           $('#martes2').attr('colspan', 1);
           
           } else {
                $('.stockMartes2Titulo').show();
                $(".diasMartes2Titulo").show();
               $('#martes2').attr('colspan', 2);           
           };
        });
  
  
        $('.cal101').keyup(function(){
        
            var stockDieselAnt1 = parseInt($('#stockDieselAnt1').val() || 0);
           var ventaMedia = parseInt($('#ventadieselAnt1').val() || 0);
            var compradieselAnt1Lunes = parseInt($('#compradieselAnt1Lunes').val() || 0);
            var stockDieselMartes = parseInt((stockDieselAnt1 - ventaMedia) + compradieselAnt1Lunes);
            var diasDieselMartes= ((stockDieselMartes - 500) / ventaMedia).toFixed(1);
            
                $('#stockMartesAnt1').html(stockDieselMartes);
                $('#diasMartesAnt1').html(diasDieselMartes);
                $('#diasMartesAnt1').val(diasDieselMartes);
           
            
            if ($("#diasMartesAnt1").val() < 2){
                $("#diasMartesAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesAnt1").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compradieselAnt1Martes = parseInt($('#compradieselAnt1Martes').val() || 0);
            var stockDieselMiercoles = parseInt((stockDieselMartes - ventaMedia) + compradieselAnt1Martes);
            var diasDieselMiercoles= ((stockDieselMiercoles - 500) / ventaMedia).toFixed(1);
            $('#stockMiercolesAnt1').html(stockDieselMiercoles);
            $('#diasMiercolesAnt1').html(diasDieselMiercoles);
            $('#diasMiercolesAnt1').val(diasDieselMiercoles);
            if ($("#diasMiercolesAnt1").val() < 2){
                $("#diasMiercolesAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Miercoles = parseInt($('#compradieselAnt1Miercoles').val() || 0);
            var stockDieselJueves = parseInt((stockDieselMiercoles - ventaMedia) + compradieselAnt1Miercoles);
            var diasDieselJueves= ((stockDieselJueves - 500) / ventaMedia).toFixed(1);
            $('#stockJuevesAnt1').html(stockDieselJueves);
            $('#diasJuevesAnt1').html(diasDieselJueves);
            $('#diasJuevesAnt1').val(diasDieselJueves);
            if ($("#diasJuevesAnt1").val() < 2){
                $("#diasJuevesAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Jueves = parseInt($('#compradieselAnt1Jueves').val() || 0);
            var stockDieselViernes = parseInt((stockDieselJueves - ventaMedia) + compradieselAnt1Jueves);
            var diasDieselViernes= ((stockDieselViernes - 500) / ventaMedia).toFixed(1);
            $('#stockViernesAnt1').html(stockDieselViernes);
            $('#diasViernesAnt1').html(diasDieselViernes);
            $('#diasViernesAnt1').val(diasDieselViernes);
            if ($("#diasViernesAnt1").val() < 2){
                $("#diasViernesAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Viernes = parseInt($('#compradieselAnt1Viernes').val() || 0);
            var stockDieselSabado = parseInt((stockDieselViernes - ventaMedia) + compradieselAnt1Viernes);
            var diasDieselSabado = ((stockDieselSabado - 500) / ventaMedia).toFixed(1);
            $('#stockSabadoAnt1').html(stockDieselSabado);
            $('#diasSabadoAnt1').html(diasDieselSabado);
            $('#diasSabadoAnt1').val(diasDieselSabado);
            if ($("#diasSabadoAnt1").val() < 2){
                $("#diasSabadoAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Sabado = parseInt($('#compradieselAnt1Sabado').val() || 0);
            var stockDieselDomingo = parseInt((stockDieselSabado - ventaMedia) + compradieselAnt1Sabado);
            var diasDieselDomingo= ((stockDieselDomingo - 500) / ventaMedia).toFixed(1);
            $('#stockDomingoAnt1').html(stockDieselDomingo);
            $('#diasDomingoAnt1').html(diasDieselDomingo);
            $('#diasDomingoAnt1').val(diasDieselDomingo);
            if ($("#diasDomingoAnt1").val() < 2){
                $("#diasDomingoAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Domingo = parseInt($('#compradieselAnt1Domingo').val() || 0);
            var stockDieselLunes2 = parseInt((stockDieselDomingo - ventaMedia) + compradieselAnt1Domingo);
            var diasDieselLunes2= ((stockDieselLunes2 - 500) / ventaMedia).toFixed(1);
            $('#stockLunes2Ant1').html(stockDieselLunes2);
            $('#diasLunes2Ant1').html(diasDieselLunes2);
            $('#diasLunes2Ant1').val(diasDieselLunes2);
            if ($("#diasLunes2Ant1").val() < 2){
                $("#diasLunes2Ant1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2Ant1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Lunes2 = parseInt($('#compradieselAnt1Lunes2').val() || 0);
            var stockDieselMartes2 = parseInt((stockDieselLunes2 - ventaMedia) + compradieselAnt1Lunes2);
            var diasDieselMartes2= ((stockDieselMartes2 - 500) / ventaMedia).toFixed(1);
            $('#stockMartes2Ant1').html(stockDieselMartes2);
            $('#diasMartes2Ant1').html(diasDieselMartes2);
            $('#diasMartes2Ant1').val(diasDieselMartes2);
            if ($("#diasMartes2Ant1").val() < 2){
                $("#diasMartes2Ant1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2Ant1").css({"color":"black", "font-size":"100%"});                
            };
            
            //EXTRA
            var stockExtraAnt1 = parseInt($('#stockExtraAnt1').val() || 0);
            var ventaMediaE = parseInt($('#ventaExtraAnt1').val() || 0);
            var compraExtraAnt1Lunes = parseInt($('#compraExtraAnt1Lunes').val() || 0);
            var stockExtraMartes = parseInt((stockExtraAnt1 - ventaMediaE) + compraExtraAnt1Lunes);
            var diasExtraMartes= ((stockExtraMartes - 500) / ventaMediaE).toFixed(1);
            
                $('#stockMartesEAnt1').html(stockExtraMartes);
                $('#diasMartesEAnt1').html(diasExtraMartes);
                $('#diasMartesEAnt1').val(diasExtraMartes);
           
            
            if ($("#diasMartesEAnt1").val() < 2){
                $("#diasMartesEAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesEAnt1").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compraExtraAnt1Martes = parseInt($('#compraExtraAnt1Martes').val() || 0);
            var stockExtraMiercoles = parseInt((stockExtraMartes - ventaMediaE) + compraExtraAnt1Martes);
            var diasExtraMiercoles= ((stockExtraMiercoles - 500) / ventaMediaE).toFixed(1);
            $('#stockMiercolesEAnt1').html(stockExtraMiercoles);
            $('#diasMiercolesEAnt1').html(diasExtraMiercoles);
            $('#diasMiercolesEAnt1').val(diasExtraMiercoles);
            
            if ($("#diasMiercolesEAnt1").val() < 2){
                $("#diasMiercolesEAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesEAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Miercoles = parseInt($('#compraExtraAnt1Miercoles').val() || 0);
            var stockExtraJueves = parseInt((stockExtraMiercoles - ventaMediaE) + compraExtraAnt1Miercoles);
            var diasExtraJueves= ((stockExtraJueves - 500) / ventaMediaE).toFixed(1);
            $('#stockJuevesEAnt1').html(stockExtraJueves);
            $('#diasJuevesEAnt1').html(diasExtraJueves);
            $('#diasJuevesEAnt1').val(diasExtraJueves);
            if ($("#diasJuevesEAnt1").val() < 2){
                $("#diasJuevesEAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesEAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Jueves = parseInt($('#compraExtraAnt1Jueves').val() || 0);
            var stockExtraViernes = parseInt((stockExtraJueves - ventaMediaE) + compraExtraAnt1Jueves);
            var diasExtraViernes= ((stockExtraViernes - 500) / ventaMediaE).toFixed(1);
            $('#stockViernesEAnt1').html(stockExtraViernes);
            $('#diasViernesEAnt1').html(diasExtraViernes);
            $('#diasViernesEAnt1').val(diasExtraViernes);
            if ($("#diasViernesEAnt1").val() < 2){
                $("#diasViernesEAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesEAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Viernes = parseInt($('#compraExtraAnt1Viernes').val() || 0);
            var stockExtraSabado = parseInt((stockExtraViernes - ventaMediaE) + compraExtraAnt1Viernes);
            var diasExtraSabado = ((stockExtraSabado - 500) / ventaMediaE).toFixed(1);
            $('#stockSabadoEAnt1').html(stockExtraSabado);
            $('#diasSabadoEAnt1').html(diasExtraSabado);
            $('#diasSabadoEAnt1').val(diasExtraSabado);
            if ($("#diasSabadoEAnt1").val() < 2){
                $("#diasSabadoEAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoEAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Sabado = parseInt($('#compraExtraAnt1Sabado').val() || 0);
            var stockExtraDomingo = parseInt((stockExtraSabado - ventaMediaE) + compraExtraAnt1Sabado);
            var diasExtraDomingo= ((stockExtraDomingo - 500) / ventaMediaE).toFixed(1);
            $('#stockDomingoEAnt1').html(stockExtraDomingo);
            $('#diasDomingoEAnt1').html(diasExtraDomingo);
            $('#diasDomingoEAnt1').val(diasExtraDomingo);
            if ($("#diasDomingoEAnt1").val() < 2){
                $("#diasDomingoEAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoEAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Domingo = parseInt($('#compraExtraAnt1Domingo').val() || 0);
            var stockExtraLunes2 = parseInt((stockExtraDomingo - ventaMediaE) + compraExtraAnt1Domingo);
            var diasExtraLunes2= ((stockExtraLunes2 - 500) / ventaMediaE).toFixed(1);
            $('#stockLunes2EAnt1').html(stockExtraLunes2);
            $('#diasLunes2EAnt1').html(diasExtraLunes2);
            $('#diasLunes2EAnt1').val(diasExtraLunes2);
            if ($("#diasLunes2EAnt1").val() < 2){
                $("#diasLunes2EAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2EAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Lunes2 = parseInt($('#compraExtraAnt1Lunes2').val() || 0);
            var stockExtraMartes2 = parseInt((stockExtraLunes2 - ventaMediaE) + compraExtraAnt1Lunes2);
            var diasExtraMartes2= ((stockExtraMartes2 - 500) / ventaMediaE).toFixed(1);
            $('#stockMartes2EAnt1').html(stockExtraMartes2);
            $('#diasMartes2EAnt1').html(diasExtraMartes2);
            $('#diasMartes2EAnt1').val(diasExtraMartes2);
            if ($("#diasMartes2EAnt1").val() < 2){
                $("#diasMartes2EAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2EAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            //SUPER
            var stockSuperAnt1 = parseInt($('#stockSuperAnt1').val() || 0);
            var ventaMediaS = parseInt($('#ventaSuperAnt1').val() || 0);
            var compraSuperAnt1Lunes = parseInt($('#compraSuperAnt1Lunes').val() || 0);
            var stockSuperMartes = parseInt((stockSuperAnt1 - ventaMediaS) + compraSuperAnt1Lunes);
            var diasSuperMartes= ((stockSuperMartes - 500) / ventaMediaS).toFixed(1);
            
                $('#stockMartesSAnt1').html(stockSuperMartes);
                $('#diasMartesSAnt1').html(diasSuperMartes);
                $('#diasMartesSAnt1').val(diasSuperMartes);
           
            
            if ($("#diasMartesSAnt1").val() < 2){
                $("#diasMartesSAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesSAnt1").css({"color":"black", "font-size":"100%"});                
            };                        
                                  
            var compraSuperAnt1Martes = parseInt($('#compraSuperAnt1Martes').val() || 0);
            var stockSuperMiercoles = parseInt((stockSuperMartes - ventaMediaS) + compraSuperAnt1Martes);
            var diasSuperMiercoles= ((stockSuperMiercoles - 500) / ventaMediaS).toFixed(1);
            $('#stockMiercolesSAnt1').html(stockSuperMiercoles);
            $('#diasMiercolesSAnt1').html(diasSuperMiercoles);
            $('#diasMiercolesSAnt1').val(diasSuperMiercoles);
            if ($("#diasMiercolesSAnt1").val() < 2){
                $("#diasMiercolesSAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesSAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Miercoles = parseInt($('#compraSuperAnt1Miercoles').val() || 0);
            var stockSuperJueves = parseInt((stockSuperMiercoles - ventaMediaS) + compraSuperAnt1Miercoles);
            var diasSuperJueves= ((stockSuperJueves - 500) / ventaMediaS).toFixed(1);
            $('#stockJuevesSAnt1').html(stockSuperJueves);
            $('#diasJuevesSAnt1').html(diasSuperJueves);
            $('#diasJuevesSAnt1').val(diasSuperJueves);
            if ($("#diasJuevesSAnt1").val() < 2){
                $("#diasJuevesSAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesSAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Jueves = parseInt($('#compraSuperAnt1Jueves').val() || 0);
            var stockSuperViernes = parseInt((stockSuperJueves - ventaMediaS) + compraSuperAnt1Jueves);
            var diasSuperViernes= ((stockSuperViernes - 500) / ventaMediaS).toFixed(1);
            $('#stockViernesSAnt1').html(stockSuperViernes);
            $('#diasViernesSAnt1').html(diasSuperViernes);
            $('#diasViernesSAnt1').val(diasSuperViernes);
            if ($("#diasViernesSAnt1").val() < 2){
                $("#diasViernesSAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesSAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Viernes = parseInt($('#compraSuperAnt1Viernes').val() || 0);
            var stockSuperSabado = parseInt((stockSuperViernes - ventaMediaS) + compraSuperAnt1Viernes);
            var diasSuperSabado = ((stockSuperSabado - 500) / ventaMediaS).toFixed(1);
            $('#stockSabadoSAnt1').html(stockSuperSabado);
            $('#diasSabadoSAnt1').html(diasSuperSabado);
            $('#diasSabadoSAnt1').val(diasSuperSabado);
            if ($("#diasSabadoSAnt1").val() < 2){
                $("#diasSabadoSAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoSAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Sabado = parseInt($('#compraSuperAnt1Sabado').val() || 0);
            var stockSuperDomingo = parseInt((stockSuperSabado - ventaMediaS) + compraSuperAnt1Sabado);
            var diasSuperDomingo= ((stockSuperDomingo - 500) / ventaMediaS).toFixed(1);
            $('#stockDomingoSAnt1').html(stockSuperDomingo);
            $('#diasDomingoSAnt1').html(diasSuperDomingo);
            $('#diasDomingoSAnt1').val(diasSuperDomingo);
            if ($("#diasDomingoSAnt1").val() < 2){
                $("#diasDomingoSAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoSAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Domingo = parseInt($('#compraSuperAnt1Domingo').val() || 0);
            var stockSuperLunes2 = parseInt((stockSuperDomingo - ventaMediaS) + compraSuperAnt1Domingo);
            var diasSuperLunes2= ((stockSuperLunes2 - 500) / ventaMediaS).toFixed(1);
            $('#stockLunes2SAnt1').html(stockSuperLunes2);
            $('#diasLunes2SAnt1').html(diasSuperLunes2);
            $('#diasLunes2SAnt1').val(diasSuperLunes2);
            if ($("#diasLunes2SAnt1").val() < 2){
                $("#diasLunes2SAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2SAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Lunes2 = parseInt($('#compraSuperAnt1Lunes2').val() || 0);
            var stockSuperMartes2 = parseInt((stockSuperLunes2 - ventaMediaS) + compraSuperAnt1Lunes2);
            var diasSuperMartes2= ((stockSuperMartes2 - 500) / ventaMediaS).toFixed(1);
            $('#stockMartes2SAnt1').html(stockSuperMartes2);
            $('#diasMartes2SAnt1').html(diasSuperMartes2);
            $('#diasMartes2SAnt1').val(diasSuperMartes2);
            if ($("#diasMartes2SAnt1").val() < 2){
                $("#diasMartes2SAnt1").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2SAnt1").css({"color":"black", "font-size":"100%"});                
            };
            
        });
        
        
            
        $(".cal101").bind('input propertychange', function(){
            
            $.ajax({
                method:"POST",
                url:"calculo.php",
                data: { compradieselAnt1Lunes: $("#compradieselAnt1Lunes").val(), stockDieselAnt1: parseInt($('#stockDieselAnt1').val() || 0), ventaMedia : parseInt($('#ventadieselAnt1').val() || 0), compradieselAnt1Martes: $("#compradieselAnt1Martes").val(), clavedieselAnt1Martes: $("#clavedieselAnt1Martes").val(), compradieselAnt1Miercoles: $("#compradieselAnt1Miercoles").val(), clavedieselAnt1Miercoles: $("#clavedieselAnt1Miercoles").val(), compradieselAnt1Jueves: $("#compradieselAnt1Jueves").val(), clavedieselAnt1Jueves: $("#clavedieselAnt1Jueves").val(), compradieselAnt1Viernes: $("#compradieselAnt1Viernes").val(), clavedieselAnt1Viernes: $("#clavedieselAnt1Viernes").val(), compradieselAnt1Sabado: $("#compradieselAnt1Sabado").val(), clavedieselAnt1Sabado: $("#clavedieselAnt1Sabado").val(), compradieselAnt1Domingo: $("#compradieselAnt1Domingo").val(), clavedieselAnt1Domingo: $("#clavedieselAnt1Domingo").val(), compradieselAnt1Lunes2: $("#compradieselAnt1Lunes2").val(), clavedieselAnt1Lunes2: $("#clavedieselAnt1Lunes2").val(), compraExtraAnt1Lunes: $("#compraExtraAnt1Lunes").val(), stockExtraAnt1: parseInt($('#stockExtraAnt1').val() || 0), ventaMediaE : parseInt($('#ventaExtraAnt1').val() || 0), compraExtraAnt1Martes: $("#compraExtraAnt1Martes").val(), claveExtraAnt1Martes: $("#claveExtraAnt1Martes").val(), compraExtraAnt1Miercoles: $("#compraExtraAnt1Miercoles").val(), claveExtraAnt1Miercoles: $("#claveExtraAnt1Miercoles").val(), compraExtraAnt1Jueves: $("#compraExtraAnt1Jueves").val(), claveExtraAnt1Jueves: $("#claveExtraAnt1Jueves").val(), compraExtraAnt1Viernes: $("#compraExtraAnt1Viernes").val(), claveExtraAnt1Viernes: $("#claveExtraAnt1Viernes").val(), compraExtraAnt1Sabado: $("#compraExtraAnt1Sabado").val(), claveExtraAnt1Sabado: $("#claveExtraAnt1Sabado").val(), compraExtraAnt1Domingo: $("#compraExtraAnt1Domingo").val(), claveExtraAnt1Domingo: $("#claveExtraAnt1Domingo").val(), compraExtraAnt1Lunes2: $("#compraExtraAnt1Lunes2").val(), claveExtraAnt1Lunes2: $("#claveExtraAnt1Lunes2").val(), compraSuperAnt1Lunes: $("#compraSuperAnt1Lunes").val(), stockSuperAnt1: parseInt($('#stockSuperAnt1').val() || 0), ventaMediaS : parseInt($('#ventaSuperAnt1').val() || 0), compraSuperAnt1Martes: $("#compraSuperAnt1Martes").val(), claveSuperAnt1Martes: $("#claveSuperAnt1Martes").val(), compraSuperAnt1Miercoles: $("#compraSuperAnt1Miercoles").val(), claveSuperAnt1Miercoles: $("#claveSuperAnt1Miercoles").val(), compraSuperAnt1Jueves: $("#compraSuperAnt1Jueves").val(), claveSuperAnt1Jueves: $("#claveSuperAnt1Jueves").val(), compraSuperAnt1Viernes: $("#compraSuperAnt1Viernes").val(), claveSuperAnt1Viernes: $("#claveSuperAnt1Viernes").val(), compraSuperAnt1Sabado: $("#compraSuperAnt1Sabado").val(), claveSuperAnt1Sabado: $("#claveSuperAnt1Sabado").val(), compraSuperAnt1Domingo: $("#compraSuperAnt1Domingo").val(), claveSuperAnt1Domingo: $("#claveSuperAnt1Domingo").val(), compraSuperAnt1Lunes2: $("#compraSuperAnt1Lunes2").val(), claveSuperAnt1Lunes2: $("#claveSuperAnt1Lunes2").val(), martescheck: $("#martescheck").val()}
            })
                .done(function(msg){
                    console.log(msg);
                    //$('#stockMartes').html(data[0].calstockMartes);
                    //$(('#diasMartes')).html(data[0].dias_martes);
                   //$(('#diasMartes')).val(data[0].dias_martes);
                })
        });
        
        
        //ANTURIOS II 
        
        $('.cal102').keyup(function(){
        
            var stockDieselAnt2 = parseInt($('#stockDieselAnt2').val() || 0);
           var ventaMediaAnt2 = parseInt($('#ventadieselAnt2').val() || 0);
            var compradieselAnt2Lunes = parseInt($('#compradieselAnt2Lunes').val() || 0);
            var stockDieselMartesAnt2 = parseInt((stockDieselAnt2 - ventaMediaAnt2) + compradieselAnt2Lunes);
            var diasDieselMartesAnt2 = ((stockDieselMartesAnt2 - 500) / ventaMediaAnt2).toFixed(1);
            
                $('#stockMartesAnt2').html(stockDieselMartesAnt2);
                $('#diasMartesAnt2').html(diasDieselMartesAnt2);
                $('#diasMartesAnt2').val(diasDieselMartesAnt2);
           
            
            if ($("#diasMartesAnt2").val() < 2){
                $("#diasMartesAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesAnt2").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compradieselAnt2Martes = parseInt($('#compradieselAnt2Martes').val() || 0);
            var stockDieselMiercolesAnt2 = parseInt((stockDieselMartesAnt2 - ventaMediaAnt2) + compradieselAnt2Martes);
            var diasDieselMiercolesAnt2 = ((stockDieselMiercolesAnt2 - 500) / ventaMediaAnt2).toFixed(1);
            $('#stockMiercolesAnt2').html(stockDieselMiercolesAnt2);
            $('#diasMiercolesAnt2').html(diasDieselMiercolesAnt2);
            $('#diasMiercolesAnt2').val(diasDieselMiercolesAnt2);
            if ($("#diasMiercolesAnt2").val() < 2){
                $("#diasMiercolesAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt2Miercoles = parseInt($('#compradieselAnt2Miercoles').val() || 0);
            var stockDieselJuevesAnt2 = parseInt((stockDieselMiercolesAnt2 - ventaMediaAnt2) + compradieselAnt2Miercoles);
            var diasDieselJuevesAnt2= ((stockDieselJuevesAnt2 - 500) / ventaMediaAnt2).toFixed(1);
            $('#stockJuevesAnt2').html(stockDieselJuevesAnt2);
            $('#diasJuevesAnt2').html(diasDieselJuevesAnt2);
            $('#diasJuevesAnt2').val(diasDieselJuevesAnt2);
            if ($("#diasJuevesAnt2").val() < 2){
                $("#diasJuevesAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt2Jueves = parseInt($('#compradieselAnt2Jueves').val() || 0);
            var stockDieselViernesAnt2 = parseInt((stockDieselJuevesAnt2 - ventaMediaAnt2) + compradieselAnt2Jueves);
            var diasDieselViernesAnt2 = ((stockDieselViernesAnt2 - 500) / ventaMediaAnt2).toFixed(1);
            $('#stockViernesAnt2').html(stockDieselViernesAnt2);
            $('#diasViernesAnt2').html(diasDieselViernesAnt2);
            $('#diasViernesAnt2').val(diasDieselViernesAnt2);
            if ($("#diasViernesAnt2").val() < 2){
                $("#diasViernesAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt2Viernes = parseInt($('#compradieselAnt2Viernes').val() || 0);
            var stockDieselSabadoAnt2 = parseInt((stockDieselViernesAnt2 - ventaMediaAnt2) + compradieselAnt2Viernes);
            var diasDieselSabadoAnt2 = ((stockDieselSabadoAnt2 - 500) / ventaMediaAnt2).toFixed(1);
            $('#stockSabadoAnt2').html(stockDieselSabadoAnt2);
            $('#diasSabadoAnt2').html(diasDieselSabadoAnt2);
            $('#diasSabadoAnt2').val(diasDieselSabadoAnt2);
            if ($("#diasSabadoAnt2").val() < 2){
                $("#diasSabadoAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt2Sabado = parseInt($('#compradieselAnt2Sabado').val() || 0);
            var stockDieselDomingoAnt2 = parseInt((stockDieselSabadoAnt2 - ventaMediaAnt2) + compradieselAnt2Sabado);
            var diasDieselDomingoAnt2 = ((stockDieselDomingoAnt2 - 500) / ventaMediaAnt2).toFixed(1);
            $('#stockDomingoAnt2').html(stockDieselDomingoAnt2);
            $('#diasDomingoAnt2').html(diasDieselDomingoAnt2);
            $('#diasDomingoAnt2').val(diasDieselDomingoAnt2);
            if ($("#diasDomingoAnt2").val() < 2){
                $("#diasDomingoAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt2Domingo = parseInt($('#compradieselAnt2Domingo').val() || 0);
            var stockDieselLunes2Ant2 = parseInt((stockDieselDomingoAnt2 - ventaMediaAnt2) + compradieselAnt2Domingo);
            var diasDieselLunes2Ant2 = ((stockDieselLunes2Ant2 - 500) / ventaMediaAnt2).toFixed(1);
            $('#stockLunes2Ant2').html(stockDieselLunes2Ant2);
            $('#diasLunes2Ant2').html(diasDieselLunes2Ant2);
            $('#diasLunes2Ant2').val(diasDieselLunes2Ant2);
            if ($("#diasLunes2Ant2").val() < 2){
                $("#diasLunes2Ant2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2Ant2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt2Lunes2 = parseInt($('#compradieselAnt2Lunes2').val() || 0);
            var stockDieselMartes2Ant2 = parseInt((stockDieselLunes2Ant2 - ventaMediaAnt2) + compradieselAnt2Lunes2);
            var diasDieselMartes2Ant2 = ((stockDieselMartes2Ant2 - 500) / ventaMediaAnt2).toFixed(1);
            $('#stockMartes2Ant2').html(stockDieselMartes2Ant2);
            $('#diasMartes2Ant2').html(diasDieselMartes2Ant2);
            $('#diasMartes2Ant2').val(diasDieselMartes2Ant2);
            if ($("#diasMartes2Ant2").val() < 2){
                $("#diasMartes2Ant2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2Ant2").css({"color":"black", "font-size":"100%"});                
            };
            
            //EXTRA
            var stockExtraAnt2 = parseInt($('#stockExtraAnt2').val() || 0);
            var ventaMediaEAnt2 = parseInt($('#ventaExtraAnt2').val() || 0);
            var compraExtraAnt2Lunes = parseInt($('#compraExtraAnt2Lunes').val() || 0);
            var stockExtraMartesAnt2 = parseInt((stockExtraAnt2 - ventaMediaEAnt2) + compraExtraAnt2Lunes);
            var diasExtraMartesAnt2 = ((stockExtraMartesAnt2 - 500) / ventaMediaEAnt2).toFixed(1);
            
                $('#stockMartesEAnt2').html(stockExtraMartesAnt2);
                $('#diasMartesEAnt2').html(diasExtraMartesAnt2);
                $('#diasMartesEAnt2').val(diasExtraMartesAnt2);
           
            
            if ($("#diasMartesEAnt2").val() < 2){
                $("#diasMartesEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesEAnt2").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compraExtraAnt2Martes = parseInt($('#compraExtraAnt2Martes').val() || 0);
            var stockExtraMiercolesAnt2 = parseInt((stockExtraMartesAnt2 - ventaMediaEAnt2) + compraExtraAnt2Martes);
            var diasExtraMiercolesAnt2 = ((stockExtraMiercolesAnt2 - 500) / ventaMediaEAnt2).toFixed(1);
            $('#stockMiercolesEAnt2').html(stockExtraMiercolesAnt2);
            $('#diasMiercolesEAnt2').html(diasExtraMiercolesAnt2);
            $('#diasMiercolesEAnt2').val(diasExtraMiercolesAnt2);
            if ($("#diasMiercolesEAnt2").val() < 2){
                $("#diasMiercolesEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesEAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt2Miercoles = parseInt($('#compraExtraAnt2Miercoles').val() || 0);
            var stockExtraJuevesAnt2 = parseInt((stockExtraMiercolesAnt2 - ventaMediaEAnt2) + compraExtraAnt2Miercoles);
            var diasExtraJuevesAnt2 = ((stockExtraJuevesAnt2 - 500) / ventaMediaEAnt2).toFixed(1);
            $('#stockJuevesEAnt2').html(stockExtraJuevesAnt2);
            $('#diasJuevesEAnt2').html(diasExtraJuevesAnt2);
            $('#diasJuevesEAnt2').val(diasExtraJuevesAnt2);
            if ($("#diasJuevesEAnt2").val() < 2){
                $("#diasJuevesEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesEAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt2Jueves = parseInt($('#compraExtraAnt2Jueves').val() || 0);
            var stockExtraViernesAnt2 = parseInt((stockExtraJuevesAnt2 - ventaMediaEAnt2) + compraExtraAnt2Jueves);
            var diasExtraViernesAnt2 = ((stockExtraViernesAnt2 - 500) / ventaMediaEAnt2).toFixed(1);
            $('#stockViernesEAnt2').html(stockExtraViernesAnt2);
            $('#diasViernesEAnt2').html(diasExtraViernesAnt2);
            $('#diasViernesEAnt2').val(diasExtraViernesAnt2);
            if ($("#diasViernesEAnt2").val() < 2){
                $("#diasViernesEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesEAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt2Viernes = parseInt($('#compraExtraAnt2Viernes').val() || 0);
            var stockExtraSabadoAnt2 = parseInt((stockExtraViernesAnt2 - ventaMediaEAnt2) + compraExtraAnt2Viernes);
            var diasExtraSabadoAnt2 = ((stockExtraSabadoAnt2 - 500) / ventaMediaEAnt2).toFixed(1);
            $('#stockSabadoEAnt2').html(stockExtraSabadoAnt2);
            $('#diasSabadoEAnt2').html(diasExtraSabadoAnt2);
            $('#diasSabadoEAnt2').val(diasExtraSabadoAnt2);
            if ($("#diasSabadoEAnt2").val() < 2){
                $("#diasSabadoEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoEAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt2Sabado = parseInt($('#compraExtraAnt2Sabado').val() || 0);
            var stockExtraDomingoAnt2 = parseInt((stockExtraSabadoAnt2 - ventaMediaEAnt2) + compraExtraAnt2Sabado);
            var diasExtraDomingoAnt2 = ((stockExtraDomingoAnt2 - 500) / ventaMediaEAnt2).toFixed(1);
            $('#stockDomingoEAnt2').html(stockExtraDomingoAnt2);
            $('#diasDomingoEAnt2').html(diasExtraDomingoAnt2);
            $('#diasDomingoEAnt2').val(diasExtraDomingoAnt2);
            if ($("#diasDomingoEAnt2").val() < 2){
                $("#diasDomingoEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoEAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt2Domingo = parseInt($('#compraExtraAnt2Domingo').val() || 0);
            var stockExtraLunes2Ant2 = parseInt((stockExtraDomingoAnt2 - ventaMediaEAnt2) + compraExtraAnt2Domingo);
            var diasExtraLunes2Ant2 = ((stockExtraLunes2Ant2 - 500) / ventaMediaEAnt2).toFixed(1);
            $('#stockLunes2EAnt2').html(stockExtraLunes2Ant2);
            $('#diasLunes2EAnt2').html(diasExtraLunes2Ant2);
            $('#diasLunes2EAnt2').val(diasExtraLunes2Ant2);
            if ($("#diasLunes2EAnt2").val() < 2){
                $("#diasLunes2EAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2EAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt2Lunes2 = parseInt($('#compraExtraAnt2Lunes2').val() || 0);
            var stockExtraMartes2Ant2 = parseInt((stockExtraLunes2Ant2 - ventaMediaEAnt2) + compraExtraAnt2Lunes2);
            var diasExtraMartes2Ant2 = ((stockExtraMartes2Ant2 - 500) / ventaMediaEAnt2).toFixed(1);
            $('#stockMartes2EAnt2').html(stockExtraMartes2Ant2);
            $('#diasMartes2EAnt2').html(diasExtraMartes2Ant2);
            $('#diasMartes2EAnt2').val(diasExtraMartes2Ant2);
            if ($("#diasMartes2EAnt2").val() < 2){
                $("#diasMartes2EAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2EAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            //SUPER
            var stockSuperAnt2 = parseInt($('#stockSuperAnt2').val() || 0);
            var ventaMediaSAnt2 = parseInt($('#ventaSuperAnt2').val() || 0);
            var compraSuperAnt2Lunes = parseInt($('#compraSuperAnt2Lunes').val() || 0);
            var stockSuperMartesAnt2 = parseInt((stockSuperAnt2 - ventaMediaSAnt2) + compraSuperAnt2Lunes);
            var diasSuperMartesAnt2 = ((stockSuperMartesAnt2 - 500) / ventaMediaSAnt2).toFixed(1);
            
                $('#stockMartesSAnt2').html(stockSuperMartesAnt2);
                $('#diasMartesSAnt2').html(diasSuperMartesAnt2);
                $('#diasMartesSAnt2').val(diasSuperMartesAnt2);
           
            
            if ($("#diasMartesSAnt2").val() < 2){
                $("#diasMartesSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesSAnt2").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compraSuperAnt2Martes = parseInt($('#compraSuperAnt2Martes').val() || 0);
            var stockSuperMiercolesAnt2 = parseInt((stockSuperMartesAnt2 - ventaMediaSAnt2) + compraSuperAnt2Martes);
            var diasSuperMiercolesAnt2 = ((stockSuperMiercolesAnt2 - 500) / ventaMediaSAnt2).toFixed(1);
            $('#stockMiercolesSAnt2').html(stockSuperMiercolesAnt2);
            $('#diasMiercolesSAnt2').html(diasSuperMiercolesAnt2);
            $('#diasMiercolesSAnt2').val(diasSuperMiercolesAnt2);
            if ($("#diasMiercolesSAnt2").val() < 2){
                $("#diasMiercolesSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesSAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt2Miercoles = parseInt($('#compraSuperAnt2Miercoles').val() || 0);
            var stockSuperJuevesAnt2 = parseInt((stockSuperMiercolesAnt2 - ventaMediaSAnt2) + compraSuperAnt2Miercoles);
            var diasSuperJuevesAnt2 = ((stockSuperJuevesAnt2 - 500) / ventaMediaSAnt2).toFixed(1);
            $('#stockJuevesSAnt2').html(stockSuperJuevesAnt2);
            $('#diasJuevesSAnt2').html(diasSuperJuevesAnt2);
            $('#diasJuevesSAnt2').val(diasSuperJuevesAnt2);
            if ($("#diasJuevesSAnt2").val() < 2){
                $("#diasJuevesSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesSAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt2Jueves = parseInt($('#compraSuperAnt2Jueves').val() || 0);
            var stockSuperViernesAnt2 = parseInt((stockSuperJuevesAnt2 - ventaMediaSAnt2) + compraSuperAnt2Jueves);
            var diasSuperViernesAnt2 = ((stockSuperViernesAnt2 - 500) / ventaMediaSAnt2).toFixed(1);
            $('#stockViernesSAnt2').html(stockSuperViernesAnt2);
            $('#diasViernesSAnt2').html(diasSuperViernesAnt2);
            $('#diasViernesSAnt2').val(diasSuperViernesAnt2);
            if ($("#diasViernesSAnt2").val() < 2){
                $("#diasViernesSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesSAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt2Viernes = parseInt($('#compraSuperAnt2Viernes').val() || 0);
            var stockSuperSabadoAnt2 = parseInt((stockSuperViernesAnt2 - ventaMediaSAnt2) + compraSuperAnt2Viernes);
            var diasSuperSabadoAnt2 = ((stockSuperSabadoAnt2 - 500) / ventaMediaSAnt2).toFixed(1);
            $('#stockSabadoSAnt2').html(stockSuperSabadoAnt2);
            $('#diasSabadoSAnt2').html(diasSuperSabadoAnt2);
            $('#diasSabadoSAnt2').val(diasSuperSabadoAnt2);
            if ($("#diasSabadoSAnt2").val() < 2){
                $("#diasSabadoSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoSAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt2Sabado = parseInt($('#compraSuperAnt2Sabado').val() || 0);
            var stockSuperDomingoAnt2 = parseInt((stockSuperSabadoAnt2 - ventaMediaSAnt2) + compraSuperAnt2Sabado);
            var diasSuperDomingoAnt2 = ((stockSuperDomingoAnt2 - 500) / ventaMediaSAnt2).toFixed(1);
            $('#stockDomingoSAnt2').html(stockSuperDomingoAnt2);
            $('#diasDomingoSAnt2').html(diasSuperDomingoAnt2);
            $('#diasDomingoSAnt2').val(diasSuperDomingoAnt2);
            if ($("#diasDomingoSAnt2").val() < 2){
                $("#diasDomingoSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoSAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt2Domingo = parseInt($('#compraSuperAnt2Domingo').val() || 0);
            var stockSuperLunes2Ant2 = parseInt((stockSuperDomingoAnt2 - ventaMediaSAnt2) + compraSuperAnt2Domingo);
            var diasSuperLunes2Ant2 = ((stockSuperLunes2Ant2 - 500) / ventaMediaSAnt2).toFixed(1);
            $('#stockLunes2SAnt2').html(stockSuperLunes2Ant2);
            $('#diasLunes2SAnt2').html(diasSuperLunes2Ant2);
            $('#diasLunes2SAnt2').val(diasSuperLunes2Ant2);
            if ($("#diasLunes2SAnt2").val() < 2){
                $("#diasLunes2SAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2SAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt2Lunes2 = parseInt($('#compraSuperAnt2Lunes2').val() || 0);
            var stockSuperMartesAnt2 = parseInt((stockSuperLunes2Ant2 - ventaMediaSAnt2) + compraSuperAnt2Lunes2);
            var diasSuperMartes2Ant2 = ((stockSuperMartes2Ant2 - 500) / ventaMediaSAnt2).toFixed(1);
            $('#stockMartes2SAnt2').html(stockSuperMartes2Ant2);
            $('#diasMartes2SAnt2').html(diasSuperMartes2Ant2);
            $('#diasMartes2SAnt2').val(diasSuperMartes2Ant2);
            if ($("#diasMartes2SAnt2").val() < 2){
                $("#diasMartes2SAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2SAnt2").css({"color":"black", "font-size":"100%"});                
            };
            
        });
        
        $(".cal102").bind('input propertychange', function(){
            
            $.ajax({
                method:"POST",
                url:"calculo2.php",
                data: { compradieselAnt2Lunes: $("#compradieselAnt2Lunes").val(), stockDieselAnt2: parseInt($('#stockDieselAnt2').val() || 0), ventaMediaAnt2 : parseInt($('#ventadieselAnt2').val() || 0), compradieselAnt2Martes: $("#compradieselAnt2Martes").val(), clavedieselAnt2Martes: $("#clavedieselAnt2Martes").val(), compradieselAnt2Miercoles: $("#compradieselAnt2Miercoles").val(), clavedieselAnt2Miercoles: $("#clavedieselAnt2Miercoles").val(), compradieselAnt2Jueves: $("#compradieselAnt2Jueves").val(), clavedieselAnt2Jueves: $("#clavedieselAnt2Jueves").val(), compradieselAnt2Viernes: $("#compradieselAnt2Viernes").val(), clavedieselAnt2Viernes: $("#clavedieselAnt2Viernes").val(), compradieselAnt2Sabado: $("#compradieselAnt2Sabado").val(), clavedieselAnt2Sabado: $("#clavedieselAnt2Sabado").val(), compradieselAnt2Domingo: $("#compradieselAnt2Domingo").val(), clavedieselAnt2Domingo: $("#clavedieselAnt2Domingo").val(), compradieselAnt2Lunes2: $("#compradieselAnt2Lunes2").val(), clavedieselAnt2Lunes2: $("#clavedieselAnt2Lunes2").val(), compraExtraAnt2Lunes: $("#compraExtraAnt2Lunes").val(), stockExtraAnt2: parseInt($('#stockExtraAnt2').val() || 0), ventaMediaEAnt2 : parseInt($('#ventaExtraAnt2').val() || 0), compraExtraAnt2Martes: $("#compraExtraAnt2Martes").val(), claveExtraAnt2Martes: $("#claveExtraAnt2Martes").val(), compraExtraAnt2Miercoles: $("#compraExtraAnt2Miercoles").val(), claveExtraAnt2Miercoles: $("#claveExtraAnt2Miercoles").val(), compraExtraAnt2Jueves: $("#compraExtraAnt2Jueves").val(), claveExtraAnt2Jueves: $("#claveExtraAnt2Jueves").val(), compraExtraAnt2Viernes: $("#compraExtraAnt2Viernes").val(), claveExtraAnt2Viernes: $("#claveExtraAnt2Viernes").val(), compraExtraAnt2Sabado: $("#compraExtraAnt2Sabado").val(), claveExtraAnt2Sabado: $("#claveExtraAnt2Sabado").val(), compraExtraAnt2Domingo: $("#compraExtraAnt2Domingo").val(), claveExtraAnt2Domingo: $("#claveExtraAnt2Domingo").val(), compraExtraAnt2Lunes2: $("#compraExtraAnt2Lunes2").val(), claveExtraAnt2Lunes2: $("#claveExtraAnt2Lunes2").val(), compraSuperAnt2Lunes: $("#compraSuperAnt2Lunes").val(), stockSuperAnt2: parseInt($('#stockSuperAnt2').val() || 0), ventaMediaSAnt2 : parseInt($('#ventaSuperAnt2').val() || 0), compraSuperAnt2Martes: $("#compraSuperAnt2Martes").val(), claveSuperAnt2Martes: $("#claveSuperAnt2Martes").val(), compraSuperAnt2Miercoles: $("#compraSuperAnt2Miercoles").val(), claveSuperAnt2Miercoles: $("#claveSuperAnt2Miercoles").val(), compraSuperAnt2Jueves: $("#compraSuperAnt2Jueves").val(), claveSuperAnt2Jueves: $("#claveSuperAnt2Jueves").val(), compraSuperAnt2Viernes: $("#compraSuperAnt2Viernes").val(), claveSuperAnt2Viernes: $("#claveSuperAnt2Viernes").val(), compraSuperAnt2Sabado: $("#compraSuperAnt2Sabado").val(), claveSuperAnt2Sabado: $("#claveSuperAnt2Sabado").val(), compraSuperAnt2Domingo: $("#compraSuperAnt2Domingo").val(), claveSuperAnt2Domingo: $("#claveSuperAnt2Domingo").val(), compraSuperAnt2Lunes2: $("#compraSuperAnt2Lunes2").val(), claveSuperAnt2Lunes2: $("#claveSuperAnt2Lunes2").val(), martescheck: $("#martescheck").val()}
            })
                .done(function(msg){
                    console.log(msg);
                    //$('#stockMartes').html(data[0].calstockMartes);
                    //$(('#diasMartes')).html(data[0].dias_martes);
                   //$(('#diasMartes')).val(data[0].dias_martes);
                })
        });
        
        // E/S VALGAS 
        
        $('.cal103').keyup(function(){
        
            var stockDieselValgas = parseInt($('#stockDieselValgas').val() || 0);
           var ventaMediaValgas = parseInt($('#ventadieselValgas').val() || 0);
            var compradieselValgasLunes = parseInt($('#compradieselValgasLunes').val() || 0);
            var stockDieselMartesValgas = parseInt((stockDieselValgas - ventaMediaValgas) + compradieselValgasLunes);
            var diasDieselMartesValgas = ((stockDieselMartesValgas - 500) / ventaMediaValgas).toFixed(1);
            
                $('#stockMartesValgas').html(stockDieselMartesValgas);
                $('#diasMartesValgas').html(diasDieselMartesValgas);
                $('#diasMartesValgas').val(diasDieselMartesValgas);
           
            
            if ($("#diasMartesValgas").val() < 2){
                $("#diasMartesValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesValgas").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compradieselValgasMartes = parseInt($('#compradieselValgasMartes').val() || 0);
            var stockDieselMiercolesValgas = parseInt((stockDieselMartesValgas - ventaMediaValgas) + compradieselValgasMartes);
            var diasDieselMiercolesValgas = ((stockDieselMiercolesValgas - 500) / ventaMediaValgas).toFixed(1);
            $('#stockMiercolesValgas').html(stockDieselMiercolesValgas);
            $('#diasMiercolesValgas').html(diasDieselMiercolesValgas);
            $('#diasMiercolesValgas').val(diasDieselMiercolesValgas);
            if ($("#diasMiercolesValgas").val() < 2){
                $("#diasMiercolesValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselValgasMiercoles = parseInt($('#compradieselValgasMiercoles').val() || 0);
            var stockDieselJuevesValgas = parseInt((stockDieselMiercolesValgas - ventaMediaValgas) + compradieselValgasMiercoles);
            var diasDieselJuevesValgas= ((stockDieselJuevesValgas - 500) / ventaMediaValgas).toFixed(1);
            $('#stockJuevesValgas').html(stockDieselJuevesValgas);
            $('#diasJuevesValgas').html(diasDieselJuevesValgas);
            $('#diasJuevesValgas').val(diasDieselJuevesValgas);
            if ($("#diasJuevesValgas").val() < 2){
                $("#diasJuevesValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselValgasJueves = parseInt($('#compradieselValgasJueves').val() || 0);
            var stockDieselViernesValgas = parseInt((stockDieselJuevesValgas - ventaMediaValgas) + compradieselValgasJueves);
            var diasDieselViernesValgas = ((stockDieselViernesValgas - 500) / ventaMediaValgas).toFixed(1);
            $('#stockViernesValgas').html(stockDieselViernesValgas);
            $('#diasViernesValgas').html(diasDieselViernesValgas);
            $('#diasViernesValgas').val(diasDieselViernesValgas);
            if ($("#diasViernesValgas").val() < 2){
                $("#diasViernesValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselValgasViernes = parseInt($('#compradieselValgasViernes').val() || 0);
            var stockDieselSabadoValgas = parseInt((stockDieselViernesValgas - ventaMediaValgas) + compradieselValgasViernes);
            var diasDieselSabadoValgas = ((stockDieselSabadoValgas - 500) / ventaMediaValgas).toFixed(1);
            $('#stockSabadoValgas').html(stockDieselSabadoValgas);
            $('#diasSabadoValgas').html(diasDieselSabadoValgas);
            $('#diasSabadoValgas').val(diasDieselSabadoValgas);
            if ($("#diasSabadoValgas").val() < 2){
                $("#diasSabadoValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselValgasSabado = parseInt($('#compradieselValgasSabado').val() || 0);
            var stockDieselDomingoValgas = parseInt((stockDieselSabadoValgas - ventaMediaValgas) + compradieselValgasSabado);
            var diasDieselDomingoValgas = ((stockDieselDomingoValgas - 500) / ventaMediaValgas).toFixed(1);
            $('#stockDomingoValgas').html(stockDieselDomingoValgas);
            $('#diasDomingoValgas').html(diasDieselDomingoValgas);
            $('#diasDomingoValgas').val(diasDieselDomingoValgas);
            if ($("#diasDomingoValgas").val() < 2){
                $("#diasDomingoValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselValgasDomingo = parseInt($('#compradieselValgasDomingo').val() || 0);
            var stockDieselLunes2Valgas = parseInt((stockDieselDomingoValgas - ventaMediaValgas) + compradieselValgasDomingo);
            var diasDieselLunes2Valgas = ((stockDieselLunes2Valgas - 500) / ventaMediaValgas).toFixed(1);
            $('#stockLunes2Valgas').html(stockDieselLunes2Valgas);
            $('#diasLunes2Valgas').html(diasDieselLunes2Valgas);
            $('#diasLunes2Valgas').val(diasDieselLunes2Valgas);
            if ($("#diasLunes2Valgas").val() < 2){
                $("#diasLunes2Valgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2Valgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselValgasLunes2 = parseInt($('#compradieselValgasLunes2').val() || 0);
            var stockDieselMartes2Valgas = parseInt((stockDieselLunes2Valgas - ventaMediaValgas) + compradieselValgasLunes2);
            var diasDieselMartes2Valgas = ((stockDieselMartes2Valgas - 500) / ventaMediaValgas).toFixed(1);
            $('#stockMartes2Valgas').html(stockDieselMartes2Valgas);
            $('#diasMartes2Valgas').html(diasDieselMartes2Valgas);
            $('#diasMartes2Valgas').val(diasDieselMartes2Valgas);
            if ($("#diasMartes2Valgas").val() < 2){
                $("#diasMartes2Valgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2Valgas").css({"color":"black", "font-size":"100%"});                
            };
            
            //EXTRA
            var stockExtraValgas = parseInt($('#stockExtraValgas').val() || 0);
            var ventaMediaEValgas = parseInt($('#ventaExtraValgas').val() || 0);
            var compraExtraValgasLunes = parseInt($('#compraExtraValgasLunes').val() || 0);
            var stockExtraMartesValgas = parseInt((stockExtraValgas - ventaMediaEValgas) + compraExtraValgasLunes);
            var diasExtraMartesValgas = ((stockExtraMartesValgas - 500) / ventaMediaEValgas).toFixed(1);
            
                $('#stockMartesEValgas').html(stockExtraMartesValgas);
                $('#diasMartesEValgas').html(diasExtraMartesValgas);
                $('#diasMartesEValgas').val(diasExtraMartesValgas);
           
            
            if ($("#diasMartesEValgas").val() < 2){
                $("#diasMartesEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesEValgas").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compraExtraValgasMartes = parseInt($('#compraExtraValgasMartes').val() || 0);
            var stockExtraMiercolesValgas = parseInt((stockExtraMartesValgas - ventaMediaEValgas) + compraExtraValgasMartes);
            var diasExtraMiercolesValgas = ((stockExtraMiercolesValgas - 500) / ventaMediaEValgas).toFixed(1);
            $('#stockMiercolesEValgas').html(stockExtraMiercolesValgas);
            $('#diasMiercolesEValgas').html(diasExtraMiercolesValgas);
            $('#diasMiercolesEValgas').val(diasExtraMiercolesValgas);
            if ($("#diasMiercolesEValgas").val() < 2){
                $("#diasMiercolesEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesEValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraValgasMiercoles = parseInt($('#compraExtraValgasMiercoles').val() || 0);
            var stockExtraJuevesValgas = parseInt((stockExtraMiercolesValgas - ventaMediaEValgas) + compraExtraValgasMiercoles);
            var diasExtraJuevesValgas = ((stockExtraJuevesValgas - 500) / ventaMediaEValgas).toFixed(1);
            $('#stockJuevesEValgas').html(stockExtraJuevesValgas);
            $('#diasJuevesEValgas').html(diasExtraJuevesValgas);
            $('#diasJuevesEValgas').val(diasExtraJuevesValgas);
            if ($("#diasJuevesEValgas").val() < 2){
                $("#diasJuevesEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesEValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraValgasJueves = parseInt($('#compraExtraValgasJueves').val() || 0);
            var stockExtraViernesValgas = parseInt((stockExtraJuevesValgas - ventaMediaEValgas) + compraExtraValgasJueves);
            var diasExtraViernesValgas = ((stockExtraViernesValgas - 500) / ventaMediaEValgas).toFixed(1);
            $('#stockViernesEValgas').html(stockExtraViernesValgas);
            $('#diasViernesEValgas').html(diasExtraViernesValgas);
            $('#diasViernesEValgas').val(diasExtraViernesValgas);
            if ($("#diasViernesEValgas").val() < 2){
                $("#diasViernesEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesEValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraValgasViernes = parseInt($('#compraExtraValgasViernes').val() || 0);
            var stockExtraSabadoValgas = parseInt((stockExtraViernesValgas - ventaMediaEValgas) + compraExtraValgasViernes);
            var diasExtraSabadoValgas = ((stockExtraSabadoValgas - 500) / ventaMediaEValgas).toFixed(1);
            $('#stockSabadoEValgas').html(stockExtraSabadoValgas);
            $('#diasSabadoEValgas').html(diasExtraSabadoValgas);
            $('#diasSabadoEValgas').val(diasExtraSabadoValgas);
            if ($("#diasSabadoEValgas").val() < 2){
                $("#diasSabadoEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoEValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraValgasSabado = parseInt($('#compraExtraValgasSabado').val() || 0);
            var stockExtraDomingoValgas = parseInt((stockExtraSabadoValgas - ventaMediaEValgas) + compraExtraValgasSabado);
            var diasExtraDomingoValgas = ((stockExtraDomingoValgas - 500) / ventaMediaEValgas).toFixed(1);
            $('#stockDomingoEValgas').html(stockExtraDomingoValgas);
            $('#diasDomingoEValgas').html(diasExtraDomingoValgas);
            $('#diasDomingoEValgas').val(diasExtraDomingoValgas);
            if ($("#diasDomingoEValgas").val() < 2){
                $("#diasDomingoEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoEValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraValgasDomingo = parseInt($('#compraExtraValgasDomingo').val() || 0);
            var stockExtraLunes2Valgas = parseInt((stockExtraDomingoValgas - ventaMediaEValgas) + compraExtraValgasDomingo);
            var diasExtraLunes2Valgas = ((stockExtraLunes2Valgas - 500) / ventaMediaEValgas).toFixed(1);
            $('#stockLunes2EValgas').html(stockExtraLunes2Valgas);
            $('#diasLunes2EValgas').html(diasExtraLunes2Valgas);
            $('#diasLunes2EValgas').val(diasExtraLunes2Valgas);
            if ($("#diasLunes2EValgas").val() < 2){
                $("#diasLunes2EValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2EValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraValgasLunes2 = parseInt($('#compraExtraValgasLunes2').val() || 0);
            var stockExtraMartes2Valgas = parseInt((stockExtraLunes2Valgas - ventaMediaEValgas) + compraExtraValgasLunes2);
            var diasExtraMartes2Valgas = ((stockExtraMartes2Valgas - 500) / ventaMediaEValgas).toFixed(1);
            $('#stockMartes2EValgas').html(stockExtraMartes2Valgas);
            $('#diasMartes2EValgas').html(diasExtraMartes2Valgas);
            $('#diasMartes2EValgas').val(diasExtraMartes2Valgas);
            if ($("#diasMartes2EValgas").val() < 2){
                $("#diasMartes2EValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2EValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            //SUPER
            var stockSuperValgas = parseInt($('#stockSuperValgas').val() || 0);
            var ventaMediaSValgas = parseInt($('#ventaSuperValgas').val() || 0);
            var compraSuperValgasLunes = parseInt($('#compraSuperValgasLunes').val() || 0);
            var stockSuperMartesValgas = parseInt((stockSuperValgas - ventaMediaSValgas) + compraSuperValgasLunes);
            var diasSuperMartesValgas = ((stockSuperMartesValgas - 500) / ventaMediaSValgas).toFixed(1);
            
                $('#stockMartesSValgas').html(stockSuperMartesValgas);
                $('#diasMartesSValgas').html(diasSuperMartesValgas);
                $('#diasMartesSValgas').val(diasSuperMartesValgas);
           
            
            if ($("#diasMartesSValgas").val() < 2){
                $("#diasMartesSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesSValgas").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compraSuperValgasMartes = parseInt($('#compraSuperValgasMartes').val() || 0);
            var stockSuperMiercolesValgas = parseInt((stockSuperMartesValgas - ventaMediaSValgas) + compraSuperValgasMartes);
            var diasSuperMiercolesValgas = ((stockSuperMiercolesValgas - 500) / ventaMediaSValgas).toFixed(1);
            $('#stockMiercolesSValgas').html(stockSuperMiercolesValgas);
            $('#diasMiercolesSValgas').html(diasSuperMiercolesValgas);
            $('#diasMiercolesSValgas').val(diasSuperMiercolesValgas);
            if ($("#diasMiercolesSValgas").val() < 2){
                $("#diasMiercolesSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesSValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperValgasMiercoles = parseInt($('#compraSuperValgasMiercoles').val() || 0);
            var stockSuperJuevesValgas = parseInt((stockSuperMiercolesValgas - ventaMediaSValgas) + compraSuperValgasMiercoles);
            var diasSuperJuevesValgas = ((stockSuperJuevesValgas - 500) / ventaMediaSValgas).toFixed(1);
            $('#stockJuevesSValgas').html(stockSuperJuevesValgas);
            $('#diasJuevesSValgas').html(diasSuperJuevesValgas);
            $('#diasJuevesSValgas').val(diasSuperJuevesValgas);
            if ($("#diasJuevesSValgas").val() < 2){
                $("#diasJuevesSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesSValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperValgasJueves = parseInt($('#compraSuperValgasJueves').val() || 0);
            var stockSuperViernesValgas = parseInt((stockSuperJuevesValgas - ventaMediaSValgas) + compraSuperValgasJueves);
            var diasSuperViernesValgas = ((stockSuperViernesValgas - 500) / ventaMediaSValgas).toFixed(1);
            $('#stockViernesSValgas').html(stockSuperViernesValgas);
            $('#diasViernesSValgas').html(diasSuperViernesValgas);
            $('#diasViernesSValgas').val(diasSuperViernesValgas);
            if ($("#diasViernesSValgas").val() < 2){
                $("#diasViernesSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesSValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperValgasViernes = parseInt($('#compraSuperValgasViernes').val() || 0);
            var stockSuperSabadoValgas = parseInt((stockSuperViernesValgas - ventaMediaSValgas) + compraSuperValgasViernes);
            var diasSuperSabadoValgas = ((stockSuperSabadoValgas - 500) / ventaMediaSValgas).toFixed(1);
            $('#stockSabadoSValgas').html(stockSuperSabadoValgas);
            $('#diasSabadoSValgas').html(diasSuperSabadoValgas);
            $('#diasSabadoSValgas').val(diasSuperSabadoValgas);
            if ($("#diasSabadoSValgas").val() < 2){
                $("#diasSabadoSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoSValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperValgasSabado = parseInt($('#compraSuperValgasSabado').val() || 0);
            var stockSuperDomingoValgas = parseInt((stockSuperSabadoValgas - ventaMediaSValgas) + compraSuperValgasSabado);
            var diasSuperDomingoValgas = ((stockSuperDomingoValgas - 500) / ventaMediaSValgas).toFixed(1);
            $('#stockDomingoSValgas').html(stockSuperDomingoValgas);
            $('#diasDomingoSValgas').html(diasSuperDomingoValgas);
            $('#diasDomingoSValgas').val(diasSuperDomingoValgas);
            if ($("#diasDomingoSValgas").val() < 2){
                $("#diasDomingoSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoSValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperValgasDomingo = parseInt($('#compraSuperValgasDomingo').val() || 0);
            var stockSuperLunes2Valgas = parseInt((stockSuperDomingoValgas - ventaMediaSValgas) + compraSuperValgasDomingo);
            var diasSuperLunes2Valgas = ((stockSuperLunes2Valgas - 500) / ventaMediaSValgas).toFixed(1);
            $('#stockLunes2SValgas').html(stockSuperLunes2Valgas);
            $('#diasLunes2SValgas').html(diasSuperLunes2Valgas);
            $('#diasLunes2SValgas').val(diasSuperLunes2Valgas);
            if ($("#diasLunes2SValgas").val() < 2){
                $("#diasLunes2SValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2SValgas").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperValgasLunes2 = parseInt($('#compraSuperValgasLunes2').val() || 0);
            var stockSuperMartes2Valgas = parseInt((stockSuperLunes2Valgas - ventaMediaSValgas) + compraSuperValgasLunes2);
            var diasSuperMartes2Valgas = ((stockSuperMartes2Valgas - 500) / ventaMediaSValgas).toFixed(1);
            $('#stockMartes2SValgas').html(stockSuperMartes2Valgas);
            $('#diasMartes2SValgas').html(diasSuperMartes2Valgas);
            $('#diasMartes2SValgas').val(diasSuperMartes2Valgas);
            if ($("#diasMartes2SValgas").val() < 2){
                $("#diasMartes2SValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2SValgas").css({"color":"black", "font-size":"100%"});                
            };
            
        });
        
        
        $(".cal103").bind('input propertychange', function(){
            
            $.ajax({
                method:"POST",
                url:"calculo3.php",
                data: { compradieselValgasLunes: $("#compradieselValgasLunes").val(), stockDieselValgas: parseInt($('#stockDieselValgas').val() || 0), ventaMediaValgas : parseInt($('#ventadieselValgas').val() || 0), compradieselValgasMartes: $("#compradieselValgasMartes").val(), clavedieselValgasMartes: $("#clavedieselValgasMartes").val(), compradieselValgasMiercoles: $("#compradieselValgasMiercoles").val(), clavedieselValgasMiercoles: $("#clavedieselValgasMiercoles").val(), compradieselValgasJueves: $("#compradieselValgasJueves").val(), clavedieselValgasJueves: $("#clavedieselValgasJueves").val(), compradieselValgasViernes: $("#compradieselValgasViernes").val(), clavedieselValgasViernes: $("#clavedieselValgasViernes").val(), compradieselValgasSabado: $("#compradieselValgasSabado").val(), clavedieselValgasSabado: $("#clavedieselValgasSabado").val(), compradieselValgasDomingo: $("#compradieselValgasDomingo").val(), clavedieselValgasDomingo: $("#clavedieselValgasDomingo").val(), compradieselValgasLunes2: $("#compradieselValgasLunes2").val(), clavedieselValgasLunes2: $("#clavedieselValgasLunes2").val(), compraExtraValgasLunes: $("#compraExtraValgasLunes").val(), stockExtraValgas: parseInt($('#stockExtraValgas').val() || 0), ventaMediaEValgas : parseInt($('#ventaExtraValgas').val() || 0), compraExtraValgasMartes: $("#compraExtraValgasMartes").val(), claveExtraValgasMartes: $("#claveExtraValgasMartes").val(), compraExtraValgasMiercoles: $("#compraExtraValgasMiercoles").val(), claveExtraValgasMiercoles: $("#claveExtraValgasMiercoles").val(), compraExtraValgasJueves: $("#compraExtraValgasJueves").val(), claveExtraValgasJueves: $("#claveExtraValgasJueves").val(), compraExtraValgasViernes: $("#compraExtraValgasViernes").val(), claveExtraValgasViernes: $("#claveExtraValgasViernes").val(), compraExtraValgasSabado: $("#compraExtraValgasSabado").val(), claveExtraValgasSabado: $("#claveExtraValgasSabado").val(), compraExtraValgasDomingo: $("#compraExtraValgasDomingo").val(), claveExtraValgasDomingo: $("#claveExtraValgasDomingo").val(), compraExtraValgasLunes2: $("#compraExtraValgasLunes2").val(), claveExtraValgasLunes2: $("#claveExtraValgasLunes2").val(), compraSuperValgasLunes: $("#compraSuperValgasLunes").val(), stockSuperValgas: parseInt($('#stockSuperValgas').val() || 0), ventaMediaSValgas : parseInt($('#ventaSuperValgas').val() || 0), compraSuperValgasMartes: $("#compraSuperValgasMartes").val(), claveSuperValgasMartes: $("#claveSuperValgasMartes").val(), compraSuperValgasMiercoles: $("#compraSuperValgasMiercoles").val(), claveSuperValgasMiercoles: $("#claveSuperValgasMiercoles").val(), compraSuperValgasJueves: $("#compraSuperValgasJueves").val(), claveSuperValgasJueves: $("#claveSuperValgasJueves").val(), compraSuperValgasViernes: $("#compraSuperValgasViernes").val(), claveSuperValgasViernes: $("#claveSuperValgasViernes").val(), compraSuperValgasSabado: $("#compraSuperValgasSabado").val(), claveSuperValgasSabado: $("#claveSuperValgasSabado").val(), compraSuperValgasDomingo: $("#compraSuperValgasDomingo").val(), claveSuperValgasDomingo: $("#claveSuperValgasDomingo").val(), compraSuperValgasLunes2: $("#compraSuperValgasLunes2").val(), claveSuperValgasLunes2: $("#claveSuperValgasLunes2").val(), martescheck: $("#martescheck").val()}
            })
                .done(function(msg){
                    console.log(msg);
                    //$('#stockMartes').html(data[0].calstockMartes);
                    //$(('#diasMartes')).html(data[0].dias_martes);
                   //$(('#diasMartes')).val(data[0].dias_martes);
                })
        });
        
       // $(".cal101").bind('input propertychange', function(){
            
         //   $.ajax({
                //method:"GET",
           //     url:"read.php",
             //   type: "GET",
                
           //     dataType: "json",                                            
             //   success: function(data){
                    //info = data[i].id;
                    //console.log(data[0].id);
               //     $('#stockMartes').html(data[0].stock_martes);                                      
             //      $(('#diasMartes')).html(data[0].dias_martes);
            //       $(('#diasMartes')).val(data[0].dias_martes);
           //     }
          //  });
        //});
        
    });
  
  
  </script>
  
  </body>
</html>
    