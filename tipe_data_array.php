<?php
// tipe data array
$array1 = array(1, 2, 3, 4.5, 5);
$array2 = ['burung', 'kucing', 'kuda', 'kambing', 'kucing'];
var_dump($array1);
var_dump($array2);
// menghapus data array unset()
// mengubah data per index $array2[0] = 'kucing';
// menambahkan data $array2[] = name
// membuat map
$array3 = array(
    'nama' => 'fadil',
    'umur' => '20',
    'alamat' => 'jakarta'
);
echo $array3['nama'];
var_dump($array3);
