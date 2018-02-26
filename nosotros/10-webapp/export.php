<?php
//header('Content-type: text/plain');
date_default_timezone_set('America/Bogota');
require("fpdf/fpdf.php");
$link = mysqli_connect("localhost", "luagasco_diario", "4muLnD74g)*{", "luagasco_pedidos");
    
    if (mysqli_connect_error()) {
        
        die ("DB Connection error");

    }
$query="SELECT * FROM `calculo` ORDER BY `id` DESC LIMIT 7";
$data = array();
$productos = mysqli_query($link, $query);

//while($i<=7){ 
//$productos2 = mysqli_fetch_assoc($productos);
while($row= mysqli_fetch_assoc($productos)){

$data[] = $row;
}

if (date('w') == 1){
$date = date('M d, Y', strtotime("today"));
$martes_f = date('d \d\e M \d\e\l Y', strtotime("next tuesday"));
$miercoles_f = date('d \d\e M \d\e\l Y', strtotime("next wednesday"));
$jueves_f = date('d \d\e M \d\e\l Y', strtotime("next thursday"));
$viernes_f = date('d \d\e M \d\e\l Y', strtotime("next friday"));
$sabado_f = date('d \d\e M \d\e\l Y', strtotime("next saturday"));
$domingo_f = date('d \d\e M \d\e\l Y', strtotime("next sunday"));
$lunes_f = date('d \d\e M \d\e\l Y', strtotime("next monday"));
} elseif (date('w')<1){
$date = date('M d, Y', strtotime("next monday"));
$martes_f = date('d \d\e M \d\e\l Y', strtotime("next tuesday"));
$miercoles_f = date('d \d\e M \d\e\l Y', strtotime("next wednesday"));
$jueves_f = date('d \d\e M \d\e\l Y', strtotime("next thursday"));
$viernes_f = date('d \d\e M \d\e\l Y', strtotime("next friday"));
$sabado_f = date('d \d\e M \d\e\l Y', strtotime("next saturday"));
$domingo_f = date('d \d\e M \d\e\l Y', strtotime("next sunday"));
$lunes_f = date('d \d\e M \d\e\l Y', strtotime("Monday + 1 week"));
} elseif (date('w')>1){
$date = date('M d, Y', strtotime("previous monday"));
$martes_f = date('d \d\e M \d\e\l Y', strtotime("tuesday"));
$miercoles_f = date('d \d\e M \d\e\l Y', strtotime("wednesday"));
$jueves_f = date('d \d\e M \d\e\l Y', strtotime("thursday"));
$viernes_f = date('d \d\e M \d\e\l Y', strtotime("friday"));
$sabado_f = date('d \d\e M \d\e\l Y', strtotime("saturday"));
$domingo_f = date('d \d\e M \d\e\l Y', strtotime("sunday"));
//$lunes_f = date('d \d\e M \d\e\l Y', strtotime("Monday + 1 week"));    
$lunes_f = date('d \d\e M \d\e\l Y', strtotime("next Monday"));    
}

//ANTURIOS II
$query2="SELECT * FROM `calculo_anturios` ORDER BY `id` DESC LIMIT 7";
$data2 = array();
$productos2 = mysqli_query($link, $query2);

//while($i<=7){ 
//$productos2 = mysqli_fetch_assoc($productos);
while($row2= mysqli_fetch_assoc($productos2)){

$data2[] = $row2;
}

//VALGAS
$query3="SELECT * FROM `calculo_valgas` ORDER BY `id` DESC LIMIT 7";
$data3 = array();
$productos3 = mysqli_query($link, $query3);

while($row3= mysqli_fetch_assoc($productos3)){

$data3[] = $row3;
}

//print_r ($data);


$pdf = new FPDF();

//$i = $dias;
//while ($i>=$min){
    
