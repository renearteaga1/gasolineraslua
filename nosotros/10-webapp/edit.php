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
}elseif (date('w')<1){
$date = date('M d, Y', strtotime("next monday"));
}elseif (date('w')>1){
$date = date('M d, Y', strtotime("previous monday"));
}
if (array_key_exists("id", $_SESSION)){
    
    $compra=1;
    
}else {
    
    header("Location: compras.php");
    
}
        
     
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

      <th class='estacion'  rowspan="3">
      <div style="width: 5em; overflow:auto; padding-left: 2px; padding-rigth: 2px;"><!-- Change height of row-->
      Anturios I
      </div>
      </th>
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
    <td class='stockMartesTitulo red' id='stockMartes'></td>
    <td class='diasMartesTitulo pato' id='diasMartes'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compradieselAnt1Martes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercoles'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercoles'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Miercoles"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJueves'></td>
    <td class='diasJuevesTitulo pato' id='diasJueves'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Jueves"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernes'></td>
    <td class='diasViernesTitulo pato' id='diasViernes'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Viernes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabado'></td>
    <td class='diasSabadoTitulo pato' id='diasSabado'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Sabado"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingo'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingo'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Domingo"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compradieselAnt1Lunes2"  >
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="clavedieselAnt1Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2'></td>
    
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
    <td class='stockMartesTitulo red' id='stockMartesE'></td>
    <td class='diasMartesTitulo pato' id='diasMartesE'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compraExtraAnt1Martes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesE'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesE'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compraExtraAnt1Miercoles"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 clavesmall no-border clave" type="text"  id="claveExtraAnt1Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesE'></td>
    <td class='diasJuevesTitulo pato' id='diasJuevesE'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compraExtraAnt1Jueves"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesE'></td>
    <td class='diasViernesTitulo pato' id='diasViernesE'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraExtraAnt1Viernes">
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoE'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoE'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" id="compraExtraAnt1Sabado"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoE'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoE'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compraExtraAnt1Domingo"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2E'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2E'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text"  id="compraExtraAnt1Lunes2"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveExtraAnt1Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2E'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2E'></td>
    
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
    <td class='stockMartesTitulo red' id='stockMartesS'></td>
    <td class='diasMartesTitulo pato' id='diasMartesS'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Martes" >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Martes"  >
    </td>
    <td class='stockMiercolesTitulo red' id='stockMiercolesS'></td>
    <td class='diasMiercolesTitulo pato' id='diasMiercolesS'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Miercoles" >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Miercoles"  >
    </td>
    <td class='stockJuevesTitulo red' id='stockJuevesS'></td>
    <td class='diasJuevesTitulo pato'id='diasJuevesS'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Jueves" >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Jueves"  >
    </td>
    <td class='stockViernesTitulo red' id='stockViernesS'></td>
    <td class='diasViernesTitulo pato' id='diasViernesS'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Viernes"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Viernes"  >
    </td>
    <td class='stockSabadoTitulo red' id='stockSabadoS'></td>
    <td class='diasSabadoTitulo pato' id='diasSabadoS'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Sabado"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Sabado"  >
    </td>
    <td class='stockDomingoTitulo red' id='stockDomingoS'></td>
    <td class='diasDomingoTitulo pato' id='diasDomingoS'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Domingo"  >
    </td>
    <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Domingo"  >
    </td>
    <td class='stockLunesTitulo red' id='stockLunes2S'></td>
    <td class='diasLunesTitulo pato' id='diasLunes2S'></td>
    <td class='inputData celeste'>
    <input class="form-control cal101 no-border celeste" type="text" placeholder=" " id="compraSuperAnt1Lunes2"  >
    </td>
     <td class='inputData clave'>
    <input class="form-control cal101 no-border clavesmall clave" type="text"  id="claveSuperAnt1Lunes2"  >
    </td>
    <td class='stockLunesTitulo red' id='stockMartes2S'></td>
    <td class='diasLunesTitulo pato' id='diasMartes2S'></td>
    
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

      <th class='estacion'  rowspan="3">
      <div style="width: 5em; overflow:auto; padding-left: 2px; padding-rigth: 2px;"><!-- Change height of row-->
      Anturios II
      </div>
      </th>
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

      <th class='estacion'  rowspan="3">
      <div style="width: 5em; overflow:auto; padding-left: 2px; padding-rigth: 2px;"><!-- Change height of row-->
      E/S Valgas
      </div>
      </th>
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
<a href="edit2.php"><button type="submit" class="guardar btn btn-outline-success" name='export' id='export'>Nuevo Calendario</button></a>

</div>
<label>

</label>
<div class='container'>
<h3>Seleccione los dias a generar pedido:</h3>
</div>
<div class="container">
<!--<div class="form-group">
    <label for="exampleSelect1">Seleccione dias a exportar</label>
    <select class="form-control" id="exampleSelect1">
      <option>Martes</option>
      <option>Miercoles</option>
      <option>Jueves</option>
      <option>Viernes</option>
      <option>Sabado</option>
      <option>Domingo</option>
      <option>Lunes</option>
    </select>
  </div>-->

<div class="form-check">
    <form target='_blank' action='export.php' method="post" name='dias' id='dias'>
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="martescheck" id="martescheck" value="6">
        Martes
      </label>
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="miercolescheck" id="miercolescheck" value="5">
        Miercoles
      </label>
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="juevescheck" id="juevescheck" value="4" >
        Jueves
      </label>
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="viernescheck" id="viernescheck" value="3">
        Viernes
      </label>
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="sabadocheck" id="sabadocheck" value="2">
        Sabado
      </label>
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="domingocheck" id="domingockeck" value="1" >
        Domingo
      </label>
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="lunescheck" id="lunescheck" value="0">
        Lunes
      </label>
  </div>    

<!--<a target="_blank" href="export.php"><button type="submit" class="guardar btn btn-danger">PDF</button></a>-->
<div class='container'>
<input  type="submit" class="guardar btn btn-danger" value="PDF">
</div>
</form>

