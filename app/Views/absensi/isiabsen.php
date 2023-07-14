<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Absensi Mahasiswa</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Absen Mahasiswa</h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <div class="card-body">
                    <form action="/absensi/dataAbsen" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['nama']) ? 'is-invalid ' : ''; ?>" id="nama"
                                    name="nama" value=" <?= old('nama'); ?>">
                                <?php if (isset($errors['nama'])): ?>
                                    <div class=" invalid-feedback">
                                        <?= $errors['nama'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="nama_kelas" class="form-label">Kelas</label>
                                <select name="id_kelas" id="kelas"
                                    class="form-control <?= isset($errors['id_kelas']) ? 'is-invalid' : ''; ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($kelas as $k): ?>
                                        <option value="<?= $k["kelas"] ?>" <?= old('kelas') == $k["kelas"] ? 'selected' : '' ?>>
                                            <?= $k["kelas"] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_kelas'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_kelas'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="absen" class="form-label">Status</label>
                                <select name="absen" id="absen"
                                    class="form-control <?= isset($errors['absen']) ? 'is-invalid' : ''; ?>">
                                    <option value="">Pilih..</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Alpa">Alpa</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                </select>
                                <?php if (isset($errors['absen'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['absen'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="nama" class="form-label">Tanggal</label>
                                <input type="date"
                                    class="form-control <?= isset($errors['nama']) ? 'is-invalid ' : ''; ?>" id="nama"
                                    name="nama" value=" <?= old('nama'); ?>">
                                <?php if (isset($errors['nama'])): ?>
                                    <div class=" invalid-feedback">
                                        <?= $errors['nama'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>