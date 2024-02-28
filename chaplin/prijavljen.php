<?php
session_start();
if(!($_SESSION['ulogiran'])){
	header('Location: prijava.php');
}
?>
<?php include "pocetak.php"; ?>


		<div id="content">
        		<h3>Uspješno ste se prijavili. Sada možete vidjeti stranice o C.Chaplinu.
                </h3>
                </div>
 <?php
 include "desno.php";               
  include "dno.php"; 
  
  ?>