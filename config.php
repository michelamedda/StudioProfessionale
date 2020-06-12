<!--PHP-->
<?php
$host="127.0.0.1";
$user="root";
$pass="";
$db ="studioprofessionale";

$conn= mysqli_connect ($host, $user, $pass, $db);
if(!$conn) die(mysqli_connect_error());

?>
