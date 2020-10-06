<?php
        include "polacz.php"; //wzór pliku we wpisie "Pełny panel administracyjny MySQLi"
        if ($sql = $baza->prepare( "SELECT DISTINCT * FROM car ORDER BY ID "))
        {
                $sql->execute(); //wykonaj SQL
                $sql->bind_result($id,$model,$kolor,$rocznik,$transmission);
                while ($sql->fetch())
                  $auto[] = array(
                     "ID" => $ID,
                     "Marka" => $Marka,
                     "Model" => $Model,
                     "Rocznik" => $Rocznik,
					 "Kolor" => $Kolor,
					 "Skrzynia_biegow" => $Skrzynia_Biegow,
                   ); //dla każdego nazwiska tworzy 2 pary, nazwiska przekonwertowane do UTF
                $sql->close();
        }
        $baza->close();
        echo json_encode($auto, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>