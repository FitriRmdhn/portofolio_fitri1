<div class="container-fluid px-2 px-md-4">
   <div class="card card-body min-height-400 border-radius-xl mt-4"> 
   <div class="col-10">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">About</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <a href="javascript:;">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="card-body p-3">
                  <p class="text-sm">
                    <?= $about["column1"];?>
                </p>
                  <hr>
                  <div class="card-body p-3">
                  <p class="text-sm">
                  <?= $about["column2"];?>
                  </p>
                    <hr class="horizontal gray-light my-4">
                </div>
              </div>
            </div>
   </div>
</div>
