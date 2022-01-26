<?php

 $a = "1";
 $a++;
 $a .= "3";
 $a *= 0.5;

 $b = "10" . "20.25";
 $c = "10" + "20.25";
 $d = 10 + "20.5";

 echo "a = $a"; echo "<br>";
 echo "b = $b"; echo "<br>";
 echo "c = $c"; echo "<br>";
 echo "d = $d"; echo "<br>";

 $e = "10 rumah";
 $e = (int) $e;
 $e = (bool) $e;

 $f = 100;
 $f = (string) $f;

 echo "e = $e"; echo "<br>";
 echo "f = $f"; echo "<br>";
 /*metode single quoted hanya bisa menampilkan $string1 sedangkan metode double quoted
 dapat menampilkan dua $string sekaligus.*/
?>