<?php
session_start();
if(!($_SESSION['ulogiran'])){
	header('Location: prijava.php');
}
?>
<?php include "pocetak.php"; ?>

        <div id="content">
			<h2>
				Zeusov kip u Olimpiji
			</h2>
			
<p align="left"><img src="slike/zeus.jpg">
Zeusov kip u Olimpiji bio je napravljen od slonovače i zlata. Napravio ga je poznati kipar Fidija započevši njegovu gradnju 433. pr. Kr., a trajala je osam godina. Kip je bio smješten u posebno sagrađenom hramu u južnoj Grčkoj. Bio je golemih razmjera, visine 13 metara. Pričalo se da je prikaz kipa bio toliko životopisan da su mnogi vjerovali da vide samog boga. Kip je stoljećima bio u hramu, ali je u rimsko doba bio zapušten. Legenda kaže da je rimski car Kaligula pokušao ukrasti kip, no njegovi su ratnici pobjegli kada im se kip nasmiješio. Tada su se njegove skele urušile.<br> Također postoje podaci koji govore da su neki dijelovi kipa odneseni u današnji Istanbul gdje su stradali u požaru. Kako je točno izgledao Zeusov kip, što je 456. pr. Kr. postavljen u završenom hramu u Olimpiji, ne zna se. Božanski kip od slonove kosti i ebanovine, bogato ukrašen zlatom i dragim kamenjem. Grci su smatrali nesretnim čovjeka koji nije vidio to božanstvo. Zeus iz Olimpije bio je posljednje djelo grčkog kipara Fidije koji je na isti način napravio i kip Atene Partenonske na Atenskoj akropoli. Postavljao je vrhovnog boga namrštenog čela, jer kad je Zeus mrštio čelo po grčkoj se mitologiji uzdrmao Olimp.
  </p>
</div>



 <?php
 include "desn1.php";
 include "dno.php";
 
 ?>