if (isset($_POST['martescheck'])){

if ($data[6]['comprad'] > 0 || $data[6]['comprae'] > 0 || $data[6]['compras'] > 0 || $data2[6]['comprad'] > 0 || $data2[6]['comprae'] > 0 || $data2[6]['compras'] > 0 || $data3[4]['comprad'] > 0 || $data3[4]['comprae'] > 0 || $data3[4]['compras'] > 0){
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(190,10,'Hello World!',1,1,'C');
$pdf->SetFont('Arial','',11);
$pdf->ln(8);
$pdf->Cell(100,8,'Santo Domingo, al '.date('d \d\e M \d\e\l Y'));
$pdf->ln(12);
$pdf->Cell(100,8,"Ing. Damaris Yela");
$pdf->ln(6);
$pdf->Cell(100,8,'JEFE DE VENTAS SUCURSAL SANTO DOMINGO');
$pdf->ln(12);
$pdf->Cell(190,8,'Yo, Rene Vinicio Arteaga Lalama con C.C. 1704173291, solicito a usted, muy cordialmente se sirva facturar');
$pdf->ln(6);
$pdf->Cell(190,8,'el siguiente pedido:');
$pdf->ln(12);
if ($data[6]['comprad'] > 0 || $data[6]['comprae'] > 0 || $data[6]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios I');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,8,'Codigo: 12010054');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data[6]['dia_semana'].", ".$martes_f);
$pdf->ln(5);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data[6]['dia_semana'].", ".$martes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data[6]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[6]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[6]['comprad']*0.992);
$pdf->ln(8);
}
if ($data[6]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[6]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[6]['comprae']*0.99);
$pdf->ln(8);
}
if ($data[6]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[6]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[6]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//ANTURIOS II
if ($data2[6]['comprad'] > 0 || $data2[6]['comprae'] > 0 || $data2[6]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios II');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,8,'Codigo: 12010543');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data2[6]['dia_semana'].", ".$martes_f);
$pdf->ln(5);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data2[6]['dia_semana'].", ".$martes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data2[6]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[6]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[6]['comprad']*0.992);
$pdf->ln(8);
}
if ($data2[6]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[6]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[6]['comprae']*0.99);
$pdf->ln(8);
}
if ($data2[6]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[6]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[6]['compras']*0.99);
$pdf->ln(8);
////$pdf->Cell(0,0,'',1);
}
}

//VALGAS
if ($data3[6]['comprad'] > 0 || $data3[6]['comprae'] > 0 || $data3[6]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Valgas');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,8,'Codigo: 12010526');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data3[6]['dia_semana'].", ".$martes_f);
$pdf->ln(5);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data3[6]['dia_semana'].", ".$martes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data3[6]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[6]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[6]['comprad']*0.992);
$pdf->ln(8);
}
if ($data3[6]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[6]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[6]['comprae']*0.99);
$pdf->ln(8);
}
if ($data3[6]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[6]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[6]['compras']*0.99);
$pdf->ln(8);
////$pdf->Cell(0,0,'',1);
}
}

//Footer
$pdf->SetFont('Arial','B',11);
$pdf->ln(6);
$pdf->Cell(100,8,'TRANSPORTE:');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,"Trasnportista:..........Javier Romero");
$pdf->ln(6);
$pdf->Cell(100,8,'Cedula de Ciudadania:...1714371448');
$pdf->ln(6);
$pdf->Cell(190,8,'Placa Autotanque:.......JAA-2250');
}   
} 
    
