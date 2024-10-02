<?php
        error_reporting(E_ERROR);
        ini_set('display_errors',1);
        
        include 'spajanje_bp.php';
        mysqli_query ($_con, "SET NAMES UTF8");
         $Pacijent = $_POST['Pacijent'];
         $Liječnik = $_POST['Liječnik'];
         $Datum = $_POST['Datum'];

        if(!_$POST['Unos']){
            echo "Popunite";
            header('Location:index.php');
        } else {
            mysqli_query ($con, "INSERT INTO Pregled ( Pacijent, Liječnik, Datum)
                VALUES ('$Pacijent', '$Lijecnik', '$Datum')") or die (mysqli_error($con));
        header('Location: index.php');
        }
?>
