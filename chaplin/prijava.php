<?php
session_start();
if ($_POST['logiranje']) {
	if (($_POST['korisnik']==="charlie") && ($_POST['pass']==="charlie"))
	{
		$_SESSION['ulogiran'] = true;
		header ('Location: prijavljen.php');
		die();
	}
	
	
	else if(($_POST['korisnik']!="charlie")  ||  ($_POST['pass']!="charlie"))
	{
		include "pocetak.php";
		print "<div id=\"content\"><h3>Krivo korisničko ime i/ili lozinka.</h3></div>";
	}
	include "desno.php";
	include "dno.php";
}

else{
	include "pocetak.php";
	?>





<div id="content">



<form name="form1" method="post" action="<?php echo $_SERVER['php_self']?>">
  <table width="350" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2"><strong> Prijava korisnika </strong></td>
  </tr>
  <tr>
     <td width="150"> Korisničko ime: </td>
     <td width="200"> <input name="korisnik" type="text"></td>
  </tr>
  <tr>
     <td> Lozinka: </td>
     <td><input name="pass" type="password"></td>
  </tr>
  <tr>
   <td>&nbsp;</td>
    <td><input type="submit" name="logiranje" value="Prijava"></td>
  </tr>
 </table>
</form>
</div>
<?php
include "desno.php";
include "dno.php";
}
?>
    