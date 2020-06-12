<?php
include 'config.php';

session_start();

if ($_POST){
	$PartitaIVA=$_POST["partitaiva"];
	$NomeAzienda=$_POST["nomeazienda"];
	$RagioneSociale=$_POST["ragionesociale"];
  $Provincia=$_POST['provincia'];
	$SedeLegale=$_POST["sedelegale"];
	$Citta=$_POST["citta"];
	$CAP=$_POST["cap"];
	$EmailPEC=$_POST["email"];

	$query1="insert into Aziende(PartitaIVA,NomeAzienda,RagioneSociale,SedeLegale,Citta,CAP,Provincia,EmailPEC)values(\"".$PartitaIVA."\",\"".$NomeAzienda."\",\"".$RagioneSociale."\",\"".$SedeLegale."\",\"".$Citta."\",\"".$CAP."\",\"".$Provincia."\",\"".$EmailPEC."\");";
  /*
	$query2="insert into biglietti(id,password,data,idVisitatore,idTariffa,idInfoPoint )values(\"$NumeroTicket\",\"$Password\",\"$Data\",\"$cf\",\"1\",\"0000000001\");";
*/
	$risultato=@mysqli_query($conn,$query1);
	/*@mysqli_query($conn,$query2);*/
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
    <title>Area Riservata : Aziende</title>
  </head>
  <body>
		<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Clienti : AZIENDE</li>
      </ol>
    </nav>


      <blockquote class="blockquote text-center">
          <p class="mb-0"></p>
             <span class="badge badge-info">Dati Aziende già registrate :</span>
      </blockquote>


      <!--<div class="aziendepescaDB">-->




       <!--<div class="row">-->
    <!--<div class="col-sm">-->

      <table class="table text-left border ">
<thead class="thead-dark ">
  <tr>
    <th scope="col">PartitaIVA:</th>
    <th scope="col">NomeAzienda:</th>
    <th scope="col">Ragione Sociale:</th>
    <th scope="col">Sede Legale:</th>
    <th scope="col">Citta:</th>
    <th scope="col">CAP:</th>
    <th scope="col">Provincia:</th>
    <th scope="col">EmailPEC:</th>
  </tr>
</thead>
<tbody>
  <?php
  $query="select PartitaIVA, NomeAzienda, RagioneSociale, SedeLegale, Citta, CAP, Provincia, EmailPEC from Aziende";
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
    <td>".$resultfinal[6]."</td>
    <td>".$resultfinal[7]."</td>
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