if (isset($_POST['miercolescheck'])){
 
if ($data[5]['comprad'] > 0 || $data[5]['comprae'] > 0 || $data[5]['compras'] > 0 || $data2[5]['comprad'] > 0 || $data2[5]['comprae'] > 0 || $data2[5]['compras'] > 0 || $data3[5]['comprad'] > 0 || $data3[5]['comprae'] > 0 || $data3[5]['compras'] > 0){ 
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(190,10,'Hello World!',1,1,'C');
$pdf->SetFont('Arial','',11);
$pdf->ln(8);
$pdf->Cell(100,8,'Santo Domingo, al '.date('d \d\e M \d\e\l Y'));
$pdf->ln(12);
$pdf->Cell(100,8,"Ing. Damaris Yela");
$pdf->ln(6);
$pdf->Cell(100,8,'JEFE DE VENTAS SUCURSAL SANTO DOMINGO');
$pdf->ln(12);
$pdf->Cell(190,8,'Yo, Rene Vinicio Arteaga Lalama con C.C. 1704173291, solicito a usted, muy cordialmente se sirva facturar');
$pdf->ln(6);
$pdf->Cell(190,8,'el siguiente pedido:');
$pdf->ln(12);
if ($data[5]['comprad'] > 0 || $data[5]['comprae'] > 0 || $data[5]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios I');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010054');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data[5]['dia_semana'].", ".$miercoles_f);
$pdf->ln(5);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data[5]['dia_semana'].", ".$miercoles_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data[5]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[5]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[5]['comprad']*0.992);
$pdf->ln(8);
}
if ($data[5]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[5]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[5]['comprae']*0.99);
$pdf->ln(8);
}
if ($data[5]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[5]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[5]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//ANTURIOS II
if ($data2[5]['comprad'] > 0 || $data2[5]['comprae'] > 0 || $data2[5]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios II');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010543');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data2[5]['dia_semana'].", ".$miercoles_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data2[5]['dia_semana'].", ".$miercoles_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data2[5]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[5]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[5]['comprad']*0.992);
$pdf->ln(8);
}
if ($data2[5]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[5]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[5]['comprae']*0.99);
$pdf->ln(8);
}
if ($data2[5]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[5]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[5]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}
//VALGAS
if ($data3[5]['comprad'] > 0 || $data3[5]['comprae'] > 0 || $data3[5]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Valgas');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010526');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data3[5]['dia_semana'].", ".$miercoles_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data3[5]['dia_semana'].", ".$miercoles_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data3[5]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[5]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[5]['comprad']*0.992);
$pdf->ln(8);
}
if ($data3[5]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[5]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[5]['comprae']*0.99);
$pdf->ln(8);
}
if ($data3[5]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[5]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[5]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//Footer
$pdf->SetFont('Arial','B',11);
$pdf->ln(6);
$pdf->Cell(100,8,'TRANSPORTE:');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,"Trasnportista:..........Javier Romero");
$pdf->ln(6);
$pdf->Cell(100,8,'Cedula de Ciudadania:...1714371448');
$pdf->ln(6);
$pdf->Cell(190,8,'Placa Autotanque:.......JAA-2250');
  
}
}    
    
