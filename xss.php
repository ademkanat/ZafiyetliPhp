<html>
Get ile parametre al.
<?php 
	echo $_GET["parametre"];
  
   //Get ile alınan parametre herhangi bir denetleme işleminden geçirilmediğinden çeşitli zafiyetlere yol açılmaktadır.
  //Örnek XSS Payload <script>alert(1)</script>

?>

