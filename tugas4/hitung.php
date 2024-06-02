

          <div class="container">
<div class="bg-primary py-4 mb-4">
    <h4 class="text-center text-white">Form Hitung BMI</h4>
</div>

    <form action="index.php?page=proses" method="POST">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="namalengkap" id="namalengkap" class="form-control">
            </div>
            <div class="mb-3">
              <label for="beratbadan" class="form-label">Berat Badan (kg)</label>
              <input type="number" name="beratbadan" id="beratbadan" class="form-control">
              <div class="form-text">Masukkan dengan angka</div>
            </div>
            <div class="mb-3">
              <label for="tinggibadan" class="form-label">Tinggi Badan (m)</label>
              <input type="decimal" name="tinggibadan" id="tinggibadan" class="form-control">
              <div class="form-text">Masukkan dengan angka</div>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
          </form>

</div>