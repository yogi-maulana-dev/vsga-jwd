<?php
$nilai=$_POST['nilai'];

if ($nilai >= 80 && $nilai <= 100) {
    echo "Lulus Nilai A";
} elseif ($nilai >= 60 && $nilai <= 79) {
    echo "Lulus Nilai B";
} elseif ($nilai >= 40 && $nilai <= 59) {
    echo "Lulus Nilai C";
} elseif ($nilai >= 20 && $nilai <= 39) {
    echo "Tidak Lulus Nilai D";
} else {
    echo "Tidak Lulus Nilai E";
}

