<?php
// data null
$nama = "Dzaky Faishalariq";
$umur = null;
$nama = null;
echo $nama;
echo "\n";
echo $umur;
// mengecek data null
if (is_null($nama)) {
    echo "Data nama kosong \n";
    var_dump($nama);
} else {
    echo "Data nama tidak kosong";
}
// menghapus variabel
$umur = 10;
unset($umur);
// mengecek variabel di hapus
var_dump(isset($umur));
