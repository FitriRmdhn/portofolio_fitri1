<?php
if (isset($_POST['simpan'])) {
  $id = $_GET['id'];
  $nama = $_POST['nama'];
  $ket = $_POST['ket'];
  $foto = $_FILES['foto'];
  $namaFoto = $_FILES['foto']['name'];
  $folder = '../public/assets/img/';
  $folder = $folder . basename($namaFoto);

  if(!empty($foto)) {
    $q = mysqli_query($conn, 
    "update myactivity set nama='$nama', Ket='$ket'
    where id=$id"
    );
    $message = "<div class='alert alert-success'>Activity berhasil diubah!</div>";
  } else {
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
      rename("../public/assets/img/$namaFoto", "../public/assets/img/$namaFoto");
      $q = mysqli_query($conn, 
      "update myactivity set nama='$nama', Ket='$keterangan', Foto='$namaFoto'
      where id=$id"
      );
      $message = "<div class='alert alert-success'>Activity berhasil diubah!</div>";
    }
  }
}


$id = $_GET['id'];
$getData = mysqli_query($conn, "select * from activity where id=$id");
$data = mysqli_fetch_assoc($getData);
?>

<div class="row">
  <div class="col-md-6">
    <h1>
      Hapus <?=$data['nama']?>
    </h1>
    <?=@$message?>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="nama" class="form-control" value="<?=$data['nama']?>" required>
      </div>
      <div class="form-group">
        <label>UPLOAD FOTO</label>
        <img src="'../public/assets/img/<?=$data['Foto']?>" width="300px">
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="form-group">
        <label>KETERANGAN</label>
        <textarea name="ket" cols="30" rows="3" class="form-control" required><?=$data['Ket']?></textarea>
      </div>
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>