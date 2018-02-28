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
        <a class="navbar-brand" href="../index.php">GasolinerasLua S.A.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
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

          <img src="../Petroecuador.png" class="img-fluid logo" alt="Petroecuador">
          <p class="lead"></p>
          <ul class="list-unstyled">
            <li></li>
          </ul>
        </div>

        <div class='row'>
        <div class= "col mt-sm-3 text-center cuenta-cliente">
          <h2 class="mt-5">Solicitud de Crédito</h2>
        </div>
        </div>

        <div class="row justify-content-center">
        <div class="col-9">
          <p class="lead ">Por favor revisar la siguiente información:</p>
          <p class="text">* Estimado cliente, para poder ofrecerle un servicio basado en la seguridad y confianza, solicitamos a usted muy comedidamente se sirva hacernos llegar los siguientes documentos:</p>
        </div>
        </div>

        <div class="row justify-content-center">
        <div class="col-5">
        <div id="accordion">
<div class="card" style="width: 24rem;">
  <div class="card-header" id="headingOne">
    <h5 class="mb-0">
      <button class="btn btn-link card-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Persona Natural
      </button>
    </h5>
  </div>

  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="card-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Copia de cédula de ciudadanía del solicitante</li>
      <li class="list-group-item">Referencia Bancaria</li>
      <li class="list-group-item">Cheque girado a nombre de Rene Vinicio Arteaga Lalama</li>
      <li class="list-group-item">Letra de cambio</li>
      <li class="list-group-item">RUC</li>
    </ul>
    </div>
  </div>
</div>

<div class="card" style="width: 24rem;">
  <div class="card-header" id="headingTwo">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Persona Jurídica (Compañía)
      </button>
    </h5>
  </div>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
    <div class="card-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Documento de constitucion legal de la compañía</li>
      <li class="list-group-item">Nombramiento del representante legal</li>
      <li class="list-group-item">Copia de RUC actualizado de la empresa</li>
      <li class="list-group-item">Copia de cédula de ciudadanía del representante legal</li>
      <li class="list-group-item">Referencia bancaria</li>
      <li class="list-group-item">Cheque girado a nombre de Rene Vinicio Arteaga Lalama</li>
      <li class="list-group-item">Letra de cambio</li>
    </ul>
    </div>
  </div>
</div>

</div>
</div>
</div>

  <div class="row justify-content-center mt-5">
  <div class="col-9">
    <p class=" ">* Las tasas de interés vigentes sobre su crédito son las siguientes:</p>
    </div>
    </div>

    <div class="row justify-content-center mt-1">
    <div class="col-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Plazo</th>
      <th scope="col">Tasa interés</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1. Semanal</td>
      <td>1%</td>
    </tr>
    <tr>
      <td>2. Quincenal</td>
      <td>1.5%</td>
    </tr>
    <tr>
      <td>3. Mensual</td>
      <td>2%</td>
    </tr>
  </tbody>
</table>
  </div>
  </div>

  <div class="row justify-content-center mt-2">
  <div class="col-9">
    <p class="">* La empresa ofrece 7 días calendario de gracia (Cero interés) para el pago de sus planillas, a partir de la fecha convenidad de vencimiento de la planilla.</p>
  </div>
  </div>

  <div class="row justify-content-center mt-2">
  <div class="col-9">
    <p class="">* En caso de ser aprobado su crédito, deberá entregar garantías por el doble del monto solicitado:</p>
  </div>
  </div>

  <div class="row mt-0">
  <div class="col-2">

  </div>
  <div class="col-3">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cheque</li>
    <li class="list-group-item">Letra de cambio</li>
  </ul>
  </div>
  </div>

  <div class="row justify-content-center mt-3">
  <div class="col-9">
    <p class="lead ">Cualquier inquietud que usted tenga al respecto, estaremos gustosos de atenderle al 02 374 0444 o al correo secretariaempresaslua@hotmail.com.</p>
  </div>
  </div>


        <div class= "col text-center cuenta-cliente">
         <form class="form-inline justify-content-center" action="10-webapp/compras.php" method="post">
            <label class="" for="inlineFormInput">RUC/CI</label>
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

            <input type="submit" class="btn btn-primary mb-sm-2" name="submit" value="Solicitar Formulario">
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
