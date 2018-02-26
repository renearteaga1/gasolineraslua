

//if (isset($_POST['compradieselAnt1Lunes'], $_POST['stockDieselAnt1'], $_POST['ventaMedia'])) {
/*    $http_origin = $_SERVER['HTTP_ORIGIN'];
    
   header('content-Type: application/json; charset=utf-8');  
    header('Content-Type: text/javascript; charset=utf8');
    header('Access-Control-Allow-Origin: "$http_origin"');
    header('Access-Control-Max-Age: 3628800');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    
    $link = mysqli_connect("localhost", "cl20-pedidos", "BU.-47-en", "cl20-pedidos");
    
                    if (mysqli_connect_error()) {
        
                        die ("DB Connection error");

                    }
                
    $query = "INSERT INTO `pedidos` (`semana`, `estacion`) VALUES ('".mysqli_real_escape_string($link, $_GET['subject'])."', 'Hi')";                

    mysqli_query($link, $query);
    
    echo $_GET['callback'].'('.json_encode($result).');';
    
    //$query2 = "UPDATE `calculo` SET `stockd_martes` = '".$calstockMartes."', `diasd_martes` = '".$caldiasMartes."', `stockd_miercoles` = '".$calstockMiercoles."', `diasd_miercoles` = '".$caldiasMiercoles."', `stockd_jueves` = '".$calstockJueves."', `diasd_jueves` = '".$caldiasJueves."', `stockd_viernes` = '".$calstockViernes."', `diasd_viernes` = '".$caldiasViernes."', `stockd_sabado` = '".$calstockSabado."', `diasd_sabado` = '".$caldiasSabado."', `stockd_domingo` = '".$calstockDomingo."', `diasd_domingo` = '".$caldiasDomingo."', `stockd_lunes2` = '".$calstockLunes2."', `diasd_lunes2` = '".$caldiasLunes2."', `stockd_martes2` = '".$calstockMartes2."', `diasd_martes2` = '".$caldiasMartes2."' ORDER BY `id` DESC LIMIT 1";                

    //mysqli_query($link, $query2);
    
    //echo $calstockMartes;
    
    
    
//}*/

<?php

$to      = $_GET['to'];
$subject = $_GET['subject'];
$message = $_GET['message'];
$headers = 'From: '.$_GET['from'] . "\r\n" .
    'Reply-To: '.$_GET['from'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$result = array();

$result['success'] = mail($to, $subject, $message, $headers);


if(array_key_exists('callback', $_GET)){

    header('Content-Type: text/javascript; charset=utf8');
    header('Access-Control-Allow-Origin: http://www.example.com/');
    header('Access-Control-Max-Age: 3628800');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

    $callback = $_GET['callback'];
    echo $callback.'('.json_encode($result).');';

}else{
    // normal JSON string
    header('Content-Type: application/json; charset=utf8');

    echo json_encode($result);
}

?>