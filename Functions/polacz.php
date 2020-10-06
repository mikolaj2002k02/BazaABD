<?php
function wczytaj($zmienna)
{
           if (!isset($_GET[$zmienna]) || $_GET[$zmienna]=="")
                die("Brak Zmiennej: ".$zmienna); // nie podano marki w $
           return $_GET[$zmienna];
}

$baza = new mysqli("localhost", "root", "", "samochody");
if (!$baza) die("Blad");
if (mysqli_connect_errno())  die("Bla".mysqli_connect_error() );
$baza->set_charset("utf8");
?>