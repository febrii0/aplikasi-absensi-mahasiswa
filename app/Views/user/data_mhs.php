<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mahasiswa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Npm</th>
                            <th>Nama Mahasiswa</th>
                            <th>Email</th>
                            <th>Kelas</th>
                        </tr>
                    <?php $i = 1; ?>
                <?php foreach ( $data_mhs as $mahasiswa) : ?>
                    <tr>
                        <td> <?= $i++; ?></td>
                        <td> <?= $mahasiswa["npm"] ?></td>
                        <td> <?= $mahasiswa["nama"] ?></td>
                        <td> <?= $mahasiswa["email"] ?></td>
                        <td> <?= $mahasiswa["id_kelas"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection() ?>