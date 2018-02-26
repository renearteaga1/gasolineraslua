<?php
date_default_timezone_set('America/Bogota');

    if (isset($_POST['submit'])) {
        
        include "db.php";
        include "functions.php";

 $idCliente = mysqli_real_escape_string($connection, $_POST['nombre']);

$sql_saldo_anterior = "SELECT SUM(Debe), SUM(Haber) FROM CuentasClientes WHERE ClienteId = ".$idCliente." AND Fecha < '".$_POST['fechaInicial']."'";
$result_saldo_anterior = mysqli_query($connection, $sql_saldo_anterior);

$row2=mysqli_fetch_assoc($result_saldo_anterior);

$saldoAnteriorShow = number_format(($row2['SUM(Haber)'] - $row2['SUM(Debe)']), 2, '.', ',');
$saldoAnterior = $row2['SUM(Haber)'] - $row2['SUM(Debe)'];



}

?>

<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gasolineras Lua</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      
      .cuenta-cliente {
        background-color: rgba(237, 237, 237, .8);
        padding-bottom: 2rem;
        margin-bottom: 3rem;
      }
      .fecha {
          padding-right: 0;
      }
      .logo {
          transform: scale(.8);
      }
      .debe {
          width: 5rem;
      }
      .comentario {
          padding-left: 0;
      }
      .comentario-mobile {
          font-size: .8rem;
      }
      
      .card-margin {
          margin: 10px;
      }
      .date {
          font-size: .91rem;
          font-weight: 500;
          padding-bottom: .9rem;
          color: #d59541;
      }
      .number-mobile {
          font-size: 1rem;
          font-weight: 500;
      }
      .saldo-final {
          margin-top: 1.5rem;
      }
      /*
      table {
    border-collapse: collapse;
    border-spacing: 0;
    border: 1px solid #bbb;
}
td, th {
    border-top: 1px solid #ddd;
    padding: 4px 8px;
}
tbody tr:nth-child(even) td {
    background-color: #eee;
}
@media screen and (max-width: 640px) {
	table {
		overflow-x: auto;
		display: block;
	}
}*/
        table{
            margin-top:1.5rem;
        }
        .card-padd {
            margin: 1.5rem;
        }
        .table-mobile th, .table-mobile td { 
             border-top: none !important; 
         }
        .table-mobile tr {
        background-color: rgba(242, 242, 242, .3);
        }
        
        .table-mobile tr:nth-child(4n+1), tr:nth-child(4n+2) {
            background-color: rgba(229, 229, 229, .8);;
        }
      @media (max-width: 575px) {
          .logo {
            transform: scale(1);
            margin: 0;
            padding: 0;
            width: 21rem;
        }
        .debe {
            padding:0;
        }
        .comentario {
            
            padding: 0;
        }
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }

    </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="">GasolinerasLua S.A.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/nosotros/nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      
        <div class="col text-center" >
          <!--<h1 class="mt-5">Garantia en Calidad y Cantidad</h1>-->
          
          <img src="Petroecuador.png" class="img-fluid logo" alt="Petroecuador">
          <p class="lead"></p>
          <ul class="list-unstyled">
            <li></li>
          </ul>
        </div>
            <?php 
                include 'Mobile_Detect.php';
                $detect = new Mobile_Detect();
            
                // Check for any mobile device.
                if ($detect->isMobile()) {
                 // mobile content
                    echo "<div>";
                        
                            if (isset($_POST['submit'])) {
                       readClientId();
                            }
                
                //<!--<a href="#" class="card-link">Card link</a>
                //<a href="#" class="card-link">Another link</a>-->
            echo "</div>";

       
            echo "<div class=''>";
                
                    if (isset($_POST['submit'])) {
                        tableHeaderMobile();
                    }
                
            echo "</div>";
    
            echo "<div >";
                
                    if (isset($_POST['submit'])) {
                        clientDataMobile();
                    }
                
            echo "</div>";
                 
                
                }else {
                 // other content for desktops
           echo "<div>";
                        
                            if (isset($_POST['submit'])) {
                       readClientId();
                            }
                
                //<!--<a href="#" class="card-link">Card link</a>
                //<a href="#" class="card-link">Another link</a>-->
            echo "</div>";

       
            echo "<div class=''>";
                
                    if (isset($_POST['submit'])) {
                        tableHeader();
                    }
                
            echo "</div>";
    
            echo "<div >";
                
                    if (isset($_POST['submit'])) {
                        clientData();
                    }
                
            echo "</div>";
            } ?>
            
        <!--
        <div class='row'>
            <div class= "col" style="background-color:#cccccc">Blue
            </div>
        </div> -->
      <!--  
        <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2017-Oct-02</td>
      <td>FACT 007002 0015652 COMPRA 1 ACOPLE Y 1 INFLADOR GTO E/S ANT II</td>
      <td>2,630.43</td>
      <td>2,630.43</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->
             
        <div class='row'>
        <div class= "col mt-sm-3 text-center cuenta-cliente">
          <h2 class="mt-5">Estado de cuenta de clientes</h2>
          <p class="lead">Ingrese su RUC o CI y seleccione el rango de fechas de su consulta:</p>
         <form class="form-inline justify-content-center" action="index.php" method="post">
            <label class="sr-only" for="inlineFormInput">RUC/CI</label>
            <input type="text" class="form-control mb-2 mr-sm-3 mb-sm-2" name="nombre" id="inlineFormInput" placeholder="RUC/CI">

            <label class="sr-only" for="inlineFormInputGroup">Fecha Inicial</label>
            <div class="input-group mb-2 mr-sm-3 mb-sm-2">
              <div class="input-group-addon">Incial</div>
              <input type="date" class="form-control" name="fechaInicial" id="inlineFormInputGroup" value="2017/01/01">
            </div>
            
            <label class="sr-only" for="inlineFormInputGroup">Fecha Final</label>
            <div class="input-group mb-2 mr-sm-3 mb-sm-2">
              <div class="input-group-addon">Final</div>
              <input type="date" class="form-control" name="fechaFinal" id="inlineFormInputGroup" value="<?php echo date('Y-m-d'); ?>">
            </div>

            <input type="submit" class="btn btn-primary mb-sm-2" name="submit" value="consultar">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
