<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="card-header py-50">
    <h1 class="m-0 font-weight-bold text-primary">Profile Mahasiswa</h1>
    <div class="row d-flex justify-content-center align-items-center h-1000">
      <div class="col col-lg-12 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-12 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="Avatar"
                class="img-fluid my-5" style="width: 200px;" />
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-12">
              <div class="card-body p-4">
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>NPM</h6>
                    <p class="text-muted"></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Nama</h6>
                    <p class="text-muted"></p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Kelas</h6>
                    <p class="text-muted"></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>