<?php
session_start();

if (array_key_exists("save", $_GET)) {

    //session_destroy(); incluido por ingresar despues de log out... problemas de carga de loggedinpage cuando se encuentra dentro del codigo.

    unset($_SESSION['id']);    

} else if ((array_key_exists("id", $_SESSION)) AND $_SESSION['id']) {

    header("Location: edit.php");

}

if (array_key_exists("submit", $_POST)) {
    
        
            if ( !isset($_POST['user'])) {
               

                $ErrorUser = "form-control-danger"; 

                $hasDanger = "has-danger";

            }                                               

            if ( !isset($_POST['password'])) {

                $ErrorPassword = "form-control-danger";

                $hasDanger= "has-danger";

            }                                       

            if ($ErrorUser != "" or $ErrorPassword != "") {       

                $error = "Error de vacios<br>";                

            }else {
                
               //if ($_POST['logIn'] == '1' ){
                    
                     $link = mysqli_connect("localhost", "luagasco_diario", "4muLnD74g)*{", "luagasco_pedidos");
    
                    if (mysqli_connect_error()) {
        
                        die ("DB Connection error");

                    }
                
                $query = "SELECT * FROM `users` WHERE usuario = '".mysqli_real_escape_string($link, $_POST['user'])."'";

                

                $result = mysqli_query($link, $query);

                

                $row = mysqli_fetch_array($result);

                
            
                if (isset($row)) {


                    $hashedPassword = md5(md5($row['id']).$_POST['password']);
                    
                      
                    if  ($hashedPassword == $row['password']) {
                            
                        $_SESSION['id'] = $row['id'];
                        
                        //include 'yes.php';                       

                      // header("Location: compras.php?edit=1");
                       // $yes = "1";                          
                        header("Location: edit.php");
                        
                        //$query = "INSERT INTO `calculo` (`stockd`) VALUES ('0')";
                        //mysqli_query($link, $query);
                        
                    } else {
                       
                        $error = "<p>Email and Password combination is incorrect</P>";

                        //header("Location: diario.php");

                    }

                } else {
                  
                    $error = "<p>That email and password combination could not be found.</p>";
             
                }

                

//}
   
 
            }    
            

}            

?>