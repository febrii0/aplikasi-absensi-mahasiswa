<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Absensi Mahasiswa</h1>

    <!-- DataTales Example -->
    <div class="card shadow">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Kelas</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($absen as $absen): ?>
                        <tr>
                            <td>
                                <?= $i++; ?>
                            </td>
                            <td>
                                <?= $absen["nama"] ?>
                            </td>
                            <td>
                                <?= $absen["id_kelas"] ?>
                            </td>
                            <td>
                                <?= $absen["absen"] ?>
                            </td>
                            <td>
                                <?= $absen["tanggal"] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id_mhs) {
            swal({
                title: "Apakah Anda yakin?",
                text: "Setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {

                        window.location.href = "/mahasiswa/destroy/" + id_mhs;

                    } else {
                        swal("Data tidak jadi dihapus!");
                    }
                });
        }
    </script>

    <?= $this->endSection() ?>