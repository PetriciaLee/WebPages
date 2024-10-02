<?php
        error_reporting(E_ERROR);
        ini_set('display_errors',1);
        
        include 'spajanje_bp.php';
        mysqli_query ($con, "SET NAMES UTF8");
         $Ime_prezime = !_$POST['Ime_prezime'];
         $Specijalizacija = !_$POST['Specijalizacija'];

        if(!_$POST['Unos']){
            echo "Popunite";
            header('Location:index.php');
        } else {
            mysqli_query ($con, "INSERT INTO Liječnik (Ime_prezime, Specijalizacija)
                VALUES ('$Ime_prezime', '$Specijalizacija')") or die (mysqli_error($con));
        header('Location: index.php');
        }
?>
