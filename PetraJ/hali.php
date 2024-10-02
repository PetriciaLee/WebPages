<?php
session_start();
if(!($_SESSION['ulogiran'])){
	header('Location: prijava.php');
}
?>
<?php include "pocetak.php"; ?>

        <div id="content">
			<h2>
				Mauzolej u Halikarnasu
			</h2>
			<p align="left"><img src="slike/halikarnas.jpg">

Mauzolej u Halikarnasu  je starovjekovna grobnica poznata kao jedno od sedam svjetskih čuda. Grobnicu koja je za vječna vremena trebala objavljivati njegovu slavu, oko 360. pr. Kr. naručio je satrap Mauzol koji je vladao kao pokrajinski namjesnik perzijske satrapije Karije. Taj je zadatak bio povjerio najboljim graditeljima i kiparima, ali bogati satrap nije doživio dovršenje tog zdanja. <br>Mauzolej se nije mogao sasvim točno rekonstruirati. U 14. stoljeću vitezovi reda Svetog Ivana su upotrijebili grobnicu umjesto kamenoloma pri gradnji Petrove tvrđave u Halikarnasu, što je danas zovu Bodrum. Vitezovi reda Svetog Ivana tako su temeljito sve odstranili, da se još samo po isklesanoj stijeni može razaznati gdje je stajala znamenita građevina. Pet je stepenica nosilo zid koji je dosezao do polovine čitave visine. Tek ovdje započinjala je prava grobnica, okružena stupovima i proviđena stepenastim krovištem. Golem četvoropreg s kraljem i kraljicom za uzdama krunio je cijelu građevinu.

  </p>
</div>

 <?php
 include "desn1.php";
 include "dno.php";
 
 ?>