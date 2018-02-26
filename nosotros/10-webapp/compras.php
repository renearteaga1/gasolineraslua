<?php 
date_default_timezone_set('America/Bogota');
$error = "";
$ErrorUser = "";
$ErrorPassword = "";

/* $query = "SELECT id FROM `users` WHERE usuario = 'Rene Arteaga' LIMIT 1";        

            $result = "1";
                     

                    $query = "UPDATE `users` SET password = '".md5(md5("Dasa"))."' WHERE id = ".$result." LIMIT 1 ";

                    
                    mysqli_query($link, $query); */
                

include 'yes.php';
$date = date('M d, Y', strtotime("previous monday"));

?>

<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <!-- Required meta tags -->
    
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
    
    .table th {
        padding-left:1px;
        padding-right:1px;
        
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
   
    <form class='form-group' id='calculo1'>
   <table class="table table-bordered">
  
  <thead>
    <tr>
      <th colspan='2'><?php echo $date; ?></th>
      
      <th class='lunes2'>Lunes</th>
      <th colspan='1' class='martes'>Martes</th>
      <th colspan='1' class='miercoles'>Miercoles</th>
      <th colspan='1' class='jueves'>Jueves</th>
      <th colspan='1' class='viernes'>Viernes</th>
      <th colspan='1' class='sabado'>Sabado</th>
      <th colspan='1' class='domingo'>Domingo</th>
      <th colspan='1' class='lunes'>Lunes</th>
      <th colspan='1' class='displayIni martes2'>Martes</th>
    </tr>
  </thead>
  
  <thead>
    <tr>
      <th>E/S</th>
      <th class='displayIni linea'>Capacidad Total</th>
      <th></th>
      <th class="displayIni stockLunes2Titulo red linea">Stock</th>
      <th class='displayIni ventaMediaTitulo pato linea'>Venta Media</th>
      <th class='celeste linea'>Compra</th>
      <th class="stockMartesTitulo displayIni red linea">Stock </th>
      <th class='diasMartesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockMiercolesTitulo displayIni red linea'>Stock </th>
      <th class='diasMiercolesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockJuevesTitulo displayIni red linea'>Stock </th>
      <th class='diasJuevesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockViernesTitulo displayIni red linea'>Stock </th>
      <th class='diasViernesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockSabadoTitulo displayIni red linea'>Stock </th>
      <th class='diasSabadoTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockDomingoTitulo displayIni red linea'>Stock </th>
      <th class='diasDomingoTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockLunesTitulo displayIni red linea'>Stock </th>
      <th class='diasLunesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockLunesTitulo displayIni red linea'>Stock </th>
      <th class='diasLunesTitulo displayIni pato linea'>Dias</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th class='estacion'  rowspan="3">
      <div style="width: 5em; overflow:auto; padding-left: 2px; padding-rigth: 2px;"><!-- Change height of row-->
      Anturios 1
      </div>
      </th>
      <td class='displayIni'>10 000</td>
      
    <td id='diesel'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Diesel
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockDieselAnt1">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato'id="ventadieselAnt1">
    
 </td>
    <td class='inputData celeste'  id="compradieselAnt1Lunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartes'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartes'></td>
    <td class='inputData celeste' id="compradieselAnt1Martes">
   
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercoles'></td>
    <td class='diasMiercolesTitulo displayIni pato'id='diasMiercoles'></td>
    <td class='inputData celeste' id="compradieselAnt1Miercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJueves'></td>
    <td class='diasJuevesTitulo displayIni pato' id='diasJueves'></td>
    <td class='inputData celeste' id="compradieselAnt1Jueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernes'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernes'></td>
    <td class='inputData celeste' id="compradieselAnt1Viernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabado'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabado'></td>
    <td class='inputData celeste' id="compradieselAnt1Sabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingo'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingo'></td>
    <td class='inputData celeste' id="compradieselAnt1Domingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2'></td>
    <td class='inputData celeste' id="compradieselAnt1Lunes2">
    
    <td class='stockLunesTitulo displayIni red' id='stockMartes2'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2'></td>
    
    </tr>
      <tr>
      <td class='displayIni'>10 000</td>
      
    <td id='extra'>
     <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Extra
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockExtraAnt1">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato' id="ventaExtraAnt1">
    
 </td>
    <td class='inputData celeste' id="compraExtraAnt1Lunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartesE'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartesE'></td>
    <td class='inputData celeste' id="compraExtraAnt1Martes">
    
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercolesE'></td>
    <td class='diasMiercolesTitulo displayIni pato' id='diasMiercolesE'></td>
    <td class='inputData celeste' id="compraExtraAnt1Miercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJuevesE'></td>
    <td class='diasJuevesTitulo displayIni pato' id='diasJuevesE'></td>
    <td class='inputData celeste' id="compraExtraAnt1Jueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernesE'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernesE'></td>
    <td class='inputData celeste' id="compraExtraAnt1Viernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabadoE'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabadoE'></td>
    <td class='inputData celeste' id="compraExtraAnt1Sabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingoE'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingoE'></td>
    <td class='inputData celeste'  id="compraExtraAnt1Domingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2E'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2E'></td>
    <td class='inputData celeste' id="compraExtraAnt1Lunes2">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockMartes2E'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2E'></td>
    
    </tr>
   
   <tr>
      <td class='displayIni'>10 000</td>
      
    <td id='super'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Super
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockSuperAnt1">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato' id="ventaSuperAnt1">
    
 </td>
    <td class='inputData celeste' id="compraSuperAnt1Lunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartesS'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartesS'></td>
    <td class='inputData celeste' id="compraSuperAnt1Martes">
    
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercolesS'></td>
    <td class='diasMiercolesTitulo displayIni pato' id='diasMiercolesS'></td>
    <td class='inputData celeste' id="compraSuperAnt1Miercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJuevesS'></td>
    <td class='diasJuevesTitulo displayIni pato'id='diasJuevesS'></td>
    <td class='inputData celeste' id="compraSuperAnt1Jueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernesS'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernesS'></td>
    <td class='inputData celeste' id="compraSuperAnt1Viernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabadoS'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabadoS'></td>
    <td class='inputData celeste' id="compraSuperAnt1Sabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingoS'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingoS'></td>
    <td class='inputData celeste' id="compraSuperAnt1Domingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2S'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2S'></td>
    <td class='inputData celeste' id="compraSuperAnt1Lunes2">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockMartes2S'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2S'></td>
    
    </tr>
   
  </tbody>
  
  </table>
  
  </form>
  

</div>

<!-- ANTURIOS II -->

<div class='container-fluid' id="calendario">
   
    <form class='form-group' id='calculo1'>
   <table class="table table-bordered">
  
  
  
  <thead>
    <tr>
      <th>E/S</th>
      <th class='displayIni linea'>Capacidad Total</th>
      <th></th>
      <th class="displayIni stockLunes2Titulo red linea">Stock</th>
      <th class='displayIni ventaMediaTitulo pato linea'>Venta Media</th>
      <th class='celeste linea'>Compra</th>
      <th class="stockMartesTitulo displayIni red linea">Stock </th>
      <th class='diasMartesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockMiercolesTitulo displayIni red linea'>Stock </th>
      <th class='diasMiercolesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockJuevesTitulo displayIni red linea'>Stock </th>
      <th class='diasJuevesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockViernesTitulo displayIni red linea'>Stock </th>
      <th class='diasViernesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockSabadoTitulo displayIni red linea'>Stock </th>
      <th class='diasSabadoTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockDomingoTitulo displayIni red linea'>Stock </th>
      <th class='diasDomingoTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockLunesTitulo displayIni red linea'>Stock </th>
      <th class='diasLunesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockLunesTitulo displayIni red linea'>Stock </th>
      <th class='diasLunesTitulo displayIni pato linea'>Dias</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th class='estacion'  rowspan="3">
      <div style="width: 5em; overflow:auto; padding-left: 2px; padding-rigth: 2px;"><!-- Change height of row-->
      Anturios II
      </div>
      </th>
      <td class='displayIni'>20 000 </td>
      
    <td id='diesel'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Diesel
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockDieselAnt2">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato'id="ventadieselAnt2">
    
 </td>
    <td class='inputData celeste'  id="compradieselAnt2Lunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartesAnt2'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartesAnt2'></td>
    <td class='inputData celeste' id="compradieselAnt2Martes">
   
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercolesAnt2'></td>
    <td class='diasMiercolesTitulo displayIni pato'id='diasMiercolesAnt2'></td>
    <td class='inputData celeste' id="compradieselAnt2Miercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJuevesAnt2'></td>
    <td class='diasJuevesTitulo displayIni pato' id='diasJuevesAnt2'></td>
    <td class='inputData celeste' id="compradieselAnt2Jueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernesAnt2'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernesAnt2'></td>
    <td class='inputData celeste' id="compradieselAnt2Viernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabadoAnt2'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabadoAnt2'></td>
    <td class='inputData celeste' id="compradieselAnt2Sabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingoAnt2'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingoAnt2'></td>
    <td class='inputData celeste' id="compradieselAnt2Domingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2Ant2'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2Ant2'></td>
    <td class='inputData celeste' id="compradieselAnt2Lunes2">
    
    <td class='stockLunesTitulo displayIni red' id='stockMartes2Ant2'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2Ant2'></td>
    
    </tr>
      <tr>
      <td class='displayIni'>16 000</td>
      
    <td id='extra'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Extra
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockExtraAnt2">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato' id="ventaExtraAnt2">
    
 </td>
    <td class='inputData celeste' id="compraExtraAnt2Lunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartesEAnt2'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartesEAnt2'></td>
    <td class='inputData celeste' id="compraExtraAnt2Martes">
    
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercolesEAnt2'></td>
    <td class='diasMiercolesTitulo displayIni pato' id='diasMiercolesEAnt2'></td>
    <td class='inputData celeste' id="compraExtraAnt2Miercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJuevesEAnt2'></td>
    <td class='diasJuevesTitulo displayIni pato' id='diasJuevesEAnt2'></td>
    <td class='inputData celeste' id="compraExtraAnt2Jueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernesEAnt2'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernesEAnt2'></td>
    <td class='inputData celeste' id="compraExtraAnt2Viernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabadoEAnt2'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabadoEAnt2'></td>
    <td class='inputData celeste' id="compraExtraAnt2Sabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingoEAnt2'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingoEAnt2'></td>
    <td class='inputData celeste'  id="compraExtraAnt2Domingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2EAnt2'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2EAnt2'></td>
    <td class='inputData celeste' id="compraExtraAnt2Lunes2">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockMartes2EAnt2'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2EAnt2'></td>
    
    </tr>
   
   <tr>
      <td class='displayIni'>10 000</td>
      
    <td id='super'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Super
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockSuperAnt2">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato' id="ventaSuperAnt2">
    
 </td>
    <td class='inputData celeste' id="compraSuperAnt2Lunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartesSAnt2'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartesSAnt2'></td>
    <td class='inputData celeste' id="compraSuperAnt2Martes">
    
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercolesSAnt2'></td>
    <td class='diasMiercolesTitulo displayIni pato' id='diasMiercolesSAnt2'></td>
    <td class='inputData celeste' id="compraSuperAnt2Miercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJuevesSAnt2'></td>
    <td class='diasJuevesTitulo displayIni pato'id='diasJuevesSAnt2'></td>
    <td class='inputData celeste' id="compraSuperAnt2Jueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernesSAnt2'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernesSAnt2'></td>
    <td class='inputData celeste' id="compraSuperAnt2Viernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabadoSAnt2'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabadoSAnt2'></td>
    <td class='inputData celeste' id="compraSuperAnt2Sabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingoSAnt2'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingoSAnt2'></td>
    <td class='inputData celeste' id="compraSuperAnt2Domingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2SAnt2'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2SAnt2'></td>
    <td class='inputData celeste' id="compraSuperAnt2Lunes2">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockMartes2SAnt2'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2SAnt2'></td>
    
    </tr>
   
  </tbody>
  
  </table>
  
  </form>
  

</div>
 
 
<!-- VALGAS -->

<div class='container-fluid' id="calendario">
   
    <form class='form-group' id='calculo1'>
   <table class="table table-bordered">
  
  
  
  <thead>
    <tr>
      <th>E/S</th>
      <th class='displayIni linea'>Capacidad Total</th>
      <th></th>
      <th class="displayIni stockLunes2Titulo red linea">Stock</th>
      <th class='displayIni ventaMediaTitulo pato linea'>Venta Media</th>
      <th class='celeste linea'>Compra</th>
      <th class="stockMartesTitulo displayIni red linea">Stock </th>
      <th class='diasMartesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockMiercolesTitulo displayIni red linea'>Stock </th>
      <th class='diasMiercolesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockJuevesTitulo displayIni red linea'>Stock </th>
      <th class='diasJuevesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockViernesTitulo displayIni red linea'>Stock </th>
      <th class='diasViernesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockSabadoTitulo displayIni red linea'>Stock </th>
      <th class='diasSabadoTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockDomingoTitulo displayIni red linea'>Stock </th>
      <th class='diasDomingoTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockLunesTitulo displayIni red linea'>Stock </th>
      <th class='diasLunesTitulo displayIni pato linea'>Dias</th>
      <th class='celeste linea'>Compras</th>
      <th class='stockLunesTitulo displayIni red linea'>Stock </th>
      <th class='diasLunesTitulo displayIni pato linea'>Dias</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th class='estacion'  rowspan="3">
      <div style="width: 5em; overflow:auto; padding-left: 2px; padding-rigth: 2px;"><!-- Change height of row-->
      Valgas
      </div>
      </th>
      <td class='displayIni'>16 000 </td>
      
    <td id='diesel'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Diesel
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockDieselValgas">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato'id="ventadieselValgas">
    
 </td>
    <td class='inputData celeste'  id="compradieselValgasLunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartesValgas'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartesValgas'></td>
    <td class='inputData celeste' id="compradieselValgasMartes">
   
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercolesValgas'></td>
    <td class='diasMiercolesTitulo displayIni pato'id='diasMiercolesValgas'></td>
    <td class='inputData celeste' id="compradieselValgasMiercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJuevesValgas'></td>
    <td class='diasJuevesTitulo displayIni pato' id='diasJuevesValgas'></td>
    <td class='inputData celeste' id="compradieselValgasJueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernesValgas'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernesValgas'></td>
    <td class='inputData celeste' id="compradieselValgasViernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabadoValgas'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabadoValgas'></td>
    <td class='inputData celeste' id="compradieselValgasSabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingoValgas'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingoValgas'></td>
    <td class='inputData celeste' id="compradieselValgasDomingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2Valgas'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2Valgas'></td>
    <td class='inputData celeste' id="compradieselValgasLunes2">
    
    <td class='stockLunesTitulo displayIni red' id='stockMartes2Valgas'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2Valgas'></td>
    
    </tr>
      <tr>
      <td class='displayIni'>16 000</td>
      
    <td id='extra'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row--> 
    Extra
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockExtraValgas">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato' id="ventaExtraValgas">
    
 </td>
    <td class='inputData celeste' id="compraExtraValgasLunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartesEValgas'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartesEValgas'></td>
    <td class='inputData celeste' id="compraExtraValgasMartes">
    
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercolesEValgas'></td>
    <td class='diasMiercolesTitulo displayIni pato' id='diasMiercolesEValgas'></td>
    <td class='inputData celeste' id="compraExtraValgasMiercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJuevesEValgas'></td>
    <td class='diasJuevesTitulo displayIni pato' id='diasJuevesEValgas'></td>
    <td class='inputData celeste' id="compraExtraValgasJueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernesEValgas'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernesEValgas'></td>
    <td class='inputData celeste' id="compraExtraValgasViernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabadoEValgas'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabadoEValgas'></td>
    <td class='inputData celeste' id="compraExtraValgasSabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingoEValgas'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingoEValgas'></td>
    <td class='inputData celeste'  id="compraExtraValgasDomingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2EValgas'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2EValgas'></td>
    <td class='inputData celeste' id="compraExtraValgasLunes2">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockMartes2EValgas'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2EValgas'></td>
    
    </tr>
   
   <tr>
      <td class='displayIni'>10 000</td>
      
    <td id='super'>
    <div style="height: 2em; overflow:auto; padding-left: 2px;"><!-- Change height of row-->
    Super
    </div>
    </td>
    <td class='inputData displayIni stockLunes2Titulo red' id="stockSuperValgas">
    
 </td>
      <td class='inputData displayIni ventaMediaTitulo pato' id="ventaSuperValgas">
    
 </td>
    <td class='inputData celeste' id="compraSuperValgasLunes">
    
    </td>
    <td class='stockMartesTitulo displayIni red' id='stockMartesSValgas'></td>
    <td class='diasMartesTitulo displayIni pato' id='diasMartesSValgas'></td>
    <td class='inputData celeste' id="compraSuperValgasMartes">
    
    </td>
    <td class='stockMiercolesTitulo displayIni red' id='stockMiercolesSValgas'></td>
    <td class='diasMiercolesTitulo displayIni pato' id='diasMiercolesSValgas'></td>
    <td class='inputData celeste' id="compraSuperValgasMiercoles">
    
    </td>
    <td class='stockJuevesTitulo displayIni red' id='stockJuevesSValgas'></td>
    <td class='diasJuevesTitulo displayIni pato'id='diasJuevesSValgas'></td>
    <td class='inputData celeste' id="compraSuperValgasJueves">
    
    </td>
    <td class='stockViernesTitulo displayIni red' id='stockViernesSValgas'></td>
    <td class='diasViernesTitulo displayIni pato' id='diasViernesSValgas'></td>
    <td class='inputData celeste' id="compraSuperValgasViernes">
    
    </td>
    <td class='stockSabadoTitulo displayIni red' id='stockSabadoSValgas'></td>
    <td class='diasSabadoTitulo displayIni pato' id='diasSabadoSValgas'></td>
    <td class='inputData celeste' id="compraSuperValgasSabado">
    
    </td>
    <td class='stockDomingoTitulo displayIni red' id='stockDomingoSValgas'></td>
    <td class='diasDomingoTitulo displayIni pato' id='diasDomingoSValgas'></td>
    <td class='inputData celeste' id="compraSuperValgasDomingo">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockLunes2SValgas'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasLunes2SValgas'></td>
    <td class='inputData celeste' id="compraSuperValgasLunes2">
    
    </td>
    <td class='stockLunesTitulo displayIni red' id='stockMartes2SValgas'></td>
    <td class='diasLunesTitulo displayIni pato' id='diasMartes2SValgas'></td>
    
    </tr>
   
  </tbody>
  
  </table>
  
  </form>
  

</div> 
 

<div><?php echo $error; ?></div>



<div class='container'>

<!-- Button trigger modal -->
<button type="submit" class="btn btn-primary" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal">
<i class="fa fa-pencil" aria-hidden="true"></i>Edit
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-around">
<div class="">
  <form method='post'>
  
  <div class="form-group">
    <label>Usuario</label>
    <input type="text" class="form-control" id="user" name='user' placeholder="Usuario" autocomplete="off">
  </div>
 
  
  <div class="form-group">
    <label>Contraseña</label>
    <input type="password" class="form-control" id="password" name='password' placeholder="Contraseña" autocomplete="off">
  </div>
 
  
</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name='submit' id="submit" class="btn btn-primary">Entrar</button>
      </div>
    </form>
    </div>
  </div>
</div>
</div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
  <script type='text/javascript'>
  
    function callReady() {
        $.ajax({
                //method:"GET",
                url:"read.php",
                type: "GET",
                
                dataType: "json",                                            
                success: function(data){
                    //info = data[i].id;
                    //console.log(data[0].id);
                    $('#stockMartes').html(data[6].stockd_martes);
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselAnt1')).html(data[6].stockd);
                   $(('#ventadieselAnt1')).html(data[6].ventad_media);
                   $(('#compradieselAnt1Lunes')).html(data[6].comprad_lunes);
                   $('#stockMartes').html(data[6].stockdiad);
                   $(('#diasMartes')).html(data[6].diasd);
                   $(('#diasMartes')).val(parseInt(data[6].diasd));
                   $(('#compradieselAnt1Martes')).html(data[6].comprad);
                   $('#stockMiercoles').html(data[5].stockdiad);
                   $(('#diasMiercoles')).html(data[5].diasd);
                   $(('#diasMiercoles')).val(data[5].diasd);
                   $(('#compradieselAnt1Miercoles')).html(data[5].comprad);
                   $('#stockJueves').html(data[4].stockdiad);
                   $(('#diasJueves')).html(data[4].diasd);
                   $(('#diasJueves')).val(data[4].diasd);
                   $(('#compradieselAnt1Jueves')).html(data[4].comprad);
                   $('#stockViernes').html(data[3].stockdiad);
                   $(('#diasViernes')).html(data[3].diasd);
                   $(('#diasViernes')).val(data[3].diasd);
                   $(('#compradieselAnt1Viernes')).html(data[3].comprad);
                   $('#stockSabado').html(data[2].stockdiad);
                   $(('#diasSabado')).html(data[2].diasd);
                   $(('#diasSabado')).val(data[2].diasd);
                   $(('#compradieselAnt1Sabado')).html(data[2].comprad);
                   $('#stockDomingo').html(data[1].stockdiad);
                   $(('#diasDomingo')).html(data[1].diasd);
                   $(('#diasDomingo')).val(data[1].diasd);
                   $(('#compradieselAnt1Domingo')).html(data[1].comprad);
                   $('#stockLunes2').html(data[0].stockdiad);
                   $(('#diasLunes2')).html(data[0].diasd);
                   $(('#diasLunes2')).val(data[0].diasd);
                   $(('#compradieselAnt1Lunes2')).html(data[0].comprad);
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
                   $(('#stockExtraAnt1')).html(data[6].stocke);
                   $(('#ventaExtraAnt1')).html(data[6].ventae_media);
                   $(('#compraExtraAnt1Lunes')).html(data[6].comprae_lunes);                  
                   $('#stockMartesE').html(data[6].stockdiae);
                   $(('#diasMartesE')).html(data[6].diase);
                   $(('#diasMartesE')).val(data[6].diase);
                   $(('#compraExtraAnt1Martes')).html(data[6].comprae);
                   $('#stockMiercolesE').html(data[5].stockdiae);
                   $(('#diasMiercolesE')).html(data[5].diase);
                   $(('#diasMiercolesE')).val(data[5].diase);
                   $(('#compraExtraAnt1Miercoles')).html(data[5].comprae);
                   $('#stockJuevesE').html(data[4].stockdiae);
                   $(('#diasJuevesE')).html(data[4].diase);
                   $(('#diasJuevesE')).val(data[4].diase);
                   $(('#compraExtraAnt1Jueves')).html(data[4].comprae);
                   $('#stockViernesE').html(data[3].stockdiae);
                   $(('#diasViernesE')).html(data[3].diase);
                   $(('#diasViernesE')).val(data[3].diase);
                   $(('#compraExtraAnt1Viernes')).html(data[3].comprae);
                   $('#stockSabadoE').html(data[2].stockdiae);
                   $(('#diasSabadoE')).html(data[2].diase);
                   $(('#diasSabadoE')).val(data[2].diase);
                   $(('#compraExtraAnt1Sabado')).html(data[2].comprae);
                   $('#stockDomingoE').html(data[1].stockdiae);
                   $(('#diasDomingoE')).html(data[1].diase);
                   $(('#diasDomingoE')).val(data[1].diase);
                   $(('#compraExtraAnt1Domingo')).html(data[1].comprae);
                   $('#stockLunes2E').html(data[0].stockdiae);
                   $(('#diasLunes2E')).html(data[0].diase);
                   $(('#diasLunes2E')).val(data[0].diase);
                   $(('#compraExtraAnt1Lunes2')).html(data[0].comprae);
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
                   $(('#stockSuperAnt1')).html(data[6].stocks);
                   $(('#ventaSuperAnt1')).html(data[6].ventas_media);
                   $(('#compraSuperAnt1Lunes')).html(data[6].compras_lunes);                  
                   $('#stockMartesS').html(data[6].stocks);
                   $(('#diasMartesS')).html(data[6].diass);
                   $(('#diasMartesS')).val(data[6].diass);
                   $(('#compraSuperAnt1Martes')).html(data[6].compras);
                   $('#stockMiercolesS').html(data[5].stockdias);
                   $(('#diasMiercolesS')).html(data[5].diass);
                   $(('#diasMiercolesS')).val(data[5].diass);
                   $(('#compraSuperAnt1Miercoles')).html(data[5].compras);
                   $('#stockJuevesS').html(data[4].stockdias);
                   $(('#diasJuevesS')).html(data[4].diass);
                   $(('#diasJuevesS')).val(data[4].diass);
                   $(('#compraSuperAnt1Jueves')).html(data[4].compras);
                   $('#stockViernesS').html(data[3].stockdias);
                   $(('#diasViernesS')).html(data[3].diass);
                   $(('#diasViernesS')).val(data[3].diass);
                   $(('#compraSuperAnt1Viernes')).html(data[3].compras);
                   $('#stockSabadoS').html(data[2].stockdias);
                   $(('#diasSabadoS')).html(data[2].diass);
                   $(('#diasSabadoS')).val(data[2].diass);
                   $(('#compraSuperAnt1Sabado')).html(data[2].compras);
                   $('#stockDomingoS').html(data[1].stockdias);
                   $(('#diasDomingoS')).html(data[1].diass);
                   $(('#diasDomingoS')).val(data[1].diass);
                   $(('#compraSuperAnt1Domingo')).html(data[1].compras);
                   $('#stockLunes2S').html(data[0].stockdias);
                   $(('#diasLunes2S')).html(data[0].diass);
                   $(('#diasLunes2S')).val(data[0].diass);
                   $(('#compraSuperAnt1Lunes2')).html(data[0].compras);
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
                    $('#stockMartesAnt2').html(data[6].stockd_martes);
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselAnt2')).html(data[6].stockd);
                   $(('#ventadieselAnt2')).html(data[6].ventad_media);
                   $(('#compradieselAnt2Lunes')).html(data[6].comprad_lunes);
                   $('#stockMartesAnt2').html(data[6].stockdiad);
                   $(('#diasMartesAnt2')).html(data[6].diasd);
                   $(('#diasMartesAnt2')).val(parseInt(data[6].diasd));
                   $(('#compradieselAnt2Martes')).html(data[6].comprad);
                   $(('#clavedieselAnt2Martes')).html(data[6].claved);
                   $('#stockMiercolesAnt2').html(data[5].stockdiad);
                   $(('#diasMiercolesAnt2')).html(data[5].diasd);
                   $(('#diasMiercolesAnt2')).val(data[5].diasd);
                   $(('#compradieselAnt2Miercoles')).html(data[5].comprad);
                   $(('#clavedieselAnt2Miercoles')).html(data[5].claved);
                   $('#stockJuevesAnt2').html(data[4].stockdiad);
                   $(('#diasJuevesAnt2')).html(data[4].diasd);
                   $(('#diasJuevesAnt2')).val(data[4].diasd);
                   $(('#compradieselAnt2Jueves')).html(data[4].comprad);
                   $(('#clavedieselAnt2Jueves')).html(data[4].claved);
                   $('#stockViernesAnt2').html(data[3].stockdiad);
                   $(('#diasViernesAnt2')).html(data[3].diasd);
                   $(('#diasViernesAnt2')).val(data[3].diasd);
                   $(('#compradieselAnt2Viernes')).html(data[3].comprad);
                   $(('#clavedieselAnt2Viernes')).html(data[3].claved);
                   $('#stockSabadoAnt2').html(data[2].stockdiad);
                   $(('#diasSabadoAnt2')).html(data[2].diasd);
                   $(('#diasSabadoAnt2')).val(data[2].diasd);
                   $(('#compradieselAnt2Sabado')).html(data[2].comprad);
                   $(('#clavedieselAnt2Sabado')).html(data[2].claved);
                   $('#stockDomingoAnt2').html(data[1].stockdiad);
                   $(('#diasDomingoAnt2')).html(data[1].diasd);
                   $(('#diasDomingoAnt2')).val(data[1].diasd);
                   $(('#compradieselAnt2Domingo')).html(data[1].comprad);
                   $(('#clavedieselAnt2Domingo')).html(data[1].claved);
                   $('#stockLunes2Ant2').html(data[0].stockdiad);
                   $(('#diasLunes2Ant2')).html(data[0].diasd);
                   $(('#diasLunes2Ant2')).val(data[0].diasd);
                   $(('#compradieselAnt2Lunes2')).html(data[0].comprad);
                   $(('#clavedieselAnt2Lunes2')).html(data[0].claved);
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
                   $(('#stockExtraAnt2')).html(data[6].stocke);
                   $(('#ventaExtraAnt2')).html(data[6].ventae_media);
                   $(('#compraExtraAnt2Lunes')).html(data[6].comprae_lunes);                  
                   $('#stockMartesEAnt2').html(data[6].stockdiae);
                   $(('#diasMartesEAnt2')).html(data[6].diase);
                   $(('#diasMartesEAnt2')).val(data[6].diase);
                   $(('#compraExtraAnt2Martes')).html(data[6].comprae);
                   $(('#claveExtraAnt2Martes')).html(data[6].clavee);
                   $('#stockMiercolesEAnt2').html(data[5].stockdiae);
                   $(('#diasMiercolesEAnt2')).html(data[5].diase);
                   $(('#diasMiercolesEAnt2')).val(data[5].diase);
                   $(('#compraExtraAnt2Miercoles')).html(data[5].comprae);
                   $(('#claveExtraAnt2Miercoles')).html(data[5].clavee);
                   $('#stockJuevesEAnt2').html(data[4].stockdiae);
                   $(('#diasJuevesEAnt2')).html(data[4].diase);
                   $(('#diasJuevesEAnt2')).val(data[4].diase);
                   $(('#compraExtraAnt2Jueves')).html(data[4].comprae);
                   $(('#claveExtraAnt2Jueves')).html(data[4].clavee);
                   $('#stockViernesEAnt2').html(data[3].stockdiae);
                   $(('#diasViernesEAnt2')).html(data[3].diase);
                   $(('#diasViernesEAnt2')).val(data[3].diase);
                   $(('#compraExtraAnt2Viernes')).html(data[3].comprae);
                   $(('#claveExtraAnt2Viernes')).html(data[3].clavee);
                   $('#stockSabadoEAnt2').html(data[2].stockdiae);
                   $(('#diasSabadoEAnt2')).html(data[2].diase);
                   $(('#diasSabadoEAnt2')).val(data[2].diase);
                   $(('#compraExtraAnt2Sabado')).html(data[2].comprae);
                   $(('#claveExtraAnt2Sabado')).html(data[2].clavee);
                   $('#stockDomingoEAnt2').html(data[1].stockdiae);
                   $(('#diasDomingoEAnt2')).html(data[1].diase);
                   $(('#diasDomingoEAnt2')).val(data[1].diase);
                   $(('#compraExtraAnt2Domingo')).html(data[1].comprae);
                   $(('#claveExtraAnt2Domingo')).html(data[1].clavee);
                   $('#stockLunes2EAnt2').html(data[0].stockdiae);
                   $(('#diasLunes2EAnt2')).html(data[0].diase);
                   $(('#diasLunes2EAnt2')).val(data[0].diase);
                   $(('#compraExtraAnt2Lunes2')).html(data[0].comprae);
                   $(('#claveExtraAnt2Lunes2')).html(data[0].clavee);
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
                   $(('#stockSuperAnt2')).html(data[6].stocks);
                   $(('#ventaSuperAnt2')).html(data[6].ventas_media);
                   $(('#compraSuperAnt2Lunes')).html(data[6].compras_lunes);                  
                   $('#stockMartesSAnt2').html(data[6].stocks);
                   $(('#diasMartesSAnt2')).html(data[6].diass);
                   $(('#diasMartesSAnt2')).val(data[6].diass);
                   $(('#compraSuperAnt2Martes')).html(data[6].compras);
                   $(('#claveSuperAnt2Martes')).html(data[6].claves);
                   $('#stockMiercolesSAnt2').html(data[5].stockdias);
                   $(('#diasMiercolesSAnt2')).html(data[5].diass);
                   $(('#diasMiercolesSAnt2')).val(data[5].diass);
                   $(('#compraSuperAnt2Miercoles')).html(data[5].compras);
                   $(('#claveSuperAnt2Miercoles')).html(data[5].claves);
                   $('#stockJuevesSAnt2').html(data[4].stockdias);
                   $(('#diasJuevesSAnt2')).html(data[4].diass);
                   $(('#diasJuevesSAnt2')).val(data[4].diass);
                   $(('#compraSuperAnt2Jueves')).html(data[4].compras);
                   $(('#claveSuperAnt2Jueves')).html(data[4].claves);
                   $('#stockViernesSAnt2').html(data[3].stockdias);
                   $(('#diasViernesSAnt2')).html(data[3].diass);
                   $(('#diasViernesSAnt2')).val(data[3].diass);
                   $(('#compraSuperAnt2Viernes')).html(data[3].compras);
                   $(('#claveSuperAnt2Viernes')).html(data[3].claves);
                   $('#stockSabadoSAnt2').html(data[2].stockdias);
                   $(('#diasSabadoSAnt2')).html(data[2].diass);
                   $(('#diasSabadoSAnt2')).val(data[2].diass);
                   $(('#compraSuperAnt2Sabado')).html(data[2].compras);
                   $(('#claveSuperAnt2Sabado')).html(data[2].claves);
                   $('#stockDomingoSAnt2').html(data[1].stockdias);
                   $(('#diasDomingoSAnt2')).html(data[1].diass);
                   $(('#diasDomingoSAnt2')).val(data[1].diass);
                   $(('#compraSuperAnt2Domingo')).html(data[1].compras);
                   $(('#claveSuperAnt2Domingo')).html(data[1].claves);
                   $('#stockLunes2SAnt2').html(data[0].stockdias);
                   $(('#diasLunes2SAnt2')).html(data[0].diass);
                   $(('#diasLunes2SAnt2')).val(data[0].diass);
                   $(('#compraSuperAnt2Lunes2')).html(data[0].compras);
                   $(('#claveSuperAnt2Lunes2')).html(data[0].claves);
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
                    //console.log(data[0].id);
                    $('#stockMartesValgas').html(data[6].stockd_martes);
                    //$('#diasMartes').html(dia);
                   // $('#diasMartes').val(dia);
                   $(('#stockDieselValgas')).html(data[6].stockd);
                   $(('#ventadieselValgas')).html(data[6].ventad_media);
                   $(('#compradieselValgasLunes')).html(data[6].comprad_lunes);
                   $('#stockMartesValgas').html(data[6].stockdiad);
                   $(('#diasMartesValgas')).html(data[6].diasd);
                   $(('#diasMartesValgas')).val(parseInt(data[6].diasd));
                   $(('#compradieselValgasMartes')).html(data[6].comprad);
                   $(('#clavedieselValgasMartes')).html(data[6].claved);
                   $('#stockMiercolesValgas').html(data[5].stockdiad);
                   $(('#diasMiercolesValgas')).html(data[5].diasd);
                   $(('#diasMiercolesValgas')).val(data[5].diasd);
                   $(('#compradieselValgasMiercoles')).html(data[5].comprad);
                   $(('#clavedieselValgasMiercoles')).html(data[5].claved);
                   $('#stockJuevesValgas').html(data[4].stockdiad);
                   $(('#diasJuevesValgas')).html(data[4].diasd);
                   $(('#diasJuevesValgas')).val(data[4].diasd);
                   $(('#compradieselValgasJueves')).html(data[4].comprad);
                   $(('#clavedieselValgasJueves')).html(data[4].claved);
                   $('#stockViernesValgas').html(data[3].stockdiad);
                   $(('#diasViernesValgas')).html(data[3].diasd);
                   $(('#diasViernesValgas')).val(data[3].diasd);
                   $(('#compradieselValgasViernes')).html(data[3].comprad);
                   $(('#clavedieselValgasViernes')).html(data[3].claved);
                   $('#stockSabadoValgas').html(data[2].stockdiad);
                   $(('#diasSabadoValgas')).html(data[2].diasd);
                   $(('#diasSabadoValgas')).val(data[2].diasd);
                   $(('#compradieselValgasSabado')).html(data[2].comprad);
                   $(('#clavedieselValgasSabado')).html(data[2].claved);
                   $('#stockDomingoValgas').html(data[1].stockdiad);
                   $(('#diasDomingoValgas')).html(data[1].diasd);
                   $(('#diasDomingoValgas')).val(data[1].diasd);
                   $(('#compradieselValgasDomingo')).html(data[1].comprad);
                   $(('#clavedieselValgasDomingo')).html(data[1].claved);
                   $('#stockLunes2Valgas').html(data[0].stockdiad);
                   $(('#diasLunes2Valgas')).html(data[0].diasd);
                   $(('#diasLunes2Valgas')).val(data[0].diasd);
                   $(('#compradieselValgasLunes2')).html(data[0].comprad);
                   $(('#clavedieselValgasLunes2')).html(data[0].claved);
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
                   $(('#stockExtraValgas')).html(data[6].stocke);
                   $(('#ventaExtraValgas')).html(data[6].ventae_media);
                   $(('#compraExtraValgasLunes')).html(data[6].comprae_lunes);                  
                   $('#stockMartesEValgas').html(data[6].stockdiae);
                   $(('#diasMartesEValgas')).html(data[6].diase);
                   $(('#diasMartesEValgas')).val(data[6].diase);
                   $(('#compraExtraValgasMartes')).html(data[6].comprae);
                   $(('#claveExtraValgasMartes')).html(data[6].clavee);
                   $('#stockMiercolesEValgas').html(data[5].stockdiae);
                   $(('#diasMiercolesEValgas')).html(data[5].diase);
                   $(('#diasMiercolesEValgas')).val(data[5].diase);
                   $(('#compraExtraValgasMiercoles')).html(data[5].comprae);
                   $(('#claveExtraValgasMiercoles')).html(data[5].clavee);
                   $('#stockJuevesEValgas').html(data[4].stockdiae);
                   $(('#diasJuevesEValgas')).html(data[4].diase);
                   $(('#diasJuevesEValgas')).val(data[4].diase);
                   $(('#compraExtraValgasJueves')).html(data[4].comprae);
                   $(('#claveExtraValgasJueves')).html(data[4].clavee);
                   $('#stockViernesEValgas').html(data[3].stockdiae);
                   $(('#diasViernesEValgas')).html(data[3].diase);
                   $(('#diasViernesEValgas')).val(data[3].diase);
                   $(('#compraExtraValgasViernes')).html(data[3].comprae);
                   $(('#claveExtraValgasViernes')).html(data[3].clavee);
                   $('#stockSabadoEValgas').html(data[2].stockdiae);
                   $(('#diasSabadoEValgas')).html(data[2].diase);
                   $(('#diasSabadoEValgas')).val(data[2].diase);
                   $(('#compraExtraValgasSabado')).html(data[2].comprae);
                   $(('#claveExtraValgasSabado')).html(data[2].clavee);
                   $('#stockDomingoEValgas').html(data[1].stockdiae);
                   $(('#diasDomingoEValgas')).html(data[1].diase);
                   $(('#diasDomingoEValgas')).val(data[1].diase);
                   $(('#compraExtraValgasDomingo')).html(data[1].comprae);
                   $(('#claveExtraValgasDomingo')).html(data[1].clavee);
                   $('#stockLunes2EValgas').html(data[0].stockdiae);
                   $(('#diasLunes2EValgas')).html(data[0].diase);
                   $(('#diasLunes2EValgas')).val(data[0].diase);
                   $(('#compraExtraValgasLunes2')).html(data[0].comprae);
                   $(('#claveExtraValgasLunes2')).html(data[0].clavee);
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
                   $(('#stockSuperValgas')).html(data[6].stocks);
                   $(('#ventaSuperValgas')).html(data[6].ventas_media);
                   $(('#compraSuperValgasLunes')).html(data[6].compras_lunes);                  
                   $('#stockMartesSValgas').html(data[6].stocks);
                   $(('#diasMartesSValgas')).html(data[6].diass);
                   $(('#diasMartesSValgas')).val(data[6].diass);
                   $(('#compraSuperValgasMartes')).html(data[6].compras);
                   $(('#claveSuperValgasMartes')).html(data[6].claves);
                   $('#stockMiercolesSValgas').html(data[5].stockdias);
                   $(('#diasMiercolesSValgas')).html(data[5].diass);
                   $(('#diasMiercolesSValgas')).val(data[5].diass);
                   $(('#compraSuperValgasMiercoles')).html(data[5].compras);
                   $(('#claveSuperValgasMiercoles')).html(data[5].claves);
                   $('#stockJuevesSValgas').html(data[4].stockdias);
                   $(('#diasJuevesSValgas')).html(data[4].diass);
                   $(('#diasJuevesSValgas')).val(data[4].diass);
                   $(('#compraSuperValgasJueves')).html(data[4].compras);
                   $(('#claveSuperValgasJueves')).html(data[4].claves);
                   $('#stockViernesSValgas').html(data[3].stockdias);
                   $(('#diasViernesSValgas')).html(data[3].diass);
                   $(('#diasViernesSValgas')).val(data[3].diass);
                   $(('#compraSuperValgasViernes')).html(data[3].compras);
                   $(('#claveSuperValgasViernes')).html(data[3].claves);
                   $('#stockSabadoSValgas').html(data[2].stockdias);
                   $(('#diasSabadoSValgas')).html(data[2].diass);
                   $(('#diasSabadoSValgas')).val(data[2].diass);
                   $(('#compraSuperValgasSabado')).html(data[2].compras);
                   $(('#claveSuperValgasSabado')).html(data[2].claves);
                   $('#stockDomingoSValgas').html(data[1].stockdias);
                   $(('#diasDomingoSValgas')).html(data[1].diass);
                   $(('#diasDomingoSValgas')).val(data[1].diass);
                   $(('#compraSuperValgasDomingo')).html(data[1].compras);
                   $(('#claveSuperValgasDomingo')).html(data[1].claves);
                   $('#stockLunes2SValgas').html(data[0].stockdias);
                   $(('#diasLunes2SValgas')).html(data[0].diass);
                   $(('#diasLunes2SValgas')).val(data[0].diass);
                   $(('#compraSuperValgasLunes2')).html(data[0].compras);
                   $(('#claveSuperValgasLunes2')).html(data[0].claves);
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
        
    };
  
    $(document).ready(function() {
        
        callReady();
        
  
        $(".martes").click(function(){
           if ($(".stockMartesTitulo").css('display') !== 'none'){
           $('.stockMartesTitulo').hide();
           $(".diasMartesTitulo").hide();
           $('.martes').attr('colspan', 1);
           
           } else {
                $('.stockMartesTitulo').show();
                $(".diasMartesTitulo").show();
               $('.martes').attr('colspan', 3);           
           };
        });

        $(".miercoles").click(function(){
           if ($(".stockMiercolesTitulo").css('display') !== 'none'){
           $('.stockMiercolesTitulo').hide();
           $(".diasMiercolesTitulo").hide();
           $('.miercoles').attr('colspan', 1);
           
           } else {
                $('.stockMiercolesTitulo').show();
                $(".diasMiercolesTitulo").show();
               $('.miercoles').attr('colspan', 3);           
           };
        });
        
        $(".jueves").click(function(){
           if ($(".stockJuevesTitulo").css('display') !== 'none'){
           $('.stockJuevesTitulo').hide();
           $(".diasJuevesTitulo").hide();
           $('.jueves').attr('colspan', 1);
           
           } else {
                $('.stockJuevesTitulo').show();
                $(".diasJuevesTitulo").show();
               $('.jueves').attr('colspan', 3);           
           };
        });
        
        $(".viernes").click(function(){
           if ($(".stockViernesTitulo").css('display') !== 'none'){
           $('.stockViernesTitulo').hide();
           $(".diasViernesTitulo").hide();
           $('.viernes').attr('colspan', 1);
           
           } else {
                $('.stockViernesTitulo').show();
                $(".diasViernesTitulo").show();
               $('.viernes').attr('colspan', 3);           
           };
        });
        
        $(".sabado").click(function(){
           if ($(".stockSabadoTitulo").css('display') !== 'none'){
           $('.stockSabadoTitulo').hide();
           $(".diasSabadoTitulo").hide();
           $('.sabado').attr('colspan', 1);
           
           } else {
                $('.stockSabadoTitulo').show();
                $(".diasSabadoTitulo").show();
               $('.sabado').attr('colspan', 3);           
           };
        });
        
        $(".domingo").click(function(){
           if ($(".stockDomingoTitulo").css('display') !== 'none'){
           $('.stockDomingoTitulo').hide();
           $(".diasDomingoTitulo").hide();
           $('.domingo').attr('colspan', 1);
           
           } else {
                $('.stockDomingoTitulo').show();
                $(".diasDomingoTitulo").show();
               $('.domingo').attr('colspan', 3);           
           };
        });
        
        $(".lunes").click(function(){
           if ($(".stockLunesTitulo").css('display') !== 'none'){
           $('.stockLunesTitulo').hide();
           $(".diasLunesTitulo").hide();
           $(".martes2").hide(); 
           $('.lunes').attr('colspan', 1);
           
           } else {
                $('.stockLunesTitulo').show();
                $(".diasLunesTitulo").show();
                $(".martes2").show();
                $(".martes2").attr('colspan',2);
                $('.lunes').attr('colspan', 3);           
           };
        });
        
        $(".lunes2").click(function(){
           if ($(".stockLunes2Titulo").css('display') !== 'none'){
           $('.stockLunes2Titulo').hide();
           $(".ventaMediaTitulo").hide();              
           $('.lunes2').attr('colspan', 1);
           
           } else {
                $('.stockLunes2Titulo').show();
                $(".ventaMediaTitulo").show();               
               $('.lunes2').attr('colspan', 3);           
           };
        });
        
        $(".martes2").click(function(){
           if ($(".stockLunesTitulo").css('display') !== 'none'){
           $('.stockLunesTitulo').hide();
           $(".diasLunesTitulo").hide();
           $('.lunes').attr('colspan', 1);
           
           } else {
                $('.stockLunesTitulo').show();
                $(".diasLunesTitulo").show();
               $('.lunes').attr('colspan', 3);           
           };
        });
                          
            
        
        $(".guardar").click(function(){
           
            $("#compradieselAnt1Lunes").attr("readonly", true);
        });
        
        $('#myModal').on('shown.bs.modal', function () {
          $('#user').focus()
        });
               
        $("#edit").click(function() {
            $("#dialog").css("display", "block");
            $("#calendario").hide();
            $("#edit-btn").hide();
            
        });
        
        $("#cancel").click(function(){            
            $("#dialog").css('display', 'none');
            $("#calendario").show();
            $("#edit-btn").show();
        });    

 
 
        
    });
  
  
  </script>
  
  </body>
</html>