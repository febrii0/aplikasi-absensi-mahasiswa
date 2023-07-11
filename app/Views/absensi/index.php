<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Absensi</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Absen Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="card-body">
                    <form action="/absensi" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nama_kelas" class="form-label">Kelas</label>
                                <select name="id_kelas" id="kelas"
                                    class="form-control <?= isset($errors['id_kelas']) ? 'is-invalid' : ''; ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($absensi as $absen): ?>
                                        <option value="<?= $absen["id_kelas"] ?>" <?= old('id_kelas') == $absen["id_kelas"] ? 'selected' : '' ?>>
                                            <?= $absen["id_kelas"] ?>
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
                                <label for="genre" class="form-label">Status</label>
                                <select name="id_status" id="keterangan"
                                    class="form-control <?= isset($errors['id_status']) ? 'is-invalid ' : ''; ?>"
                                    name="id_status" value="<?= old('id_status'); ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($absensi as $absen): ?>
                                        <option value="<?= $absen["id_status"] ?>"><?= $absen["id_status"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_status'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_status'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="duration" class="form-label">Nama</label>
                                <select name="id_mhs" id="nama"
                                    class="form-control <?= isset($errors['id_mhs']) ? 'is-invalid ' : ''; ?>"
                                    name="id_mhs" value="<?= old('id_mhs'); ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($absensi as $absen): ?>
                                        <option value="<?= $absen["id_mhs"] ?>"><?= $absen["id_mhs"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_mhs'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_mhs'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="cover" class="form-label">Mata Kuliah</label>
                                <select name="id_matkul" id="nama_matkul"
                                    class="form-control <?= isset($errors['id_matkul']) ? 'is-invalid ' : ''; ?>"
                                    name="id_matkul" value="<?= old('id_matkul'); ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($absensi as $absen): ?>
                                        <option value="<?= $absen["id_matkul"] ?>"><?= $absen["id_matkul"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_matkul'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_matkul'] ?>
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