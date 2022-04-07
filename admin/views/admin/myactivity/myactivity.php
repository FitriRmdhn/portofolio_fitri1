<?php
if (@$_GET['hapus']) {
  $id = $_GET['hapus'];
  $q = mysqli_query($conn, "DELETE FROM from 'myactivity' where id=$id");
  
}
?>

<div class="container-fluid px-2 px-md-4">
  <div class="card card-body min-height-400 border-radius-xl mt-4"> 
   <div class="col-10">
    <div class="card card-plain h-100">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-md-8 d-flex align-items-center">
              <h6 class="mb-0 text-dark">My Activity</h6>
          </div>
            <div class="col-md-4 text-end">
              <a href="javascript:;">
                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
              </a>
            </div>
        </div>
      </div>
      <?php foreach ($myactivity as $myactivity) : ?>
        <div class="card" style="width: 18rem;">
            <img src="<?=baseurl ?>/assets/img/<?= $myactivity['foto']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h3><?= $myactivity['nama']; ?></h3>
              <p class="card-text"><?= $myactivity['ket']; ?></p>
              <a href="?menu=tambah" class="btn btn-danger">Tambah</a>
            </div>
            </div>
        </div>
    <?php endforeach ;?>
    </div>
   </div>
  </div>
</div>