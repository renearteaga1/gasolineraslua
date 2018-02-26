<?php

header("Content-Type: application/json");
//$obj = json_decode($_GET["x"], false);

$conn = new mysqli("localhost", "luagasco_diario", "4muLnD74g)*{", "luagasco_pedidos");
//$result = $conn->query("SELECT * FROM `calculo` ORDER BY `id` DESC");
$result = $conn->query("SELECT * FROM `calculo_anturios` ORDER BY `id` DESC LIMIT 14");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);



echo json_encode($outp);
/*$link = mysqli_connect("shareddb1b.hosting.stackcp.net", "cl20-pedidos78", "BU.-47-en", "cl20-pedidos78");
    
                    if (mysqli_connect_error()) {
        
                        die ("DB Connection error");

                    }
$query="SELECT * FROM `calculo` ORDER BY `id` DESC LIMIT 7";
$result = mysqli_query($link, $query);

$rows = array();

//retrieve and print every record
while($r = mysqli_fetch_assoc($result)){
    // $rows[] = $r; has the same effect, without the superfluous data attribute
    $rows[] = array('data' => $r);
}

// now all the rows have been fetched, it can be encoded
echo json_encode($rows);*/

?>