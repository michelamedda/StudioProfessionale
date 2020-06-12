<!--PHP-->
<?php include 'config.php'; ?>
<?php session_start(); ?>
<?php
if ($_POST){
	$IdStaffer=$_POST["idstaffer"];
	$Password=$_POST["password"];
	$Nome=$_POST["nome"];
  $Cognome=$_POST["cognome"];
	$DataDiNascita=$_POST["datadinascita"];
		$CodiceFiscale=$_POST["codicefiscale"];



	$query1="insert into Staff(IdStaffer,Password,Nome,Cognome,DataDiNascita,CodiceFiscale)values(\"".$IdStaffer."\",\"".$Password."\",\"".$Nome."\",\"".$Cognome."\",\"".$DataDiNascita."\",\"".$CodiceFiscale."\");";

	$risultato=@mysqli_query($conn,$query1);

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
    <title>Area Riservata : +Aggiungi Operatori</title>
  </head>
  <body>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Area Riservata : +Aggiungi Operatori</li>
      </ol>
    </nav>

    <blockquote class="blockquote text-center">
        <p class="mb-0"></p>
           <span class="badge badge-info">Registra un nuovo operatore:</span>
    </blockquote>



    <div class="container">       <!--Container CSS-->

      <div class="row">
        <div class="col-sm">



          <!--idstaffer-->
            <form class="needs-validation" action="AggiungiOperatori.php" method="post" ><!--novalidate-->
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Id Staffer</label>
      <input type="text" class="form-control" id="validationCustom01" name="idstaffer" value=" " required>
      <div class="valid-feedback">

      </div>
    </div>

      <!--password-->
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Password </label>
      <input type="text" class="form-control" id="validationCustom02" name="password" value=" " required>
      <div class="valid-feedback">

      </div>
    </div>
  </div>

  <div class="form-row">

      <!--nome-->
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Nome : </label>
      <input type="text" class="form-control" id="validationCustom03" name="nome" required>
      <div class="invalid-feedback">

      </div>
    </div>

    <!--Cognome-->
  <div class="col-md-6 mb-3">
    <label for="validationCustom03">Cognome : </label>
    <input type="text" class="form-control" id="validationCustom03" name="cognome" required>
    <div class="invalid-feedback">

    </div>
  </div>


   <!--Data di nascita-->
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Data di Nascita : </label>
      <input type="text" class="form-control" id="validationCustom05" name="datadinascita" value="aaaa-mm-gg " required>
      <div class="invalid-feedback">

      </div>
    </div>

		<div class="col-md-3 mb-3">
			<label for="validationCustom05">Codice Fiscale: </label>
			<input type="text" class="form-control" id="validationCustom05" name="codicefiscale" value=" " required>
			<div class="invalid-feedback">

			</div>
		</div>



    <div class="col-8 col-sm-6">                                                           <!--col-md-3 mb-3" per vedere se é ben allineato-->
    <input type="submit" class="btn btn-outline-danger" value="Invia">                <!--Submit-->
    </div>
  </div>
</form>


      <div class="invalid-feedback">

      </div>
    </div>

  </div>


  <!--Controlli-->

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


          </div>

        </div>
</form>
</form>
      </div>
      <blockquote class="blockquote text-center">
          <p class="mb-0"></p>
             <span class="badge badge-info">Operatori registrati :</span>
      </blockquote>


      <!--<div class="aziendepescaDB">-->




       <!--<div class="row">-->
    <!--<div class="col-sm">-->

      <table class="table text-left border ">
<thead class="thead-dark ">
  <tr>
    <th scope="col">IdStaffer:</th>
      <th scope="col">Password:</th>
    <th scope="col">Nome:</th>
    <th scope="col">Cognome:</th>
    <th scope="col">DataDiNascita:</th>
		  <th scope="col">CodiceFiscale:</th>


  </tr>
</thead>
<tbody>
  <?php
  $query="select IdStaffer,Password, Nome, Cognome, DataDiNascita,CodiceFiscale from Staff";
  $result=mysqli_query($conn,$query);
  while($resultfinal=mysqli_fetch_array($result))
  {
  echo
  "
  <tr>
    <th scope=\"row\">".$resultfinal[0]."</th>
    <td>".$resultfinal[1]."</td>	
    <td>".$resultfinal[2]."</td>
    <td>".$resultfinal[3]."</td>
    <td>".$resultfinal[4]."</td>
		<td>".$resultfinal[5]."</td>


    </tr>
  ";
  }
  ?>
</tbody>
</table>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
