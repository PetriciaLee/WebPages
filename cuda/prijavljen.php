<?php
session_start();
if(!($_SESSION['ulogiran'])){
header('Location: prijava.php');
}
?>
<?php include "pocetak.php"; ?>

        <div id="content">
			<h3>
				Uspješno ste se prijavili. Sada možete vidjeti Sedam svjetskih čuda.
			</h3>
        </div>
<?php include("desno1.php"); ?>
<?php include("desno2.php"); ?>
<?php include("dno1.php"); ?>
<?php include("dno2.php"); ?>
<?php include("dno3.php"); ?>
<?php include("dno4.php"); ?>
<?php include("dno5.php"); ?>
<?php include("dno.php"); ?>