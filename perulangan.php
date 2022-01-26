<?php

 //studi kasus 1
 for ($i = 1; $i <= 10; $i++){
     echo "{$i} <br>";
 }

 echo "<br>";

 for ($i = 10; $i > 0; $i--){
     echo "{$i} <br>";
 }

 //studi kasus 2

 $list = ['RPL', 'Wajib', 'Ngulik'];

 for ($i = 0; $i < (1); $i++) {
    echo "{$list[$i]} <br>";
 }

 //studi kasus 3

 for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      #continue;
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      #break;
    }
    //yang terjadi adalah semua angka ditampilkan.
}

//studi kasus 4
 $list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $kunci => $l) {
    echo "[{$kunci}] Nama : {$l} <br>";
}
 #ya, fungsinya tetap berjalan.
 ?>