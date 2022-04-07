<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $ket = $_POST['ket'];
  $foto = $_FILES['foto'];
  $namaFoto = $_FILES['foto']['name'];
  $folder = '../public/assets/img/';
  $folder = $folder . basename($namaFoto);

  if (move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
    rename("../public/assets/img/$namaFoto", "../public/assets/img/$namaFoto");
    $q = mysqli_query($conn, 
    "insert into myactivity values (NULL, '$nama', '$ket', '$namaFoto')"
    );
  }
}
?>

<div class="row">
  <div class="col-md-6">
    <h1>Tambah</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="form-group">
        <label>Upload Foto</label>
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="form-group">
        <label>Keterangan</label>
        <textarea name="keterangan" cols="30" rows="3" class="form-control"></textarea>
      </div>
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
      <a href="?menu=myactivity" class="btn btn-secondary">Kembali</a>

    </form>
  </div>
</div>