if (isset($_POST['juevescheck'])){    
 
if ($data[4]['comprad'] > 0 || $data[4]['comprae'] > 0 || $data[4]['compras'] > 0 || $data2[4]['comprad'] > 0 || $data2[4]['comprae'] > 0 || $data2[4]['compras'] > 0 || $data3[4]['comprad'] > 0 || $data3[4]['comprae'] > 0 || $data3[4]['compras'] > 0){ 
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(190,10,'Hello World!',1,1,'C');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,'Santo Domingo, al '.date('d \d\e M \d\e\l Y'));
$pdf->ln(12);
$pdf->Cell(100,8,"Ing. Damaris Yela");
$pdf->ln(6);
$pdf->Cell(100,8,'JEFE DE VENTAS SUCURSAL SANTO DOMINGO');
$pdf->ln(12);
$pdf->Cell(190,8,'Yo, Rene Vinicio Arteaga Lalama con C.C. 1704173291, solicito a usted, muy cordialmente se sirva facturar');
$pdf->ln(6);
$pdf->Cell(190,8,'el siguiente pedido:');
$pdf->ln(12);
if ($data[4]['comprad'] > 0 || $data[4]['comprae'] > 0 || $data[4]['compras'] > 0){ 
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios I');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010054');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data[4]['dia_semana'].", ".$jueves_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data[4]['dia_semana'].", ".$jueves_f);
$pdf->ln(8);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data[4]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[4]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[4]['comprad']*0.992);
$pdf->ln(8);
}
if ($data[4]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[4]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[4]['comprae']*0.99);
$pdf->ln(8);
}
if ($data[4]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[4]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[4]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//ANTURIOS II 
if ($data2[4]['comprad'] > 0 || $data2[4]['comprae'] > 0 || $data2[4]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios II');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010543');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data2[4]['dia_semana'].", ".$jueves_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data2[4]['dia_semana'].", ".$jueves_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data2[4]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[4]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[4]['comprad']*0.992);
$pdf->ln(8);
}
if ($data2[4]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[4]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[4]['comprae']*0.99);
$pdf->ln(8);
}
if ($data2[4]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[4]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[4]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}
//Valgas 
if ($data3[4]['comprad'] > 0 || $data3[4]['comprae'] > 0 || $data3[4]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Valgas');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010526');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data3[4]['dia_semana'].", ".$jueves_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data3[4]['dia_semana'].", ".$jueves_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data3[4]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[4]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[4]['comprad']*0.992);
$pdf->ln(8);
}
if ($data3[4]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[4]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[4]['comprae']*0.99);
$pdf->ln(8);
}
if ($data3[4]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[4]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[4]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//Footer
$pdf->SetFont('Arial','B',11);
$pdf->ln(6);
$pdf->Cell(100,8,'TRANSPORTE:');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,"Trasnportista:..........Javier Romero");
$pdf->ln(6);
$pdf->Cell(100,8,'Cedula de Ciudadania:...1714371448');
$pdf->ln(6);
$pdf->Cell(190,8,'Placa Autotanque:.......JAA-2250');
}  
} 

 
if (isset($_POST['viernescheck'])){
    
if ($data[3]['comprad'] > 0 || $data[3]['comprae'] > 0 || $data[3]['compras'] > 0 || $data2[3]['comprad'] > 0 || $data2[3]['comprae'] > 0 || $data2[3]['compras'] > 0 || $data3[4]['comprad'] > 0 || $data3[4]['comprae'] > 0 || $data3[4]['compras'] > 0){
    
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(190,10,'Hello World!',1,1,'C');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,'Santo Domingo, al '.date('d \d\e M \d\e\l Y'));
$pdf->ln(12);
$pdf->Cell(100,8,"Ing. Damaris Yela");
$pdf->ln(6);
$pdf->Cell(100,8,'JEFE DE VENTAS SUCURSAL SANTO DOMINGO');
$pdf->ln(16);
$pdf->Cell(190,8,'Yo, Rene Vinicio Arteaga Lalama con C.C. 1704173291, solicito a usted, muy cordialmente se sirva facturar');
$pdf->ln(6);
$pdf->Cell(190,8,'el siguiente pedido:');
$pdf->ln(12);
if ($data[3]['comprad'] > 0 || $data[3]['comprae'] > 0 || $data[3]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios I');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010054');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data[3]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[3]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[3]['comprad']*0.992);
$pdf->ln(8);
}
if ($data[3]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[3]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[3]['comprae']*0.99);
$pdf->ln(8);
}
if ($data[3]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[3]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[3]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//ANTURIOS II
if ($data2[3]['comprad'] > 0 || $data2[3]['comprae'] > 0 || $data2[3]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios II');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010543');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data2[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data2[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data2[3]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[3]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[3]['comprad']*0.992);
$pdf->ln(8);
}
if ($data2[3]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[3]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[3]['comprae']*0.99);
$pdf->ln(8);
}
if ($data2[3]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[3]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[3]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//Valgas
if ($data3[3]['comprad'] > 0 || $data3[3]['comprae'] > 0 || $data3[3]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Valgas');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010526');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data3[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data3[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data3[3]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[3]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[3]['comprad']*0.992);
$pdf->ln(8);
}
if ($data3[3]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[3]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[3]['comprae']*0.99);
$pdf->ln(8);
}
if ($data3[3]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[3]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[3]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}
//$i=$i-1;
//}
//Footer
$pdf->SetFont('Arial','B',11);
$pdf->ln(6);
$pdf->Cell(100,8,'TRANSPORTE:');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,"Trasnportista:..........Javier Romero");
$pdf->ln(6);
$pdf->Cell(100,8,'Cedula de Ciudadania:...1714371448');
$pdf->ln(6);
$pdf->Cell(190,8,'Placa Autotanque:.......JAA-2250');
}   
}

if (isset($_POST['sabadocheck'])){
    
if ($data[2]['comprad'] > 0 || $data[2]['comprae'] > 0 || $data[2]['compras'] > 0 || $data2[2]['comprad'] > 0 || $data2[2]['comprae'] > 0 || $data2[2]['compras'] > 0 || $data3[4]['comprad'] > 0 || $data3[4]['comprae'] > 0 || $data3[4]['compras'] > 0){
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(190,10,'Hello World!',1,1,'C');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,'Santo Domingo, al '.date('d \d\e M \d\e\l Y'));
$pdf->ln(12);
$pdf->Cell(100,8,"Ing. Damaris Yela");
$pdf->ln(6);
$pdf->Cell(100,8,'JEFE DE VENTAS SUCURSAL SANTO DOMINGO');
$pdf->ln(12);
$pdf->Cell(190,8,'Yo, Rene Vinicio Arteaga Lalama con C.C. 1704173291, solicito a usted, muy cordialmente se sirva facturar');
$pdf->ln(6);
$pdf->Cell(190,8,'el siguiente pedido:');
$pdf->ln(12);
if ($data[2]['comprad'] > 0 || $data[2]['comprae'] > 0 || $data[2]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios I');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010054');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data[2]['dia_semana'].", ".$sabado_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data[2]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[2]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[2]['comprad']*0.992);
$pdf->ln(8);
}
if ($data[2]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[2]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[2]['comprae']*0.99);
$pdf->ln(8);
}
if ($data[2]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[2]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[2]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}


