<!--PHP-->
<?php include 'config.php'; ?>
<?php session_start(); ?>
<?php

if ($_POST){
	$CodFiscale=$_POST["codfiscale"];
	$DataConsulenza = $_POST['data'];
  $OrarioConsulenza = $_POST['orario'];
  $Tipo = $_POST['tipo'];
  $Partitaiva = $_POST['partitaiva'];
  $IdStaffer = $_SESSION['IdStaffer'];

	$query1="INSERT INTO consulenze (DataConsulenza, OrarioConsulenza, TipoConsulenza, CodFiscale, PartitaIVA, IdStaffer) VALUES ('{$DataConsulenza}', '{$OrarioConsulenza}', '{$Tipo}', '{$CodFiscale}', '{$Partitaiva}', '{$IdStaffer}')";

	$risultato= mysqli_query($conn,$query1);

}
?>

 <!--<!doctype html> -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./Stile.css" >
    <title>Area Riservata : Privati</title>
  </head>
  <body>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Consulenze</li>
      </ol>
    </nav>

    <blockquote class="blockquote text-center">
        <p class="mb-0"></p>
           <span class="badge badge-info">Registra una nuova consulenza:</span>
    </blockquote>



    <div class="container">       <!--Container CSS-->

      <div class="row">
        <div class="col-sm">



          <!--Codicefiscale-->
            <form class="needs-validation" action="Consulenze.php" method="post" ><!--novalidate-->
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Data Consulenza</label>
      <input type="date" class="form-control" id="validationCustom01" name="data" value=" " required>
      <div class="valid-feedback">

      </div>
    </div>

      <!--Nome-->
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Orario Consuelenza </label>
      <input type="time" class="form-control" id="validationCustom02" name="orario" value=" " required>
      <div class="valid-feedback">

      </div>
    </div>
  </div>

  <div class="form-row">

      <!--Cognome-->
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Tipo consulenza</label>
      <input type="text" class="form-control" id="validationCustom03" name="tipo" required>
      <div class="invalid-feedback">

      </div>
    </div>

   <!--Data di nascita-->
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Codice Fiscale</label>
      <input type="text" class="form-control" id="validationCustom05" name="codfiscale">
      <div class="invalid-feedback">

      </div>
    </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom05">Partita IVA (Se azienda)</label>
        <input type="text" class="form-control" id="validationCustom05" name="partitaiva">
        <div class="invalid-feedback">

        </div>
      </div>

  </div>
	<div class="col-8 col-sm-6">                                                           <!--col-md-3 mb-3" per vedere se é ben allineato-->
		<input type="submit" class="btn btn-outline-danger" value="Invia">                <!--Submit-->
	</div>
</form>

<div class="container mt-5">
	<a  href="VisualizzaPrivati.php" class="btn-lg btn-info mt-3">Visualizza dati Privati già registrati</a>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
