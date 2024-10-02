<?php
session_start();
if(!($_SESSION['ulogiran'])){
	header('Location: prijava.php');
}
?>
<?php include "pocetak.php"; ?>


		<div id="content">
        		<h3>Uspješno ste se prijavili. Sada možete vidjeti stranice o čudima svijeta.
                </h3>
                </div>
 <?php
 include "desn1.php";               
  include "dno.php"; 
  
  ?>