//ANTURIOS II
if ($data2[2]['comprad'] > 0 || $data2[2]['comprae'] > 0 || $data2[2]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios II');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010543');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data2[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data2[2]['dia_semana'].", ".$sabado_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data2[2]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[2]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[2]['comprad']*0.992);
$pdf->ln(12);
}
if ($data2[2]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[2]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[2]['comprae']*0.99);
$pdf->ln(8);
}
if ($data2[2]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[2]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[2]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}
//Valgas
if ($data3[2]['comprad'] > 0 || $data3[2]['comprae'] > 0 || $data3[2]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Valgas');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010526');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data3[3]['dia_semana'].", ".$viernes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data3[2]['dia_semana'].", ".$sabado_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data3[2]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[2]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[2]['comprad']*0.992);
$pdf->ln(12);
}
if ($data3[2]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[2]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[2]['comprae']*0.99);
$pdf->ln(8);
}
if ($data3[2]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[2]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[2]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}
//Footer
$pdf->SetFont('Arial','B',11);
$pdf->ln(6);
$pdf->Cell(100,8,'TRANSPORTE:');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,"Trasnportista:..........Javier Romero");
$pdf->ln(6);
$pdf->Cell(100,8,'Cedula de Ciudadania:...1714371448');
$pdf->ln(6);
$pdf->Cell(190,8,'Placa Autotanque:.......JAA-2250');
}   
}

if (isset($_POST['domingocheck'])){

if ($data[1]['comprad'] > 0 || $data[1]['comprae'] > 0 || $data[1]['compras'] > 0 || $data2[1]['comprad'] > 0 || $data2[1]['comprae'] > 0 || $data2[1]['compras'] > 0 || $data3[4]['comprad'] > 0 || $data3[4]['comprae'] > 0 || $data3[4]['compras'] > 0){
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(190,10,'Hello World!',1,1,'C');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,'Santo Domingo, al '.date('d \d\e M \d\e\l Y'));
$pdf->ln(12);
$pdf->Cell(100,8,"Ing. Damaris Yela");
$pdf->ln(6);
$pdf->Cell(100,8,'JEFE DE VENTAS SUCURSAL SANTO DOMINGO');
$pdf->ln(12);
$pdf->Cell(190,8,'Yo, Rene Vinicio Arteaga Lalama con C.C. 1704173291, solicito a usted, muy cordialmente se sirva facturar');
$pdf->ln(6);
$pdf->Cell(190,8,'el siguiente pedido:');
$pdf->ln(12);
if ($data[1]['comprad'] > 0 || $data[1]['comprae'] > 0 || $data[1]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios I');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010054');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data[1]['dia_semana'].", ".$domingo_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data[1]['dia_semana'].", ".$domingo_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data[1]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[1]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[1]['comprad']*0.992);
$pdf->ln(8);
}
if ($data[1]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[1]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[1]['comprae']*0.99);
$pdf->ln(8);
}
if ($data[1]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[1]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[1]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//ANTURIOS II
if ($data2[1]['comprad'] > 0 || $data2[1]['comprae'] > 0 || $data2[1]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios II');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010543');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data2[1]['dia_semana'].", ".$domingo_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data2[1]['dia_semana'].", ".$domingo_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data2[1]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[1]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[1]['comprad']*0.992);
$pdf->ln(8);
}
if ($data2[1]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[1]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[1]['comprae']*0.99);
$pdf->ln(8);
}
if ($data2[1]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[1]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[1]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}
//Valgas
if ($data3[1]['comprad'] > 0 || $data3[1]['comprae'] > 0 || $data3[1]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Valgas');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010526');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data3[1]['dia_semana'].", ".$domingo_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data3[1]['dia_semana'].", ".$domingo_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data3[1]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[1]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[1]['comprad']*0.992);
$pdf->ln(8);
}
if ($data3[1]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[1]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[1]['comprae']*0.99);
$pdf->ln(8);
}
if ($data3[1]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[1]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[1]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//Footer
$pdf->SetFont('Arial','B',11);
$pdf->ln(6);
$pdf->Cell(100,8,'TRANSPORTE:');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,"Trasnportista:..........Javier Romero");
$pdf->ln(6);
$pdf->Cell(100,8,'Cedula de Ciudadania:...1714371448');
$pdf->ln(6);
$pdf->Cell(190,8,'Placa Autotanque:.......JAA-2250');
}   
}

