<?php

echo "Tugas Operator - Elizabeth Andrea Jamco PPLG X-5"; echo "<br>";
echo "<br>";

 $c = 4;
 $d = 4;

 $luaspersegi = $c * $d;
 echo "1. Luas persegi dengan panjang sisi $c adalah $luaspersegi cm"; echo "<br>";

 $e = 3.14;
 $f = 8;

 $luaslingkaran = $e * ($f ** 2);
 echo "2. Luas lingkaran jika jari-jarinya $f cm adalah $luaslingkaran cm"; echo "<br>";


 echo "3. Perbandingan antara 19 dan 20"; echo "<br>";
 $g = 19;
 $h = 20;
 $i = 1;

//lebih besar
 $i = $g > $h;
 echo "$g > $h: $i";
 echo "<hr>";

 //lebih kecil
 $i = $g < $h;
 echo "$g < $h: $i";
 echo "<hr>";

 //sama dengan
 $i = $g == $h;
 echo "$g == $h: $i";
 echo "<hr>";
 
 //tidak sama dengan
 $i = $g != $h;
 echo "$g != $h: $i";
 echo "<hr>";

 //lebih besar sama dengan
 $i = $g >= $h;
 echo "$g >= $h: $i";
 echo "<hr>";

 //lebih kecil sama dengan
 $i = $g <= $h;
 echo "$g <= $h: $i";
 echo "<hr>";
 
?>