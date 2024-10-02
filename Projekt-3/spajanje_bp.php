<?php
  $dbhost = 'localhost';
  $dbuser = 'jakpetra_projekt';
  $dbpass = 'projekt3NPW';
  $db = 'jakpetra_projekt3';

  $con = mysqli_connect ($dbhost,$dbuser,$dbpass,$db);

  if (mysqli_connect_errno()){
      echo "Neuspjelo spajanje na BP";
  }
?>