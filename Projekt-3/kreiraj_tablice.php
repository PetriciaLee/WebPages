<?php
 include 'spajanje_bp.php';
 mysqli_query ($con, "SET NAMES UTF8");


$upit1 ="CREATE TABLE Pacijent
        (
        ID_Pacijent INT(15) NOT NULL AUTO_INCREMENT,
        Ime_prezime VARCHAR(15) ,
        Adresa VARCHAR (15) ,
        CONSTRAINT pk_Pacijent PRIMARY KEY (ID_Pacijent) 
        )";
mysqli_query ($con, $upit1);

$upit2 ="CREATE TABLE Liječnik
(
ID_Liječnik INT(15) NOT NULL AUTO_INCREMENT,
Ime_prezime VARCHAR(15) ,
Specijalizacija VARCHAR(15) ,
CONSTRAINT pk_Liječnik PRIMARY KEY (ID_Liječnik)
)"; 
mysqli_query ($con, $upit2);

$upit3 ="CREATE TABLE Pregled
(
ID_Pregled INT(15) NOT NULL AUTO_INCREMENT,
Pacijent INT(15),
Liječnik INT(15),
Datum VARCHAR(15),
CONSTRAINT pk_Pregled PRIMARY KEY (ID_Pregled),
CONSTRAINT fk_Pacijent FOREIGN KEY (Pacijent) REFERENCES Pacijent(ID_Pacijent),
CONSTRAINT fk_Liječnik FOREIGN KEY (Liječnik) REFERENCES Liječnik(ID_Liječnik)
)"; 
mysqli_query ($con, $upit3);

?>