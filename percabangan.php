<?php
 echo "Studi kasus 1"; echo "<br>";
 $baju = false;
 if ($baju){
     echo "Variable baju bernilai true";
 } //jika $baju diubah menjadi false, maka kalimat tidak akan muncul di web.

 $nilai = 58;
 echo "Memperoleh nilai $nilai dengan peringkat :";

if ($nilai >= 90 and $nilai <=100) {
      echo "A";
  } elseif ($nilai >= 80) {
     echo "B";
  } elseif ($nilai >= 70) {
     echo "C";
  } elseif ($nilai <=70) {
     echo "D"; }

 ?>