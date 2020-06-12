<?php include 'config.php'; ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <!--<link rel="stylesheet" href="./Stile.css" > -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <title>Prenota Consulenza</title>
  </head>
  <body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><span class="badge badge-info">Studio di Consulenza del Lavoro</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Chi Siamo? <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#servizio">Servizi </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">Prezzi</a>

        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">Contatti </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Prenota una Consulenza </a>
        </li>
      </ul>
         <a class="btn btn-outline-info" href="accedi.php">Area Riservata</a>
    </div>
  </nav>



  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Consulenze.jpg" class="d-block w-100" style ="height: 600px" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1>  <a class="btn-lg btn-danger" href="#Consulenzaform">Prenota la tua Consulenza</a></h1>
      <h3>  <span class="badge badge-light">Contattaci per chiedere maggiori informazioni e per fissare un appuntamento.
      <br>  Il nostro team sarà lieto di illustrati nel dettaglio ciò che possiamo offrirti<br> e ti guiderà nella ricerca della soluzione adatta alla tua impresa.</span> </h3>

      </div>
    </div>

  </div>

  </div>


  <div class="container mt-5">
    <form class="" action="PrenotaConsulenza.php" method="post">
      <div class="row">
        <div class="col-md-6">
          <label for="inputEmail4">Nominativo</label>
          <input type="text" class="form-control" placeholder="First name" name="Nominativo" required>
        </div>

        <div class="col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" placeholder="Email Address" name="Email" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <label for="inputNumero">Numero di telefono</label>
          <input type="number" class="form-control" placeholder="Numero di telefono" name="Telefono" required>
        </div>

        <div class="col-md-6">
          <label for="inputData">Data Appuntamento</label>
          <input type="date" class="form-control" placeholder="Data appuntamento" name="Data" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <label for="inputNumero">Orario appuntamento</label>
          <input type="time" class="form-control" placeholder="Orario appuntamento" name="Orario" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-12">
          <label for="inputData">Motivazione</label>
          <textarea class="form-control" placeholder="Messaggio" name="Motivazione"></textarea>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6 float-right">
          <input type="submit" name="invia" value="Invia" class="btn btn-info">
        </div>
      </div>
    </form>
  </div>

  <?php

  if(isset($_POST['invia'])){

  $nominativo = $_POST['Nominativo'];
  $email = $_POST['Email'];
  $telefono = $_POST['Telefono'];
  $data = $_POST['Data'];
  $orario = $_POST['Orario'];
  $motivazione = $_POST['Motivazione'];

  $query = "INSERT INTO appuntamenti (DataAppuntamento, OrarioAppuntamento, Motivazione, Nominativo, NumTelefono, Email) VALUES('{$data}', '{$orario}', '{$motivazione}', '{$nominativo}', '{$telefono}', '{$email}');";

  $result = mysqli_query($conn, $query);

  if (!$result) {
    die("Errore");
  }

  }


  ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
