<?php
    // buat tampilan sesuai dengan tugas

    // function hitungTarif() {
        function penjumlahan($angka_pertama, $angka_kedua)
        {
            return $angka_pertama + $angka_kedua
            ;
        }

?>

<html>

<form action="" method="">
    No Polisi : <input type="number" name="nopolisi" placeholder="No Polisi"><br>
    Lama Parkir : <input type="number" name="lamaparkir" placeholder="Lama Parkir"><br>
    Tarif Perjam : <input type="number" name="perjam" placeholder="Lama Parkir"><br>
    <input type="submit" name="btnHitung" value="Hitung" />
</form>

<?php
        // mengambil data dari URL GET
        if (isset($_GET['btnHitung'])) {
            $nopol = $_GET['nopolisi'];
            $angka_pertama = $_GET['lamaparkir'];
            $angka_kedua = $_GET['perjam'];

            $hasil = penjumlahan($angka_pertama, $angka_kedua);
            echo "<div style='border: 1px solid black; padding: 10px; background: black; color: white;'>";
            echo "<br>Nomor Polisi :".$nopol;
            echo "<br>Lama Parkir :<span style='color: yellow;'>".$angka_pertama."</span>";
            echo "<br>Perjam :<span style='color: green;'>".$angka_kedua."</span>";
            echo "<br>Total Tarif :".$hasil;
            echo "</div>";

        }
        ?>

</html>