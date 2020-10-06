<?php
include "polacz.php";
$ID = wczytaj("ID");
$Marka = wczytaj("Marka");
$Model = wczytaj("Model");
$Rocznik = wczytaj("Rocznik");
$Kolor = wczytaj("Kolor");
$Skrzynia_Biegow = wczytaj("Skrzynia_Biegow");


$sql = $baza->prepare("INSERT INTO samochody VALUES (?, ?, ?, ?, ?, ?);");
if ($sql)
{
        $sql->bind_param("ississ", $ID, $Marka, $Model, $Rocznik, $Kolor, $Skrzynia_Biegow);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
header ("Location:http://localhost/Samochody/");
?>