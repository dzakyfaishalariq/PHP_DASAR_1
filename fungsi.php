<?php
function sorting($a)
{
    sort($a);
    print_r($a);
}
function cetak_nama($nama)
{
    echo "Nama saya adalah $nama";
}

cetak_nama('Dzaky Faishalariq');
sorting(array(3, 6, 1, 2, 10));
