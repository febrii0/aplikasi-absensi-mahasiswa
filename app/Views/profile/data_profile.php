<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profile</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($data_profile as $row): ?>
                        <tr>
                            <td>
                                <?= $i++; ?>
                            </td>
                            <td>
                                <?php echo $row['npm'] ?>
                            </td>
                            <td>
                                <?php echo $row['nama'] ?>
                            </td>
                            <td>
                                <?php echo $row['email'] ?>
                            </td>
                            <td>
                                <?php echo $row['id_kelas'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <?= $this->endSection() ?>