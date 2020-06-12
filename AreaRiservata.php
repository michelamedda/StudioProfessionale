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

    <link rel="stylesheet" href="css/stile.css">
    <title>Area Riservata</title>
  </head>
  <body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Area Riservata </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="btn btn-outline-danger" href="logout.php">Logout</a>
</nav>

    <div class="container mt-5 border-0">
      <h1 class="text-center display-4">Documentazione Clienti</h1>

      <div class="card-deck mt-5">

      <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-body text-info">
          <h5 class="card-title">Doc Aziende</h5>
          <p>Gestione della documentazione delle Aziende. Vai al form di registrazione per registrare una nuova azienda.</p>
          <a href="AziendeDB.php" class="btn btn-info">Gestione</a>
        </div>
      </div>


      <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-body text-info">
          <h5 class="card-title">Doc Privati</h5>
          <p>Gestione della documentazione dei Privati. Vai al form di registrazione per registrare un nuovo cliente privato.</p>
          <a href="PrivatiDB.php" class="btn btn-info">Gestione</a>
        </div>
      </div>

      <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-body text-info">
          <h5 class="card-title">Appuntamenti</h5>
          <p>Visualizza tutti gli appuntamenti prossimi.</p>
          <a href="Appuntamenti.php" class="btn btn-info">Gestione</a>
        </div>
      </div>

      <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-body text-info">
          <h5 class="card-title">Consulenze</h5>
          <p>Registra nuova consulenza oppure visualizza le consulenze fatte in precedenza.</p>
          <a href="Consulenze.php" class="btn btn-info">Gestione</a>
        </div>
      </div>
      </div>

      <hr>

      <h1 class="text-center display-4">Gestione Ufficio</h1>

      <div class="card-deck mt-5">

      <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-body text-info">
          <h5 class="card-title">Operatori</h5>
          <p>Aggiungi Operatori e visualizza le loro attività.</p>
          <a href="AggiungiOperatori.php" class="btn btn-info">Gestione</a>
        </div>
      </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
