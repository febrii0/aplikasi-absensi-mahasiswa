<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="card-header py-50">
    <h1 class="m-0 font-weight-bold text-primary">Profile Admin</h1>
    <div class="row d-flex justify-content-center align-items-center h-1000">
      <div class="col col-lg-12 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-12 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="/assets/img/admin.jpg" alt="Avatar" class="img-fluid my-5" style="width: 200px;" />
              <i class="far fa-edit mb-5"></i>
            </div>

            <div class="card-body p-4">


              <table align="center" class="table table-hover">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Nama</th>
                  <th>Email</th>
                </tr>
                <?php
                foreach ($profile as $p): ?>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <td>
                      <?= $p['user_nama'] ?>
                    </td>
                    <td>
                      <?= $p['user_email'] ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>