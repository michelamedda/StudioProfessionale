<?php
$host="127.0.0.1";
$user="root";
$pass="";
$db ="StudioProfessionale";

$conn= mysqli_connect ($host,$user,$pass,$db);
if(!$conn) die(mysqli_connect_error());
else echo "Connessione avvenuta con successo";
if($_POST)
{
	$nome=$_POST["nome"];
	$cognome=$_POST["cognome"];
	$cf=$_POST["cf"];

	$NumeroTicket=$_POST["NumeroTicket"];
	$Password=$_POST["Password"];
	$Data=$_POST["data"];

	$query1="insert into visitatori(nome,cognome,codiceFiscale)values(\"$nome\",\"$cognome\",\"$cf\");";
	$query2="insert into biglietti(id,password,data,idVisitatore,idTariffa,idInfoPoint )values(\"$NumeroTicket\",\"$Password\",\"$Data\",\"$cf\",\"1\",\"0000000001\");";

	$risultato=@mysqli_query($conn,$query1);
	@mysqli_query($conn,$query2);
}

?>
<html>
	<head><title>Prova19</title></head>
	<body>
		Inserisci i tuoi dati
		<form name="f1" method="post" action="CreaTicket.php">

		Nome: <input type="text" name="nome">
		Cognome: <input type="text" name="cognome">
     Codice Fiscale: <input type="text" name="cf">
		 NumeroTicket: <input type="text" name="NumeroTicket">
 		 Password: <input type="text" name="Password">
      Data: <input type="text" name="data">
    <input type="submit" value="Invia">
		<input type="reset" value="Annulla">

			</form>
	</body>
</html>
