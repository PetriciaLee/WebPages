<?php
session_start();
if(!($_SESSION['ulogiran'])){
	header('Location: prijava.php');
}
?>
<?php include "pocetak.php"; ?>

        <div id="content">
			<h2>
				Djetinjstvo
			</h2>
			<p>
Charlie Chaplin rođen je 16. travnja 1889. u Walworthu u Londonu. Njegovi roditelji bili su zabavljači u varijeteu, a rastali su se prije nego što je Charlie navršio tri godine. Od roditelja je naučio pjevanje. Popis stanovništva iz 1891. pokazuje da je njegova majka, glumica Lily Harvey (Hannah Harriet Hall), živjela s Charliejem i njegovim starijim bratom Sydneyjem u ulici Barlow, u Walworthu. Kao dijete je Charlie s majkom živio i na drugim adresama u i oko Kennington Roada u Lambethu.<br> Njegov otac Charles Chaplin stariji bio je romskog podrijetla. Bio je alkoholičar te je slabo kontaktirao sa sinom, iako su Charlie i njegov brat kratko živjeli s njim i njegovom ljubavnicom. Tamo su poslani kad im je majka doživjela živčani slom nakon čega je poslana u umobolnicu. Ljubavnica Charliejeva oca poslala ga je u školu na Kenningotn Roadu. Chaplinov otac umro je kad je Charlieju bilo dvanaest, 1901.
            </p>  <p align="center"><img src="slike/carli.jpg" width="560"></p><br />
<p>Bolest grla okončala je pjevačku karijeru Chaplinove majke. Hannina prva kriza došla je 1894. kad je nastupala u The Canteenu, vojnom kazalištu blizu Londona. U kazalište su obično zalazili pijanci i vojnici, a bilo je to najgore mjesto za nastup. <br>
    Hannah je bila teško ozlijeđena nakon što su na nju počeli bacati razne predmete te je potjerana s pozornice. Iza pozornice, plakala je i svađala se sa svojim menadžerom. U međuvremenu, petogodišnji Chaplin izašao je na pozornicu i počeo pjevati u to vrijeme dobro poznatu pjesmu, "Jack Jones".
            </p>
<p>Hannah Chaplin ponovno je poslana u umobolnicu. Chaplin je završio u sirotištu u Lambethu u Londonu, a nakon nekoliko tjedana završio je u londonskoj školi za siromašne. Mlada braća Chaplin držali su se zajedno kako bi preživjeli. Dok su bili dječaci, odlazili su u varijete, a obojica su se dokazala na pozornici. Chaplinove rane godine očajnog siromaštva izvršile su veliki utjecaj na njegove likove. Teme u njegovim filmovima u kasnijim godinama oživit će scene njegova djetinjstva u siromašnom Lambethu.
<br>  <p align="center"><img src="slike/chap.jpg" width="560"></p><br />
Iako to Charlie i Sydney nisu znali, imali su polubrata preko njihove majke, Wheelera Drydena, koji je odrastao u inozemstvu s ocem. Poslije se pomirio s obitelji i radio za Chaplina u njegovom holivudskom studiju.<br> Chaplinova majka umrla je 1928. u Hollywoodu, sedam godina nakon što su je sinovi doveli u SAD. Iako je kršten u Engleskoj Crkvi, Chaplin je veći dio života bio agnostik.
  </p>
<p>Više o tome možete vidjeti na  <a href="https://hr.wikipedia.org/wiki/Charles_Chaplin">(Wikipedia)</a>.</p>

</div>

 <?php
 include "desno.php";
 include "dno.php";
 
 ?>