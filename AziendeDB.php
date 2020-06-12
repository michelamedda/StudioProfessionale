<!--PHP-->
<?php include 'config.php'; ?>
<?php session_start(); ?>
<?php
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
           <span class="badge badge-info">Registra una nuova Azienda :</span>
    </blockquote>



    <div class="container">       <!--Container CSS-->

      <div class="row">
        <div class="col-sm">



          <!--PartitaIVA-->
            <form class="needs-validation" action="AziendeDB.php" method="post" ><!--novalidate-->
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">PartitaIVA</label>
      <input type="text" class="form-control" id="validationCustom01" name="partitaiva" value=" " required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

      <!--NomeAzienda-->
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Nome Azienda</label>
      <input type="text" class="form-control" id="validationCustom02" name="nomeazienda"value="es : Glamour Restaurant" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <div class="form-row">

      <!--Ragione sociale-->
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Ragione Sociale</label>
      <input type="text" class="form-control" id="validationCustom03" name="ragionesociale" required>
      <div class="invalid-feedback">

      </div>
    </div>

   <!--Sede Legale-->
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Sede Legale</label>
      <input type="text" class="form-control" id="validationCustom05" name="sedelegale" required>
      <div class="invalid-feedback">

      </div>
    </div>

  <!--Città-->

      <div class="col-md-3 mb-3">
        <label for="validationCustom05">Citta</label>
        <input type="text" class="form-control" id="validationCustom05" name="citta" required>
        <div class="invalid-feedback">

        </div>
      </div>

  <!--Cap-->
      <div class="col-md-3 mb-3">
        <label for="validationCustom05">CAP</label>
        <input type="text" class="form-control" id="validationCustom05" name="cap" required>
        <div class="invalid-feedback">

        </div>
      </div>

  <!--Provincia-->

      <form>
  <div class="form-row align-items-center">
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Provincia</label>
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Provincia</label>
      <select class="custom-select mr-sm-2" name="provincia">
        <option selected>Scegli...</option>
        <option value="ag">Agrigento</option>
	<option value="al">Alessandria</option>
	<option value="an">Ancona</option>
	<option value="ao">Aosta</option>
	<option value="ar">Arezzo</option>
	<option value="ap">Ascoli Piceno</option>
	<option value="at">Asti</option>
	<option value="av">Avellino</option>
	<option value="ba">Bari</option>
	<option value="bt">Barletta-Andria-Trani</option>
	<option value="bl">Belluno</option>
	<option value="bn">Benevento</option>
	<option value="bg">Bergamo</option>
	<option value="bi">Biella</option>
	<option value="bo">Bologna</option>
	<option value="bz">Bolzano</option>
	<option value="bs">Brescia</option>
	<option value="br">Brindisi</option>
	<option value="ca">Cagliari</option>
	<option value="cl">Caltanissetta</option>
	<option value="cb">Campobasso</option>
	<option value="ci">Carbonia-iglesias</option>
	<option value="ce">Caserta</option>
	<option value="ct">Catania</option>
	<option value="cz">Catanzaro</option>
	<option value="ch">Chieti</option>
	<option value="co">Como</option>
	<option value="cs">Cosenza</option>
	<option value="cr">Cremona</option>
	<option value="kr">Crotone</option>
	<option value="cn">Cuneo</option>
	<option value="en">Enna</option>
	<option value="fm">Fermo</option>
	<option value="fe">Ferrara</option>
	<option value="fi">Firenze</option>
	<option value="fg">Foggia</option>
	<option value="fc">Forl&igrave;-Cesena</option>
	<option value="fr">Frosinone</option>
	<option value="ge">Genova</option>
	<option value="go">Gorizia</option>
	<option value="gr">Grosseto</option>
	<option value="im">Imperia</option>
	<option value="is">Isernia</option>
	<option value="sp">La spezia</option>
	<option value="aq">L'aquila</option>
	<option value="lt">Latina</option>
	<option value="le">Lecce</option>
	<option value="lc">Lecco</option>
	<option value="li">Livorno</option>
	<option value="lo">Lodi</option>
	<option value="lu">Lucca</option>
	<option value="mc">Macerata</option>
	<option value="mn">Mantova</option>
	<option value="ms">Massa-Carrara</option>
	<option value="mt">Matera</option>
	<option value="vs">Medio Campidano</option>
	<option value="me">Messina</option>
	<option value="mi">Milano</option>
	<option value="mo">Modena</option>
	<option value="mb">Monza e della Brianza</option>
	<option value="na">Napoli</option>
	<option value="no">Novara</option>
	<option value="nu">Nuoro</option>
	<option value="og">Ogliastra</option>
	<option value="ot">Olbia-Tempio</option>
	<option value="or">Oristano</option>
	<option value="pd">Padova</option>
	<option value="pa">Palermo</option>
	<option value="pr">Parma</option>
	<option value="pv">Pavia</option>
	<option value="pg">Perugia</option>
	<option value="pu">Pesaro e Urbino</option>
	<option value="pe">Pescara</option>
	<option value="pc">Piacenza</option>
	<option value="pi">Pisa</option>
	<option value="pt">Pistoia</option>
	<option value="pn">Pordenone</option>
	<option value="pz">Potenza</option>
	<option value="po">Prato</option>
	<option value="rg">Ragusa</option>
	<option value="ra">Ravenna</option>
	<option value="rc">Reggio di Calabria</option>
	<option value="re">Reggio nell'Emilia</option>
	<option value="ri">Rieti</option>
	<option value="rn">Rimini</option>
	<option value="rm">Roma</option>
	<option value="ro">Rovigo</option>
	<option value="sa">Salerno</option>
	<option value="ss">Sassari</option>
	<option value="sv">Savona</option>
	<option value="si">Siena</option>
	<option value="sr">Siracusa</option>
	<option value="so">Sondrio</option>
	<option value="ta">Taranto</option>
	<option value="te">Teramo</option>
	<option value="tr">Terni</option>
	<option value="to">Torino</option>
	<option value="tp">Trapani</option>
	<option value="tn">Trento</option>
	<option value="tv">Treviso</option>
	<option value="ts">Trieste</option>
	<option value="ud">Udine</option>
	<option value="va">Varese</option>
	<option value="ve">Venezia</option>
	<option value="vb">Verbano-Cusio-Ossola</option>
	<option value="vc">Vercelli</option>
	<option value="vr">Verona</option>
	<option value="vv">Vibo valentia</option>
	<option value="vi">Vicenza</option>
	<option value="vt">Viterbo</option>
      </select>
    </div>
  </div>


  <!--Email-->

    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Email (PEC)</label>
      <input type="text" class="form-control" id="validationCustom05" name="email" required>
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

      <!--<div class="aziendepescaDB">-->




       <!--<div class="row">-->
    <!--<div class="col-sm">-->



</tbody>
</table>


<div class="container mt-5">
	<a  href="VisualizzaAziende.php" class="btn-lg btn-info mt-3">Visualizza dati Aziende già registrate</a>
</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
