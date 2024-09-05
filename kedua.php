<?php


function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling=2*3.14*$jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volumebol=(4/3)*3.14*$jari*$jari*$jari;
    return $volumebol;
}

function volumeTabung($jari,$tinggi) : float {
    $volumetab=3.14*$jari*$jari*$tinggi;
    return $volumetab;
}

function volumeKerucut($jari,$tinggi) : float {
    $volumeker=(1/3)*3.14*$jari*$jari*$tinggi;
    return $volumeker;
}




$luas = luasLingkaran(45);
$keliling = kelilingLingkaran(45);
$bola = volumeBola(9);
$tabung = volumeTabung(7,15);
$kerucut = volumeKerucut(3.5,15);
echo "Luas adalah {$luas} dan kelilingnya {$keliling}\nVolume bola adalah {$bola}\nVolume tabung adalah {$tabung}\nVolume kerucut adalah {$kerucut}";
