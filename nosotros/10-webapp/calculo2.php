<?php 

session_start();

if (isset($_POST['compradieselAnt2Lunes'], $_POST['stockDieselAnt2'], $_POST['ventaMediaAnt2'], $_POST['compradieselAnt2Martes'], $_POST['clavedieselAnt2Martes'], $_POST['compradieselAnt2Miercoles'], $_POST['clavedieselAnt2Miercoles'], $_POST['compradieselAnt2Jueves'], $_POST['clavedieselAnt2Jueves'], $_POST['compradieselAnt2Viernes'], $_POST['clavedieselAnt2Viernes'], $_POST['compradieselAnt2Sabado'], $_POST['clavedieselAnt2Sabado'], $_POST['compradieselAnt2Domingo'], $_POST['clavedieselAnt2Domingo'], $_POST['compradieselAnt2Lunes2'], $_POST['clavedieselAnt2Lunes2'], $_POST['compraExtraAnt2Lunes'], $_POST['stockExtraAnt2'], $_POST['ventaMediaEAnt2'], $_POST['compraExtraAnt2Martes'], $_POST['claveExtraAnt2Martes'], $_POST['compraExtraAnt2Miercoles'], $_POST['claveExtraAnt2Miercoles'], $_POST['compraExtraAnt2Jueves'], $_POST['claveExtraAnt2Jueves'], $_POST['compraExtraAnt2Viernes'], $_POST['claveExtraAnt2Viernes'], $_POST['compraExtraAnt2Sabado'], $_POST['claveExtraAnt2Sabado'], $_POST['compraExtraAnt2Domingo'], $_POST['claveExtraAnt2Domingo'], $_POST['compraExtraAnt2Lunes2'], $_POST['claveExtraAnt2Lunes2'], $_POST['compraSuperAnt2Lunes'], $_POST['stockSuperAnt2'], $_POST['ventaMediaSAnt2'], $_POST['compraSuperAnt2Martes'], $_POST['claveSuperAnt2Martes'], $_POST['compraSuperAnt2Miercoles'], $_POST['claveSuperAnt2Miercoles'], $_POST['compraSuperAnt2Jueves'], $_POST['claveSuperAnt2Jueves'], $_POST['compraSuperAnt2Viernes'], $_POST['claveSuperAnt2Viernes'], $_POST['compraSuperAnt2Sabado'], $_POST['claveSuperAnt2Sabado'], $_POST['compraSuperAnt2Domingo'], $_POST['claveSuperAnt2Domingo'], $_POST['compraSuperAnt2Lunes2'], $_POST['claveSuperAnt2Lunes2'])) {
    
    $link = mysqli_connect("localhost", "luagasco_diario", "4muLnD74g)*{", "luagasco_pedidos");
    
                    if (mysqli_connect_error()) {
        
                        die ("DB Connection error");

                    }
    // echo 'yes coneccionto';           
    //$query = "UPDATE `calculo` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselAnt1'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMedia'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes'])."', `comprad_martes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Martes'])."', `claved_martes` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Martes'])."', `comprad_miercoles` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Miercoles'])."', `claved_miercoles` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Miercoles'])."', `comprad_jueves` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Jueves'])."', `claved_jueves` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Jueves'])."', `comprad_viernes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Viernes'])."', `claved_viernes` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Viernes'])."', `comprad_sabado` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Sabado'])."', `claved_sabado` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Sabado'])."', `comprad_domingo` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Domingo'])."', `claved_domingo` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Domingo'])."', `comprad_lunes2` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes2'])."', `claved_lunes2` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Lunes2'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraAnt1'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaE'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes'])."', `comprae_martes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Martes'])."', `clavee_martes` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Martes'])."', `comprae_miercoles` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Miercoles'])."', `clavee_miercoles` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Miercoles'])."', `comprae_jueves` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Jueves'])."', `clavee_jueves` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Jueves'])."', `comprae_viernes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Viernes'])."', `clavee_viernes` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Viernes'])."', `comprae_sabado` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Sabado'])."', `clavee_sabado` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Sabado'])."', `comprae_domingo` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Domingo'])."', `clavee_domingo` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Domingo'])."', `comprae_lunes2` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes2'])."', `clavee_lunes2` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Lunes2'])."', `id_semana` = '".date('W')."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperAnt1'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaS'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes'])."', `compras_martes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Martes'])."', `claves_martes` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Martes'])."', `compras_miercoles` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Miercoles'])."', `claves_miercoles` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Miercoles'])."', `compras_jueves` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Jueves'])."', `claves_jueves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Jueves'])."', `compras_viernes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Viernes'])."', `claves_viernes` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Viernes'])."', `compras_sabado` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Sabado'])."', `claves_sabado` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Sabado'])."', `compras_domingo` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Domingo'])."', `claves_domingo` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Domingo'])."', `compras_lunes2` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes2'])."', `claves_lunes2` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Lunes2'])."' ORDER BY `id` DESC LIMIT 1";                
    //$query = "UPDATE `calculo` SET `stockd` = '1', `stocke` = '1' ORDER BY `id` DESC LIMIT 1";                
    $query = "UPDATE `calculo_anturios` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselAnt2'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaAnt2'])."', `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Martes'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Lunes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt2Martes'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraAnt2'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaEAnt2'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Martes'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Lunes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt2Martes'])."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperAnt2'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaSAnt2'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Martes'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Lunes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt2Martes'])."' WHERE `dia_semana`='Martes' ORDER BY `id` DESC LIMIT 1";                
    mysqli_query($link, $query);

   // $query = "UPDATE `calculo_anturios` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselAnt2'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMedia'])."', `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Martes'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Lunes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt2Martes'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraAnt2'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaE'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Martes'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Lunes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt2Martes'])."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperAnt2'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaS'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Martes'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Lunes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt2Martes'])."' WHERE `dia_semana`='Martes' ORDER BY `id` DESC LIMIT 1";
    
    $querym = "UPDATE `calculo_anturios` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Miercoles'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt2Miercoles'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Miercoles'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt2Miercoles'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Miercoles'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt2Miercoles'])."' WHERE `dia_semana`='Miercoles' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $querym);
    
    $queryj = "UPDATE `calculo_anturios` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Jueves'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt2Jueves'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Jueves'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt2Jueves'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Jueves'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt2Jueves'])."' WHERE `dia_semana`='Jueves' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryj);
    
    $queryv = "UPDATE `calculo_anturios` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Viernes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt2Viernes'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Viernes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt2Viernes'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Viernes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt2Viernes'])."' WHERE `dia_semana`='Viernes' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryv);
    
    $querys = "UPDATE `calculo_anturios` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Sabado'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt2Sabado'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Sabado'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt2Sabado'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Sabado'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt2Sabado'])."' WHERE `dia_semana`='Sabado' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $querys);
    
    $queryd = "UPDATE `calculo_anturios` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Domingo'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt2Domingo'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Domingo'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt2Domingo'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Domingo'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt2Domingo'])."' WHERE `dia_semana`='Domingo' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryd);
    
    $queryl2 = "UPDATE `calculo_anturios` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt2Lunes2'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt2Lunes2'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt2Lunes2'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt2Lunes2'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt2Lunes2'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt2Lunes2'])."' WHERE `dia_semana`='Lunes' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryl2);
    
    //echo 'query done';
    //echo mysqli_real_escape_string($link, $_POST['stockDieselAnt2']);
     
    $calstockdiad = $_POST['compradieselAnt2Lunes'] + $_POST['stockDieselAnt2'] - $_POST['ventaMediaAnt2'] ;
    
    $caldiad = ($calstockdiad - 500) / $_POST['ventaMediaAnt2'];  
    
    $query2 = "UPDATE `calculo_anturios` SET `stockdiad` = '".$calstockdiad."', `diasd` = '".$caldiad."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query2);
    
    $calstockMiercoles = $_POST['compradieselAnt2Martes'] +  $calstockdiad - $_POST['ventaMediaAnt2'] ;
    
    $caldiasMiercoles = ($calstockMiercoles - 500) / $_POST['ventaMediaAnt2'];
    
    $querymd = "UPDATE `calculo_anturios` SET `stockdiad` = '".$calstockMiercoles."', `diasd` = '".$caldiasMiercoles."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querymd);
    
    $calstockJueves = $_POST['compradieselAnt2Miercoles'] + $calstockMiercoles - $_POST['ventaMediaAnt2'] ;
    
    $caldiasJueves = ($calstockJueves - 500) / $_POST['ventaMediaAnt2'];
    
    $queryjd = "UPDATE `calculo_anturios` SET `stockdiad` = '".$calstockJueves."', `diasd` = '".$caldiasJueves."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryjd);
    
    $calstockViernes = $_POST['compradieselAnt2Jueves'] + $calstockJueves - $_POST['ventaMediaAnt2'] ;
    
    $caldiasViernes = ($calstockViernes - 500) / $_POST['ventaMediaAnt2'];
    
    $queryvd = "UPDATE `calculo_anturios` SET `stockdiad` = '".$calstockViernes."', `diasd` = '".$caldiasViernes."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryvd);
    
    $calstockSabado = $_POST['compradieselAnt2Viernes'] + $calstockViernes - $_POST['ventaMediaAnt2'] ;
    
    $caldiasSabado = ($calstockSabado - 500) / $_POST['ventaMediaAnt2'];
    
    $querysd = "UPDATE `calculo_anturios` SET `stockdiad` = '".$calstockSabado."', `diasd` = '".$caldiasSabado."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querysd);
    
    $calstockDomingo = $_POST['compradieselAnt2Sabado'] + $calstockSabado - $_POST['ventaMediaAnt2'] ;
    
    $caldiasDomingo = ($calstockDomingo - 500) / $_POST['ventaMediaAnt2'];
    
    $querydd = "UPDATE `calculo_anturios` SET `stockdiad` = '".$calstockDomingo."', `diasd` = '".$caldiasDomingo."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querydd);
    
    $calstockLunes2 = $_POST['compradieselAnt2Domingo'] + $calstockDomingo - $_POST['ventaMediaAnt2'] ;
    
    $caldiasLunes2 = ($calstockLunes2 - 500) / $_POST['ventaMediaAnt2'];
    
    $queryl2d = "UPDATE `calculo_anturios` SET `stockdiad` = '".$calstockLunes2."', `diasd` = '".$caldiasLunes2."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryl2d);
    
    $calstockMartes2 = $_POST['compradieselAnt2Lunes2'] + $calstockLunes2 - $_POST['ventaMediaAnt2'] ;
    
    $caldiasMartes2 = ($calstockMartes2 - 500) / $_POST['ventaMediaAnt2'];
    
    $querym2d = "UPDATE `calculo_anturios` SET `stockd_martes2` = '".$calstockMartes2."', `diasd_martes2` = '".$caldiasMartes2."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querym2d);
    
    
    
    //EXTRA
    
    $calstockMartesE = $_POST['compraExtraAnt2Lunes'] + $_POST['stockExtraAnt2'] - $_POST['ventaMediaEAnt2'] ;
    
    $caldiasMartesE = ($calstockMartesE - 500) / $_POST['ventaMediaEAnt2'];
    
    $query3 = "UPDATE `calculo_anturios` SET `stockdiae` = '".$calstockMartesE."', `diase` = '".$caldiasMartesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query3);
    
    $calstockMiercolesE = $_POST['compraExtraAnt2Martes'] +  $calstockMartesE - $_POST['ventaMediaEAnt2'] ;
    
    $caldiasMiercolesE = ($calstockMiercolesE - 500) / $_POST['ventaMediaEAnt2'];
    
    $queryme = "UPDATE `calculo_anturios` SET `stockdiae` = '".$calstockMiercolesE."', `diase` = '".$caldiasMiercolesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryme);
    
    $calstockJuevesE = $_POST['compraExtraAnt2Miercoles'] + $calstockMiercolesE - $_POST['ventaMediaEAnt2'] ;
    
    $caldiasJuevesE = ($calstockJuevesE - 500) / $_POST['ventaMediaEAnt2'];
    
    $queryje = "UPDATE `calculo_anturios` SET `stockdiae` = '".$calstockJuevesE."', `diase` = '".$caldiasJuevesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryje);
    
    $calstockViernesE = $_POST['compraExtraAnt2Jueves'] + $calstockJuevesE - $_POST['ventaMediaEAnt2'] ;
    
    $caldiasViernesE = ($calstockViernesE - 500) / $_POST['ventaMediaEAnt2'];
    
    $queryve = "UPDATE `calculo_anturios` SET `stockdiae` = '".$calstockViernesE."', `diase` = '".$caldiasViernesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryve);
    
    $calstockSabadoE = $_POST['compraExtraAnt2Viernes'] + $calstockViernesE - $_POST['ventaMediaEAnt2'] ;
    
    $caldiasSabadoE = ($calstockSabadoE - 500) / $_POST['ventaMediaEAnt2'];
    
    $queryse = "UPDATE `calculo_anturios` SET `stockdiae` = '".$calstockSabadoE."', `diase` = '".$caldiasSabadoE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryse);
    
    $calstockDomingoE = $_POST['compraExtraAnt2Sabado'] + $calstockSabadoE - $_POST['ventaMediaEAnt2'] ;
    
    $caldiasDomingoE = ($calstockDomingoE - 500) / $_POST['ventaMediaEAnt2'];
    
    $queryde = "UPDATE `calculo_anturios` SET `stockdiae` = '".$calstockDomingoE."', `diase` = '".$caldiasDomingoE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryde);
    
    $calstockLunes2E = $_POST['compraExtraAnt2Domingo'] + $calstockDomingoE - $_POST['ventaMediaEAnt2'] ;
    
    $caldiasLunes2E = ($calstockLunes2E - 500) / $_POST['ventaMediaEAnt2'];
    
    $queryle = "UPDATE `calculo_anturios` SET `stockdiae` = '".$calstockLunes2E."', `diase` = '".$caldiasLunes2E."', `extra` = 'EXTRA'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryle);
    
    $calstockMartes2E = $_POST['compraExtraAnt2Lunes2'] + $calstockLunes2E - $_POST['ventaMediaEAnt2'] ;
    
    $caldiasMartes2E = ($calstockMartes2E - 500) / $_POST['ventaMediaEAnt2'];
    
    $querym2e = "UPDATE `calculo_anturios` SET `stocke_martes2` = '".$calstockMartes2E."', `diase_martes2` = '".$caldiasMartes2E."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querym2e);
    
    //SUPER
    
    $calstockMartesS = $_POST['compraSuperAnt2Lunes'] + $_POST['stockSuperAnt2'] - $_POST['ventaMediaSAnt2'] ;
    
    $caldiasMartesS = ($calstockMartesS - 500) / $_POST['ventaMediaSAnt2'];
    
    $query4 = "UPDATE `calculo_anturios` SET `stockdias` = '".$calstockMartesS."', `diass` = '".$caldiasMartesS."', `super` = 'SUPER'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query4);
    
    $calstockMiercolesS = $_POST['compraSuperAnt2Martes'] +  $calstockMartesS - $_POST['ventaMediaSAnt2'] ;
    
    $caldiasMiercolesS = ($calstockMiercolesS - 500) / $_POST['ventaMediaSAnt2'];
    
    $queryms = "UPDATE `calculo_anturios` SET `stockdias` = '".$calstockMiercolesS."', `diass` = '".$caldiasMiercolesS."', `super` = 'SUPER'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryms);
    
    $calstockJuevesS = $_POST['compraSuperAnt2Miercoles'] + $calstockMiercolesS - $_POST['ventaMediaSAnt2'] ;
    
    $caldiasJuevesS = ($calstockJuevesS - 500) / $_POST['ventaMediaSAnt2'];
    
    $queryjs = "UPDATE `calculo_anturios` SET `stockdias` = '".$calstockJuevesS."', `diass` = '".$caldiasJuevesS."', `super` = 'SUPER'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryjs);
    
    $calstockViernesS = $_POST['compraSuperAnt2Jueves'] + $calstockJuevesS - $_POST['ventaMediaSAnt2'] ;
    
    $caldiasViernesS = ($calstockViernesS - 500) / $_POST['ventaMediaSAnt2'];
    
    $queryvs = "UPDATE `calculo_anturios` SET `stockdias` = '".$calstockViernesS."', `diass` = '".$caldiasViernesS."', `super` = 'SUPER'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryvs);
    
    $calstockSabadoS = $_POST['compraSuperAnt2Viernes'] + $calstockViernesS - $_POST['ventaMediaSAnt2'] ;
    
    $caldiasSabadoS = ($calstockSabadoS - 500) / $_POST['ventaMediaSAnt2'];
    
    $queryss = "UPDATE `calculo_anturios` SET `stockdias` = '".$calstockSabadoS."', `diass` = '".$caldiasSabadoS."', `super` = 'SUPER'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryss);
    
    $calstockDomingoS = $_POST['compraSuperAnt2Sabado'] + $calstockSabadoS - $_POST['ventaMediaSAnt2'] ;
    
    $caldiasDomingoS = ($calstockDomingoS - 500) / $_POST['ventaMediaSAnt2'];
    
    $queryds = "UPDATE `calculo_anturios` SET `stockdias` = '".$calstockDomingoS."', `diass` = '".$caldiasDomingoS."', `super` = 'SUPER'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryds);
    
    $calstockLunes2S = $_POST['compraSuperAnt2Domingo'] + $calstockDomingoS - $_POST['ventaMediaSAnt2'] ;
    
    $caldiasLunes2S = ($calstockLunes2S - 500) / $_POST['ventaMediaSAnt2'];
    
    $queryls = "UPDATE `calculo_anturios` SET `stockdias` = '".$calstockLunes2S."', `diass` = '".$caldiasLunes2S."', `super` = 'SUPER'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryls);
    
    $calstockMartes2S = $_POST['compraSuperAnt2Lunes2'] + $calstockLunes2S - $_POST['ventaMediaSAnt2'] ;
    
    $caldiasMartes2S = ($calstockMartes2S - 500) / $_POST['ventaMediaSAnt2'];
    
    $querym2s = "UPDATE `calculo_anturios` SET `stocks_martes2` = '".$calstockMartes2S."', `diass_martes2` = '".$caldiasMartes2S."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

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