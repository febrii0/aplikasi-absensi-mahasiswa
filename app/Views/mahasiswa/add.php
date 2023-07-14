<?php $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Mahasiswa</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="class-header">
                    <div class="row">
                        <!-- <div class="col-md-6 text-end">
                            <a href="/mahasiswa/all" class="btn btn-dark mt-4 m-4">Kembali</a>
                        </div> -->
                    </div>
                </div>

                <div class="card-body">
                    <form action="/mahasiswa/addMahasiswa" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="npm" class="form-label">Npm</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['npm']) ? 'is-invalid ' : ''; ?>" id="npm"
                                    name="npm" value="<?= old('npm'); ?>">
                                <?php if (isset($errors['npm'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['npm'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <label for="genre" class="form-label">Kelas</label>
                                <select name="kelas" id="kelas"
                                    class="form-control <?= isset($errors['kelas']) ? 'is-invalid ' : ''; ?>"
                                    name="kelas" value="<?= old('kelas'); ?>">
                                    <option value="">PILIH..</option>
                                    <option value="Manajemen Informatika - A">Manajemen Informatika - A</option>
                                    <option value="Manajemen Informatika - B">Manajemen Informatika - B</option>
                                    <option value="Manajemen Informatika - C">Manajemen Informatika - C</option>
                                </select>
                                <?php if (isset($errors['kelas'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['kelas'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                            </div>
                            <div class="col-md-1 mt-4 m-1">
                                <a href="/mahasiswa/all" class="btn btn-dark mt-4 m-4">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>