</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
  <script type='text/javascript'>
  
  
    $(document).ready(function() {
        
        $.ajax({
                //method:"GET",
                url:"read.php",
                type: "GET",
                
                dataType: "json",                                            
                success: function(data){
                   //info = data[i].id;
                    //console.log(data[0].id);
                    $('#stockMartes').html(data[6].stockdiad);
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselAnt1')).val(data[6].stockd);
                   $(('#ventadieselAnt1')).val(data[6].ventad_media);
                   $(('#compradieselAnt1Lunes')).val(data[6].comprad_lunes);
                   $('#stockMartes').html(data[6].stockdiad);
                   $(('#diasMartes')).html(data[6].diasd);
                   $(('#diasMartes')).val(parseInt(data[6].diasd));
                   $(('#compradieselAnt1Martes')).val(data[6].comprad);
                   $(('#clavedieselAnt1Martes')).val(data[6].claved);
                   $('#stockMiercoles').html(data[5].stockdiad);
                   $(('#diasMiercoles')).html(data[5].diasd);
                   $(('#diasMiercoles')).val(data[5].diasd);
                   $(('#compradieselAnt1Miercoles')).val(data[5].comprad);
                   $(('#clavedieselAnt1Miercoles')).val(data[5].claved);
                   $('#stockJueves').html(data[4].stockdiad);
                   $(('#diasJueves')).html(data[4].diasd);
                   $(('#diasJueves')).val(data[4].diasd);
                   $(('#compradieselAnt1Jueves')).val(data[4].comprad);
                   $(('#clavedieselAnt1Jueves')).val(data[4].claved);
                   $('#stockViernes').html(data[3].stockdiad);
                   $(('#diasViernes')).html(data[3].diasd);
                   $(('#diasViernes')).val(data[3].diasd);
                   $(('#compradieselAnt1Viernes')).val(data[3].comprad);
                   $(('#clavedieselAnt1Viernes')).val(data[3].claved);
                   $('#stockSabado').html(data[2].stockdiad);
                   $(('#diasSabado')).html(data[2].diasd);
                   $(('#diasSabado')).val(data[2].diasd);
                   $(('#compradieselAnt1Sabado')).val(data[2].comprad);
                   $(('#clavedieselAnt1Sabado')).val(data[2].claved);
                   $('#stockDomingo').html(data[1].stockdiad);
                   $(('#diasDomingo')).html(data[1].diasd);
                   $(('#diasDomingo')).val(data[1].diasd);
                   $(('#compradieselAnt1Domingo')).val(data[1].comprad);
                   $(('#clavedieselAnt1Domingo')).val(data[1].claved);
                   $('#stockLunes2').html(data[0].stockdiad);
                   $(('#diasLunes2')).html(data[0].diasd);
                   $(('#diasLunes2')).val(data[0].diasd);
                   $(('#compradieselAnt1Lunes2')).val(data[0].comprad);
                   $(('#clavedieselAnt1Lunes2')).val(data[0].claved);
                   $('#stockMartes2').html(data[0].stockd_martes2);
                   $(('#diasMartes2')).html(data[0].diasd_martes2);
                   $(('#diasMartes2')).val(data[0].diasd_martes2);
                   
                   if ($("#diasMartes").val() < 2){
                $("#diasMartes").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercoles").val() < 2){
                $("#diasMiercoles").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercoles").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJueves").val() < 2){
                $("#diasJueves").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJueves").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernes").val() < 2){
                $("#diasViernes").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernes").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabado").val() < 2){
                $("#diasSabado").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabado").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingo").val() < 2){
                $("#diasDomingo").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingo").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2").val() < 2){
                $("#diasLunes2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2").val() < 2){
                $("#diasMartes2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2").css({"color":"black", "font-size":"100%"});                
            };
                   
                   //EXTRA 
                   $(('#stockExtraAnt1')).val(data[6].stocke);
                   $(('#ventaExtraAnt1')).val(data[6].ventae_media);
                   $(('#compraExtraAnt1Lunes')).val(data[6].comprae_lunes);                  
                   $('#stockMartesE').html(data[6].stockdiae);
                   $(('#diasMartesE')).html(data[6].diase);
                   $(('#diasMartesE')).val(data[6].diase);
                   $(('#compraExtraAnt1Martes')).val(data[6].comprae);
                   $(('#claveExtraAnt1Martes')).val(data[6].clavee);
                   $('#stockMiercolesE').html(data[5].stockdiae);
                   $(('#diasMiercolesE')).html(data[5].diase);
                   $(('#diasMiercolesE')).val(data[5].diase);
                   $(('#compraExtraAnt1Miercoles')).val(data[5].comprae);
                   $(('#claveExtraAnt1Miercoles')).val(data[5].clavee);
                   $('#stockJuevesE').html(data[4].stockdiae);
                   $(('#diasJuevesE')).html(data[4].diase);
                   $(('#diasJuevesE')).val(data[4].diase);
                   $(('#compraExtraAnt1Jueves')).val(data[4].comprae);
                   $(('#claveExtraAnt1Jueves')).val(data[4].clavee);
                   $('#stockViernesE').html(data[3].stockdiae);
                   $(('#diasViernesE')).html(data[3].diase);
                   $(('#diasViernesE')).val(data[3].diase);
                   $(('#compraExtraAnt1Viernes')).val(data[3].comprae);
                   $(('#claveExtraAnt1Viernes')).val(data[3].clavee);
                   $('#stockSabadoE').html(data[2].stockdiae);
                   $(('#diasSabadoE')).html(data[2].diase);
                   $(('#diasSabadoE')).val(data[2].diase);
                   $(('#compraExtraAnt1Sabado')).val(data[2].comprae);
                   $(('#claveExtraAnt1Sabado')).val(data[2].clavee);
                   $('#stockDomingoE').html(data[1].stockdiae);
                   $(('#diasDomingoE')).html(data[1].diase);
                   $(('#diasDomingoE')).val(data[1].diase);
                   $(('#compraExtraAnt1Domingo')).val(data[1].comprae);
                   $(('#claveExtraAnt1Domingo')).val(data[1].clavee);
                   $('#stockLunes2E').html(data[0].stockdiae);
                   $(('#diasLunes2E')).html(data[0].diase);
                   $(('#diasLunes2E')).val(data[0].diase);
                   $(('#compraExtraAnt1Lunes2')).val(data[0].comprae);
                   $(('#claveExtraAnt1Lunes2')).val(data[0].clavee);
                   $('#stockMartes2E').html(data[0].stocke_martes2);
                   $(('#diasMartes2E')).html(data[0].diase_martes2);
                   $(('#diasMartes2E')).val(data[0].diase_martes2);
                   
                   if ($("#diasMartesE").val() < 2){
                $("#diasMartesE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesE").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercolesE").val() < 2){
                $("#diasMiercolesE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesE").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJuevesE").val() < 2){
                $("#diasJuevesE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesE").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernesE").val() < 2){
                $("#diasViernesE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesE").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabadoE").val() < 2){
                $("#diasSabadoE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoE").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingoE").val() < 2){
                $("#diasDomingoE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoE").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2E").val() < 2){
                $("#diasLunes2E").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2E").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2E").val() < 2){
                $("#diasMartes2E").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2E").css({"color":"black", "font-size":"100%"});                
            };
                   
                   //SUPER
                   $(('#stockSuperAnt1')).val(data[6].stocks);
                   $(('#ventaSuperAnt1')).val(data[6].ventas_media);
                   $(('#compraSuperAnt1Lunes')).val(data[6].compras_lunes);                  
                   $('#stockMartesS').html(data[6].stocks);
                   $(('#diasMartesS')).html(data[6].diass);
                   $(('#diasMartesS')).val(data[6].diass);
                   $(('#compraSuperAnt1Martes')).val(data[6].compras);
                   $(('#claveSuperAnt1Martes')).val(data[6].claves);
                   $('#stockMiercolesS').html(data[5].stockdias);
                   $(('#diasMiercolesS')).html(data[5].diass);
                   $(('#diasMiercolesS')).val(data[5].diass);
                   $(('#compraSuperAnt1Miercoles')).val(data[5].compras);
                   $(('#claveSuperAnt1Miercoles')).val(data[5].claves);
                   $('#stockJuevesS').html(data[4].stockdias);
                   $(('#diasJuevesS')).html(data[4].diass);
                   $(('#diasJuevesS')).val(data[4].diass);
                   $(('#compraSuperAnt1Jueves')).val(data[4].compras);
                   $(('#claveSuperAnt1Jueves')).val(data[4].claves);
                   $('#stockViernesS').html(data[3].stockdias);
                   $(('#diasViernesS')).html(data[3].diass);
                   $(('#diasViernesS')).val(data[3].diass);
                   $(('#compraSuperAnt1Viernes')).val(data[3].compras);
                   $(('#claveSuperAnt1Viernes')).val(data[3].claves);
                   $('#stockSabadoS').html(data[2].stockdias);
                   $(('#diasSabadoS')).html(data[2].diass);
                   $(('#diasSabadoS')).val(data[2].diass);
                   $(('#compraSuperAnt1Sabado')).val(data[2].compras);
                   $(('#claveSuperAnt1Sabado')).val(data[2].claves);
                   $('#stockDomingoS').html(data[1].stockdias);
                   $(('#diasDomingoS')).html(data[1].diass);
                   $(('#diasDomingoS')).val(data[1].diass);
                   $(('#compraSuperAnt1Domingo')).val(data[1].compras);
                   $(('#claveSuperAnt1Domingo')).val(data[1].claves);
                   $('#stockLunes2S').html(data[0].stockdias);
                   $(('#diasLunes2S')).html(data[0].diass);
                   $(('#diasLunes2S')).val(data[0].diass);
                   $(('#compraSuperAnt1Lunes2')).val(data[0].compras);
                   $(('#claveSuperAnt1Lunes2')).val(data[0].claves);
                   $('#stockMartes2S').html(data[0].stocks_martes2);
                   $(('#diasMartes2S')).html(data[0].diass_martes2);
                   $(('#diasMartes2S')).val(data[0].diass_martes2);
                   
                   if ($("#diasMartesS").val() < 2){
                $("#diasMartesS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesS").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercolesS").val() < 2){
                $("#diasMiercolesS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesS").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJuevesS").val() < 2){
                $("#diasJuevesS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesS").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernesS").val() < 2){
                $("#diasViernesS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesS").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabadoS").val() < 2){
                $("#diasSabadoS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoS").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingoS").val() < 2){
                $("#diasDomingoS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoS").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2S").val() < 2){
                $("#diasLunes2S").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2S").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2S").val() < 2){
                $("#diasMartes2S").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2S").css({"color":"black", "font-size":"100%"});                
            };
                }
        });
        
        
         $.ajax({
                //method:"GET",
                url:"read2.php",
                type: "GET",
                
                dataType: "json",                                            
                success: function(data){
                   //info = data[i].id;
                    //console.log(data[0].id);
                    $('#stockMartesAnt2').html(data[6].stockdiad);
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselAnt2')).val(data[6].stockd);
                   $(('#ventadieselAnt2')).val(data[6].ventad_media);
                   $(('#compradieselAnt2Lunes')).val(data[6].comprad_lunes);
                   $('#stockMartesAnt2').html(data[6].stockdiad);
                   $(('#diasMartesAnt2')).html(data[6].diasd);
                   $(('#diasMartesAnt2')).val(parseInt(data[6].diasd));
                   $(('#compradieselAnt2Martes')).val(data[6].comprad);
                   $(('#clavedieselAnt2Martes')).val(data[6].claved);
                   $('#stockMiercolesAnt2').html(data[5].stockdiad);
                   $(('#diasMiercolesAnt2')).html(data[5].diasd);
                   $(('#diasMiercolesAnt2')).val(data[5].diasd);
                   $(('#compradieselAnt2Miercoles')).val(data[5].comprad);
                   $(('#clavedieselAnt2Miercoles')).val(data[5].claved);
                   $('#stockJuevesAnt2').html(data[4].stockdiad);
                   $(('#diasJuevesAnt2')).html(data[4].diasd);
                   $(('#diasJuevesAnt2')).val(data[4].diasd);
                   $(('#compradieselAnt2Jueves')).val(data[4].comprad);
                   $(('#clavedieselAnt2Jueves')).val(data[4].claved);
                   $('#stockViernesAnt2').html(data[3].stockdiad);
                   $(('#diasViernesAnt2')).html(data[3].diasd);
                   $(('#diasViernesAnt2')).val(data[3].diasd);
                   $(('#compradieselAnt2Viernes')).val(data[3].comprad);
                   $(('#clavedieselAnt2Viernes')).val(data[3].claved);
                   $('#stockSabadoAnt2').html(data[2].stockdiad);
                   $(('#diasSabadoAnt2')).html(data[2].diasd);
                   $(('#diasSabadoAnt2')).val(data[2].diasd);
                   $(('#compradieselAnt2Sabado')).val(data[2].comprad);
                   $(('#clavedieselAnt2Sabado')).val(data[2].claved);
                   $('#stockDomingoAnt2').html(data[1].stockdiad);
                   $(('#diasDomingoAnt2')).html(data[1].diasd);
                   $(('#diasDomingoAnt2')).val(data[1].diasd);
                   $(('#compradieselAnt2Domingo')).val(data[1].comprad);
                   $(('#clavedieselAnt2Domingo')).val(data[1].claved);
                   $('#stockLunes2Ant2').html(data[0].stockdiad);
                   $(('#diasLunes2Ant2')).html(data[0].diasd);
                   $(('#diasLunes2Ant2')).val(data[0].diasd);
                   $(('#compradieselAnt2Lunes2')).val(data[0].comprad);
                   $(('#clavedieselAnt2Lunes2')).val(data[0].claved);
                   $('#stockMartes2Ant2').html(data[0].stockd_martes2);
                   $(('#diasMartes2Ant2')).html(data[0].diasd_martes2);
                   $(('#diasMartes2Ant2')).val(data[0].diasd_martes2);
                   
                   if ($("#diasMartesAnt2").val() < 2){
                $("#diasMartesAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesAnt2").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercolesAnt2").val() < 2){
                $("#diasMiercolesAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesAnt2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJuevesAnt2").val() < 2){
                $("#diasJuevesAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesAnt2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernesAnt2").val() < 2){
                $("#diasViernesAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabadoAnt2").val() < 2){
                $("#diasSabadoAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingoAnt2").val() < 2){
                $("#diasDomingoAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2Ant2").val() < 2){
                $("#diasLunes2Ant2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2Ant2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2Ant2").val() < 2){
                $("#diasMartes2Ant2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2Ant2").css({"color":"black", "font-size":"100%"});                
            };
                   
                   //EXTRA 
                   $(('#stockExtraAnt2')).val(data[6].stocke);
                   $(('#ventaExtraAnt2')).val(data[6].ventae_media);
                   $(('#compraExtraAnt2Lunes')).val(data[6].comprae_lunes);                  
                   $('#stockMartesEAnt2').html(data[6].stockdiae);
                   $(('#diasMartesEAnt2')).html(data[6].diase);
                   $(('#diasMartesEAnt2')).val(data[6].diase);
                   $(('#compraExtraAnt2Martes')).val(data[6].comprae);
                   $(('#claveExtraAnt2Martes')).val(data[6].clavee);
                   $('#stockMiercolesEAnt2').html(data[5].stockdiae);
                   $(('#diasMiercolesEAnt2')).html(data[5].diase);
                   $(('#diasMiercolesEAnt2')).val(data[5].diase);
                   $(('#compraExtraAnt2Miercoles')).val(data[5].comprae);
                   $(('#claveExtraAnt2Miercoles')).val(data[5].clavee);
                   $('#stockJuevesEAnt2').html(data[4].stockdiae);
                   $(('#diasJuevesEAnt2')).html(data[4].diase);
                   $(('#diasJuevesEAnt2')).val(data[4].diase);
                   $(('#compraExtraAnt2Jueves')).val(data[4].comprae);
                   $(('#claveExtraAnt2Jueves')).val(data[4].clavee);
                   $('#stockViernesEAnt2').html(data[3].stockdiae);
                   $(('#diasViernesEAnt2')).html(data[3].diase);
                   $(('#diasViernesEAnt2')).val(data[3].diase);
                   $(('#compraExtraAnt2Viernes')).val(data[3].comprae);
                   $(('#claveExtraAnt2Viernes')).val(data[3].clavee);
                   $('#stockSabadoEAnt2').html(data[2].stockdiae);
                   $(('#diasSabadoEAnt2')).html(data[2].diase);
                   $(('#diasSabadoEAnt2')).val(data[2].diase);
                   $(('#compraExtraAnt2Sabado')).val(data[2].comprae);
                   $(('#claveExtraAnt2Sabado')).val(data[2].clavee);
                   $('#stockDomingoEAnt2').html(data[1].stockdiae);
                   $(('#diasDomingoEAnt2')).html(data[1].diase);
                   $(('#diasDomingoEAnt2')).val(data[1].diase);
                   $(('#compraExtraAnt2Domingo')).val(data[1].comprae);
                   $(('#claveExtraAnt2Domingo')).val(data[1].clavee);
                   $('#stockLunes2EAnt2').html(data[0].stockdiae);
                   $(('#diasLunes2EAnt2')).html(data[0].diase);
                   $(('#diasLunes2EAnt2')).val(data[0].diase);
                   $(('#compraExtraAnt2Lunes2')).val(data[0].comprae);
                   $(('#claveExtraAnt2Lunes2')).val(data[0].clavee);
                   $('#stockMartes2EAnt2').html(data[0].stocke_martes2);
                   $(('#diasMartes2EAnt2')).html(data[0].diase_martes2);
                   $(('#diasMartes2EAnt2')).val(data[0].diase_martes2);
                   
                   if ($("#diasMartesEAnt2").val() < 2){
                $("#diasMartesEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesEAnt2").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercolesEAnt2").val() < 2){
                $("#diasMiercolesEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesEAnt2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJuevesEAnt2").val() < 2){
                $("#diasJuevesEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesEAnt2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernesEAnt2").val() < 2){
                $("#diasViernesEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesEAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabadoEAnt2").val() < 2){
                $("#diasSabadoEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoEAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingoEAnt2").val() < 2){
                $("#diasDomingoEAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoEAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2EAnt2").val() < 2){
                $("#diasLunes2EAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2EAnt2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2EAnt2").val() < 2){
                $("#diasMartes2EAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2EAnt2").css({"color":"black", "font-size":"100%"});                
            };
                   
                   //SUPER
                   $(('#stockSuperAnt2')).val(data[6].stocks);
                   $(('#ventaSuperAnt2')).val(data[6].ventas_media);
                   $(('#compraSuperAnt2Lunes')).val(data[6].compras_lunes);                  
                   $('#stockMartesSAnt2').html(data[6].stocks);
                   $(('#diasMartesSAnt2')).html(data[6].diass);
                   $(('#diasMartesSAnt2')).val(data[6].diass);
                   $(('#compraSuperAnt2Martes')).val(data[6].compras);
                   $(('#claveSuperAnt2Martes')).val(data[6].claves);
                   $('#stockMiercolesSAnt2').html(data[5].stockdias);
                   $(('#diasMiercolesSAnt2')).html(data[5].diass);
                   $(('#diasMiercolesSAnt2')).val(data[5].diass);
                   $(('#compraSuperAnt2Miercoles')).val(data[5].compras);
                   $(('#claveSuperAnt2Miercoles')).val(data[5].claves);
                   $('#stockJuevesSAnt2').html(data[4].stockdias);
                   $(('#diasJuevesSAnt2')).html(data[4].diass);
                   $(('#diasJuevesSAnt2')).val(data[4].diass);
                   $(('#compraSuperAnt2Jueves')).val(data[4].compras);
                   $(('#claveSuperAnt2Jueves')).val(data[4].claves);
                   $('#stockViernesSAnt2').html(data[3].stockdias);
                   $(('#diasViernesSAnt2')).html(data[3].diass);
                   $(('#diasViernesSAnt2')).val(data[3].diass);
                   $(('#compraSuperAnt2Viernes')).val(data[3].compras);
                   $(('#claveSuperAnt2Viernes')).val(data[3].claves);
                   $('#stockSabadoSAnt2').html(data[2].stockdias);
                   $(('#diasSabadoSAnt2')).html(data[2].diass);
                   $(('#diasSabadoSAnt2')).val(data[2].diass);
                   $(('#compraSuperAnt2Sabado')).val(data[2].compras);
                   $(('#claveSuperAnt2Sabado')).val(data[2].claves);
                   $('#stockDomingoSAnt2').html(data[1].stockdias);
                   $(('#diasDomingoSAnt2')).html(data[1].diass);
                   $(('#diasDomingoSAnt2')).val(data[1].diass);
                   $(('#compraSuperAnt2Domingo')).val(data[1].compras);
                   $(('#claveSuperAnt2Domingo')).val(data[1].claves);
                   $('#stockLunes2SAnt2').html(data[0].stockdias);
                   $(('#diasLunes2SAnt2')).html(data[0].diass);
                   $(('#diasLunes2SAnt2')).val(data[0].diass);
                   $(('#compraSuperAnt2Lunes2')).val(data[0].compras);
                   $(('#claveSuperAnt2Lunes2')).val(data[0].claves);
                   $('#stockMartes2SAnt2').html(data[0].stocks_martes2);
                   $(('#diasMartes2SAnt2')).html(data[0].diass_martes2);
                   $(('#diasMartes2SAnt2')).val(data[0].diass_martes2);
                   
                   if ($("#diasMartesSAnt2").val() < 2){
                $("#diasMartesSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesSAnt2").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercolesSAnt2").val() < 2){
                $("#diasMiercolesSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesSAnt2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJuevesSAnt2").val() < 2){
                $("#diasJuevesSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesSAnt2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernesSAnt2").val() < 2){
                $("#diasViernesSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesSAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabadoSAnt2").val() < 2){
                $("#diasSabadoSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoSAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingoSAnt2").val() < 2){
                $("#diasDomingoSAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoSAnt2").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2SAnt2").val() < 2){
                $("#diasLunes2SAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2SAnt2").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2SAnt2").val() < 2){
                $("#diasMartes2SAnt2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2SAnt2").css({"color":"black", "font-size":"100%"});                
            };
                }
        });
        
        //VALGAS READ3
        
        $.ajax({
                //method:"GET",
                url:"read3.php",
                type: "GET",
                
                dataType: "json",                                            
                success: function(data){
                   //info = data[i].id;
                   // console.log(data[6].stockd);
                    $('#stockMartesValgas').val(data[6].stockdiad);
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselValgas')).val(data[6].stockd);
                   $(('#ventadieselValgas')).val(data[6].ventad_media);
                   $(('#compradieselValgasLunes')).val(data[6].comprad_lunes);
                   $('#stockMartesValgas').html(data[6].stockdiad);
                   $(('#diasMartesValgas')).html(data[6].diasd);
                   $(('#diasMartesValgas')).val(parseInt(data[6].diasd));
                   $(('#compradieselValgasMartes')).val(data[6].comprad);
                   $(('#clavedieselValgasMartes')).val(data[6].claved);
                   $('#stockMiercolesValgas').html(data[5].stockdiad);
                   $(('#diasMiercolesValgas')).html(data[5].diasd);
                   $(('#diasMiercolesValgas')).val(data[5].diasd);
                   $(('#compradieselValgasMiercoles')).val(data[5].comprad);
                   $(('#clavedieselValgasMiercoles')).val(data[5].claved);
                   $('#stockJuevesValgas').html(data[4].stockdiad);
                   $(('#diasJuevesValgas')).html(data[4].diasd);
                   $(('#diasJuevesValgas')).val(data[4].diasd);
                   $(('#compradieselValgasJueves')).val(data[4].comprad);
                   $(('#clavedieselValgasJueves')).val(data[4].claved);
                   $('#stockViernesValgas').html(data[3].stockdiad);
                   $(('#diasViernesValgas')).html(data[3].diasd);
                   $(('#diasViernesValgas')).val(data[3].diasd);
                   $(('#compradieselValgasViernes')).val(data[3].comprad);
                   $(('#clavedieselValgasViernes')).val(data[3].claved);
                   $('#stockSabadoValgas').html(data[2].stockdiad);
                   $(('#diasSabadoValgas')).html(data[2].diasd);
                   $(('#diasSabadoValgas')).val(data[2].diasd);
                   $(('#compradieselValgasSabado')).val(data[2].comprad);
                   $(('#clavedieselValgasSabado')).val(data[2].claved);
                   $('#stockDomingoValgas').html(data[1].stockdiad);
                   $(('#diasDomingoValgas')).html(data[1].diasd);
                   $(('#diasDomingoValgas')).val(data[1].diasd);
                   $(('#compradieselValgasDomingo')).val(data[1].comprad);
                   $(('#clavedieselValgasDomingo')).val(data[1].claved);
                   $('#stockLunes2Valgas').html(data[0].stockdiad);
                   $(('#diasLunes2Valgas')).html(data[0].diasd);
                   $(('#diasLunes2Valgas')).val(data[0].diasd);
                   $(('#compradieselValgasLunes2')).val(data[0].comprad);
                   $(('#clavedieselValgasLunes2')).val(data[0].claved);
                   $('#stockMartes2Valgas').html(data[0].stockd_martes2);
                   $(('#diasMartes2Valgas')).html(data[0].diasd_martes2);
                   $(('#diasMartes2Valgas')).val(data[0].diasd_martes2);
                   
                   if ($("#diasMartesValgas").val() < 2){
                $("#diasMartesValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesValgas").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercolesValgas").val() < 2){
                $("#diasMiercolesValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesValgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJuevesValgas").val() < 2){
                $("#diasJuevesValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesValgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernesValgas").val() < 2){
                $("#diasViernesValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabadoValgas").val() < 2){
                $("#diasSabadoValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingoValgas").val() < 2){
                $("#diasDomingoValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2Valgas").val() < 2){
                $("#diasLunes2Valgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2Valgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2Valgas").val() < 2){
                $("#diasMartes2Valgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2Valgas").css({"color":"black", "font-size":"100%"});                
            };
                   
                   //EXTRA 
                   $(('#stockExtraValgas')).val(data[6].stocke);
                   $(('#ventaExtraValgas')).val(data[6].ventae_media);
                   $(('#compraExtraValgasLunes')).val(data[6].comprae_lunes);                  
                   $('#stockMartesEValgas').html(data[6].stockdiae);
                   $(('#diasMartesEValgas')).html(data[6].diase);
                   $(('#diasMartesEValgas')).val(data[6].diase);
                   $(('#compraExtraValgasMartes')).val(data[6].comprae);
                   $(('#claveExtraValgasMartes')).val(data[6].clavee);
                   $('#stockMiercolesEValgas').html(data[5].stockdiae);
                   $(('#diasMiercolesEValgas')).html(data[5].diase);
                   $(('#diasMiercolesEValgas')).val(data[5].diase);
                   $(('#compraExtraValgasMiercoles')).val(data[5].comprae);
                   $(('#claveExtraValgasMiercoles')).val(data[5].clavee);
                   $('#stockJuevesEValgas').html(data[4].stockdiae);
                   $(('#diasJuevesEValgas')).html(data[4].diase);
                   $(('#diasJuevesEValgas')).val(data[4].diase);
                   $(('#compraExtraValgasJueves')).val(data[4].comprae);
                   $(('#claveExtraValgasJueves')).val(data[4].clavee);
                   $('#stockViernesEValgas').html(data[3].stockdiae);
                   $(('#diasViernesEValgas')).html(data[3].diase);
                   $(('#diasViernesEValgas')).val(data[3].diase);
                   $(('#compraExtraValgasViernes')).val(data[3].comprae);
                   $(('#claveExtraValgasViernes')).val(data[3].clavee);
                   $('#stockSabadoEValgas').html(data[2].stockdiae);
                   $(('#diasSabadoEValgas')).html(data[2].diase);
                   $(('#diasSabadoEValgas')).val(data[2].diase);
                   $(('#compraExtraValgasSabado')).val(data[2].comprae);
                   $(('#claveExtraValgasSabado')).val(data[2].clavee);
                   $('#stockDomingoEValgas').html(data[1].stockdiae);
                   $(('#diasDomingoEValgas')).html(data[1].diase);
                   $(('#diasDomingoEValgas')).val(data[1].diase);
                   $(('#compraExtraValgasDomingo')).val(data[1].comprae);
                   $(('#claveExtraValgasDomingo')).val(data[1].clavee);
                   $('#stockLunes2EValgas').html(data[0].stockdiae);
                   $(('#diasLunes2EValgas')).html(data[0].diase);
                   $(('#diasLunes2EValgas')).val(data[0].diase);
                   $(('#compraExtraValgasLunes2')).val(data[0].comprae);
                   $(('#claveExtraValgasLunes2')).val(data[0].clavee);
                   $('#stockMartes2EValgas').html(data[0].stocke_martes2);
                   $(('#diasMartes2EValgas')).html(data[0].diase_martes2);
                   $(('#diasMartes2EValgas')).val(data[0].diase_martes2);
                   
                   if ($("#diasMartesEValgas").val() < 2){
                $("#diasMartesEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesEValgas").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercolesEValgas").val() < 2){
                $("#diasMiercolesEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesEValgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJuevesEValgas").val() < 2){
                $("#diasJuevesEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesEValgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernesEValgas").val() < 2){
                $("#diasViernesEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesEValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabadoEValgas").val() < 2){
                $("#diasSabadoEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoEValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingoEValgas").val() < 2){
                $("#diasDomingoEValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoEValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2EValgas").val() < 2){
                $("#diasLunes2EValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2EValgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2EValgas").val() < 2){
                $("#diasMartes2EValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2EValgas").css({"color":"black", "font-size":"100%"});                
            };
                   
                   //SUPER
                   $(('#stockSuperValgas')).val(data[6].stocks);
                   $(('#ventaSuperValgas')).val(data[6].ventas_media);
                   $(('#compraSuperValgasLunes')).val(data[6].compras_lunes);                  
                   $('#stockMartesSValgas').html(data[6].stocks);
                   $(('#diasMartesSValgas')).html(data[6].diass);
                   $(('#diasMartesSValgas')).val(data[6].diass);
                   $(('#compraSuperValgasMartes')).val(data[6].compras);
                   $(('#claveSuperValgasMartes')).val(data[6].claves);
                   $('#stockMiercolesSValgas').html(data[5].stockdias);
                   $(('#diasMiercolesSValgas')).html(data[5].diass);
                   $(('#diasMiercolesSValgas')).val(data[5].diass);
                   $(('#compraSuperValgasMiercoles')).val(data[5].compras);
                   $(('#claveSuperValgasMiercoles')).val(data[5].claves);
                   $('#stockJuevesSValgas').html(data[4].stockdias);
                   $(('#diasJuevesSValgas')).html(data[4].diass);
                   $(('#diasJuevesSValgas')).val(data[4].diass);
                   $(('#compraSuperValgasJueves')).val(data[4].compras);
                   $(('#claveSuperValgasJueves')).val(data[4].claves);
                   $('#stockViernesSValgas').html(data[3].stockdias);
                   $(('#diasViernesSValgas')).html(data[3].diass);
                   $(('#diasViernesSValgas')).val(data[3].diass);
                   $(('#compraSuperValgasViernes')).val(data[3].compras);
                   $(('#claveSuperValgasViernes')).val(data[3].claves);
                   $('#stockSabadoSValgas').html(data[2].stockdias);
                   $(('#diasSabadoSValgas')).html(data[2].diass);
                   $(('#diasSabadoSValgas')).val(data[2].diass);
                   $(('#compraSuperValgasSabado')).val(data[2].compras);
                   $(('#claveSuperValgasSabado')).val(data[2].claves);
                   $('#stockDomingoSValgas').html(data[1].stockdias);
                   $(('#diasDomingoSValgas')).html(data[1].diass);
                   $(('#diasDomingoSValgas')).val(data[1].diass);
                   $(('#compraSuperValgasDomingo')).val(data[1].compras);
                   $(('#claveSuperValgasDomingo')).val(data[1].claves);
                   $('#stockLunes2SValgas').html(data[0].stockdias);
                   $(('#diasLunes2SValgas')).html(data[0].diass);
                   $(('#diasLunes2SValgas')).val(data[0].diass);
                   $(('#compraSuperValgasLunes2')).val(data[0].compras);
                   $(('#claveSuperValgasLunes2')).val(data[0].claves);
                   $('#stockMartes2SValgas').html(data[0].stocks_martes2);
                   $(('#diasMartes2SValgas')).html(data[0].diass_martes2);
                   $(('#diasMartes2SValgas')).val(data[0].diass_martes2);
                   
                   if ($("#diasMartesSValgas").val() < 2){
                $("#diasMartesSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesSValgas").css({"color":"black", "font-size":"100%"});                
            };                        
        
            if ($("#diasMiercolesSValgas").val() < 2){
                $("#diasMiercolesSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesSValgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasJuevesSValgas").val() < 2){
                $("#diasJuevesSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesSValgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasViernesSValgas").val() < 2){
                $("#diasViernesSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesSValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasSabadoSValgas").val() < 2){
                $("#diasSabadoSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoSValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasDomingoSValgas").val() < 2){
                $("#diasDomingoSValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoSValgas").css({"color":"black", "font-size":"100%"});                
            };
                       
            if ($("#diasLunes2SValgas").val() < 2){
                $("#diasLunes2SValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2SValgas").css({"color":"black", "font-size":"100%"});                
            };
                        
            if ($("#diasMartes2SValgas").val() < 2){
                $("#diasMartes2SValgas").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2SValgas").css({"color":"black", "font-size":"100%"});                
            };
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
            
                $('#stockMartes').html(stockDieselMartes);
                $('#diasMartes').html(diasDieselMartes);
                $('#diasMartes').val(diasDieselMartes);
           
            
            if ($("#diasMartes").val() < 2){
                $("#diasMartes").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compradieselAnt1Martes = parseInt($('#compradieselAnt1Martes').val() || 0);
            var stockDieselMiercoles = parseInt((stockDieselMartes - ventaMedia) + compradieselAnt1Martes);
            var diasDieselMiercoles= ((stockDieselMiercoles - 500) / ventaMedia).toFixed(1);
            $('#stockMiercoles').html(stockDieselMiercoles);
            $('#diasMiercoles').html(diasDieselMiercoles);
            $('#diasMiercoles').val(diasDieselMiercoles);
            if ($("#diasMiercoles").val() < 2){
                $("#diasMiercoles").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercoles").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Miercoles = parseInt($('#compradieselAnt1Miercoles').val() || 0);
            var stockDieselJueves = parseInt((stockDieselMiercoles - ventaMedia) + compradieselAnt1Miercoles);
            var diasDieselJueves= ((stockDieselJueves - 500) / ventaMedia).toFixed(1);
            $('#stockJueves').html(stockDieselJueves);
            $('#diasJueves').html(diasDieselJueves);
            $('#diasJueves').val(diasDieselJueves);
            if ($("#diasJueves").val() < 2){
                $("#diasJueves").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJueves").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Jueves = parseInt($('#compradieselAnt1Jueves').val() || 0);
            var stockDieselViernes = parseInt((stockDieselJueves - ventaMedia) + compradieselAnt1Jueves);
            var diasDieselViernes= ((stockDieselViernes - 500) / ventaMedia).toFixed(1);
            $('#stockViernes').html(stockDieselViernes);
            $('#diasViernes').html(diasDieselViernes);
            $('#diasViernes').val(diasDieselViernes);
            if ($("#diasViernes").val() < 2){
                $("#diasViernes").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernes").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Viernes = parseInt($('#compradieselAnt1Viernes').val() || 0);
            var stockDieselSabado = parseInt((stockDieselViernes - ventaMedia) + compradieselAnt1Viernes);
            var diasDieselSabado = ((stockDieselSabado - 500) / ventaMedia).toFixed(1);
            $('#stockSabado').html(stockDieselSabado);
            $('#diasSabado').html(diasDieselSabado);
            $('#diasSabado').val(diasDieselSabado);
            if ($("#diasSabado").val() < 2){
                $("#diasSabado").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabado").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Sabado = parseInt($('#compradieselAnt1Sabado').val() || 0);
            var stockDieselDomingo = parseInt((stockDieselSabado - ventaMedia) + compradieselAnt1Sabado);
            var diasDieselDomingo= ((stockDieselDomingo - 500) / ventaMedia).toFixed(1);
            $('#stockDomingo').html(stockDieselDomingo);
            $('#diasDomingo').html(diasDieselDomingo);
            $('#diasDomingo').val(diasDieselDomingo);
            if ($("#diasDomingo").val() < 2){
                $("#diasDomingo").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingo").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Domingo = parseInt($('#compradieselAnt1Domingo').val() || 0);
            var stockDieselLunes2 = parseInt((stockDieselDomingo - ventaMedia) + compradieselAnt1Domingo);
            var diasDieselLunes2= ((stockDieselLunes2 - 500) / ventaMedia).toFixed(1);
            $('#stockLunes2').html(stockDieselLunes2);
            $('#diasLunes2').html(diasDieselLunes2);
            $('#diasLunes2').val(diasDieselLunes2);
            if ($("#diasLunes2").val() < 2){
                $("#diasLunes2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2").css({"color":"black", "font-size":"100%"});                
            };
            
            var compradieselAnt1Lunes2 = parseInt($('#compradieselAnt1Lunes2').val() || 0);
            var stockDieselMartes2 = parseInt((stockDieselLunes2 - ventaMedia) + compradieselAnt1Lunes2);
            var diasDieselMartes2= ((stockDieselMartes2 - 500) / ventaMedia).toFixed(1);
            $('#stockMartes2').html(stockDieselMartes2);
            $('#diasMartes2').html(diasDieselMartes2);
            $('#diasMartes2').val(diasDieselMartes2);
            if ($("#diasMartes2").val() < 2){
                $("#diasMartes2").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2").css({"color":"black", "font-size":"100%"});                
            };
            
            //EXTRA
            var stockExtraAnt1 = parseInt($('#stockExtraAnt1').val() || 0);
            var ventaMediaE = parseInt($('#ventaExtraAnt1').val() || 0);
            var compraExtraAnt1Lunes = parseInt($('#compraExtraAnt1Lunes').val() || 0);
            var stockExtraMartes = parseInt((stockExtraAnt1 - ventaMediaE) + compraExtraAnt1Lunes);
            var diasExtraMartes= ((stockExtraMartes - 500) / ventaMediaE).toFixed(1);
            
                $('#stockMartesE').html(stockExtraMartes);
                $('#diasMartesE').html(diasExtraMartes);
                $('#diasMartesE').val(diasExtraMartes);
           
            
            if ($("#diasMartesE").val() < 2){
                $("#diasMartesE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesE").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compraExtraAnt1Martes = parseInt($('#compraExtraAnt1Martes').val() || 0);
            var stockExtraMiercoles = parseInt((stockExtraMartes - ventaMediaE) + compraExtraAnt1Martes);
            var diasExtraMiercoles= ((stockExtraMiercoles - 500) / ventaMediaE).toFixed(1);
            $('#stockMiercolesE').html(stockExtraMiercoles);
            $('#diasMiercolesE').html(diasExtraMiercoles);
            $('#diasMiercolesE').val(diasExtraMiercoles);
            if ($("#diasMiercolesE").val() < 2){
                $("#diasMiercolesE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesE").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Miercoles = parseInt($('#compraExtraAnt1Miercoles').val() || 0);
            var stockExtraJueves = parseInt((stockExtraMiercoles - ventaMediaE) + compraExtraAnt1Miercoles);
            var diasExtraJueves= ((stockExtraJueves - 500) / ventaMediaE).toFixed(1);
            $('#stockJuevesE').html(stockExtraJueves);
            $('#diasJuevesE').html(diasExtraJueves);
            $('#diasJuevesE').val(diasExtraJueves);
            if ($("#diasJuevesE").val() < 2){
                $("#diasJuevesE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesE").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Jueves = parseInt($('#compraExtraAnt1Jueves').val() || 0);
            var stockExtraViernes = parseInt((stockExtraJueves - ventaMediaE) + compraExtraAnt1Jueves);
            var diasExtraViernes= ((stockExtraViernes - 500) / ventaMediaE).toFixed(1);
            $('#stockViernesE').html(stockExtraViernes);
            $('#diasViernesE').html(diasExtraViernes);
            $('#diasViernesE').val(diasExtraViernes);
            if ($("#diasViernesE").val() < 2){
                $("#diasViernesE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesE").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Viernes = parseInt($('#compraExtraAnt1Viernes').val() || 0);
            var stockExtraSabado = parseInt((stockExtraViernes - ventaMediaE) + compraExtraAnt1Viernes);
            var diasExtraSabado = ((stockExtraSabado - 500) / ventaMediaE).toFixed(1);
            $('#stockSabadoE').html(stockExtraSabado);
            $('#diasSabadoE').html(diasExtraSabado);
            $('#diasSabadoE').val(diasExtraSabado);
            if ($("#diasSabadoE").val() < 2){
                $("#diasSabadoE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoE").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Sabado = parseInt($('#compraExtraAnt1Sabado').val() || 0);
            var stockExtraDomingo = parseInt((stockExtraSabado - ventaMediaE) + compraExtraAnt1Sabado);
            var diasExtraDomingo= ((stockExtraDomingo - 500) / ventaMediaE).toFixed(1);
            $('#stockDomingoE').html(stockExtraDomingo);
            $('#diasDomingoE').html(diasExtraDomingo);
            $('#diasDomingoE').val(diasExtraDomingo);
            if ($("#diasDomingoE").val() < 2){
                $("#diasDomingoE").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoE").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Domingo = parseInt($('#compraExtraAnt1Domingo').val() || 0);
            var stockExtraLunes2 = parseInt((stockExtraDomingo - ventaMediaE) + compraExtraAnt1Domingo);
            var diasExtraLunes2= ((stockExtraLunes2 - 500) / ventaMediaE).toFixed(1);
            $('#stockLunes2E').html(stockExtraLunes2);
            $('#diasLunes2E').html(diasExtraLunes2);
            $('#diasLunes2E').val(diasExtraLunes2);
            if ($("#diasLunes2E").val() < 2){
                $("#diasLunes2E").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2E").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraExtraAnt1Lunes2 = parseInt($('#compraExtraAnt1Lunes2').val() || 0);
            var stockExtraMartes2 = parseInt((stockExtraLunes2 - ventaMediaE) + compraExtraAnt1Lunes2);
            var diasExtraMartes2= ((stockExtraMartes2 - 500) / ventaMediaE).toFixed(1);
            $('#stockMartes2E').html(stockExtraMartes2);
            $('#diasMartes2E').html(diasExtraMartes2);
            $('#diasMartes2E').val(diasExtraMartes2);
            if ($("#diasMartes2E").val() < 2){
                $("#diasMartes2E").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2E").css({"color":"black", "font-size":"100%"});                
            };
            
            //SUPER
            var stockSuperAnt1 = parseInt($('#stockSuperAnt1').val() || 0);
            var ventaMediaS = parseInt($('#ventaSuperAnt1').val() || 0);
            var compraSuperAnt1Lunes = parseInt($('#compraSuperAnt1Lunes').val() || 0);
            var stockSuperMartes = parseInt((stockSuperAnt1 - ventaMediaS) + compraSuperAnt1Lunes);
            var diasSuperMartes= ((stockSuperMartes - 500) / ventaMediaS).toFixed(1);
            
                $('#stockMartesS').html(stockSuperMartes);
                $('#diasMartesS').html(diasSuperMartes);
                $('#diasMartesS').val(diasSuperMartes);
           
            
            if ($("#diasMartesS").val() < 2){
                $("#diasMartesS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartesS").css({"color":"black", "font-size":"100%"});                
            };                        
            
            
          
            var compraSuperAnt1Martes = parseInt($('#compraSuperAnt1Martes').val() || 0);
            var stockSuperMiercoles = parseInt((stockSuperMartes - ventaMediaS) + compraSuperAnt1Martes);
            var diasSuperMiercoles= ((stockSuperMiercoles - 500) / ventaMediaS).toFixed(1);
            $('#stockMiercolesS').html(stockSuperMiercoles);
            $('#diasMiercolesS').html(diasSuperMiercoles);
            $('#diasMiercolesS').val(diasSuperMiercoles);
            if ($("#diasMiercolesS").val() < 2){
                $("#diasMiercolesS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMiercolesS").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Miercoles = parseInt($('#compraSuperAnt1Miercoles').val() || 0);
            var stockSuperJueves = parseInt((stockSuperMiercoles - ventaMediaS) + compraSuperAnt1Miercoles);
            var diasSuperJueves= ((stockSuperJueves - 500) / ventaMediaS).toFixed(1);
            $('#stockJuevesS').html(stockSuperJueves);
            $('#diasJuevesS').html(diasSuperJueves);
            $('#diasJuevesS').val(diasSuperJueves);
            if ($("#diasJuevesS").val() < 2){
                $("#diasJuevesS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasJuevesS").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Jueves = parseInt($('#compraSuperAnt1Jueves').val() || 0);
            var stockSuperViernes = parseInt((stockSuperJueves - ventaMediaS) + compraSuperAnt1Jueves);
            var diasSuperViernes= ((stockSuperViernes - 500) / ventaMediaS).toFixed(1);
            $('#stockViernesS').html(stockSuperViernes);
            $('#diasViernesS').html(diasSuperViernes);
            $('#diasViernesS').val(diasSuperViernes);
            if ($("#diasViernesS").val() < 2){
                $("#diasViernesS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasViernesS").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Viernes = parseInt($('#compraSuperAnt1Viernes').val() || 0);
            var stockSuperSabado = parseInt((stockSuperViernes - ventaMediaS) + compraSuperAnt1Viernes);
            var diasSuperSabado = ((stockSuperSabado - 500) / ventaMediaS).toFixed(1);
            $('#stockSabadoS').html(stockSuperSabado);
            $('#diasSabadoS').html(diasSuperSabado);
            $('#diasSabadoS').val(diasSuperSabado);
            if ($("#diasSabadoS").val() < 2){
                $("#diasSabadoS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasSabadoS").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Sabado = parseInt($('#compraSuperAnt1Sabado').val() || 0);
            var stockSuperDomingo = parseInt((stockSuperSabado - ventaMediaS) + compraSuperAnt1Sabado);
            var diasSuperDomingo= ((stockSuperDomingo - 500) / ventaMediaS).toFixed(1);
            $('#stockDomingoS').html(stockSuperDomingo);
            $('#diasDomingoS').html(diasSuperDomingo);
            $('#diasDomingoS').val(diasSuperDomingo);
            if ($("#diasDomingoS").val() < 2){
                $("#diasDomingoS").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasDomingoS").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Domingo = parseInt($('#compraSuperAnt1Domingo').val() || 0);
            var stockSuperLunes2 = parseInt((stockSuperDomingo - ventaMediaS) + compraSuperAnt1Domingo);
            var diasSuperLunes2= ((stockSuperLunes2 - 500) / ventaMediaS).toFixed(1);
            $('#stockLunes2S').html(stockSuperLunes2);
            $('#diasLunes2S').html(diasSuperLunes2);
            $('#diasLunes2S').val(diasSuperLunes2);
            if ($("#diasLunes2S").val() < 2){
                $("#diasLunes2S").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasLunes2S").css({"color":"black", "font-size":"100%"});                
            };
            
            var compraSuperAnt1Lunes2 = parseInt($('#compraSuperAnt1Lunes2').val() || 0);
            var stockSuperMartes2 = parseInt((stockSuperLunes2 - ventaMediaS) + compraSuperAnt1Lunes2);
            var diasSuperMartes2= ((stockSuperMartes2 - 500) / ventaMediaS).toFixed(1);
            $('#stockMartes2S').html(stockSuperMartes2);
            $('#diasMartes2S').html(diasSuperMartes2);
            $('#diasMartes2S').val(diasSuperMartes2);
            if ($("#diasMartes2S").val() < 2){
                $("#diasMartes2S").css({"color":"red", "font-size":"120%"});                
            }else {
                $("#diasMartes2S").css({"color":"black", "font-size":"100%"});                
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
            $('#stockSabado').html(stockDieselSabadoAnt2);
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
            $('#stockSabado').html(stockDieselSabadoValgas);
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
        
        
        
       // $('#martescheck').change(function() {
         //   if($(this).is(":checked")) {
           //     $.ajax({
             //   method:"POST",
          //      url:"export.php",
            //    data: { martescheck: $("#martescheck").val()}
          //  })
                
          //      return;
          //  } 
        //});
        
        

      /*  $('#dias').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'POST',
            dataType: 'text',
            url: 'prueba.php',
            data: {martescheck:'1'},
            success: function () {
              alert('form was submitted');
            }
          });

        });*/
        
                
        
    });
  
  
  </script>
  
  </body>
</html>