if (isset($_POST['lunescheck'])){

if ($data[0]['comprad'] > 0 || $data[0]['comprae'] > 0 || $data[0]['compras'] > 0 || $data2[0]['comprad'] > 0 || $data2[0]['comprae'] > 0 || $data2[0]['compras'] > 0 || $data3[4]['comprad'] > 0 || $data3[4]['comprae'] > 0 || $data3[4]['compras'] > 0){    
    $pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(190,10,'Hello World!',1,1,'C');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,'Santo Domingo, al '.date('d \d\e M \d\e\l Y'));
$pdf->ln(12);
$pdf->Cell(100,8,"Ing. Damaris Yela");
$pdf->ln(6);
$pdf->Cell(100,8,'JEFE DE VENTAS SUCURSAL SANTO DOMINGO');
$pdf->ln(12);
$pdf->Cell(190,8,'Yo, Rene Vinicio Arteaga Lalama con C.C. 1704173291, solicito a usted, muy cordialmente se sirva facturar');
$pdf->ln(6);
$pdf->Cell(190,8,'el siguiente pedido:');
$pdf->ln(12);
if ($data[0]['comprad'] > 0 || $data[0]['comprae'] > 0 || $data[0]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios I');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010054');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data[0]['dia_semana'].", ".$lunes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data[0]['dia_semana'].", ".$lunes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data[0]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[0]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[0]['comprad']*0.992);
$pdf->ln(12);
}
if ($data[0]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[0]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[0]['comprae']*0.99);
$pdf->ln(8);
}
if ($data[0]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data[0]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data[0]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//ANTURIOS II
if ($data2[0]['comprad'] > 0 || $data2[0]['comprae'] > 0 || $data2[0]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Anturios II');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010543');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data2[0]['dia_semana'].", ".$lunes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data2[0]['dia_semana'].", ".$lunes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data2[0]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[0]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[0]['comprad']*0.992);
$pdf->ln(8);
}
if ($data2[0]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[0]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[0]['comprae']*0.99);
$pdf->ln(8);
}
if ($data2[0]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data2[0]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data2[0]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}
//VALGAS
if ($data3[0]['comprad'] > 0 || $data3[0]['comprae'] > 0 || $data3[0]['compras'] > 0){
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,8,'Estacion de servicio: Valgas');
$pdf->ln(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(100,9,'Codigo: 12010526');
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Facturacion: '.$data3[0]['dia_semana'].", ".$lunes_f);
$pdf->ln(6);
$pdf->Cell(100,8,'Fecha de Despacho: '.$data3[0]['dia_semana'].", ".$lunes_f);
$pdf->ln(12);
$pdf->Cell(100,8,'PRODUCTOS:');
$pdf->ln(6);
if ($data3[0]['comprad'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[0]['claved']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: DIESEL PREMIUM");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0121");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[0]['comprad']*0.992);
$pdf->ln(8);
}
if ($data3[0]['comprae'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[0]['clavee']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: EXTRA");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0101");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[0]['comprae']*0.99);
$pdf->ln(8);
}
if ($data3[0]['compras'] > 0) {
$pdf->Cell(100,8,'Autorizacion electronica: '.$data3[0]['claves']);
$pdf->ln(6);
$pdf->Cell(100,8,"Producto: SUPER");
$pdf->ln(6);
$pdf->Cell(100,8,"Codigo: 0103");
$pdf->ln(6);
$pdf->Cell(100,8,"Cantidad: ".$data3[0]['compras']*0.99);
$pdf->ln(8);
//$pdf->Cell(0,0,'',1);
}
}

//Footer
$pdf->SetFont('Arial','B',11);
$pdf->ln(6);
$pdf->Cell(100,8,'TRANSPORTE:');
$pdf->SetFont('Arial','',11);
$pdf->ln(6);
$pdf->Cell(100,8,"Trasnportista:..........Javier Romero");
$pdf->ln(6);
$pdf->Cell(100,8,'Cedula de Ciudadania:...1714371448');
$pdf->ln(6);
$pdf->Cell(190,8,'Placa Autotanque:.......JAA-2250');
}
}
 
$pdf->Output();




?>