<?php
session_start();
if(!($_SESSION['ulogiran'])){
	header('Location: prijava.php');
}
?>
<?php include "pocetak.php"; ?>

        <div id="content">
			<h2>
				Aleksandrijski svjetionik
			</h2>
			<p align="left"><img src="slike/kolos.jpg">
Svjetionik u Aleksandriji sagrađen je oko 300. do 280. pr. Kr., a projektirao ga je grčki arhitekt Sostrat iz Knida. Sagrađen na isturenom poluotoku Farosu ispred tog egipatskog lučkoga grada, smatran je jednim od najvećih ostvarenja u starom vijeku. Na jednom pravokutnom podzidu uzdizao se oko stotinu metara visoki osmerokutni nastavak. <br>Na najgornjoj platformi gorjela je noću vatra podržavana drvom i smolom. Troškovi izgradnje progutali su mnogo novca. Legenda priča kako je Sostrat dugo tragao za materijalom za izgradnju temelja koji bi se opirao morskoj vodi pa napokon sagradio svoj toranj na golemim blokovima od stakla. Godine 1375. jaki potres je razorio ostatke tornja, a na poluotoku Farosu (koji je zadržao svoje ime) arheolozi su uzalud tražili ruševine.


  </p>
</div>

 <?php
 include "desn1.php";
 include "dno.php";
 
 ?>