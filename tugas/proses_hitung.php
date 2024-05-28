<?php


$nama = $_POST['namalengkap'];
$berat = $_POST['beratbadan'];
$tinggi = $_POST['tinggibadan'];

function hitungBMI($berat, $tinggi) {

    $hasilbmi = $berat / ($tinggi * $tinggi);
    return $hasilbmi;
}


$hasilbmi = hitungBMI($berat, $tinggi);


echo $nama . "<br>";
echo "Berat Badan Anda Adalah: " . $berat . " kg<br>";
echo "Tinggi Badan Anda Adalah: " . $tinggi . " meter<br>";
echo "Total BMI Anda Adalah: " . $hasilbmi . "<br>";


echo "Status Berat Badan Adalah: ";
if ($hasilbmi > 30.0) {
    echo "Anda Obesitas<br>";
} elseif ($hasilbmi > 25.0) {
    echo "Anda Kegemukan<br>";
} elseif ($hasilbmi > 18.5) {
    echo "Normal<br>";
} else {
    echo "Anda Kurus<br>";
}

?>
