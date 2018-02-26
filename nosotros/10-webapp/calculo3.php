<?php 

session_start();

if (isset($_POST['compradieselValgasLunes'], $_POST['stockDieselValgas'], $_POST['ventaMediaValgas'], $_POST['compradieselValgasMartes'], $_POST['clavedieselValgasMartes'], $_POST['compradieselValgasMiercoles'], $_POST['clavedieselValgasMiercoles'], $_POST['compradieselValgasJueves'], $_POST['clavedieselValgasJueves'], $_POST['compradieselValgasViernes'], $_POST['clavedieselValgasViernes'], $_POST['compradieselValgasSabado'], $_POST['clavedieselValgasSabado'], $_POST['compradieselValgasDomingo'], $_POST['clavedieselValgasDomingo'], $_POST['compradieselValgasLunes2'], $_POST['clavedieselValgasLunes2'], $_POST['compraExtraValgasLunes'], $_POST['stockExtraValgas'], $_POST['ventaMediaEValgas'], $_POST['compraExtraValgasMartes'], $_POST['claveExtraValgasMartes'], $_POST['compraExtraValgasMiercoles'], $_POST['claveExtraValgasMiercoles'], $_POST['compraExtraValgasJueves'], $_POST['claveExtraValgasJueves'], $_POST['compraExtraValgasViernes'], $_POST['claveExtraValgasViernes'], $_POST['compraExtraValgasSabado'], $_POST['claveExtraValgasSabado'], $_POST['compraExtraValgasDomingo'], $_POST['claveExtraValgasDomingo'], $_POST['compraExtraValgasLunes2'], $_POST['claveExtraValgasLunes2'], $_POST['compraSuperValgasLunes'], $_POST['stockSuperValgas'], $_POST['ventaMediaSValgas'], $_POST['compraSuperValgasMartes'], $_POST['claveSuperValgasMartes'], $_POST['compraSuperValgasMiercoles'], $_POST['claveSuperValgasMiercoles'], $_POST['compraSuperValgasJueves'], $_POST['claveSuperValgasJueves'], $_POST['compraSuperValgasViernes'], $_POST['claveSuperValgasViernes'], $_POST['compraSuperValgasSabado'], $_POST['claveSuperValgasSabado'], $_POST['compraSuperValgasDomingo'], $_POST['claveSuperValgasDomingo'], $_POST['compraSuperValgasLunes2'], $_POST['claveSuperValgasLunes2'])) {
    
    $link = mysqli_connect("localhost", "luagasco_diario", "4muLnD74g)*{", "luagasco_pedidos");
    
                    if (mysqli_connect_error()) {
        
                        die ("DB Connection error");

                    }
    // echo 'yes coneccionto';           
    //$query = "UPDATE `calculo` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselAnt1'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMedia'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes'])."', `comprad_martes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Martes'])."', `claved_martes` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Martes'])."', `comprad_miercoles` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Miercoles'])."', `claved_miercoles` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Miercoles'])."', `comprad_jueves` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Jueves'])."', `claved_jueves` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Jueves'])."', `comprad_viernes` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Viernes'])."', `claved_viernes` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Viernes'])."', `comprad_sabado` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Sabado'])."', `claved_sabado` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Sabado'])."', `comprad_domingo` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Domingo'])."', `claved_domingo` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Domingo'])."', `comprad_lunes2` = '".mysqli_real_escape_string($link, $_POST['compradieselAnt1Lunes2'])."', `claved_lunes2` = '".mysqli_real_escape_string($link, $_POST['clavedieselAnt1Lunes2'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraAnt1'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaE'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes'])."', `comprae_martes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Martes'])."', `clavee_martes` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Martes'])."', `comprae_miercoles` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Miercoles'])."', `clavee_miercoles` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Miercoles'])."', `comprae_jueves` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Jueves'])."', `clavee_jueves` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Jueves'])."', `comprae_viernes` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Viernes'])."', `clavee_viernes` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Viernes'])."', `comprae_sabado` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Sabado'])."', `clavee_sabado` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Sabado'])."', `comprae_domingo` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Domingo'])."', `clavee_domingo` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Domingo'])."', `comprae_lunes2` = '".mysqli_real_escape_string($link, $_POST['compraExtraAnt1Lunes2'])."', `clavee_lunes2` = '".mysqli_real_escape_string($link, $_POST['claveExtraAnt1Lunes2'])."', `id_semana` = '".date('W')."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperAnt1'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaS'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes'])."', `compras_martes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Martes'])."', `claves_martes` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Martes'])."', `compras_miercoles` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Miercoles'])."', `claves_miercoles` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Miercoles'])."', `compras_jueves` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Jueves'])."', `claves_jueves` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Jueves'])."', `compras_viernes` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Viernes'])."', `claves_viernes` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Viernes'])."', `compras_sabado` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Sabado'])."', `claves_sabado` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Sabado'])."', `compras_domingo` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Domingo'])."', `claves_domingo` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Domingo'])."', `compras_lunes2` = '".mysqli_real_escape_string($link, $_POST['compraSuperAnt1Lunes2'])."', `claves_lunes2` = '".mysqli_real_escape_string($link, $_POST['claveSuperAnt1Lunes2'])."' ORDER BY `id` DESC LIMIT 1";                
    //$query = "UPDATE `calculo` SET `stockd` = '1', `stocke` = '1' ORDER BY `id` DESC LIMIT 1";                
    $query = "UPDATE `calculo_valgas` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselValgas'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaValgas'])."', `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasMartes'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasLunes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselValgasMartes'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraValgas'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaEValgas'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasMartes'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasLunes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraValgasMartes'])."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperValgas'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaSValgas'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasMartes'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasLunes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperValgasMartes'])."' WHERE `dia_semana`='Martes' ORDER BY `id` DESC LIMIT 1";                
    mysqli_query($link, $query);

   // $query = "UPDATE `calculo_valgas` SET `stockd` = '".mysqli_real_escape_string($link, $_POST['stockDieselValgas'])."', `ventad_media` = '".mysqli_real_escape_string($link, $_POST['ventaMedia'])."', `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasMartes'])."', `comprad_lunes` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasLunes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselValgasMartes'])."', `stocke` = '".mysqli_real_escape_string($link, $_POST['stockExtraValgas'])."', `ventae_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaE'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasMartes'])."', `comprae_lunes` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasLunes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraValgasMartes'])."', `stocks` = '".mysqli_real_escape_string($link, $_POST['stockSuperValgas'])."', `ventas_media` = '".mysqli_real_escape_string($link, $_POST['ventaMediaS'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasMartes'])."', `compras_lunes` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasLunes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperValgasMartes'])."' WHERE `dia_semana`='Martes' ORDER BY `id` DESC LIMIT 1";
    
    $querym = "UPDATE `calculo_valgas` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasMiercoles'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselValgasMiercoles'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasMiercoles'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraValgasMiercoles'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasMiercoles'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperValgasMiercoles'])."' WHERE `dia_semana`='Miercoles' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $querym);
    
    $queryj = "UPDATE `calculo_valgas` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasJueves'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselValgasJueves'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasJueves'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraValgasJueves'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasJueves'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperValgasJueves'])."' WHERE `dia_semana`='Jueves' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryj);
    
    $queryv = "UPDATE `calculo_valgas` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasViernes'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselValgasViernes'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasViernes'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraValgasViernes'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasViernes'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperValgasViernes'])."' WHERE `dia_semana`='Viernes' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryv);
    
    $querys = "UPDATE `calculo_valgas` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasSabado'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselValgasSabado'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasSabado'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraValgasSabado'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasSabado'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperValgasSabado'])."' WHERE `dia_semana`='Sabado' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $querys);
    
    $queryd = "UPDATE `calculo_valgas` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasDomingo'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselValgasDomingo'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasDomingo'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraValgasDomingo'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasDomingo'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperValgasDomingo'])."' WHERE `dia_semana`='Domingo' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryd);
    
    $queryl2 = "UPDATE `calculo_valgas` SET `comprad` = '".mysqli_real_escape_string($link, $_POST['compradieselValgasLunes2'])."', `claved` = '".mysqli_real_escape_string($link, $_POST['clavedieselValgasLunes2'])."', `comprae` = '".mysqli_real_escape_string($link, $_POST['compraExtraValgasLunes2'])."', `clavee` = '".mysqli_real_escape_string($link, $_POST['claveExtraValgasLunes2'])."', `compras` = '".mysqli_real_escape_string($link, $_POST['compraSuperValgasLunes2'])."', `claves` = '".mysqli_real_escape_string($link, $_POST['claveSuperValgasLunes2'])."' WHERE `dia_semana`='Lunes' ORDER BY `id` DESC LIMIT 1";
    mysqli_query($link, $queryl2);
    
    //echo 'query done';
    //echo mysqli_real_escape_string($link, $_POST['stockDieselValgas']);
     
    $calstockdiad = $_POST['compradieselValgasLunes'] + $_POST['stockDieselValgas'] - $_POST['ventaMediaValgas'] ;
    
    $caldiad = ($calstockdiad - 500) / $_POST['ventaMediaValgas'];  
    
    $query2 = "UPDATE `calculo_valgas` SET `stockdiad` = '".$calstockdiad."', `diasd` = '".$caldiad."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query2);
    
    $calstockMiercoles = $_POST['compradieselValgasMartes'] +  $calstockdiad - $_POST['ventaMediaValgas'] ;
    
    $caldiasMiercoles = ($calstockMiercoles - 500) / $_POST['ventaMediaValgas'];
    
    $querymd = "UPDATE `calculo_valgas` SET `stockdiad` = '".$calstockMiercoles."', `diasd` = '".$caldiasMiercoles."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querymd);
    
    $calstockJueves = $_POST['compradieselValgasMiercoles'] + $calstockMiercoles - $_POST['ventaMediaValgas'] ;
    
    $caldiasJueves = ($calstockJueves - 500) / $_POST['ventaMediaValgas'];
    
    $queryjd = "UPDATE `calculo_valgas` SET `stockdiad` = '".$calstockJueves."', `diasd` = '".$caldiasJueves."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryjd);
    
    $calstockViernes = $_POST['compradieselValgasJueves'] + $calstockJueves - $_POST['ventaMediaValgas'] ;
    
    $caldiasViernes = ($calstockViernes - 500) / $_POST['ventaMediaValgas'];
    
    $queryvd = "UPDATE `calculo_valgas` SET `stockdiad` = '".$calstockViernes."', `diasd` = '".$caldiasViernes."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryvd);
    
    $calstockSabado = $_POST['compradieselValgasViernes'] + $calstockViernes - $_POST['ventaMediaValgas'] ;
    
    $caldiasSabado = ($calstockSabado - 500) / $_POST['ventaMediaValgas'];
    
    $querysd = "UPDATE `calculo_valgas` SET `stockdiad` = '".$calstockSabado."', `diasd` = '".$caldiasSabado."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querysd);
    
    $calstockDomingo = $_POST['compradieselValgasSabado'] + $calstockSabado - $_POST['ventaMediaValgas'] ;
    
    $caldiasDomingo = ($calstockDomingo - 500) / $_POST['ventaMediaValgas'];
    
    $querydd = "UPDATE `calculo_valgas` SET `stockdiad` = '".$calstockDomingo."', `diasd` = '".$caldiasDomingo."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querydd);
    
    $calstockLunes2 = $_POST['compradieselValgasDomingo'] + $calstockDomingo - $_POST['ventaMediaValgas'] ;
    
    $caldiasLunes2 = ($calstockLunes2 - 500) / $_POST['ventaMediaValgas'];
    
    $queryl2d = "UPDATE `calculo_valgas` SET `stockdiad` = '".$calstockLunes2."', `diasd` = '".$caldiasLunes2."', `diesel` = 'DIESEL PREMIUM'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryl2d);
    
    $calstockMartes2 = $_POST['compradieselValgasLunes2'] + $calstockLunes2 - $_POST['ventaMediaValgas'] ;
    
    $caldiasMartes2 = ($calstockMartes2 - 500) / $_POST['ventaMediaValgas'];
    
    $querym2d = "UPDATE `calculo_valgas` SET `stockd_martes2` = '".$calstockMartes2."', `diasd_martes2` = '".$caldiasMartes2."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querym2d);
    
    
    
    //EXTRA
    
    $calstockMartesE = $_POST['compraExtraValgasLunes'] + $_POST['stockExtraValgas'] - $_POST['ventaMediaEValgas'] ;
    
    $caldiasMartesE = ($calstockMartesE - 500) / $_POST['ventaMediaEValgas'];
    
    $query3 = "UPDATE `calculo_valgas` SET `stockdiae` = '".$calstockMartesE."', `diase` = '".$caldiasMartesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query3);
    
    $calstockMiercolesE = $_POST['compraExtraValgasMartes'] +  $calstockMartesE - $_POST['ventaMediaEValgas'] ;
    
    $caldiasMiercolesE = ($calstockMiercolesE - 500) / $_POST['ventaMediaEValgas'];
    
    $queryme = "UPDATE `calculo_valgas` SET `stockdiae` = '".$calstockMiercolesE."', `diase` = '".$caldiasMiercolesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryme);
    
    $calstockJuevesE = $_POST['compraExtraValgasMiercoles'] + $calstockMiercolesE - $_POST['ventaMediaEValgas'] ;
    
    $caldiasJuevesE = ($calstockJuevesE - 500) / $_POST['ventaMediaEValgas'];
    
    $queryje = "UPDATE `calculo_valgas` SET `stockdiae` = '".$calstockJuevesE."', `diase` = '".$caldiasJuevesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryje);
    
    $calstockViernesE = $_POST['compraExtraValgasJueves'] + $calstockJuevesE - $_POST['ventaMediaEValgas'] ;
    
    $caldiasViernesE = ($calstockViernesE - 500) / $_POST['ventaMediaEValgas'];
    
    $queryve = "UPDATE `calculo_valgas` SET `stockdiae` = '".$calstockViernesE."', `diase` = '".$caldiasViernesE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryve);
    
    $calstockSabadoE = $_POST['compraExtraValgasViernes'] + $calstockViernesE - $_POST['ventaMediaEValgas'] ;
    
    $caldiasSabadoE = ($calstockSabadoE - 500) / $_POST['ventaMediaEValgas'];
    
    $queryse = "UPDATE `calculo_valgas` SET `stockdiae` = '".$calstockSabadoE."', `diase` = '".$caldiasSabadoE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryse);
    
    $calstockDomingoE = $_POST['compraExtraValgasSabado'] + $calstockSabadoE - $_POST['ventaMediaEValgas'] ;
    
    $caldiasDomingoE = ($calstockDomingoE - 500) / $_POST['ventaMediaEValgas'];
    
    $queryde = "UPDATE `calculo_valgas` SET `stockdiae` = '".$calstockDomingoE."', `diase` = '".$caldiasDomingoE."', `extra` = 'EXTRA'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryde);
    
    $calstockLunes2E = $_POST['compraExtraValgasDomingo'] + $calstockDomingoE - $_POST['ventaMediaEValgas'] ;
    
    $caldiasLunes2E = ($calstockLunes2E - 500) / $_POST['ventaMediaEValgas'];
    
    $queryle = "UPDATE `calculo_valgas` SET `stockdiae` = '".$calstockLunes2E."', `diase` = '".$caldiasLunes2E."', `extra` = 'EXTRA'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryle);
    
    $calstockMartes2E = $_POST['compraExtraValgasLunes2'] + $calstockLunes2E - $_POST['ventaMediaEValgas'] ;
    
    $caldiasMartes2E = ($calstockMartes2E - 500) / $_POST['ventaMediaEValgas'];
    
    $querym2e = "UPDATE `calculo_valgas` SET `stocke_martes2` = '".$calstockMartes2E."', `diase_martes2` = '".$caldiasMartes2E."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $querym2e);
    
    //SUPER
    
    $calstockMartesS = $_POST['compraSuperValgasLunes'] + $_POST['stockSuperValgas'] - $_POST['ventaMediaSValgas'] ;
    
    $caldiasMartesS = ($calstockMartesS - 500) / $_POST['ventaMediaSValgas'];
    
    $query4 = "UPDATE `calculo_valgas` SET `stockdias` = '".$calstockMartesS."', `diass` = '".$caldiasMartesS."', `super` = 'SUPER'  WHERE dia_semana = 'Martes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $query4);
    
    $calstockMiercolesS = $_POST['compraSuperValgasMartes'] +  $calstockMartesS - $_POST['ventaMediaSValgas'] ;
    
    $caldiasMiercolesS = ($calstockMiercolesS - 500) / $_POST['ventaMediaSValgas'];
    
    $queryms = "UPDATE `calculo_valgas` SET `stockdias` = '".$calstockMiercolesS."', `diass` = '".$caldiasMiercolesS."', `super` = 'SUPER'  WHERE dia_semana = 'Miercoles' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryms);
    
    $calstockJuevesS = $_POST['compraSuperValgasMiercoles'] + $calstockMiercolesS - $_POST['ventaMediaSValgas'] ;
    
    $caldiasJuevesS = ($calstockJuevesS - 500) / $_POST['ventaMediaSValgas'];
    
    $queryjs = "UPDATE `calculo_valgas` SET `stockdias` = '".$calstockJuevesS."', `diass` = '".$caldiasJuevesS."', `super` = 'SUPER'  WHERE dia_semana = 'Jueves' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryjs);
    
    $calstockViernesS = $_POST['compraSuperValgasJueves'] + $calstockJuevesS - $_POST['ventaMediaSValgas'] ;
    
    $caldiasViernesS = ($calstockViernesS - 500) / $_POST['ventaMediaSValgas'];
    
    $queryvs = "UPDATE `calculo_valgas` SET `stockdias` = '".$calstockViernesS."', `diass` = '".$caldiasViernesS."', `super` = 'SUPER'  WHERE dia_semana = 'Viernes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryvs);
    
    $calstockSabadoS = $_POST['compraSuperValgasViernes'] + $calstockViernesS - $_POST['ventaMediaSValgas'] ;
    
    $caldiasSabadoS = ($calstockSabadoS - 500) / $_POST['ventaMediaSValgas'];
    
    $queryss = "UPDATE `calculo_valgas` SET `stockdias` = '".$calstockSabadoS."', `diass` = '".$caldiasSabadoS."', `super` = 'SUPER'  WHERE dia_semana = 'Sabado' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryss);
    
    $calstockDomingoS = $_POST['compraSuperValgasSabado'] + $calstockSabadoS - $_POST['ventaMediaSValgas'] ;
    
    $caldiasDomingoS = ($calstockDomingoS - 500) / $_POST['ventaMediaSValgas'];
    
    $queryds = "UPDATE `calculo_valgas` SET `stockdias` = '".$calstockDomingoS."', `diass` = '".$caldiasDomingoS."', `super` = 'SUPER'  WHERE dia_semana = 'Domingo' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryds);
    
    $calstockLunes2S = $_POST['compraSuperValgasDomingo'] + $calstockDomingoS - $_POST['ventaMediaSValgas'] ;
    
    $caldiasLunes2S = ($calstockLunes2S - 500) / $_POST['ventaMediaSValgas'];
    
    $queryls = "UPDATE `calculo_valgas` SET `stockdias` = '".$calstockLunes2S."', `diass` = '".$caldiasLunes2S."', `super` = 'SUPER'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

    mysqli_query($link, $queryls);
    
    $calstockMartes2S = $_POST['compraSuperValgasLunes2'] + $calstockLunes2S - $_POST['ventaMediaSValgas'] ;
    
    $caldiasMartes2S = ($calstockMartes2S - 500) / $_POST['ventaMediaSValgas'];
    
    $querym2s = "UPDATE `calculo_valgas` SET `stocks_martes2` = '".$calstockMartes2S."', `diass_martes2` = '".$caldiasMartes2S."'  WHERE dia_semana = 'Lunes' ORDER BY `id_semana` DESC LIMIT 1";                

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