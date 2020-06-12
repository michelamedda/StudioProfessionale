<?php
include 'config.php';

session_start();

if ($_POST){
	$CodFiscale=$_POST["codfiscale"];
	$Nome=$_POST["nome"];
	$Cognome=$_POST["cognome"];
	$DataDiNascita=$_POST["datadinascita"];
  $Via=$_POST['via'];
	$Citta=$_POST["citta"];
	$CAP=$_POST["cap"];
  $Provincia=$_POST['provincia'];
  $NumTelefono=$_POST["numtelefono"];
	$Email=$_POST["email"];

	$query1="insert into Privati(CodFiscale,Nome,Cognome,DataDiNascita,Via,Citta,CAP,Provincia,NumTelefono,Email)values(\"".$CodFiscale."\",\"".$Nome."\",\"".$Cognome."\",\"".$DataDiNascita."\",\"".$Via."\",\"".$Citta."\",\"".$CAP."\",\"".$Provincia."\",\"".$NumTelefono."\",\"".$Email."\");";

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
    <title>Area Riservata : Aziende</title>
  </head>
  <body>
		<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Clienti : PRIVATI</li>
      </ol>
    </nav>


		<blockquote class="blockquote text-center">
				<p class="mb-0"></p>
					 <span class="badge badge-info">Dati clienti Privati registrati :</span>
		</blockquote>


		<!--<div class="aziendepescaDB">-->




		 <!--<div class="row">-->
	<!--<div class="col-sm">-->

		<table class="table text-left border ">
<thead class="thead-dark ">
<tr>
	<th scope="col">CodiceFiscale:</th>
	<th scope="col">Nome:</th>
	<th scope="col">Cognome:</th>
	<th scope="col">DataDiNascita:</th>
	<th scope="col">Via:</th>
	<th scope="col">Citta:</th>
	<th scope="col">CAP:</th>
	<th scope="col">Provincia:</th>
	<th scope="col">NumeroDiTelefono:</th>
	<th scope="col">Email:</th>
</tr>
</thead>
<tbody>
<?php
$query="select CodFiscale, Nome, Cognome, DataDiNascita, Via, Citta, CAP, Provincia, NumTelefono, Email from Privati";
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
	<td>".$resultfinal[8]."</td>
	<td>".$resultfinal[9]."</td>
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
