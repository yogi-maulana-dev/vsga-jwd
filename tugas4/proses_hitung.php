<?php

if (isset($_POST['namalengkap']) && isset($_POST['beratbadan']) && isset($_POST['tinggibadan'])) {
  // mengambil data dari method POST
  $nama = $_POST['namalengkap'];
  $berat = $_POST['beratbadan'];
  $tinggi = $_POST['tinggibadan'];

  $nilai_bmi = $berat / ($tinggi * $tinggi);

  function get_grade($bmi)
  {
    if ($bmi > 30.0) {
      return "Obesitas";
    } else if ($bmi > 25.0) {
      return "Kegemukan";
    } else if ($bmi > 18.5) {
      return "Normal";
    } else {
      return "Kurus";
    }
  }

  $status_bmi = get_grade($nilai_bmi);
}

?>


  <section id="bmi-section" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <tbody>
              <tr>
                <td class="max-width-td">Nama Lengkap</td>
                <td>: <?= $nama ?? ''; ?></td>
              </tr>
              <tr>
                <td class="max-width-td">Nilai BMI</td>
                <td>: <?= $nilai_bmi ?? ''; ?></td>
              </tr>
              <tr>
                <td class="max-width-td">Status BMI</td>
                <td>: <?= $status_bmi ?? ''; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- End --- BMI Form -->
