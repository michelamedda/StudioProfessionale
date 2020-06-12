<?php include 'config.php' ?>
<?php session_start(); ?>


<?php

if(isset($_POST['login'])){


$codicefiscale = $_POST['CodiceFiscale'];
$password = $_POST['Password'];

$codicefiscale = mysqli_real_escape_string($conn , $codicefiscale);
$password = mysqli_real_escape_string($conn , $password);

$query = "SELECT * FROM Staff WHERE CodiceFiscale = '{$codicefiscale}' ";

$trova_utente = mysqli_query($conn , $query);

if(!$trova_utente){

    die('RICHIESTA FALLITA' . mysqli_error($conn));
}

while($row = mysqli_fetch_array($trova_utente)){

$idUtente = $row['IdStaffer'];
$nomeUtente = $row['CodiceFiscale'];
$passUtente = $row['Password'];
}

if($codicefiscale === $nomeUtente && $password === $passUtente){

    $_SESSION['IdStaffer'] = $idUtente;
    $_SESSION['CodiceFiscale'] = $nomeUtente;
    $_SESSION['Password'] = $passUtente;


    header('Location: AreaRiservata.php');
}else{
    header('Location: index.php');

}
}

?>
