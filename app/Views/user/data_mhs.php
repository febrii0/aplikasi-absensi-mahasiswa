<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>

    <!-- DataTales Example -->
    <div class="card shadow">
        <div class="card-header ">
            <!-- <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
            </div> -->
            <div class="col-md-6">
                <a href="/mahasiswa/add" class="btn btn-primary m-1 mt-2 text-end">Tambah Data</a>
            </div>
        </div>
        <!-- <div class="col-md-6 text-end">
            <a href="/film/add" class="btn btn-primary m-1 mt-2">Tambah Data</a>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Npm</th>
                        <th>Nama Mahasiswa</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($data_mhs as $mahasiswa): ?>
                        <tr>
                            <td>
                                <?= $i++; ?>
                            </td>
                            <td>
                                <?= $mahasiswa["npm"] ?>
                            </td>
                            <td>
                                <?= $mahasiswa["nama"] ?>
                            </td>
                            <td>
                                <?= $mahasiswa["kelas"] ?>
                            </td>
                            <td>
                                <a href="/mahasiswa/editMahasiswa/<?= $mahasiswa["id_mhs"] ?>"
                                    class="btn btn-success">Update</a>
                                <a class="btn btn-danger"
                                    onclick="return confirmDelete('<?= $mahasiswa['id_mhs'] ?>')">Delete</a>
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