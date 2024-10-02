<?php
session_start();
if ($_POST['logiranje']){
      if (($_POST['korisnik']==="zeus") && ($_POST['pass']==="zeus"))
      {
      $_SESSION['ulogiran'] = true;
      header('Location: prijavljen.php');
      die();
      }
      
        else if(($_POST['korisnik']!="zeus") || ($_POST['pass']!="zeus"))
        {
       print "<div id=\"content\"><h3>Krivo korisnicko ime i/ili lozinka.</h3></div>";
        }
    
      }
        
 else{
   
?>

 <div id="content">

<form name="form1" method="post" action="<?php echo $_server['php_self']?>">
  <table width="350" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <td colspan="2"><strong>Prijava korisnika</strong></td>
    </tr>
    <tr>
      <td width="150">Korisnicko ime:</td>
      <td width="200"><input name="korisnik" type="text"></td>
    </tr>
    <tr>
      <td>Lozinka:</td>
      <td><input type="password" name="pass"></td>
    </tr>
    <tr>
	<td>&nbsp;</td>
      <td><input type="submit" name="logiranje" value="Prijava"></td>
    </tr>
  </table>
</form>
</div>
<?php

 }
?>

