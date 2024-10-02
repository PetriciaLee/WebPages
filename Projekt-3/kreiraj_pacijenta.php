<?php
        error_reporting(E_ERROR);
        ini_set('display_errors',1);
        
        include 'spajanje_bp.php';
        mysqli_query ($_con, "SET NAMES UTF8");
         $Ime_prezime = $_POST['Ime_prezime'];
         $Adresa = $_POST['Adresa'];
         $OIB = $_POST['OIB'];

        if(!_$POST['Unos']){
            echo "Popunite";
            header('Location:index.php');
        } else {
            mysqli_query ($con, "INSERT INTO Pacijent (Ime_prezime, Adresa, OIB)
                VALUES ('$Ime_prezime', '$Adresa', '$OIB')") or die (mysqli_error($con));
        header('Location: index.php');
        }
?>
