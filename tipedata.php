<?php

 $stringa = "Ini adalah contoh string sederhana 2";
 $stringb = "Variabel akan otomatis ditampilkan : $stringa";

 echo $stringa; echo "<br>";
 echo $stringb;
 #single quoted tidak selalu menampilkan $string2, sedangkan double quoted menampilkan $stringa


 echo "<br>";echo "<br>";

 $nama = "Elizabeth";
 $umur = 15;

 echo "Nama saya adalah ", $nama, " dan saya berumur ", $umur; echo "<br>";
 echo "Nama saya adalah ".$nama." dan saya berumur ".$umur; echo "<br>";

 echo "<br>";echo "<br>";

      $a = "1";
      $b = 2;
      echo $a + $b;
?>