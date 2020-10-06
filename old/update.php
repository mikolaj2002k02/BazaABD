<?php
include "polacz.php";
$ID = wczytaj("ID");
$Marka = wczytaj("Marka");
$Model = wczytaj("Model");
$Rocznik = wczytaj("Rocznik");
$Kolor = wczytaj("Kolor");
$Skrzynia_Biegow = wczytaj("Skrzynia_Biegow")

$sql = $baza->prepare("UPDATE samochody SET imie=?, nazwisko=?, link=?, data_i_godzina_oddania=? WHERE klasa=?;");
if ($sql)
{
        $sql->bind_param("ississ",  $ID, $Marka, $Model, $Rocznik, $Kolor, $Skrzynia_Biegow);
        $sql->execute();
        $sql->close();
}
  else die("Błąd SQL: ". $baza->error);
$baza->close();
header ("Location: http://localhost/Samochody/");
?>