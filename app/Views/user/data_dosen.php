<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Nama Dosen</th>
                        <th>Email</th>
                        <th>Mata Kuliah</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach($data_dosen as $row) :?>
                    <tr>
                        <td><?= $i++; ?> </td>
                        <td><?php echo $row['nip']?></td>
                        <td><?php echo $row['nama_dosen']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['matkul']?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Dosen</h1>
    <table border = "1" colspacing = "0" cellpadding = "5">
        <tr>
            <th>No.</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Email</th>
            <th>Mata Kuliah</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_dosen as $row) :?>
            <tr>
                <td><?= $i++; ?> </td>
                <td><?php echo $row['nip']?></td>
                <td><?php echo $row['nama_dosen']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['matkul']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>