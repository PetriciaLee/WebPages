<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Naslovna | Bolnica</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />
<link rel="shortcut icon" href="ikona.png" />
<style type="text/css">
</style>
</head>
<body>
     <div id="logo"><img src="img/logo.jpg"></div>
    <div id="sadrzaj_lijevo">
    <img src="img/doc1.jpg" width="100%"/>
    <img src="img/doc.jpg" width="100%" />
  
    <?php
        error_reporting(E_ERROR);
        ini_set('display_errors',1);
        
        mysqli_query ($_con, "SET NAMES UTF8");
        include 'spajanje_bp.php';
        include 'kreiraj_tablice.php';
    ?>  
        
        <br><br>
      
    </div>
    <div id="sadrzaj_desno"><br><br>
          <form class="box_obrazac" action="kreiraj_pacijenta.php" method="post">
         <input type="text" class="obrazac" placeholder="Ime i prezime pacijenta" name="Ime_prezime"><br>
            <input type="text" class="obrazac" placeholder="Adresa" name="Adresa"><br>
            <input type="text" class="obrazac" placeholder="OIB" name="OIB"><br>
         <input type="submit" class="button" value="Unesi" name="Unos">
        </form>
        <form class="box_obrazac" action="kreiraj_lijecnika.php" method="post">
         <input type="text" class="obrazac" placeholder="Ime i prezime liječnika" name="Ime_prezime"><br>
            <input type="text" class="obrazac" placeholder="Specijalizacija" name="Specijalizacija"><br>
         <input type="submit" class="button" value="Unesi" name="Unos">
        </form>
        
         <form class="box_obrazac" action="kreiraj_pregled.php" method="post">
              <input type="text" class="obrazac" placeholder="Pacijent" name="Pacijent">
              <input type="text" class="obrazac" placeholder="Liječnik" name="Liječnik">
         <input type="text" class="obrazac" placeholder="Datum pregleda" name="Datum"><br>
         <input type="submit" class="button" value="Unesi" name="Unos">
        </form>
    </div>
    <footer>
      &copy; 10.5.2017. | Designed by: Petra Jakopović, 3. Web
    </footer>
    


</body>
</html>
