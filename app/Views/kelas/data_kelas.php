<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelas</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($data_kelas as $row): ?>
                        <tr>
                            <td>
                                <?= $i++; ?>
                            </td>
                            <td>
                                <?php echo $row['nama_kelas'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <?= $this->endSection() ?>