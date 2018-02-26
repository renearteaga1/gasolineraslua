<?php 

session_start();

if (isset($_POST['compradieselAnt1Lunes'], $_POST['stockDieselAnt1'], $_POST['ventaMedia'], $_POST['compradieselAnt1Martes'], $_POST['clavedieselAnt1Martes'], $_POST['compradieselAnt1Miercoles'], $_POST['clavedieselAnt1Miercoles'], $_POST['compradieselAnt1Jueves'], $_POST['clavedieselAnt1Jueves'], $_POST['compradieselAnt1Viernes'], $_POST['clavedieselAnt1Viernes'], $_POST['compradieselAnt1Sabado'], $_POST['clavedieselAnt1Sabado'], $_POST['compradieselAnt1Domingo'], $_POST['clavedieselAnt1Domingo'], $_POST['compradieselAnt1Lunes2'], $_POST['clavedieselAnt1Lunes2'], $_POST['compraExtraAnt1Lunes'], $_POST['stockExtraAnt1'], $_POST['ventaMediaE'], $_POST['compraExtraAnt1Martes'], $_POST['claveExtraAnt1Martes'], $_POST['compraExtraAnt1Miercoles'], $_POST['claveExtraAnt1Miercoles'], $_POST['compraExtraAnt1Jueves'], $_POST['claveExtraAnt1Jueves'], $_POST['compraExtraAnt1Viernes'], $_POST['claveExtraAnt1Viernes'], $_POST['compraExtraAnt1Sabado'], $_POST['claveExtraAnt1Sabado'], $_POST['compraExtraAnt1Domingo'], $_POST['claveExtraAnt1Domingo'], $_POST['compraExtraAnt1Lunes2'], $_POST['claveExtraAnt1Lunes2'], $_POST['compraSuperAnt1Lunes'], $_POST['stockSuperAnt1'], $_POST['ventaMediaS'], $_POST['compraSuperAnt1Martes'], $_POST['claveSuperAnt1Martes'], $_POST['compraSuperAnt1Miercoles'], $_POST['claveSuperAnt1Miercoles'], $_POST['compraSuperAnt1Jueves'], $_POST['claveSuperAnt1Jueves'], $_POST['compraSuperAnt1Viernes'], $_POST['claveSuperAnt1Viernes'], $_POST['compraSuperAnt1Sabado'], $_POST['claveSuperAnt1Sabado'], $_POST['compraSuperAnt1Domingo'], $_POST['claveSuperAnt1Domingo'], $_POST['compraSuperAnt1Lunes2'], $_POST['claveSuperAnt1Lunes2'])) {
    
    $link = mysqli_connect("localhost", "luagasco_diario", "4muLnD74g)*{", "luagasco_pedidos");
    
                    if (mysqli_connect_error()) {
        
                        die ("DB Connection error");

                    }
    // echo 'yes coneccionto';           
    //$query = "UPDATE `calculo` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselAnt1'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMedia'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes'])."', `comprad_martes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Martes'])."', `claved_martes` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Martes'])."', `comprad_miercoles` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Miercoles'])."', `claved_miercoles` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Miercoles'])."', `comprad_jueves` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Jueves'])."', `claved_jueves` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Jueves'])."', `comprad_viernes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Viernes'])."', `claved_viernes` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Viernes'])."', `comprad_sabado` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Sabado'])."', `claved_sabado` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Sabado'])."', `comprad_domingo` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Domingo'])."', `claved_domingo` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Domingo'])."', `comprad_lunes2` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes2'])."', `claved_lunes2` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Lunes2'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraAnt1'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaE'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes'])."', `comprae_martes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Martes'])."', `clavee_martes` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Martes'])."', `comprae_miercoles` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Miercoles'])."', `clavee_miercoles` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Miercoles'])."', `comprae_jueves` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Jueves'])."', `clavee_jueves` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Jueves'])."', `comprae_viernes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Viernes'])."', `clavee_viernes` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Viernes'])."', `comprae_sabado` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Sabado'])."', `clavee_sabado` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Sabado'])."', `comprae_domingo` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Domingo'])."', `clavee_domingo` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Domingo'])."', `comprae_lunes2` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes2'])."', `clavee_lunes2` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Lunes2'])."', `id_semana` = '".date('W')."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperAnt1'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaS'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes'])."', `compras_martes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Martes'])."', `claves_martes` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Martes'])."', `compras_miercoles` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Miercoles'])."', `claves_miercoles` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Miercoles'])."', `compras_jueves` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Jueves'])."', `claves_jueves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Jueves'])."', `compras_viernes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Viernes'])."', `claves_viernes` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Viernes'])."', `compras_sabado` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Sabado'])."', `claves_sabado` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Sabado'])."', `compras_domingo` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Domingo'])."', `claves_domingo` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Domingo'])."', `compras_lunes2` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes2'])."', `claves_lunes2` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Lunes2'])."' ORDER BY `id` DESC LIMIT 1";                
    //$query = "UPDATE `calculo` SET `stockd` = '1', `stocke` = '1' ORDER BY `id` DESC LIMIT 1";                
    $query = "UPDATE `calculo` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselAnt1'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMedia'])."', `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Martes'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Martes'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraAnt1'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaE'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Martes'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Martes'])."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperAnt1'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaS'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Martes'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Martes'])."' WHERE `dia_semana`='Martes' ORDER BY `id` DESC LIMIT 1";                
    mysqli_query($link, $query);

   // $query = "UPDATE `calculo` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselAnt1'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMedia'])."', `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Martes'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Martes'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraAnt1'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaE'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Martes'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Martes'])."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperAnt1'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaS'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Martes'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Martes'])."' WHERE `dia_semana`='Martes' ORDER BY `id` DESC LIMIT 1";
    
    $querym = "UPDATE `calculo` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Miercoles'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Miercoles'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Miercoles'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Miercoles'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Miercoles'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Miercoles'])."' WHERE `dia_semana`='Miercoles' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $querym);
    
    $queryj = "UPDATE `calculo` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Jueves'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Jueves'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Jueves'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Jueves'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Jueves'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Jueves'])."' WHERE `dia_semana`='Jueves' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryj);
    
    $queryv = "UPDATE `calculo` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Viernes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Viernes'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Viernes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Viernes'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Viernes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Viernes'])."' WHERE `dia_semana`='Viernes' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryv);
    
    $querys = "UPDATE `calculo` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Sabado'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Sabado'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Sabado'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Sabado'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Sabado'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Sabado'])."' WHERE `dia_semana`='Sabado' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $querys);
    
    $queryd = "UPDATE `calculo` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Domingo'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Domingo'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Domingo'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Domingo'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Domingo'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Domingo'])."' WHERE `dia_semana`='Domingo' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryd);
    
    $queryl2 = "UPDATE `calculo` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes2'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Lunes2'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes2'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Lunes2'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes2'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Lunes2'])."' WHERE `dia_semana`='Lunes' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryl2);
    
    //echo 'query done';
    //echo mysqli_real_escape_string($link, $_POST['stockDieselAnt1']);
     
    $calstockdiad = $_POST['compradieselAnt1Lunes'] + $_POST['stockDieselAnt1'] - $_POST['ventaMedia'] ;
    
    $caldiad = ($calstockdiad - 500) / $_POST['ventaMedia'];  
    
    $query2 = "UPDATE `calculo` SET `stockdiad` = '".$calstockdiad."', `diasd` = '".$caldiad."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query2);
    
    $calstockMiercoles = $_POST['compradieselAnt1Martes'] +  $calstockdiad - $_POST['ventaMedia'] ;
    
    $caldiasMiercoles = ($calstockMiercoles - 500) / $_POST['ventaMedia'];
    
    $querymd = "UPDATE `calculo` SET `stockdiad` = '".$calstockMiercoles."', `diasd` = '".$caldiasMiercoles."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querymd);
    
    $calstockJueves = $_POST['compradieselAnt1Miercoles'] + $calstockMiercoles - $_POST['ventaMedia'] ;
    
    $caldiasJueves = ($calstockJueves - 500) / $_POST['ventaMedia'];
    
    $queryjd = "UPDATE `calculo` SET `stockdiad` = '".$calstockJueves."', `diasd` = '".$caldiasJueves."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryjd);
    
    $calstockViernes = $_POST['compradieselAnt1Jueves'] + $calstockJueves - $_POST['ventaMedia'] ;
    
    $caldiasViernes = ($calstockViernes - 500) / $_POST['ventaMedia'];
    
    $queryvd = "UPDATE `calculo` SET `stockdiad` = '".$calstockViernes."', `diasd` = '".$caldiasViernes."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryvd);
    
    $calstockSabado = $_POST['compradieselAnt1Viernes'] + $calstockViernes - $_POST['ventaMedia'] ;
    
    $caldiasSabado = ($calstockSabado - 500) / $_POST['ventaMedia'];
    
    $querysd = "UPDATE `calculo` SET `stockdiad` = '".$calstockSabado."', `diasd` = '".$caldiasSabado."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querysd);
    
    $calstockDomingo = $_POST['compradieselAnt1Sabado'] + $calstockSabado - $_POST['ventaMedia'] ;
    
    $caldiasDomingo = ($calstockDomingo - 500) / $_POST['ventaMedia'];
    
    $querydd = "UPDATE `calculo` SET `stockdiad` = '".$calstockDomingo."', `diasd` = '".$caldiasDomingo."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querydd);
    
    $calstockLunes2 = $_POST['compradieselAnt1Domingo'] + $calstockDomingo - $_POST['ventaMedia'] ;
    
    $caldiasLunes2 = ($calstockLunes2 - 500) / $_POST['ventaMedia'];
    
    $queryl2d = "UPDATE `calculo` SET `stockdiad` = '".$calstockLunes2."', `diasd` = '".$caldiasLunes2."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryl2d);
    
    $calstockMartes2 = $_POST['compradieselAnt1Lunes2'] + $calstockLunes2 - $_POST['ventaMedia'] ;
    
    $caldiasMartes2 = ($calstockMartes2 - 500) / $_POST['ventaMedia'];
    
    $querym2d = "UPDATE `calculo` SET `stockd_martes2` = '".$calstockMartes2."', `diasd_martes2` = '".$caldiasMartes2."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querym2d);
    
    
    
    //EXTRA
    
    $calstockMartesE = $_POST['compraExtraAnt1Lunes'] + $_POST['stockExtraAnt1'] - $_POST['ventaMediaE'] ;
    
    $caldiasMartesE = ($calstockMartesE - 500) / $_POST['ventaMediaE'];
    
    $query3 = "UPDATE `calculo` SET `stockdiae` = '".$calstockMartesE."', `diase` = '".$caldiasMartesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query3);
    
    $calstockMiercolesE = $_POST['compraExtraAnt1Martes'] +  $calstockMartesE - $_POST['ventaMediaE'] ;
    
    $caldiasMiercolesE = ($calstockMiercolesE - 500) / $_POST['ventaMediaE'];
    
    $queryme = "UPDATE `calculo` SET `stockdiae` = '".$calstockMiercolesE."', `diase` = '".$caldiasMiercolesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryme);
    
    $calstockJuevesE = $_POST['compraExtraAnt1Miercoles'] + $calstockMiercolesE - $_POST['ventaMediaE'] ;
    
    $caldiasJuevesE = ($calstockJuevesE - 500) / $_POST['ventaMediaE'];
    
    $queryje = "UPDATE `calculo` SET `stockdiae` = '".$calstockJuevesE."', `diase` = '".$caldiasJuevesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryje);
    
    $calstockViernesE = $_POST['compraExtraAnt1Jueves'] + $calstockJuevesE - $_POST['ventaMedia'] ;
    
    $caldiasViernesE = ($calstockViernesE - 500) / $_POST['ventaMediaE'];
    
    $queryve = "UPDATE `calculo` SET `stockdiae` = '".$calstockViernesE."', `diase` = '".$caldiasViernesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryve);
    
    $calstockSabadoE = $_POST['compraExtraAnt1Viernes'] + $calstockViernesE - $_POST['ventaMediaE'] ;
    
    $caldiasSabadoE = ($calstockSabadoE - 500) / $_POST['ventaMediaE'];
    
    $queryse = "UPDATE `calculo` SET `stockdiae` = '".$calstockSabadoE."', `diase` = '".$caldiasSabadoE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryse);
    
    $calstockDomingoE = $_POST['compraExtraAnt1Sabado'] + $calstockSabadoE - $_POST['ventaMediaE'] ;
    
    $caldiasDomingoE = ($calstockDomingoE - 500) / $_POST['ventaMediaE'];
    
    $queryde = "UPDATE `calculo` SET `stockdiae` = '".$calstockDomingoE."', `diase` = '".$caldiasDomingoE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryde);
    
    $calstockLunes2E = $_POST['compraExtraAnt1Domingo'] + $calstockDomingoE - $_POST['ventaMediaE'] ;
    
    $caldiasLunes2E = ($calstockLunes2E - 500) / $_POST['ventaMediaE'];
    
    $queryle = "UPDATE `calculo` SET `stockdiae` = '".$calstockLunes2E."', `diase` = '".$caldiasLunes2E."', `extra` = 'EXTRA'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryle);
    
    $calstockMartes2E = $_POST['compraExtraAnt1Lunes2'] + $calstockLunes2E - $_POST['ventaMediaE'] ;
    
    $caldiasMartes2E = ($calstockMartes2E - 500) / $_POST['ventaMediaE'];
    
    $querym2e = "UPDATE `calculo` SET `stocke_martes2` = '".$calstockMartes2E."', `diase_martes2` = '".$caldiasMartes2E."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querym2e);
    
    //SUPER
    
    $calstockMartesS = $_POST['compraSuperAnt1Lunes'] + $_POST['stockSuperAnt1'] - $_POST['ventaMediaS'] ;
    
    $caldiasMartesS = ($calstockMartesS - 500) / $_POST['ventaMediaS'];
    
    $query4 = "UPDATE `calculo` SET `stockdias` = '".$calstockMartesS."', `diass` = '".$caldiasMartesS."', `super` = 'SUPER'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query4);
    
    $calstockMiercolesS = $_POST['compraSuperAnt1Martes'] +  $calstockMartesS - $_POST['ventaMediaS'] ;
    
    $caldiasMiercolesS = ($calstockMiercolesS - 500) / $_POST['ventaMediaS'];
    
    $queryms = "UPDATE `calculo` SET `stockdias` = '".$calstockMiercolesS."', `diass` = '".$caldiasMiercolesS."', `super` = 'SUPER'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryms);
    
    $calstockJuevesS = $_POST['compraSuperAnt1Miercoles'] + $calstockMiercolesS - $_POST['ventaMediaS'] ;
    
    $caldiasJuevesS = ($calstockJuevesS - 500) / $_POST['ventaMediaS'];
    
    $queryjs = "UPDATE `calculo` SET `stockdias` = '".$calstockJuevesS."', `diass` = '".$caldiasJuevesS."', `super` = 'SUPER'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryjs);
    
    $calstockViernesS = $_POST['compraSuperAnt1Jueves'] + $calstockJuevesS - $_POST['ventaMediaS'] ;
    
    $caldiasViernesS = ($calstockViernesS - 500) / $_POST['ventaMediaS'];
    
    $queryvs = "UPDATE `calculo` SET `stockdias` = '".$calstockViernesS."', `diass` = '".$caldiasViernesS."', `super` = 'SUPER'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryvs);
    
    $calstockSabadoS = $_POST['compraSuperAnt1Viernes'] + $calstockViernesS - $_POST['ventaMediaS'] ;
    
    $caldiasSabadoS = ($calstockSabadoS - 500) / $_POST['ventaMediaS'];
    
    $queryss = "UPDATE `calculo` SET `stockdias` = '".$calstockSabadoS."', `diass` = '".$caldiasSabadoS."', `super` = 'SUPER'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryss);
    
    $calstockDomingoS = $_POST['compraSuperAnt1Sabado'] + $calstockSabadoS - $_POST['ventaMediaS'] ;
    
    $caldiasDomingoS = ($calstockDomingoS - 500) / $_POST['ventaMediaS'];
    
    $queryds = "UPDATE `calculo` SET `stockdias` = '".$calstockDomingoS."', `diass` = '".$caldiasDomingoS."', `super` = 'SUPER'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryds);
    
    $calstockLunes2S = $_POST['compraSuperAnt1Domingo'] + $calstockDomingoS - $_POST['ventaMediaS'] ;
    
    $caldiasLunes2S = ($calstockLunes2S - 500) / $_POST['ventaMediaS'];
    
    $queryls = "UPDATE `calculo` SET `stockdias` = '".$calstockLunes2S."', `diass` = '".$caldiasLunes2S."', `super` = 'SUPER'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryls);
    
    $calstockMartes2S = $_POST['compraSuperAnt1Lunes2'] + $calstockLunes2S - $_POST['ventaMediaS'] ;
    
    $caldiasMartes2S = ($calstockMartes2S - 500) / $_POST['ventaMediaS'];
    
    $querym2s = "UPDATE `calculo` SET `stocks_martes2` = '".$calstockMartes2S."', `diass_martes2` = '".$caldiasMartes2S."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querym2s);
    
   //$arr = array('calstockMartes' => "$calstockMartes", 'caldiasMartes' => "$caldiasMartes");
    
    
    
    //$query2 = "UPDATE `calculo` SET `stockdiasd` = '".$calstockMartes."', `diasd_martes` = '".$caldiasMartes."', `stockd_miercoles` = '".$calstockMiercoles."', `diasd_miercoles` = '".$caldiasMiercoles."', `stockd_jueves` = '".$calstockJueves."', `diasd_jueves` = '".$caldiasJueves."', `stockd_viernes` = '".$calstockViernes."', `diasd_viernes` = '".$caldiasViernes."', `stockd_sabado` = '".$calstockSabado."', `diasd_sabado` = '".$caldiasSabado."', `stockd_domingo` = '".$calstockDomingo."', `diasd_domingo` = '".$caldiasDomingo."', `stockd_lunes2` = '".$calstockLunes2."', `diasd_lunes2` = '".$caldiasLunes2."', `stockd_martes2` = '".$calstockMartes2."', `diasd_martes2` = '".$caldiasMartes2."', `stocke_martes` = '".$calstockMartesE."', `diase_martes` = '".$caldiasMartesE."', `stocke_miercoles` = '".$calstockMiercolesE."', `diase_miercoles` = '".$caldiasMiercolesE."', `stocke_jueves` = '".$calstockJuevesE."', `diase_jueves` = '".$caldiasJuevesE."', `stocke_viernes` = '".$calstockViernesE."', `diase_viernes` = '".$caldiasViernesE."', `stocke_sabado` = '".$calstockSabadoE."', `diase_sabado` = '".$caldiasSabadoE."', `stocke_domingo` = '".$calstockDomingoE."', `diase_domingo` = '".$caldiasDomingoE."', `stocke_lunes2` = '".$calstockLunes2E."', `diase_lunes2` = '".$caldiasLunes2E."', `stocke_martes2` = '".$calstockMartes2E."', `diase_martes2` = '".$caldiasMartes2E."', `stocks_martes` = '".$calstockMartesS."', `diass_martes` = '".$caldiasMartesS."', `stocks_miercoles` = '".$calstockMiercolesS."', `diass_miercoles` = '".$caldiasMiercolesS."', `stocks_jueves` = '".$calstockJuevesS."', `diass_jueves` = '".$caldiasJuevesS."', `stocks_viernes` = '".$calstockViernesS."', `diass_viernes` = '".$caldiasViernesS."', `stocks_sabado` = '".$calstockSabadoS."', `diass_sabado` = '".$caldiasSabadoS."', `stocks_domingo` = '".$calstockDomingoS."', `diass_domingo` = '".$caldiasDomingoS."', `stocks_lunes2` = '".$calstockLunes2S."', `diass_lunes2` = '".$caldiasLunes2S."', `stocks_martes2` = '".$calstockMartes2S."', `diass_martes2` = '".$caldiasMartes2S."' ORDER BY `id` DESC LIMIT 1";                

   // mysqli_query($link, $query2);
    
    //echo $calstockMartes;
    
    
}
//$caldiasMartes = (100 - 500) / 10 ;

//echo $caldiasMartes;
//$caldiasMartes = ($_POST['stockDieselAnt1'] - 500) / $_POST['ventaMedia'] ;
 
 
?>