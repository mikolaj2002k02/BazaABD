<?php
include "polacz.php";
$ID = wczytaj("ID");
if ( $sql = $baza->prepare( "SELECT * FROM Samochody WHERE ID = ?;"))
{
  $sql->bind_param("i" ,$ID);
  $sql->execute();
  $sql->bind_result($ID, $Marka, $Model, $Rocznik, $Kolor, $Skrzynia_Biegow);
  if (!$sql->fetch())  die("Blad!!! Brak rekordu do edycji w bazie!!! Liczba rekodow:".$sql->num_rows);


 /////////////////////// HTML w PHP
 echo '
 <html>
  <head>
   <meta charset="utf-8">
   <title>Edycja obiektu</title>
  </head>
  <body>
   <h1>Edycja rekordu z bazy</h1>
   <form method="get" action="update.php">
    <table border="0">
      <tr><td>ID</td><td><input name="ID" value="'.$ID.'"> </td></tr>
      <tr><td>Marka</td><td><input name="Marka" value="'.$Marka.'"></td></tr>
      <tr><td>Model</td><td><input name="Model" value="'.$Model.'"></td></tr>
      <tr><td>Rocznik</td><td><input name="Rocznik" value="'.$Rocznik.'"></td></tr>
      <tr><td>Kolor</td><td><input type="Kolor" value="'.$Kolor.'"</td> </tr>
      <tr><td>Skrzynia_Biegow</td><td><input type="Skrzynia_Biegow" value="'.$Skrzynia_Biegow.'"</td> </tr>
      <tr><td colspan="2"><input type="submit" value="zapisz zmiany"></td></tr>
    </table>
   </form>
  </body>
 </html>
 ';
 $sql->close();
 }
$baza->close();

?>